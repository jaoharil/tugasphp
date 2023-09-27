<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 4 php</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$user_name = "admin";
$pass_word = "mimin";

?>

     <table>
      <form method="POST">
      <tr>
        <td>username </td>
           <td>
              <input type="text" name="username" id="username" size="30">
            </td>
            </tr>
            <tr>
                <td>Password </td>
                <td>
                    <input type="password" name="password" id="password" size="30">
                </td>
            </tr>
            <tr>
                    <th><button name="proses">Login</button></th>
                </tr>
      </form>
      </table>
<?php 
if (isset($_POST['proses'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Panggil fungsi cekLogin
  cekLogin($username, $password, $user_name,$pass_word);
}
function cekLogin($username, $password, $user_name,$pass_word){
  if ($username === $user_name && $password === $pass_word) {
    header("Location: admin.php");
    return;
} else {
    echo "coba priksa username dan password";
}
}


?>
</body>
</html>

