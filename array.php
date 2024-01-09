<?php
$array=array([0]);
print_r($array);
--------- 數字陣列 ---------
print "數值陣列<br>";
$a = array('hello','javascript','php');
foreach($a as $v){
  echo $v ."<br>";
}

$b = array(0 => 'hello',
           1 => 'javascript',
           2 => 'php');
print_r($b)."<br>";
print('<br>');

$c = ['hello','javascript','php'];
print_r($c)."<br>";
print('<br><br>');

// --------- 關聯陣列 ---------
print "關聯陣列<br>";
$arr = ['username' => 'troie', 
        'email' => 'troie@maolah.com', 
        'phone' => '0980123456'];
$arr['address'] = 'taoyuan';
print_r($arr)."<br>";


// --------- 多維陣列 ---------
print "多維陣列<br>";
$arr = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];
// print_r($arr)."<br>";

$member = [
  [1, 'troie', 'troie@maolah.com'],
  [2, 'clover', 'clover7068@gmail.com'],
  [3, 'mike', 'mikelee@hotmail.com']
];
?>
<ul>
  <?php 
  for($i=0; $i<count($member); $i++){
   echo "<li>id:".$member[$i][0]." name:".$member[$i][1]." email:".$member[$i][2]."</li>";;
  }
  ?>
</ul>
