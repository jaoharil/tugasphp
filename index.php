<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 2 PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="row">
 <form method="POST" class="ril">
    <label for="">Nama : </label>
    <input type="text" name="nama" placeholder="masukkan nama" required><br><br>
    <label for="">Matakuliah</label>
   <select name="pekerjaan" id="">
    <option value="">----pilih pekerjaan-----</option>
     <option value="kuli">Kuli bangunan</option>
     <option value="backend">Backend</option>
     <option value="front">Frontend</option>
     <option value="fullstack">Fulstack Dev</option>
     <option value="dokter">Dokter</option>
     <option value="mengajar">Mengajar</option>
     <option value="pilot">pilot</option>
     <option value="nelayan">Nelayan</option>
     <option value="petani">Petani</option>
     <option value="pns">PNS</option>
    </select><br><br>
    <label>Hobby:</label><br>
        <input type="radio" name="hoby" value="lari">Lari<br>
        <input type="radio" name="hoby" value="bola">Bermain Bola<br>
        <input type="radio" name="hoby" value="voly">Voly<br>
        <input type="radio" name="hoby" value="basket">Basket<br>
        <input type="radio" name="hoby" value="badminton">Badminton<br>
        <input type="radio" name="hoby" value="baca">Membaca<br>
        <input type="radio" name="hoby" value="nulis">Menulis<br>
        <input type="radio" name="hoby" value="gambar">Bergambar<br>
        <input type="radio" name="hoby" value="game">Main Game<br>
        <input type="radio" name="hoby" value="renang">Renang<br><br>

        <button name="simpan" type="submit">simpan</button>
     
    </form>
  
  <?php
   $nama = $_POST['nama'];
   $pekerjaan = $_POST['pekerjaan'];
   $hoby = $_POST['hoby'];
   $tombol = $_POST['simpan'];
if(isset($tombol)){
        echo "<h2>Data Diri:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
        echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hoby</td></tr>";
        echo "</table>";
    }
    ?>
  </div>
</body>
</html>