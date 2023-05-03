#!/usr/bin/env python3
from os import path
import sys
print(sys.path.append(path.abspath('../../background-proccess')))
from mysql_conn import Querier
from kmeans import Kmeans

querier = Querier()
predData = querier.barangJumlahTerjual()
clusterLabel = ['barang', 'jumlah', 'terjual']

# Restock prediction using kmeans
kmeans = Kmeans(clusterLabel, predData)
stockers = kmeans.restokcRecomendation()
for k, v in stockers.items():
    querier.insertRekomendasiRestock(k, v)

print("\nRestock prediction")
print(querier.getRestockPred())
print("---------------------------------\n")