<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Tìm giá trị lớn nhất</h2>

<?php
$a = [
    [3,4,5],
    [4,6,8],
    [5,7,1]
];
$max = 0;
$index = [0];
$index = [0];
for ($i= 0;$i< count($a); $i++) {
  for ($j= 0;$j <count($a);$j++) {
      if($max < $a[$i][$j]) {
          $max =$a[$i][$j];
          $index1 = $i;
          $index2 = $j;
      }
  }
}
echo $max. "</br>";
echo $index1. "</br>";
echo $index2;
?>
</body>
</html>