<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIFTING GURU</title>

    <!-- tab logo -->
    <link rel="shortcut icon" href="./img/tab_logo.png" type="image/png">

    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
    <!--<script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"817937b40cace775ce4ce94ac","lid":"aa46c1180c","uniqueMethods":true}) })</script>-->

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>


<div class="pimg5">
    <!-- navbar -->
    <nav style="/*opacity: 0.8;*/ background: white; width: 100%;" class="navbar navbar-expand-lg navbar-light row">
        <a class="navbar-brand" href="#"><img src="./img/gifting_guru_logo.webp"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li style="margin: 0 2rem;" class="nav-item">
                    <a class="nav-link" href="gift.php">GIFT <span class="sr-only">(current)</span></a>
                </li>
                <li style="margin: 0 2rem;" class="nav-item">
                    <a class="nav-link" href="#about_us">ABOUT</a>
                </li>
                <li style="margin: 0 2rem;" class="nav-item">
                    <a class="nav-link" href="#contact_us">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="ptext row">
        <div class="col-md-2"></div>
        <div class="ptext col-md-8">
        <blockquote style="font-size: 2.5rem; color:black; margin-bottom: 5%; margin-top: 2%;" class="blockquote">
            <h1 class="mb-0 font_let_us">Let us find you a gift</h1>
        </blockquote>
        <button style="background-color: rgba(160, 28, 53, 1);" class="gift_button border"><a style="text-decoration: none; color: white;" href="gift.php">START GIFTING</a></button>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<!-- how it works -->
<div style="height: 75%; text-align: center;" id="how_it_works_section" class="pimg6 row ">
        <!-- image 1 -->
        <div class="spacing-top-bottom col-4 small_screen_small_size">
            <button class="border trans how_it_works">
                <img src="./img/gifting_imgs/step_1.png">
            </button>
            <p class="subtitle">NEED A GIFT BUT HAVE<br> NO IDEA WHAT TO GET?</p>
        </div>
        <!-- image 2 -->
        <div class="spacing-top-bottom col-4 small_screen_small_size">
            <button class="border trans how_it_works">
                <img src="./img/gifting_imgs/step_2.png">
            </button>
            <p class="subtitle">OUR GIFTING EXPERTS <br> ARE HERE TO HELP</p>
        </div>
        <!-- image 3 -->
        <div class="spacing-top-bottom col-4 small_screen_small_size">
            <button class="border trans how_it_works">
                <img src="./img/gifting_imgs/step_3.png">
            </button>
            <p class="subtitle">RECEIVE PERFECTLY CURATED <br> GIFT INSTANTLY!</p>
        </div>
</div>

<!-- ABOUT US / OUR STORY CAROUSEL -->
<div id="carousel_place" class="div section-dark row ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li style="border-radius: 50%; width: 5px; height: 5px;" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li style="border-radius: 50%;width: 5px; height: 5px;" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <!-- ABOUT US -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h2 style="text-align: center;" id="about_us">THE PLATFORM</h2>
                <p style="margin: 2% 10% 1%; padding: 0 0 3%;">
                    Gifting Guru is a gifting tech platform that generates instant gift recommendations for everyone on your shopping list. We value the idea of spreading love through gift giving and struggling to find a gift should never be a reason not to gift. Let us give you the gift idea, you do the spreading of love. Our gift recommendations are hand picked products and services that are trendy, relevant and sure to be loved by your giftee, guaranteed!
                </p>
            </div>
            <!-- OUR STORY -->
            <div class="carousel-item">
                <h2 style="text-align: center;" id="about_us2">OUR STORY</h2>
                <p style="margin: 2% 10%; padding: 0 0 3%;">
                    Gifting guru was founded by Ryerson University Business student Safiyyah Idroos, in the Sandbox, DMZ incubator. She incorporated her passion for gift giving and expertise in entrepreneurship to create a platform to aid others in the art of gifting. Gifting Guru started as an online platform specializing in curated gift baskets. As Safiyyah realized her strong passion for gift giving and that she had an eye for picking gifts out that her giftee loved, she transitioned the company to provide a service to help anyone find the perfect gift for whomever they are gifting to.
                </p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- CONTACT -->
<div style="" class="pimg6 row">
    <div class="col-3"></div>
    <div style="margin-top: 5%; margin-bottom: 5%;" class="col-6 center_my_col">
        <h2 id="contact_us" class="contact_style" style="color:#A01C35;">FOR ANY INQUIRIES, EMAIL</h2>
        <h2 class="contact_style" style="color:#313131;">
            Info@giftingguru.ca <br> Toronto, ON
        </h2>
        <button class="gift_button border"><a style="text-decoration: none; margin-top: 2%; color: white;" href="gift.php">READY, SET, GIFT</a></button>
    </div>
    <div class="col-3"></div>
</div>


    <!-- footer -->
    <footer style="position: relative; opacity: 0.9; background:#eeeded; padding:1% 1% 1% 0;" class="section-light page-footer">
        <hr class="style">
        <br>
        <!-- logo for facebook and instagram -->
        <div style="margin: 0 auto; " class="row">
            <ul class="col inline_ul" style="padding:0 2.5% 0 0;">
                <li class="inline_li_margin">
                    <a href="https://www.facebook.com/giftingguru.ca" target="_blank"><img class="footer_logo" src="./img/facebook-logo.png" alt="facebook"></a>
                </li>
                <li class="inline_li_margin">
                    <a href="https://www.instagram.com/giftingguru.ca/" target="_blank"> <img class="footer_logo" src="./img/instagram.png" alt="instagram"></a>
                </li>
            </ul>
        </div>
        <div style="margin:0 auto; text-align: center; font-size:12px;" class="row">
            <p style="text-align: center;" class="col">
                "Exchange gifts, as that will lead to increasing your love for one another" [Bukhari]
            </p>
        </div>
        <!-- Copyright -->
        <div style="margin:0 auto; text-align: center; font-size:10px;">
            &copy; 2018 by Gifting Guru
        </div>
    </footer>

<!--mailchimp integration-->
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"817937b40cace775ce4ce94ac","lid":"aa46c1180c","uniqueMethods":true}) })</script>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- bootstarp js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>