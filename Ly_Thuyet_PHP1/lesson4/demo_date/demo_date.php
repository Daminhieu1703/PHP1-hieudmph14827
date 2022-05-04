<?php
date_default_timezone_set('Asia/Ho_chi_Minh'); //lấy múi giờ ở hồ chí minh
/*
20/07/2021 -> d/m/y
y:định dạng năm 2 số cuối
m:định dang số
d:định dạng số
Y:định dạng năm 4 số cuối
M:định dạng chữ
D:định dang chữ
*/
$dateformat = 'D, M, d-m-Y';
echo date($dateformat);

echo '<br>';

/*
h:giờ
i:phút
s:giây
strtotime:time bắt đầu từ 1-1-1970 00:00:00 GMT và nếu để 1 thời gian nào đó trong hàm strtotime thì nó sẽ fix cứng từ năm 1-1-1970 đến thời gian đó 
*/
$timeformat = 'H:i:s';
echo date($timeformat);
$format = "$dateformat $timeformat";
echo date("$format");

echo '<hr>';

$cong1h = strtotime("+1 hour");
echo date("$format",$cong1h);

echo "<br>";

echo date($format , strtotime("2021-08-04"));
echo "<br>";
echo date($format , strtotime("2021-08-04 last Monday"));

echo '<br>';
$startDateStr = "28-06-2021";
strtotime($startDateStr . "+7 week");
$endDate = date($format , strtotime($startDateStr . "+7 week last Saturday"));
echo $endDate;