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
                <div class="description">
                    <p>Welcome to Footwear Emporium, your ultimate destination for premium footwear and exceptional shopping experiences.</p>
                    <p>At Footwear Emporium, we're passionate about offering the finest selection of shoes that blend style, comfort, and quality craftsmanship. Whether you're searching for trendy sneakers, elegant dress shoes, or durable boots, we have the perfect pair to complement your unique style.</p>
                    <p>Our journey began with a simple yet ambitious vision: to create a footwear paradise where every customer feels valued and inspired. Since our inception, we've remained committed to this vision by curating an extensive collection of footwear from renowned brands and emerging designers.</p>
                    <p>What sets Footwear Emporium apart is our unwavering dedication to customer satisfaction. From our user-friendly online platform to our personalized customer service, we strive to exceed your expectations at every step of your shopping journey. Our knowledgeable team is always on hand to assist you in finding the ideal shoes for any occasion and ensuring a seamless shopping experience.</p>
                    <p>But Footwear Emporium is more than just a shoe store; we're a community of footwear enthusiasts who share a passion for style and self-expression. Through our blog, social media channels, and exclusive events, we foster connections and celebrate individuality, inspiring you to step out with confidence and style.</p>
                    <p>As we continue to grow and evolve, our commitment to providing exceptional footwear and unparalleled service remains unchanged. Join us on this exciting journey and experience the world of footwear like never before at Footwear Emporium.</p>
                    <p>Thank you for choosing Footwear Emporium, where every step tells a story.</p>
                </div>
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


