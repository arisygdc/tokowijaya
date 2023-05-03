import mysql.connector

class Querier:
    def __init__(self):
        self.db = mysql.connector.connect(
            host="127.0.0.1",
            user="root",
            password="root-secret",
            database="tokowijaya",
            autocommit=True
        )

    def execute(self, sql):
        cursor = self.db.cursor()
        cursor.execute(sql)
        return cursor
    
    def getPekerjaan(self):
        cursor = self.execute("select pekerjaan from pengguna group by pekerjaan")
        pek = []
        for row in cursor:
            for field in row:
                pek.append(field)
                
        cursor.close()
        return pek
    
    def getRecomendationPekerjaan(self):
        cursor = self.execute("SELECT pekerjaan, nama_barang FROM recomendation, barang WHERE recomendation.kode_barang = barang.id AND pekerjaan IS NOT NULL")
        rec_pek = cursor.fetchall()
        cursor.close()
        return rec_pek
    
    def getRecomendationUsia(self):
        cursor = self.execute("SELECT usia, nama_barang FROM recomendation, barang WHERE recomendation.kode_barang = barang.id AND usia IS NOT NULL")
        rec_us = cursor.fetchall()
        cursor.close()
        return rec_us
    
    def getRestockPred(self):
        cursor = self.execute("SELECT cluster, nama_barang FROM restock_pred, barang WHERE restock_pred.kode_barang = barang.id")
        restock = cursor.fetchall()
        cursor.close()
        return restock
    
    def getPekerjaanName(self, name):
        cursor = self.execute(f"select * from recomendation where pekerjaan = '{name}'")
        pek = cursor.fetchall()
        cursor.close()
        return pek
    
    def getUsia(self, usia):
        cursor = self.execute(f"select * from recomendation where usia = {usia}")
        us = cursor.fetchall()
        cursor.close()
        return us
    
    def insertRekomendasi(self, field, group, barang):
        sql = "INSERT INTO recomendation (" + field
        sql = sql + ", kode_barang) VALUES (%s, %s)"
        cursor = self.db.cursor()
        values = (group, barang)
        cursor.execute(sql, values)
        cursor.close()

    def insertRekomendasiPekerjaan(self, group, barang):
        self.insertRekomendasi("pekerjaan", group, barang)
    
    def insertRekomendasiUsia(self, group, barang):
        self.insertRekomendasi("usia", group, barang)

    def penjualanByPekerjaan(self):
        sql = """
        SELECT p.pekerjaan as pekerjaan, dt.kode_barang as barang, dt.jumlah
        FROM detail_transaksi dt inner join transaksi t on dt.kode_transaksi = t.id 
        left join pengguna p on p.kode_pengguna = t.kode_pengguna where t.id > 0
        """
        cursor = self.execute(sql)
        results = []
        for row in cursor:
            coll = []
            for field in row:
                coll.append(field)
            results.append(coll)
        cursor.close()
        return results
    
    def penjualanByUsia(self):
        sql = """
        SELECT  YEAR(now()) - YEAR(p.tgl_lahir) as old, dt.kode_barang as barang, dt.jumlah
        FROM detail_transaksi dt inner join transaksi t on dt.kode_transaksi = t.id
        left join pengguna p on p.kode_pengguna = t.kode_pengguna where t.id > 0
        """
        cursor = self.execute(sql)
        results = extractCursor(cursor)
        cursor.close()
        return results
    
    def getBarang(self):
        # read data
        sql = """
        select kode_barang from barang
        """
        cursor = self.execute(sql)
        results = []
        for row in cursor:
            for field in row:
                results.append(field)
        cursor.close()
        return results
    
    def updateRekomendasi(self, field, group, barang):
        sql = f"update recomendation set kode_barang = '{barang}' where {field} = '{group}'"
        cursor = self.execute(sql)
        cursor.close()
    
    def barangJumlahTerjual(self):
        sql = """
            SELECT b.id, b.stock, dt.terjual FROM 
            (SELECT kode_barang, count(jumlah) as terjual FROM detail_transaksi GROUP BY kode_barang) as dt
            LEFT JOIN barang b ON dt.kode_barang = b.id
        """
        cursor = self.execute(sql)
        results = extractCursor(cursor)
        cursor.close()
        return results
    
    # insertRekomendasiRestock @kode_barang list @cluster int
    def insertRekomendasiRestock(self, cluster, kode_barang):
        # loop kode_barang
        for val in kode_barang:
            cursor = self.db.cursor()
            sql = "INSERT INTO restock_pred (kode_barang, cluster) VALUES (%s, %s)"
            values = (val, cluster)
            cursor.execute(sql, values)
            cursor.close()

def extractCursor(cursor):
    results = []
    for row in cursor:
        coll = []
        for field in row:
            coll.append(field)
        results.append(coll)
    return results