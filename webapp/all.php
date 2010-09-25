


<?php
  require "header.php";
  $pics = Picture::all(NULL, $_GET['order']);
?>
    <div class="block" id="block-text">
    <div class="secondary-navigation">
<p>order by: 

    <a href="all.php?order=id">default</a>
    <a href="all.php?order=title">title</a>
    <a href="all.php?order=cat">category</a>
</p>
<?php
    foreach ($pics as $pic) {
?>
      <div class="content">
        <h2 class="title"><a href="show.php?id=<?php echo h($pic->id); ?>"> 
                      Picture: <?php echo h($pic->title); ?></a></h2>
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
