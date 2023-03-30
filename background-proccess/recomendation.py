from sklearn.cluster import KMeans
import sys
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from mysql_conn import selectForRecomendation
from matplotlib import style
style.use("ggplot")

rekomendasipek = pd.read_csv("./rekomendasi kmeans FIX.csv", usecols=[
   "pekerjaan1",
   "barang1",
   "Terjual1",
])

#read csv file with ; separator
rekomendasipek.head()

rekomendasipek_x = rekomendasipek.iloc[:, 0:3]
rekomendasipek_x.head()
x_array = np.array(rekomendasipek_x)

# Menampilkan data penjualan
print("---Data Pejualan---")
print(rekomendasipek)

# Cek Parameter dari Pengguna
if len(sys.argv) > 1:
    nCluster = int(sys.argv[1])
else:
    nCluster = 1

kmeans = KMeans(n_clusters=5, random_state=37)
kmeans.fit(x_array)
rekomendasipek["cluster"] = kmeans.labels_


centroids = kmeans.cluster_centers_
labels = kmeans.labels_


print("---CENTROID---")
print(centroids)

print("---LABELS---")
print(labels)



from sklearn.metrics import confusion_matrix,classification_report
print(confusion_matrix(rekomendasipek["cluster"],kmeans.labels_))
print(classification_report(rekomendasipek["cluster"],kmeans.labels_))

#Menampilkan visualization
fig = plt.figure()
centers = kmeans.cluster_centers_
ax = fig.add_subplot(111, projection='3d')
ax.scatter(x_array[:, 0], x_array[:, 1], x_array[:, 2], c=labels)
ax.scatter(centers[:, 0], centers[:, 1], centers[:, 2], c="red", s=50, alpha=1, marker="o")
ax.set_xlabel('Pekerjaan')
ax.set_ylabel('ID Barang')
ax.set_zlabel('Terjual')

# Mengelompokkan data berdasarkan label cluster
grouped_data = penjualan.groupby("cluster")

# Mencari ID Barang yang paling banyak muncul di setiap kelompok
for label, group in grouped_data:
    top_product = group["Barang"].value_counts().index[0]
    print(f"Cluster {label}: ID Barang terbanyak adalah {top_product}")


plt.show()

