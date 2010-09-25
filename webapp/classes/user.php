<?php

class User {
  const SITE= "PHOTOBLOG";
  function login($user, $password) {
    $sql = "SELECT * FROM users where login=\"";
    $sql.= mysql_real_escape_string($user);
    $sql.= "\" and password=md5(\"";
    $sql.= mysql_real_escape_string($password);
    $sql.= "\")";
    $result = mysql_query($sql);
    if ($result) {
      $row = mysql_fetch_assoc($result);
      if ($user === $row['login']) {
        return TRUE;
      }
    }
    else 
      echo mysql_error();
    return FALSE;
    //die("invalid username/password");
  }


}
?>
