<?php 
include_once 'top.php';
include_once 'menu.php';
?>

<div>
<div class="container-fluid px-4">
  <!-- <h1>selamt datang cok</h1> -->
  <!-- routing -->
  <?php
$url = !isset($_GET['url']) ? 'about' : $_GET['url'];

switch ($url) {
    case 'about':
        include_once 'about.php';
        break;
    case 'contact':
        include_once 'contact.php';
        break;
    case 'data':
        include_once 'data.php';
        break;
    default:
        include_once 'about.php'; // Halaman default jika $url kosong atau tidak valid
        break;
}
?>

</div>


</div>

<?php 
include_once 'button.php';
?>