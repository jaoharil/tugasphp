MariaDB [dbpos]> SELECT tmp_lahir, COUNT(*) as jumlah_pelanggan_dengan_tmp_lahir
    -> FROM pelanggan
    -> GROUP BY tmp_lahir;
+-----------+-----------------------------------+
| tmp_lahir | jumlah_pelanggan_dengan_tmp_lahir |
+-----------+-----------------------------------+
| jakarta   |                                 5 |
| surabaya  |                                 5 |
+-----------+-----------------------------------+
2 rows in set (0.004 sec)
MariaDB [dbpos]> SELECT id, nama, tgl_lahir
    -> FROM pelanggan
    -> WHERE (YEAR(NOW()) - YEAR(tgl_lahir)) <
    ->     (SELECT AVG(YEAR(NOW()) - YEAR(tgl_lahir)) FROM pelanggan);
+----+-------+------------+
| id | nama  | tgl_lahir  |
+----+-------+------------+
|  1 | hafiz | 1998-10-03 |
|  2 | aril  | 1999-10-10 |
|  3 | lia   | 1996-10-03 |
|  4 | siti  | 1996-10-10 |
|  5 | joh   | 1996-10-03 |
|  6 | koji  | 1996-10-02 |
|  9 | kebi  | 1996-02-05 |
+----+-------+------------+
7 rows in set (0.013 sec)
MariaDB [dbpos]> SELECT id, nama, harga_jual
    -> FROM produk
    -> WHERE harga_jual > (SELECT AVG(harga_jual) FROM produk);
+----+------------+------------+
| id | nama       | harga_jual |
+----+------------+------------+
|  3 | kulkas     |   20000000 |
|  4 | AC         |    6000000 |
|  5 | laptop     |    8000000 |
| 10 | mesin cuci |    8000000 |
+----+------------+------------+
4 rows in set (0.005 sec)
MariaDB [dbpos]> SELECT COUNT(*) as jumlah_produk,
    ->        AVG(harga_jual) as rata_rata_harga_jual_produk,
    ->        MAX(harga_jual) as harga_jual_tertinggi,
    ->        MIN(harga_jual) as harga_jual_terendah
    -> FROM produk
    -> WHERE harga_jual < (SELECT AVG(harga_jual) FROM produk);
+---------------+-----------------------------+----------------------+---------------------+
| jumlah_produk | rata_rata_harga_jual_produk | harga_jual_tertinggi | harga_jual_terendah |
+---------------+-----------------------------+----------------------+---------------------+
|             6 |          2591666.6666666665 |              5500000 |               50000 |
+---------------+-----------------------------+----------------------+---------------------+
1 row in set (0.004 sec)
