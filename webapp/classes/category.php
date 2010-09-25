<?php

class Category {
  const SITE = "Ruxcon PHOTOBLOG";

  public $title, $id;
  function __construct($id,$title) {
    $this->id = $id;
    $this->title = $title;
  }
  function all() {
    $sql = "SELECT * FROM categories";
    $results = mysql_query($sql);
    $categories = Array();
    while ($row = mysql_fetch_assoc($results)) {
      $categories[] = new Category($row['id'],$row['title']);
    }
    return $categories;

  }
  function render_menu() {
    foreach (Category::all() as $cat) {
      echo "\t<li><a href=\"cat.php?id=".h($cat->id)."\">".h($cat->title)." | </a></li>\n";
    }
  }
  function render_select() {
    echo "<select name=\"category\">";
    foreach (Category::all() as $cat) {
      echo "<option value=".h($cat->id).">".h($cat->title)."</option>";
    }
    echo "</select>";
  }



}
?>
