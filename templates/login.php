<?php
# @Author: Schmitt Felix
# @Date:   16-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: login.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 16-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC

if($loggedin == "true") {
  header("Location:" . $url);
}

if(isset($_POST['username'], $_POST['password'])) {
  $username = htmlspecialchars($_POST['username']);
  $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

  $login_statement = $pdo->prepare("SELECT * FROM user_users WHERE username LIKE :username OR email LIKE :email");
  $login_statement->bindParam("username", $username);
  $login_statement->bindParam("email", $email);
  $login_statement->execute();
  $user = $login_statement->fetch();

  if($user != null) {
    $_SESSION['username'] = $user['username'];
    header("Location:" . $url . "/?a=loggedin");
  } else {
    echo('<div class="alert alert-danger" role="alert">E-Mail/Benutzername oder Passwort stimmen nicht überein!</div>');
  }
}
?>
<form class="col-md-6 offset-md-3" method="post" action="<?php echo($url); ?>/?p=login">
  <div class="form-group">
    <label>Benutzername oder E-Mail</label>
    <input type="text" class="form-control" name="username" required>
  </div>
  <div class="form-group">
    <label>Passwort</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-outline-primary" value="Anmelden" />
  </div>
</form>
