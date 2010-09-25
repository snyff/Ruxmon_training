<?php
  $site = "My Photoblog - last picture";
  require "header.php";
  $pic = Picture::show((int) $_GET["id"]);
?>
  <div class="block" id="block-text">
    <div class="secondary-navigation">
      <div class="content">
        <h2 class="title">Picture: <?php echo h($pic->title); ?></h2>
        <div class="inner">
          <?php echo $pic->render(); ?>
        </div>
     </div>
 
    </div>
  </div>


<?php


  require "footer.php";
?> 
