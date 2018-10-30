<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIFTING GURU</title>

    <!-- tab logo -->
    <link rel="shortcut icon" href="./img/tab_logo.png" type="image/png">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!--change script-->
    <script type="text/javascript" src="selectScript.js"></script>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div style="height: 100vh;" class="pimg6">

    <!-- navbar -->
    <!--<nav style="opacity: 0.8; width: 100%;" class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="./index.html"><img src="./img/gifting_guru_logo.webp"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./index.html">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.html#about_us">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.html#contact_us">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>-->

    <nav style="/*opacity: 0.8;*/ background: white; width: 100%;" class="navbar navbar-expand-lg navbar-light row">
        <a class="navbar-brand" href="#"><img src="./img/gifting_guru_logo.webp"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li style="margin: 0 2rem;" class="nav-item">
                    <a class="nav-link" href="./index.html">GIFT <span class="sr-only">(current)</span></a>
                </li>
                <li style="margin: 0 2rem;" class="nav-item">
                    <a class="nav-link" href="./index.html#about_us">ABOUT</a>
                </li>
                <li style="margin: 0 2rem;" class="nav-item">
                    <a class="nav-link" href="./index.html#contact_us">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- how it works -->
    <section style="margin-bottom: 2%;" class="row">
        <div style="margin: 1% 0%; text-align: center;" class="col">
            <h2>HOW IT WORKS</h2>
            <hr>
        </div>
        <div style="width: 100%; margin:0;"  class="row">
            <!-- image 1 -->
            <div style="margin: 5%;" class="spacing-top-bottom col">
                <button style="padding: 4rem; width:100%; " class="animate_btn_on_hover border trans how_it_works">
                    <img class="blur_img" style="width: 100%; height: 100%" src="./img/gifting_imgs/gift_page_s1.png">
                    <p class="show_p_on_hover">FILL OUT A BRIEF PERSONA ABOUT THE PERSON YOU ARE GIFTING TO</p>
                </button>
                <label style="padding: 2% 2% 2% 2%; margin: 0 auto; font-size: 26px;">Fill</label>
            </div>
            <!-- image 2 -->
            <div style="margin: 5%;" class="spacing-top-bottom col">
                <button style="padding: 4rem; margin-top: 0;" class="animate_btn_on_hover border trans how_it_works">
                    <img class="blur_img" style="width: 100%; height: 100%" src="./img/gifting_imgs/gift_page_s2.png">
                    <p class="show_p_on_hover">SUBMIT IT FOR EVALUATION</p>
                </button>
                <label style="padding: 2% 2% 2% 2%; margin: 0 auto; font-size: 26px;">Submit</label>
            </div>
            <!-- image 3 -->
            <div style="margin: 5%;" class="spacing-top-bottom col">
                <button style="padding: 4rem; margin-top: 0;" class="animate_btn_on_hover border trans how_it_works">
                    <img class="blur_img" style="width: 100%; height: 100%" src="./img/gifting_imgs/gift_page_s3.png">
                    <p class="show_p_on_hover">RECEIVE PERFECTLY CURATED GIFT RECOMMENDATIONS, INSTANTLY!</p>
                </button>
                <label style="padding: 2% 2% 2% 2%; margin: 0 auto; font-size: 26px;">Gift</label>
            </div>
        </div>

    </section>


    <!--insert index.php here-->
    <div class="form"  style="background-color: rgba(160, 28, 53, 1); color: white;">
        <div class="col-sm-12 text-center" id="how">
            <h1 style="padding: 3% 0 1% 0;">Let Us Find You A Gift </h1>
        </div>

        <form action="showGift.php" method="post">
            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified ageArea">
                    <label for="age">What age group is your giftee in?</label>
                    <select name="ageGroup" class="form-control" required>
                        <option value="15-20">15-20</option>
                        <option value="20-30">20-30</option>
                        <option value="30-45">30-45</option>
                        <option value="45 and over">45 and over</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>

            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified genArea" >
                    <label for="gen">What is your giftee's gender?</label> <br>
                    <input type="radio" name="gender" value="Male" checked> Male<br>
                    <input type="radio" name="gender" value="Female"> Female<br>
                    <input type="radio" name="gender" value="Neutral"> Neutral<br>
                </div>
                <div class="col-3"></div>
            </div>

            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified budgetArea">
                    <label for="budget">What is your budget range?</label> <br>
                    <select name="budgetGroup" class="form-control" required>
                        <option value="25-50">$25-50</option>
                        <option value="50-100">$50-100</option>
                        <option value="100-150">$100-150</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>

            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified attrArea_1">
                    <label for="Attribute_1">Pick the first attribute from below to describe your giftee</label> <br>
                    <select class="form-control attr1" name="attributeGroup"  required>
                        <option value="Select">--Select an Item--</option>
                        <option value="Creative">Creative</option>
                        <option value="Adventurous">Adventurous</option>
                        <option value="Intellectual">Intellectual</option>
                        <option value="Generous">Generous</option>
                        <option value="Outgoing">Outgoing</option>
                        <option value="Family_Oriented">Family Oriented</option>
                        <option value="Philosophical">Philosophical</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>

            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified subattrArea_1">
                    <label for="subAttribute_1">Pick one sub attribute from below to describe your giftee</label> <br>
                    <select class="form-control sattr1" name="subattributeGroup" required>
                        <option value="">--Select an Item--</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>

            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified attrArea_2">
                    <label for="Attribute_2">Pick the second attribute from below to describe your giftee</label> <br>
                    <select class="form-control attr2" name="attributeGroup2" required>
                        <option value="Select">--Select an Item--</option>
                        <option value="Creative">Creative</option>
                        <option value="Adventurous">Adventurous</option>
                        <option value="Intellectual">Intellectual</option>
                        <option value="Generous">Generous</option>
                        <option value="Outgoing">Outgoing</option>
                        <option value="Family_Oriented">Family Oriented</option>
                        <option value="Philosophical">Philosophical</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>

            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified subattrArea_2">
                    <label for="subAttribute_2">Pick one sub attribute from below to describe your giftee</label> <br>
                    <select class="form-control sattr2" name="subattributeGroup2" required>
                        <option value="">--Select an Item--</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>

            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified attrArea_2">
                    <label for="Attribute_3">Pick the second attribute from below to describe your giftee</label> <br>
                    <select class="form-control attr3" name="attributeGroup3" required>
                        <option value="Select">--Select an Item--</option>
                        <option value="Creative">Creative</option>
                        <option value="Adventurous">Adventurous</option>
                        <option value="Intellectual">Intellectual</option>
                        <option value="Generous">Generous</option>
                        <option value="Outgoing">Outgoing</option>
                        <option value="Family_Oriented">Family Oriented</option>
                        <option value="Philosophical">Philosophical</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row text-justified">
                <div class="col-3"></div>
                <div class="col-6 form-group text-justified subattrArea_3">
                    <label for="subAttribute_3">Pick one sub attribute from below to describe your giftee</label> <br>
                    <select class="form-control sattr3" name="subattributeGroup3" required>
                        <option value="">--Select an Item--</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row text-center" style="padding:3% 0 2% 0;">
                <div class="col-2"></div>
                <div class="col-8  text-center">
                    <input class="submit gift_button border" name="submit" type="submit" value="Find me a Gift" style="color: white;">
                </div>
                <div class="col-2"></div>
            </div>

        </form>
    </div>


    <footer style="margin: 0; bottom: 0; position: relative; opacity: 0.9; background:white; padding:2% 1% 2% 0;" class="section-light page-footer col-12">

        <!-- logo for facebook and instagram -->
        <div style="margin: 0 auto;" class="row">
            <ul class="col inline_ul" style="margin: 0 auto; padding: 0 4% 1% 0;" >
                <li class="inline_li_margin">
                    <a href="https://www.facebook.com/giftingguru.ca" target="_blank"><img class="footer_logo" src="./img/facebook-logo.png" alt="facebook"></a>
                </li>
                <li class="inline_li_margin">
                    <a href="https://www.instagram.com/giftingguru.ca/" target="_blank"> <img class="footer_logo" src="./img/instagram.png" alt="instagram"></a>
                </li>
            </ul>
        </div>
        <div style="margin:0 auto; text-align: center;" class="row">
            <p style="text-align: center;" class="col">
                "Exchange gifts, as that will lead to increasing your love for one another" [Bukhari]
            </p>
        </div>
        <!-- Copyright -->
        <div style="margin:0 auto; text-align: center;" class="footer-copyright">
            &copy; 2018 by Gifting Guru
        </div>
    </footer>


</div>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- bootstarp js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
