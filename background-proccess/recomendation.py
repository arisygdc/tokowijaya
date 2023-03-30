from sklearn.cluster import KMeans
import time
import pandas as pd
import numpy as np
from mysql_conn import *
from helper import *

# waktu delay untuk melakukan eksekusi background task
# satuan detik
delay_time = 10

# eksekusi kmeans
def km1(clusterLabel, array):
    dataframe = pd.DataFrame(array, columns=clusterLabel)
    dataframe_x = dataframe.iloc[:, 0:3]
    
    kmeans = KMeans(n_clusters=5, random_state=37, n_init='auto')
    array_x = np.array(dataframe_x)
    kmeans.fit(array_x)
    dataframe['cluster'] = kmeans.labels_

    topId = dataframe.groupby(clusterLabel[0])[clusterLabel[1]].apply(lambda x: x.value_counts().index[0]).reset_index(name=clusterLabel[1])
    return topId.values.tolist()



while True:
    # group by pekerjaan
    pek = getPekerjaan()
    rekomendasipek = x_merge(penjualanByPekerjaan(), pek)
    clusterLabel = ['pekerjaan', 'barang', 'jumlah']

    topId = km1(clusterLabel, rekomendasipek)
    for val in topId:
        time.sleep(0.1)
        if len(getPekerjaanName(name=pek[val[0]])) < 1:
            insertRekomendasiPekerjaan(group=pek[val[0]], barang=val[1])
            continue
        update("pekerjaan", pek[val[0]], val[1])
        

    time.sleep(delay_time)

    # group by usia
    rekomendasiUs = penjualanByUsia()
    clusterLabel = ['usia', 'barang', 'jumlah']

    topId = km1(clusterLabel, rekomendasiUs)
    for val in topId:
        time.sleep(0.1)
        if len(getUsia(usia=val[0])) < 1:
            insertRekomendasiUsia(group=val[0], barang=val[1])
            continue
        update("usia", val[0], val[1])

    time.sleep(delay_time)
