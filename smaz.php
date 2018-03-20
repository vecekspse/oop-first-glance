<?php
require 'autoloader.php';
$controller = new ProductController();
if($id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT)) {
  $redirect = $controller->deleteProduct($id);
  header('Location: ' . $redirect);
  exit;
}
header("HTTP/1.0 404 Not Found");