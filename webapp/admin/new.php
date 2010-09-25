<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpsucks.php");
  require("../classes/picture.php");
  require("../classes/category.php");
?>

  <form action="index.php" method="POST" enctype="multipart/form-data">
    Title: <input type="text" name="title" /><br/>
    File: <input type="file" name="image"><br/>
  <?php Category::render_select(); ?><br/>
    <input type="submit" name="Add" value="Add">

  </form>

<?php
  require("footer.php");

?>

