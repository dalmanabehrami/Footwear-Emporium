<?php

class AboutUsPage {
    private $title;
    private $content;
    private $additionalContent;

   
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->additionalContent = "";
    }

   
    public function addAdditionalContent($additionalContent) {
        $this->additionalContent .= $additionalContent;
    }


    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title><?php echo $this->title; ?></title>
            <link rel="stylesheet" href="stylesheets/main.css">
        </head>
        <body>
            <header>
                <h1><?php echo $this->title; ?></h1>
            </header>
            <div class="content">
                <?php echo $this->content; ?>
                <?php echo $this->additionalContent; ?>
            </div>
            <footer>
                <p>&copy; 2024 Company Name</p>
            </footer>
        </body>
        </html>
        <?php
    }
}

$title = "About Us";
$content = "<p>Welcome to our website! We are a company dedicated to providing high-quality products and excellent customer service.</p>";
$aboutUsPage = new AboutUsPage($title, $content);

$additionalContent = "<p>Here you can find more detailed information about our company, our mission, and our team.</p>";
$aboutUsPage->addAdditionalContent($additionalContent);

$aboutUsPage->render();
?>

