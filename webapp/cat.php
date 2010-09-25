


<?php
  require "header.php";
  $pics = Picture::all($_GET["id"]);
?>
    <div class="block" id="block-text">
    <div class="secondary-navigation">
<?php
    foreach ($pics as $pic) {
?>
      <div class="content">
        <h2 class="title">Picture: <?php echo h($pic->title); ?></h2>
        <div class="inner" align="center">
          <p>
            <?php echo $pic->render(); ?>
          </p>
        </div>
     </div>

<?php      
    }
?>

    </div>
  </div>


<?php 
  require "footer.php";
?> 
