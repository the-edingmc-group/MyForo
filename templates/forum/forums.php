<?php
# @Author: Schmitt Felix
# @Date:   16-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: forums.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 17-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC

//echo($_GET['id']);
$forum_id = htmlspecialchars($_GET['f']);

$thrads_statement = $pdo->prepare("SELECT * FROM forum_threads WHERE forum_id = :forum_id");
$thrads_statement->bindParam("forum_id", $forum_id);
$thrads_statement->execute();
?>

<div class="card">
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
    <?php while($row = $thrads_statement->fetch()) { ?>
      <?php
        $user_statement = $pdo->prepare("SELECT * FROM user_users WHERE id = :id");
        $user_statement->bindParam("id", $row['user_id']);
        $user_statement->execute();
        $creator = $user_statement->fetch();
        if($creator != null) {
       ?>
        <a href="<?php echo($url); ?>/?p=forum/thread&amp;t=<?php echo($row['id']); ?>" class="thread_link">
          <li class="list-group-item">
            <blockquote class="card-blockquote">
              <?php echo($row['title']); ?>
              <footer>
                <small>
                    <?php echo($creator['username']); ?> am <i><?php echo($row['create_date']); ?></i>
                  </small>
                </footer>
              </blockquote>
            </li>
          </a>
      <?php } ?>
    <?php } ?>
    </ul>
  </div>
</div>
