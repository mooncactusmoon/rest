<?php
echo $_SERVER['REQUEST_URI']; #發請求的是誰
echo "<hr>";
echo $_SERVER['REQUEST_METHOD']; #使用甚麼方法
echo "<hr>";
echo "HIII";
switch($_SERVER['REQUEST_METHOD']){
   case "GET":
      echo "取得資料";
   break;
   case "POST":
      echo "新增資料";
   break;
   case "PUT":
      echo "更新資料";
   break;
   case "DELETE":
      echo "刪除資料";
   break;
}


// dd($_SERVER);

function dd($array){
   echo "<pre>";
   print_r($array);
   echo "</pre>";
}
?>