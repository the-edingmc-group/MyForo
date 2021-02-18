<?php
# @Author: Schmitt Felix
# @Date:   17-02-2021
# @Email:  felix.schmitt@edingmc.com
# @Filename: answer.php
# @Last modified by:   Schmitt Felix
# @Last modified time: 17-02-2021
# @Copyright: Copyright (C) 2018-2021 TheEdingMCGroup and EdingMC
?>
<div class="card" style="margin-bottom: 20px;">
  <p class="card-header">Antworten</p>
  <div class="card-block row">
    <form method="post" style="width: 100%;" action="<?php echo($url); ?>/?p=forum/thread&amp;t=<?php echo($thread_id); ?>">
      <div class="form-group">
        <textarea id="text" name="text" placeholder="Deine Antwort" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="sumit" class="btn btn-success">Antworten</button>
      </div>
    </form>
  </div>
</div>
