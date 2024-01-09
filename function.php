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
          <li><a href="#mc_embed_signup">contact</a></li>
          
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
?>