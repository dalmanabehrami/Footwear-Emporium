<?php
// Define your class
class UserInfo {
    public $name = "Alex Arigatio";
    public $position = "Footwear Collection";
    public $socialIcons = ["fa-facebook", "fa-twitter", "fa-linkedin"];
    public $title = "Welcome to our Store";
}

// Create an instance of the class
$userInfo = new UserInfo();
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

<div class="about-wrapper">
    <div class="about-left">
        <div class="about-left-content">
            <div>
                <h2><?php echo $userInfo->name; ?></h2>
                <h3><?php echo $userInfo->position; ?></h3>
            </div>

            <ul class="icons">
                <?php foreach ($userInfo->socialIcons as $icon): ?>
                    <li><i class="<?php echo $icon; ?>"></i></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="about-right">
        <h1>hi<span>!</span></h1>
        <h2><?php echo $userInfo->title; ?></h2>

        <div class="about-para">
        <p>At Footwear Emporium, we're passionate about offering the finest selection of shoes that blend style, comfort, and quality craftsmanship. Whether you're searching for trendy sneakers, elegant dress shoes, or durable boots, we have the perfect pair to complement your unique style.</p>

<p>Our journey began with a simple yet ambitious vision: to create a footwear paradise where every customer feels valued and inspired. Since our inception, we've remained committed to this vision by curating an extensive collection of footwear from renowned brands and emerging designers.</p>
<p><a href="index.php">Return to Home Page</a></p>
       </div>
    </div>
</div>

</body>
</html>

    




