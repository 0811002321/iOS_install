<?php
$json_string = file_get_contents('info.json'); 
   
 // 用参数true把JSON字符串强制转成PHP数组 
 $data = json_decode($json_string, true); 
 $version =  $data["version"];
 $build =  $data["build"];
 $time =  $data["time"];

 print <<< EOT
 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
 <head>
 <title>酷我音乐iPad安装</title>
 </head>
 <body>
 <p>当前版本：$version($build) 更新时间：$time</p><br/>
 <p>点击图片开始安装</p>
 <a href="itms-services://?action=download-manifest&url=https://172.17.89.237/ipad/manifest.plist"><img src="/ipad/icon.png" width="256" height="256"></a>
 </body>
 </html>
EOT;
?>
