<?php
# @Author: Schmitt Felix
# @Date:   16-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: register.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 18-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC

if($loggedin == "true") {
  header("Location:" . $url);
}

$username = "";
$email = "";

if(isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['password_repeat'])) {
  if($_POST['password'] == $_POST['password_repeat']){
    $register_statement = $pdo->prepare("INSERT INTO user_users (username, password, email, usergroup) VALUES (:username, :password, :email, 'guest')");

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

    $login_statement = $pdo->prepare("SELECT * FROM user_users WHERE username LIKE :username OR email LIKE :email");
    $login_statement->bindParam("username", $username);
    $login_statement->bindParam("email", $email);
    $login_statement->execute();
    $user = $login_statement->fetch();

    if($user == null) {
      $register_statement->bindParam("username", $username);
      $register_statement->bindParam("password", $password);
      $register_statement->bindParam("email", $email);
      $register_statement->execute();
      echo('<div class="alert alert-success" role="alert">Dein Account wurde erstellt!</div>');
    } else {
      echo('<div class="alert alert-danger" role="alert">Dise Daten wurden berreits eingetragen!</div>');
    }
  } else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    echo('<div class="alert alert-danger" role="alert">Die Passwörter stimmen nicht überein!</div>');
  }
}
?>
<form class="col-md-6 offset-md-3" method="post" action="<?php echo($url); ?>/?p=register">
  <div class="form-group">
    <label>Benutzername</label>
    <input type="text" class="form-control" name="username" required value="<?php echo($username); ?>">
  </div>
  <div class="form-group">
    <label>E-Mail Adresse</label>
    <input type="email" class="form-control" name="email" required value="<?php echo($email); ?>">
  </div>
  <div class="form-group">
    <label>Passwort</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group">
    <label>Passwort wiederholen</label>
    <input type="password" class="form-control" name="password_repeat" required>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-outline-primary" value="Registrieren" />
  </div>
</form>
