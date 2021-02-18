<?php
# @Author: Schmitt Felix
# @Date:   15-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: index.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 17-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC

if(isset($_GET['a'])) {
  if($_GET['a'] == "loggedin") {
    echo('<div class="alert alert-success" role="alert">Erfolgreich Angemeldet!</div>');
  }
  if($_GET['a'] == "logout") {
    session_destroy();
    echo('<div class="alert alert-success" role="alert">Erfolgreich Abgemeldet! Bis bald!</div>');
    if($loggedin == "true") {
        header("Location:" . $url . "/?a=logout");
    }
  }
}
?>
<div>
  <center>
    <hr>
      <h1> Seite ist in Arbeit</h1>
    <hr>
  </center>
</div>
