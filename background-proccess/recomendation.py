from sklearn.cluster import KMeans
import sys
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from mysql_conn import *
from helper import *
from matplotlib import style
style.use("ggplot")


def km1(clusterLabel, x_array):
    kmeans = KMeans(n_clusters=5, random_state=37, n_init='auto')
    kmeans.fit(x_array)
    clusterLabel = kmeans.labels_


    from sklearn.metrics import confusion_matrix,classification_report
    print(confusion_matrix(clusterLabel,kmeans.labels_))
    print(classification_report(clusterLabel,kmeans.labels_))

pek = getPekerjaan()
rekomendasipek_x = x_merge(penjualanByPekerjaan(), pek)
clusterLabel = ['pekerjaan', 'barang', 'jumlah']
x_array = np.array(rekomendasipek_x)

km1(clusterLabel, x_array)

rekomendasiUs_x = penjualanByUsia()
clusterLabel = ['usia', 'barang', 'jumlah']
x_array = np.array(rekomendasiUs_x)

km1(clusterLabel, x_array)