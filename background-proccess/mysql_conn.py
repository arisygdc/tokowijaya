import mysql.connector

def getConn():
    # establish database connection
    db = mysql.connector.connect(
        host="127.0.0.1",
        user="root",
        password="root-secret",
        database="tokowijaya"
    )

    # create cursor object
    return db

def getPekerjaan():
    db = getConn()
    cursor = db.cursor()
    # read data
    sql = """
    select pekerjaan from pengguna group by pekerjaan
    """
    cursor.execute(sql)
    pek = []
    for row in cursor:
        for field in row:
            pek.append(field)
            
    cursor.close()
    db.close()
    return pek

def getPekerjaanName(name):
    db = getConn()
    cursor = db.cursor()
    # read data
    sql = f"select * from recomendation where pekerjaan = '{name}'"
    cursor.execute(sql)
    pek = cursor.fetchall()
    cursor.close()
    db.close()
    return pek

def getUsia(usia):
    db = getConn()
    cursor = db.cursor()
    # read data
    sql = f"select * from recomendation where usia = {usia}"
    cursor.execute(sql)
    us = cursor.fetchall()
    cursor.close()
    db.close()
    return us

def insertRekomendasiPekerjaan(group, barang):
    insertRekomendasi("pekerjaan", group, barang)

def insertRekomendasiUsia(group, barang):
    insertRekomendasi("usia", group, barang)

def insertRekomendasi(field, group, barang):
    # insert data
    db = getConn()
    cursor = db.cursor()
    sql = "INSERT INTO recomendation (" + field
    sql = sql + ", kode_barang) VALUES (%s, %s)"
    values = (group, barang)
    cursor.execute(sql, values)
    db.commit()
    cursor.close()
    db.close()

def penjualanByPekerjaan():
    db = getConn()
    cursor = db.cursor()
    # read data
    sql = """
    SELECT p.pekerjaan as pekerjaan, dt.kode_barang as barang, dt.jumlah
    FROM detail_transaksi dt inner join transaksi t on dt.kode_transaksi = t.id 
    left join pengguna p on p.kode_pengguna = t.kode_pengguna where t.id > 0
    """
    cursor.execute(sql)
    results = []
    for row in cursor:
        coll = []
        for field in row:
            coll.append(field)
        results.append(coll)
    cursor.close()
    db.close()
    return results

def penjualanByUsia():
    db = getConn()
    cursor = db.cursor()
    # read data
    sql = """
    SELECT  YEAR(now()) - YEAR(p.tgl_lahir) as old, dt.kode_barang as barang, dt.jumlah
    FROM detail_transaksi dt inner join transaksi t on dt.kode_transaksi = t.id
    left join pengguna p on p.kode_pengguna = t.kode_pengguna where t.id > 0
    """
    cursor.execute(sql)
    results = []
    for row in cursor:
        coll = []
        for field in row:
            coll.append(field)
        results.append(coll)
    cursor.close()
    db.close()
    return results

def update(field, where, barang):
    db = getConn()
    cursor = db.cursor()
        # update data
    sql = f"UPDATE recomendation SET kode_barang = %s WHERE {field} = %s"
    values = (barang, where)
    cursor.execute(sql, values)
    db.commit()
    print(cursor.rowcount, "record updated.")
