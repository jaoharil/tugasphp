<?php 

class KonversiSuhu {
  private $satuanSuhuAwal;
  private $besaranSuhu;
  private $satuanSuhuTujuan;

  public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
      $this->satuanSuhuAwal = $satuanSuhuAwal;
      $this->besaranSuhu = $besaranSuhu;
      $this->satuanSuhuTujuan = $satuanSuhuTujuan;
  }

  public function CelciusToFahrenheit() {
      if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
          return ($this->besaranSuhu * 9/5) + 32;
      } else {
          return null;
      }
  }

  public function FahrenheitToCelcius() {
      if ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
          return ($this->besaranSuhu - 32) * 5/9;
      } else {
          return null;
      }
  }

  public function CelciusToRheamur() {
      if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
          return $this->besaranSuhu * 4/5;
      } else {
          return null;
      }
  }

  public function RheamurToCelcius() {
      if ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
          return $this->besaranSuhu * 5/4;
      } else {
          return null;
      }
  }

  public function cetak() {
      $hasil_konversi = null;
      if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
          $hasil_konversi = $this->CelciusToFahrenheit();
      } elseif ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
          $hasil_konversi = $this->FahrenheitToCelcius();
      } elseif ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
          $hasil_konversi = $this->CelciusToRheamur();
      } elseif ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
          $hasil_konversi = $this->RheamurToCelcius();
      }

      if ($hasil_konversi !== null) {
          echo "<table border='1'>";
          echo "<tr>";
          echo "<th>Satuan Suhu Awal</th>";
          echo "<th>Besaran Suhu</th>";
          echo "<th>Satuan Suhu Tujuan</th>";
          echo "<th>Hasil Konversi Suhu</th>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>{$this->satuanSuhuAwal}</td>";
          echo "<td>{$this->besaranSuhu}</td>";
          echo "<td>{$this->satuanSuhuTujuan}</td>";
          echo "<td>{$hasil_konversi}</td>";
          echo "</tr>";
          echo "</table>";
          echo "<br>";
      } else {
          echo "Konversi tidak valid.<br>";
      }
  }
}

?>