<?php
include 'mail.php'
?>

<?php

$conn=mysqli_connect('localhost','root','','contact_db')or die('connection failed');

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $number=$_POST['number'];
    $date=$_POST['date'];

    $insert=mysqli_query($conn,"INSERT INTO `contact_form`(name,email,number,date)
    VALUES('$name','$email','$number','$date')")or die('query failed');

    if($insert){
        $message[]='appointment made successfully!';
    }
    else{
        $message[]='appointment failed';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design Tutorial</title>
 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="CSS/style.css">
 
 </head>
 <body>
    
 
 <header class="header fixed-top">
 
    <div class="container">
 
       <div class="row align-items-center justify-content-between">
 
          <a href="#home" class="logo">dental<span>Care.</span></a>
 
          <nav class="nav">
             <a href="#home">home</a>
             <a href="#about">about</a>
             <a href="#services">services</a>
             <a href="#reviews">reviews</a>
             <a href="#contact">contact</a>
          </nav>
 
          <a href="#contact" class="link-btn">make appointment</a>
 
          <div id="menu-btn" class="fas fa-bars"></div>
 
       </div>
 
    </div>
 
 </header>


 <section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Let us brighteen your smile</h3>
                <h2>Get the beautiful white smile you've always wanted.</h2>
                <a href="#contact" class="link-btn">Make appointment</a>
            </div>

        </div>
    </div>
 </section>


<section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" alt="about" class="w-100 mb-4 mb-md-0">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True HealthCare For Your Family</h3>
                    <p>At Dental Care Dentistry, we’re dedicated to excellence, education, and going above and beyond to provide a remarkable patient experience. Enjoy comfortable, comprehensive service through:Personalized treatment plans based on your needs
Discussion of our recommendations so you know what to expect
Detailed answers to all your questions to help you feel confident </p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
</section>


<section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="icon1">
                <h3>Alignment specialist</h3>
                <p>An Orthodontist specializes in treating the tooth problem properly by correcting the alignment of the tooth.</p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="icon1">
                <h3>Cosmetic Dentistry</h3>
                <p>Cosmetic dentistry is a method of professional oral care that focuses on improving the appearance of your teeth.</p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="icon1">
                <h3>Oral hygiene experts</h3>
                <p>oral hygiene procedure is a mechanical way to remove bacterial plaque and tartar, including toxins accumulated on the surfaces of teeth.</p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="icon1">
                <h3>Root canal specialist</h3>
                <p>Root canal is a treatment to repair and save a badly damaged or infected tooth instead of removing it.</p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg" alt="icon1">
                <h3>Live dental advisory</h3>
                <p>We gives the best live dental advisory.</p>
            </div>

            <div class="box">
                <img src="images/icon-6.svg" alt="icon1">
                <h3>Cavity inspection</h3>
                <p>Cavities are holes, or areas of tooth decay, that form in your teeth surfaces.</p>
            </div>
        </div>
</section>
 
<section class="process">

        <h1 class="heading">work proces</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Teeth whitening is the most common cosmetic dental procedure. It allows people to make noticeable improvements to their smile without undergoing invasive treatments.</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Pediatric dental procedures differ slightly from adult dental procedures, but they are all relatively similar. Children’s dentist appointments are more frequent because their teeth are still developing. It is important for their growth to be monitored by a pediatric dentist to ensure that everything is going smoothly.</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Dental ImPlant</h3>
                <p>A dental implant procedure is an outpatient surgery. The implant is made of titanium and other materials that fuse with your jawbone and imitate the root of a tooth.2 This artificial root allows the dentist to secure your replacement teeth so they feel stable and blend in with your surrounding teeth.</p>
            </div>
        </div>
</section>


<section class="reviews" id="reviews">
    <h1 class="heading">satisfied clients</h1>
    <div class="box-container contaier">
        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Great friendly service and so caring. Excellent treatment and would not hesitate to recommend ????
13/01/2023</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Deepak Abande</h3>
            <span>Satisfied Client</span>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Easy to book online. We usually see Pooja as she always gives good tips on how to improve your dental health
11/03/2023</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Manisha Avhad</h3>
            <span>Satisfied Client</span>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Always very friendly and helpful. Explains everything thoroughly too you and puts you at ease. I highly recommend the  Dental Care Clinic. LM 7.10.2022</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Karan Pendharkar</h3>
            <span>Satisfied Client</span>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h1 class="heading">Make appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="frm">

        <?php
        if(isset($message)){
            foreach($message as $message){
                echo '<p class="message">'.$message.'</p>';
            }
        }
        ?>

    <span>Your Name:</span>
    <input type="text" name="name" placeholder="entre your name" class="box" required>
    <span>Your Email:</span>
    <input type="email" name="email" placeholder="entre your email" class="box" required>
    <span>Your Number:</span>
    <input type="number" name="number" placeholder="entre your number" class="box" required>
    <span>Appointment date:</span>
    <input type="datetime-local" name="date" class="box" required>
    <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
</section>


<section class="footer">
        <div class="box-container container">
                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>Phone Number</h3>
                    <p>+113-466-7899</p>
                </div>

                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Our address</h3>
                    <p>Latur,India -413515</p>
                </div>

                <div class="box">
                    <i class="fas fa-clock"></i>
                    <h3>Opening Hours</h3>
                    <p>10:30am to 10:00pm</p>
                </div>

                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>omeshpadampalle@gmail.com</p>
                </div>
                </div>
            <div class="credit">&copy; copyright @<?php echo date('Y');?> by <span>mr.Omesh Padampalle</span></div>
        
</section>



 <script src="JS/script.js"></script>

</body>
</html>