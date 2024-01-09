<?php
require_once 'function.php';
page_header('Hi I am troie'); 

if('POST' == $_SERVER['REQUEST_METHOD']) {
  procees_form();
}else{
  show_form();
}

page_footer(); 
?>