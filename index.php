<?php
# @Author: Schmitt Felix
# @Date:   15-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: index.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 17-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC

// Librarys einbinden //
require_once './vendor/autoload.php';
require_once 'config/config.php';


//$pdo = new PDO('mysql:host=localhost;dbname=myforo', $mysql_username, $mysql_password);
$pdo = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $mysql_database, $mysql_username, $mysql_password);

if(!isset($_SESSION)) {
  session_start();
}
if(isset($_SESSION['username'])) {
  $loggedin = "true";
  $loggedin_username = $_SESSION['username'];
} else {
  $loggedin = "false";
}

if(isset($_GET['p'])) {
  $p = htmlspecialchars($_GET['p']);
} else {
  $p = "index";
}
?>
<!doctype html>
  <html>
    <head>
      <title><?php echo($title); ?></title>

      <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
      <div id="fb-root">

      <?php include ('templates/header.php'); ?>

      <div class="main-container container">
        <?php include ('templates/' . $p . '.php'); ?>
      </div>

      <?php include ('templates/footer.php'); ?>

      </div>

      <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/de_DE/sdk.js#xfbml=1&autoLogAppEvents=1&version=v9.0&appId=428141557866258" nonce="457w0wJn"></script>
      <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
  </html>
