<?php
function page_header($title) {
  echo'<html lang="zh-TW">
  <head>
    <meta charset="UTF-8">
    <link rel="https://maolah.fun/wp-content/uploads/2023/11/cropped-favicon-32x32.png" href="favicon.ico" type="image/x-icon" />
    <title>'.$title.'</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
  <nav class="clearfix">
      <ul>
          <li><a href="/">home</a></li>
          <li><a href="/hello.php">醫學中心</a></li>
          <li><a href="https://medium.com/maolah" target="_blank">blog</a></li>
          <li><a href="form.php">contact</a></li>
      </ul>
  </nav>
    <header>
        <img src="https://maolahdesign.github.io/image/avarta.png" alt="">
        <h1>Troie Pan</h1>
    </header>';
}

function page_footer(){
  echo'</div><footer>&copy; 2023 design by <a href="https://maolah.fun" target="_blank">maolah design</a></footer></body></html>';
}

function get_csv(){
  $filename = "hello.csv";
  $handle = fopen($filename, "r");
  $rel = fgetcsv($handle);
  fclose($handle);
  // return $data;
  print_r($rel);
}

function get_data(){
  $filename = "data.csv";
  $handle = fopen($filename, "r");
  while (($row = fgetcsv($handle)) !== FALSE) {
      $data[] = $row;
  }
  fclose($handle);
  return $data;
  // print_r($data);
}

function get_table(){
  $data = get_data();
  $table = '<table>'."\n";
  foreach ($data as $row) {
  $table .= '<tr>'."\n";
    for( $i = 0; $i < count($row); $i++) { 
        $table .= '<td>'.$row[$i].'</td>'."\n";
    }    
  $table .= '</tr>'."\n";
  }
  $table .= '</table>'."\n";
  echo $table;
}

function get_table2(){
  $data = get_data();
  $table = '<table>'."\n";
  foreach ($data as $row) {
  $table .= '<tr>'."\n";
    for( $i = 0; $i < 4; $i++) { 
        if($i == 0){
          $table .= '<td><a href="infomation.php?id='.$row[$i].'">'.$row[$i].'</a></td>'."\n";
        }else{
          $table .= '<td>'.$row[$i].'</td>'."\n";
        }
        
    }    
  $table .= '</tr>'."\n";
  }
  $table .= '</table>'."\n";
  echo $table;
}

function get_information($id){
  $data = get_data();
  // print_r($data);
  $table = '<table class="info">'."\n";
    foreach ($data as $row) {
      if($row[0] == $id){
        for( $i = 1; $i < count($row); $i++) {
        $table .= '<tr><td>'.$data[0][$i].'</td><td>'.$row[$i].'</td>'."</tr>\n";
        }
      }  
  }
  $table .= '</table>'."\n";
  echo $table;
}

// 印出表單
function show_form(){
  print<<<_HTML_
  <div class="container myform">
      <form action="$_SERVER[PHP_SELF]" method="post">
          <label for="username">username:</label>
          <input type="text" id="username" name="username" >
          <label for="email">email</label>
          <input type="text" id="email" name="email" >
          <label for="phone">phone</label>
          <input type="text" id="phone" name="phone" >
          <label for="email">password</label>
          <input type="text" id="password" name="password" >
          <label for="repassword">confirm password</label>
          <input type="text" id="repassword" name="repassword" >

          <label>favorite language</label>
          <input class="select" type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">HTML</label><br>
          <input class="select" type="radio" id="css" name="fav_language" value="CSS">
          <label for="css">CSS</label><br>
          <input class="select" type="radio" id="javascript" name="fav_language" value="JavaScript">
          <label for="javascript">JavaScript</label>

          <label>language</label>
          <input class="select" type="checkbox" id="lang1" name="language" value="HTML">
          <label for="lang1">HTML</label><br>
          <input class="select" type="checkbox" id="lang2" name="language" value="CSS">
          <label for="lang2">CSS</label><br>
          <input class="select" type="checkbox" id="lang3" name="language" value="JavaScript">
          <label for="lang3">JavaScript</label>
          <input type="hidden" id="custId" name="custId" value="3487">
          <input type="submit" name="subscribe" class="button" value="Register">
      </form>
      <a href="/">back to home</a>
  </div>
  _HTML_;  
}

// 檢查表單資料填寫正確性
function validate_form(){
  $errors = array();
  if(empty($username)){
    $errors[] = "username is required";
  }
  if(empty($email)){
    $errors[] = "email is required";
  }
  return $errors;
}
// 印出表單結果
function procees_form(){
  print<<< _HTML_
    <table>
      <tr><td>Username</td><td>{$_POST['username']}</td></tr>
      <tr><td>Email</td><td>{$_POST['email']}</td></tr>
      <tr><td>Phone</td><td>{$_POST['phone']}</td></tr>
      <tr><td>Password</td><td>{$_POST['password']}</td></tr>
      <tr><td>RePassword</td><td>{$_POST['repassword']}</td></tr>
      <tr><td>FavLanguage</td><td>{$_POST['fav_language']}</td></tr>
      <tr><td>Language</td><td>{$_POST['language']}</td></tr>
    </table>
  _HTML_;
}
?>