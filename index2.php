
  <?php $msg="一行文字";?>
    <p><?php print $msg ?></p>
  <?php print "hello php<br>";?>

<?php
$service =[
[1,"桃園市政府勞動局法律諮詢室桃園市政府3樓","每週一、週三、週五下午2時至5時(勞工法令諮詢)如有勞工權益相關問題，本局亦有電話勞工權益勞動法令諮詢專線請03-3323530(專線)、03-3322101轉6804或 6805或6806","3322101轉6802或6803(現場登記)","1.登記時間：13:30-16:30 2.採現場登記並依序諮詢"],
[2,"桃園市政府法務局法律諮詢中心 桃園市政府7樓","每週一至週五，上午9時至11時30分","3322101轉5615(現場登記)","現場登記"],
[3,"臺灣桃園地方法院(桃園區正光路888號)","每週一至週四，上午9時至12時每週一至週四，下午2時至5時(各項法律諮詢)","訴訟輔導科","採預約制"],
[4,"臺灣桃園地方地檢署(桃園區正光路898號)","每週一至週五，下午2時至5時(各項法律諮詢)","訴訟輔導科 03-2160123","現場登記"],
[5,"法律扶助基金會","每週一至週五，早上 9時至下午 5時(勞工問題諮詢、債務問題諮詢、原住民案件)","市話直撥4128518轉2 手機撥打請加02","電話諮詢"],
[9,"八德區公所","每週一，下午2時至4時30分(各項法律諮詢)","3653202","現場登記"],
[10,"平鎮區公所","每週二，下午2時至4時30分(各項法律諮詢)","4597152","現場登記"],
[11,"蘆竹區公所","每月第一、三個週一，晚上6時至8時30分","3520000","現場登記"],
[12,"觀音區公所","每月第一、三個週三，下午2時至4時30分 ","433641","現場登記"],
[6,"桃園市新住民文化會館","每週二、三、五，下午2時至5時(各項法律諮詢)","3339885","現場登記"],
[7,"桃園區公所","每週二、四，晚上6時至8時30分(各項法律諮詢)","3353561","現場登記"],
[8,"中壢區公所","每週三、五，晚上6時至8時30分(各項法律諮詢)","4271801分機6011","現場登記"],
[13,"新屋區公所","每月第一、三個週四，下午2時至4時30分","4773548","現場登記"],
[14,"楊梅區公所","每月第一、二、三個週五，下午2時至4時30分","4783683分機114","現場登記"],
[14,"楊梅區公所","每月第一、二、三個週五，下午2時至4時30分","4783683分機114","現場登記"],
[15,"龜山區公所","每月第二、四個週一，下午2時至4時30分","3203711分機320","現場登記"],
[16,"龍潭區公所","每月第一、二、三、四個週一，晚上6時至8時30分","4793070分機1125","現場登記"],
[17,"大園區公所","每月第二、四個週三，下午2時至4時30分","3866939分機211","現場登記"],
[18,"大溪區公所","每月第二、四個週四，下午2時至4時30分","3882201分機101","現場登記"],
[19,"復興區公所","每月最後一週週五，上午9時至11時30分","3821500分機114","現場登記"]
];
$arr = ['lang1' => 'html', 
'lang2' => 'css', 
'lang3' => 'javascript'];

// $arr = array('hello','javascript','php');

if(array_search('javascript',$arr)){
  $rel = array_search('javascript',$arr);
  echo $rel;} 
else {echo "no";}
echo "<br>";
if(in_array('javascript',$arr)){
  $rel = array_search('javascript',$arr);
  echo $rel;} 
else {echo "no";}
echo "<br><br><br>";

$dinners = array('牛排'=> 270,'拉麵' => 250,'炒飯'=>120,'蛋餅'=>80);
$dinners['牛排']=320;
$dinner = $dinners['牛排'] + $dinners['炒飯'];
print_r($dinners) ;
$newarray = sort($service);
print_r($newarray) ;
?>
