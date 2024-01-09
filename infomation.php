<?php 
require_once 'function.php';
page_header('健保特約醫事機構-醫學中心'); 
get_information($_GET['id']);
echo '<a href="https://'.$_SERVER['HTTP_HOST'].'/hello.php">返回</a>';
page_footer(); 
?>
