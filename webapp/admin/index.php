<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpsucks.php");
  require("../classes/picture.php");

   if(isset($_FILES['image'])){
      Picture::create();
   }
?>


<table border=1>

<div>
<?php  
  $pictures= Picture::all();

  foreach ($pictures as $picture) {
    echo "<tr>";
    echo "<td><a href=\"../show.php?id=".h($picture->id)."\">".h($picture->title)."</a></td>";
    echo "<td><a href=\"del.php?id=".h($picture->id)."\">delete</a><td>";
    echo "</tr>";
  }
?>
</table>
<a href="new.php"> Add a new picture</a>
</div>
<?php
  require("footer.php");

?>

