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

def InsertRekomendasi():
    # insert data
    db = getConn()
    cursor = db.cursor()
    sql = "INSERT INTO customers (name, email) VALUES (%s, %s)"
    values = ("John Doe", "johndoe@example.com")
    cursor.execute(sql, values)
    db.commit()
    print(cursor.rowcount, "record inserted.")
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

def update():
    db = getConn()
    cursor = db.cursor()
        # update data
    sql = "UPDATE customers SET email = %s WHERE name = %s"
    values = ("johndoe@gmail.com", "John Doe")
    cursor.execute(sql, values)
    db.commit()
    print(cursor.rowcount, "record updated.")

def delete():
    db = getConn()
    cursor = db.cursor()
    # delete data
    sql = "DELETE FROM customers WHERE name = %s"
    values = ("John Doe",)
    cursor.execute(sql, values)
    db.commit()
    print(cursor.rowcount, "record deleted.")
