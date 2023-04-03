import time
from mysql_conn import Querier
from kmeans import Kmeans
from helper import *
    
delay_time = 10

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

