<?php

class AboutPage {
    private $name;
    private $title;
    private $position;
    private $image;
    private $socialIcons = array();

    public function __construct($name, $title, $position, $image, $socialIcons) {
        $this->name = $name;
        $this->title = $title;
        $this->position = $position;
        $this->image = $image;
        $this->socialIcons = $socialIcons;
    }

    public function render() {
        ?>
        <!DOCTYPE html>
        <html>
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>About Page</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="portofolio.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
          </head>
          <body>
   
            <div class = "about-wrapper">
              <div class = "about-left">
                <div class = "about-left-content">
                  <div>
                    


                    <h2><?php echo $this->name; ?></h2>
                    <h3><?php echo $this->position; ?></h3>
                  </div>

                  <ul class = "icons">
                    <?php foreach ($this->socialIcons as $icon): ?>
                      <li><i class = "<?php echo $icon; ?>"></i></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>

              <div class = "about-right">
                <h1>hi<span>!</span></h1>
                <h2><?php echo $this->title; ?></h2>

                <div class = "about-para">
                At Footwear Emporium, we take pride in presenting the exclusive Alex Arigato Collection, a pinnacle of contemporary footwear design and craftsmanship. Step into a world where style meets substance, and every pair tells a story of elegance, innovation, and unparalleled comfort.
    <br><br>
    <strong>About the Collection</strong>
    <br>
    The Alex Arigato Collection redefines luxury footwear with its fusion of minimalist aesthetics, premium materials, and meticulous attention to detail. Each pair reflects the brand's commitment to quality, ensuring that every step you take is a statement of sophistication and refinement.
    <br><br>
  
                </div>
              </div>
            </div>

          </body>
        </html>
        <?php
    }
}

// Create an instance of AboutPage
$name = "Alex Arigatio ";
$title = "Here's who we are & what we do";
$position = "Footwear Emporium";
$image = "london.jpg";
$socialIcons = array("fab fa-facebook-f", "fab fa-twitter", "fab fa-linkedin", "fab fa-instagram");

$aboutPage = new AboutPage($name, $title, $position, $image, $socialIcons);

// Render the AboutPage
$aboutPage->render();

?>
