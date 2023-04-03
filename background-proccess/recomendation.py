from sklearn.cluster import KMeans
import time
import pandas as pd
import numpy as np
from mysql_conn import Querier
from helper import *

# waktu delay untuk melakukan eksekusi background task
# satuan detik
delay_time = 1

class Kmeans:
    def __init__(self, clusterLabel, array):
        self.clusterLabel = clusterLabel
        self.array = array
        self.dataframe = pd.DataFrame(array, columns=clusterLabel)
    
    def run(self):
        dataframe_x = self.dataframe.iloc[:, 0:3]
        
        kmeans = KMeans(n_clusters=5, random_state=37, n_init='auto')
        array_x = np.array(dataframe_x)
        kmeans.fit(array_x)
        self.dataframe['cluster'] = kmeans.labels_
        return self.dataframe
    
    def groupBy(self):
        self.run()
        topid = self.dataframe.groupby(self.clusterLabel[0])[self.clusterLabel[1]].apply(lambda x: x.value_counts().index[0]).reset_index(name=clusterLabel[1])
        return topid.values.tolist()
    
    def restokcRecomendation(self):
        self.run()
        means = self.dataframe.groupby('cluster').mean()
        thresholds = means['jumlah'] - means['terjual']
        
        stock_dict = {}

        # loop through each cluster
        for i, threshold in enumerate(thresholds):
            ids = self.dataframe.loc[
                (self.dataframe['cluster'] == i) & 
                (self.dataframe[self.clusterLabel[1]] - 
                self.dataframe[self.clusterLabel[2]] <= 
                threshold), self.clusterLabel[0]
            ]
            stock_dict[f'cluster {i}'] = set(ids)
        return stock_dict

# create object querier
querier = Querier()

while True:
    # querier by pekerjaan
    pek = querier.getPekerjaan()
    rekomendasipek = x_merge(querier.penjualanByPekerjaan(), pek)
    clusterLabel = ['pekerjaan', 'barang', 'jumlah']

    # create object Kmeans
    kmeans = Kmeans(clusterLabel, rekomendasipek)
    topId = kmeans.groupBy()
    for val in topId:
        time.sleep(0.1)
        if len(querier.getPekerjaanName(name=pek[val[0]])) < 1:
            querier.insertRekomendasiPekerjaan(group=pek[val[0]], barang=val[1])
            continue
        querier.updateRekomendasi("pekerjaan", pek[val[0]], val[1])
        

    time.sleep(delay_time)

    # group by usia
    rekomendasiUs = querier.penjualanByUsia()
    clusterLabel = ['usia', 'barang', 'jumlah']

    kmeans = Kmeans(clusterLabel, rekomendasiUs)
    topId = kmeans.groupBy()
    for val in topId:
        time.sleep(0.1)
        if len(querier.getUsia(usia=val[0])) < 1:
            querier.insertRekomendasiUsia(group=val[0], barang=val[1])
            continue
        querier.updateRekomendasi("usia", val[0], val[1])

    time.sleep(delay_time)

    # Restock prediction using kmeans
    # get data from database
    predData = querier.barangJumlahTerjual()
    clusterLabel = ['barang', 'jumlah', 'terjual']

    kmeans = Kmeans(clusterLabel, predData)
    stockers = kmeans.restokcRecomendation()
    for k, v in stockers.items():
        print(f'{k}: {v}')
    
    time.sleep(delay_time)

