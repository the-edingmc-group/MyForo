<?php
# @Author: Schmitt Felix
# @Date:   16-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: thread.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 17-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC

$thread_id = htmlspecialchars($_GET['t']);

$thread_st = $pdo->prepare("SELECT * FROM forum_threads WHERE id = :id");
$thread_st->bindParam("id", $thread_id);
$thread_st->execute();
$thread = $thread_st->fetch();

$thread_post_statatement = $pdo->prepare("SELECT * FROM forum_threadposts WHERE thread_id = :id");
$thread_post_statatement->bindParam("id", $thread_id);
$thread_post_statatement->execute();

$poster_statement = $pdo->prepare("SELECT * FROM user_users WHERE id = :id");
$poster_statement->bindParam("id", $post['id']);
$poster_statement->execute();
$poster = $poster_statement->fetch();

if(isset($_POST['text'])) {
  if(trim($_POST['text']) != "") {
    $text = htmlspecialchars($_POST['text']);
    $date = date("d.m.Y, H:i");

    $st = $pdo->prepare("INSERT INTO forum_threadposts (thread_id, user, answer, datetime) VALUES (:thread_id, :user; :answer, :datetime)");
    $st->bindParam("thread_id", $thread_id);
    $st->bindParam("user", $user['id']);
    $st->bindParam("answer", $answer);
    $st->bindParam("datetime", $datetime);
    $st->execute();

    header("Location:" . $url . "/?p=forum/thread&amp;t=" . $thread_id);
  }
}
?>

  <?php while($post = $thread_post_statatement->fetch()) { ?>
      <div class="card" style="margin-bottom: 20px;">
        <p class="card-header"><?php echo($thread['title']); ?></p>
        <div class="card-block row">
          <div class="col-md-2">
            <a href="<?php echo($url); ?>/?p=profile&amp;u=<?php echo($poster['id']); ?>"><?php echo($poster['username']); ?></a>
          </div>
          <div class="col-md-10">
            <small>Von <a href="<?php echo($url); ?>/?p=profile&amp;u=<?php echo($poster['id']); ?>"><?php echo($poster['username']); ?></a> am <?php echo($post['datetime']); ?>.</small>
            <hr />
            <p class="card-text"><?php echo($post['answer']); ?></p>
          </div>
        </div>
      </div>
  <?php } ?>
<?php include("answer.php"); ?>
