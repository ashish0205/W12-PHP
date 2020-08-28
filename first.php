<!-- <!DOCTYPE html>
<html lang='en'>

<head>
    <title>First php page</title>
</head>

<body>
<?php
/*
//php is case sensitive

$x = 10;
$y = 10;

echo 'x='.$x.'<br>'; // by . we concatinate
//$x = 'sss'; //variable decleration
var_dump($y);
$arr = [22, 33, 33, 44, 55, 55];
echo $arr[3].'<br>';
echo "x= $x";
$arr[6] = 67;
array_push($arr, 2888);
$last = array_pop($arr);
var_dump($arr);

echo $last;

echo 'Helo World<br>';
echo 'ashish sharma<br>';

function hello()
{
    global $x,$y; // for global dcleraing variables
    echo $x + $y;
}

hello();
*/

// $position = [22.3, 44, 33.3, '2h35m12s']; //x,y,z coordinates

// echo 'x='.$position[0].'<br>';
// echo 'y='.$position[1].'<br>';
// echo 'z='.$position[2].'<br>';
// echo 'time='.$position[3].'<br>';

// echo 'for calculating lenght of array'.count($position).'<br>';
// //for loop

// // for ($i = 0; $i < count($position); ++$i) {
// //     echo $position[$i].'<br>';
// // }

// foreach ($position as $one_values) {
//     echo $one_values.'<br>';
// }

// $position = ['x' => 22.3, 'y' => 44, 'z' => 33.3, 'time' => '2h35m12s'];        //Associative array
// echo 'x='.$position['x'].'<br>';
// echo 'y='.$position['y'].'<br>';
// echo 'z='.$position['z'].'<br>';
// echo 'time='.$position['time'].'<br>';
//this will not work with for loop we have to make it through for each

// for ($i = 0; $i < count($position); ++$i) {
//     echo $position[$i].'<br>';
// }

//just like keyvalue pair

// foreach ($position as $key => $one_values) {
//     echo $key.'='.$one_values.'<br>';
// }

// $product_weight = 30.0;
// var_dump($product_weight);
// echo gettype($product_weight);
// echo '<br>';

// echo 'the weight is '.$product_weight.'<br>';

// echo "the weight is .$product_weight.<br>";

require_once 'web_page.php';
$homepage = new web_page.php();
$homepage->title = 'www.eeee.com';
$homepage->content = '<h1>www.eeee.com ccccccc</h1>';

$homepage->render();

// </body>
// </html>
