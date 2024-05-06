<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="cv/cv_logo2.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"Selecting us means gaining access to an extensive array of top-tier vape products curated for quality and diversity. Coupled with our personalized expert guidance, we ensure every customer enjoys a satisfying and fulfilling vaping journey, backed by unparalleled support and community engagement."</p>
         <p>If you have any questions or concerns, just contact us.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Absolutely love the variety of flavors available here! From fruity to dessert-inspired, they have it all. Plus, the staff are super friendly and knowledgeable. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>alex</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Impressed with the quality of the vape devices I purchased here. Sleek designs, long battery life, and easy to use. Will definitely be coming back for more!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>marie</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>As a newbie to vaping, I was a bit overwhelmed, but the staff here were incredibly patient and helped me find the perfect setup. Great customer service and top-notch products</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>max</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Ordered online and received my package promptly with everything securely packaged. Appreciate the attention to detail and care taken in shipping. A hassle-free shopping experience</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>lexi nore</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The prices here are unbeatable compared to other shops I've visited. Got some fantastic deals on e-liquids and coils. Excellent value for money!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>johnysit</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Attended one of their vape workshops and learned so much about different vaping techniques and safety tips. It was informative and fun! Can't wait to attend another event.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>miakhalid</h3>
      </div>

   </div>

</section>
</section>



<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>