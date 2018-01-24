<?php
echo "Femi";


$uri = explode ('/', $_SERVER['REQUEST_URI']);
//var_dump($uri);
if (count($uri)> 2){
  header("Location:/index");
}

switch ($uri[1]) {
  case "":
  include APP_PATH."/views/index.html";
    break;

  case 'register':
    include APP_PATH."/views/register.php";
    break;

  case "index":
    include APP_PATH."/views/index.php";
    break;

  case "about":
  include APP_PATH."/views/about.php";
  break;

  case "admin-1":
  include APP_PATH."/views/admin/register.html";
  break;

  case "admin-2":
  include APP_PATH."/views/admin/register.html";
  break;

  case "admin-3":
  include APP_PATH."/views/admin/register.html";
  break;

  default:
    include APP_PATH."/views/main.php";
    break;
}
?>
