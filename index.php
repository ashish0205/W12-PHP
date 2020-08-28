<?php

require_once 'web_page.php';
require_once 'tools.php';

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = 0;
}

switch ($op) {
    case 100:
        Product_Display();
        break;

    default:
        http_response_code(400); //bad request
        break;
}

function product_display()
{
    // echo 'yes';
    $product = [
    'id' => 0,
    'name' => 'BlackDress',
    'descrition' => 'Little black evening dress',
    'price' => 99.99,
];
    $page = new web_page();
    $page->title = $product['name'];
    $page->content = array_display($product);
    $page->render();
}

// function array_display($array_name)
// {
//     echo'<style> td,th{border:1px solid black;}</style>';
//     echo'<table>';
//     echo'<tr>';
//     echo'<th>index</th><th>Value</th>';
//     echo'</tr>';

//     foreach ($array_name as $key => $value) {
//         echo'<tr>';
//         echo'<td>'.$key.'</td>';
//         echo'<td>'.$value.'</td>';
//         echo'</tr>';
//     }
//     echo'</table>';
// }
// array_display($product);
// $winning_numbers = [33, 46, 23, 1, 67];
// array_display($winning_numbers);
//die();

require_once 'web_page.php';
function HomePage()
{
    $home_page = new web_page();

    $home_page->title = 'ElectricScooter.com Home-welcome!';
    $home_page->content = '<h1>welcome my frend!</h1>';
    $home_page->render();
}
HomePage();
echo'test';
