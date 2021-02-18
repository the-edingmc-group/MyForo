<?php
# @Author: Schmitt Felix
# @Date:   15-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: forums.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 17-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC

$group_statement = $pdo->prepare("SELECT * FROM forum_groups");
$group_statement->execute();
?>

<?php while ($row = $group_statement->fetch()) { ?>
  <div class="card" style="margin-top: 20px;">
    <div class="card-header">
      <?php echo($row['name']); ?>
    </div>
    <div class="card-block forums-list">
      <ul class="list-group list-group-flush">
          <?php
          $forum_statment = $pdo->prepare("SELECT * FROM forum_forums WHERE group_id = :group_id");
          $forum_statment->bindParam("group_id", $row['id']);
          $forum_statment->execute();
          ?>
          <?php while ($row = $forum_statment->fetch()) { ?>
          <a href="<?php echo($url); ?>/?p=forum/forums&amp;f=<?php echo($row['id']); ?>">
            <li class="list-group-item">
              <img class="forum_img" src="<?php echo($row['image']); ?>" />
              <?php echo($row['name']); ?>
            </li>
          </a>
          <?php } ?>
      </ul>
    </div>
  </div>
<?php } ?>
