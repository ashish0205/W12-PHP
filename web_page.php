<?php

require_once 'global_pages.php';
class web_page
{
    public $title = 'welcome to elcrticscooter.com';
    public $description = '  elcrticscooter.com is a website where you can search various websites online, and book them .';

    public $author = 'Ashish SHarma';

    // public $content = 'Ashish SHarma say hello world';

    public $lang = 'en-CA';
    public $icon = 'my-icon.jpg';

    public function __construct()   //constructor
    {
    }

    /*
    display the web page
    */
    public function render()
    {
        // if ($this->content == '') {
        //     //error no content was set
        //     http_response_code(500);

        //     //send email to server admin
        //     if (mail('ashish4321ynr@gmail.com', 'hello', 'hello world')) {
        //         die('if');
        //     } else {
        //         die('else');
        //     }
        //     die;

        //     //  die('sorry we have a problem'); //stop the program
        // }?>

<!DOCTYPE html>
<html lang="<?=$this->lang; ?>">

<head>
    <meta charset="utf-8">

    <?=$this->title; ?>

    <meta name="description" value="<?=$this->description; ?>">
    <link rel="icon" href="<?=$this->icon; ?>">

    <link rel="stylesheet" href="css/global.css">

    <head>


    <body>
        <header>
            <h1> THIS IS THE HEADER</h1>
        </header>
        <nav>
            <h1>THIS IS THE NAV BAR</h1>
        </nav>
        <main>
            <?="$this->content"; ?>



        </main>
    </body>

</html>
<?php
    }
}
