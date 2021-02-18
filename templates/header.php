<?php
# @Author: Schmitt Felix
# @Date:   15-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: header.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 17-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC
?>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <a class="navbar-brand" href="<?php echo($url); ?>"><?php echo($title); ?></a>

   <div class="collapse navbar-collapse" id="main-navbar">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
         <a class="nav-link" href="<?php echo($url); ?>">Startseite</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="<?php echo($url); ?>/?p=forum/index">Foren</a>
       </li>
     </ul>

     <ul class="navbar-nav">
       <?php if($loggedin == "false") { ?>
          <li class="nav-item pull-right">
            <a class="nav-link" href="<?php echo($url); ?>/?p=login">Anmelden</a>
          </li>
          <li class="nav-item pull-right">
             <a class="nav-link" href="<?php echo($url); ?>/?p=register">Registrieren</a>
          </li>
      <?php } else { ?>
          <li class="nav-item pull-right">
            <a class="nav-link" href="<?php echo($url); ?>/?p=members&amp;m=<?php echo($loggedin_username); ?>"><?php echo($loggedin_username); ?></a>
          </li>
          <li class="nav-item pull-right">
             <a class="nav-link" href="<?php echo($url); ?>/?a=logout">Ausloggen</a>
          </li>
      <?php } ?>
     </ul>
  </div>
</nav>
