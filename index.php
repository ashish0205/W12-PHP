<?php

//const INDEX_LODED = true;

$index_loaded = true;

require_once 'web_page.php';
require_once 'tools.php';
require_once 'productlist.php';
require_once 'product_cataloge_image.php';

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = 0;
}

switch ($op) {
    case 1:
        LoginPageDisplay();
    break;

    case 2:
        LoginPageVerify();
    break;
    case 7:

        //download word documents
    header('content-type: application/msword');
    header('Content-Disposition: attachment; filename=HTTP_protocol.docx');
    break;
    case 100:
        Product_Display();
        break;

        case 110:
            Products_Catalogue();
            break;
        case 111:
            Products_Catalogue_Image();
        break;
            case 99:
                HomePage();
            break;

    default:
       // http_response_code(400); //bad request

       header('HTTP/1.0 400 invalid op code in index.php');
       echo'HTTP/1.0 400 invalid op code in index.php';
       die();
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

function Products_Catalogue()
{
    $products = [
        [
            'id' => 0,
            'name' => 'Red Jersey',
            'description' => 'Manchester United Home Jersey, red, sponsored by Chevrolet',
            'price' => 59.99,
            'pic' => 'red_jersey.jpg',
            'qty_in_stock' => 200,
        ],
        [
            'id' => 1,
            'name' => 'White Jersey',
            'description' => 'Manchester United Away Jersey, white, sponsored by Chevrolet',
            'price' => 49.99,
            'pic' => 'white_jersey.jpg',
            'qty_in_stock' => 133,
        ],
        [
            'id' => 2,
            'name' => 'Black Jersey',
            'description' => 'Manchester United Extra Jersey, black, sponsored by Chevrolet',
            'price' => 54.99,
            'pic' => 'black_jersey.jpg',
            'qty_in_stock' => 544,
        ],
        [
            'id' => 3,
            'name' => 'Blue Jacket',
            'description' => 'Blue Jacket for cold and raniy weather',
            'price' => 129.99,
            'pic' => 'blue_jacket.jpg',
            'qty_in_stock' => 14,
        ],
        [
            'id' => 4,
            'name' => 'Snapback Cap',
            'description' => 'Manchester United New Era Snapback Cap- Adult',
            'price' => 24.99,
            'pic' => 'cap.jpg',
            'qty_in_stock' => 655,
        ],
        [
            'id' => 5,
            'name' => 'Champion Flag',
            'description' => 'Manchester United Champions League Flag',
            'price' => 24.99,
            'pic' => 'champion_league_flag.jpg',
            'qty_in_stock' => 321,
        ],
    ];
    $page = new web_page();

    $page->title = 'Products';
    $page->content = products_cat($products);
    $page->render();
}

function Products_Catalogue_Image()
{
    $products = [
        [
            'id' => 0,
            'name' => 'Red Jersey',
            'description' => 'Manchester United Home Jersey, red, sponsored by Chevrolet',
            'price' => 59.99,
            'pic' => 'red_jersey.jpg',
            'qty_in_stock' => 200,
        ],
        [
            'id' => 1,
            'name' => 'White Jersey',
            'description' => 'Manchester United Away Jersey, white, sponsored by Chevrolet',
            'price' => 49.99,
            'pic' => 'white_jersey.jpg',
            'qty_in_stock' => 133,
        ],
        [
            'id' => 2,
            'name' => 'Black Jersey',
            'description' => 'Manchester United Extra Jersey, black, sponsored by Chevrolet',
            'price' => 54.99,
            'pic' => 'black_jersey.jpg',
            'qty_in_stock' => 544,
        ],
        [
            'id' => 3,
            'name' => 'Blue Jacket',
            'description' => 'Blue Jacket for cold and raniy weather',
            'price' => 129.99,
            'pic' => 'blue_jacket.jpg',
            'qty_in_stock' => 14,
        ],
        [
            'id' => 4,
            'name' => 'Snapback Cap',
            'description' => 'Manchester United New Era Snapback Cap- Adult',
            'price' => 24.99,
            'pic' => 'cap.jpg',
            'qty_in_stock' => 655,
        ],
        [
            'id' => 5,
            'name' => 'Champion Flag',
            'description' => 'Manchester United Champions League Flag',
            'price' => 24.99,
            'pic' => 'champion_league_flag.jpg',
            'qty_in_stock' => 321,
        ],
    ];
    $page = new web_page();

    $page->title = 'Product_images';
    $page->content = products_cat_images($products);
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
function LoginPageDisplay()
{
    $LoginPage = new web_page();
    $LoginPage->title = 'Please login';
    $LoginPage->content = <<<HTML
     <form action='index.php?op=2' method="POST">
         <!-- <input type="hidden" name="op" value="2"> -->
         <input type="email" name="email" require maxlength="126" size="25" placeholder="email"><br>
         <input type="password" name="pw" require maxlength="8" placeholder="password(8 char)"><br>
         <input type="submit" value="Continue"> </form>
     HTML;
    $LoginPage->render();
}

function LoginPageVerify()
{
    $Users = [
        ['id=>0', 'email' => 'abc@gmail.com', 'pw' => '12345678'],
        ['id=>1', 'email' => 'def@gmail.com', 'pw' => '12345678'],
    ];

    $email_input = $_POST['email'];
    $pw_input = $_POST['pw'];
    var_dump($_POST);
    echo $email_input.'<br>'.$pw_input;
}
//HomePage();
//echo'test';
