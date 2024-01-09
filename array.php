<?php
// $array=array([0]);
// print_r($array);
// --------- 數字陣列 ---------
// print "數值陣列<br>";
// $a = array('hello','javascript','php');
// $a[3] = 'css';
// $a[6] = 'css';
// // $a= array(3=>'java');
// echo "aaa=";
// print_r($a);
// print('<br>');












// foreach($a as $v){
//   echo $v ."<br>";
// }

// $b = array(0 => 'hello',
//            1 => 'javascript',
//            2 => 'php');
// print_r($b)."<br>";
// print('<br>');

// $c = ['hello','javascript','php'];
// print_r($c)."<br>";
// print('<br><br>');

// --------- 關聯陣列 ---------
print "關聯陣列<br>";
$arr = ['username' => 'troie', 
        'email' => 'troie@maolah.com', 
        'phone' => '0980123456'];
$arr['address'] = 'taoyuan';
print_r($arr)."<br>";
// print('<br><br>');
// print "<table><tr><td>username</td><td>email</td><td>phone</td><td>address</td></tr>"."<tr><td>".$arr['username']."</td><td>".$arr['email']."</td><td>". $arr['phone']."</td><td>".$arr['address']."</td></tr></table>";
// foreach($arr as $key =>$value){
//   echo $key."=>".$value."<br>";
// }

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
<?php
foreach($member as $v){
  echo $v[2]."aa<br>";
}
print_r($member[1][2])."<br>";
$member[]=[5,'james','kames@hello.com'];
print_r($member)."<br>";
echo "count member=".count($member);

$hello[]='html';
print_r($hello)."<br>";
$hello[]='css';
$hello[]='javascript';
print_r($hello)."<br>";
?>