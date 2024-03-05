<!----------header------------------>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BotScan</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{Asset('css/style.css')}}">
  


</head>

<body>
  <!---------heading--------->
  
  <section class="bg">
    <div class=" text-white p-6 text-center animated-content">
      <h1 class="m-0"><strong>BotScan - Research Journal</strong></h1><br>
      <p>"Empowering Ideas, Enriching Minds: Where Knowledge Meets Publication."</p>
    </div>

    <!--Navbar-------------------------------------------------------------------------->
    
    <div>
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <img id="logo" src="{{ asset('image/boteny_logo.png') }}" class="mr-3" alt="BotScan Logo">
        </a>

        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link active  text-white" aria-current="page" href="/"><b>Home</b></a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>About Journal</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/userinfo">Information for User</a></li>
                  <li><a class="dropdown-item" href="/manuscript-preperation">Manuscript Preperation</a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link  text-white" href="#"><b>Archives</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Editorial Board</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/leadership">Editor</a></li>
                  <li><a class="dropdown-item" href="/leadership">Publisher</a></li>
                  <li><a class="dropdown-item" href="/editorial-advisory-board">Editorial Board</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Policy Details</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/policy-details">Policy Details</a></li>
                  <li><a class="dropdown-item" href="/privacy-policy">Privacy Policy</a></li>
                  <li><a class="dropdown-item" href="/terms-and-conditions">Terms and Conditions</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Duties & Guidelines</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/duties-of-reviewers">Reviewers</a></li>
                  <li><a class="dropdown-item" href="/duties-of-authors">Authors</a></li>
                  <li><a class="dropdown-item" href="/ethical-guidelines">Ethical Guidelines</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Journal Subscription</b>
                </a>
                <ul class="dropdown-menu">
<<<<<<< HEAD
                  <li><a class="dropdown-item" href="/conference-proceedings">Conference Proceedings</a></li>
                  <li><a class="dropdown-item" href="/artical-processing-charges">Article Processing Charges (APC)</a></li>
                  <li><a class="dropdown-item" href="/journal-subscriptions">Journal Subscriptions</a></li>
=======
                  <li><a class="dropdown-item" href="/conference">Conference Proceedings</a></li>
                  <li><a class="dropdown-item" href="/article-processing-charges">Article Processing Charges (APC)</a></li>
                  <li><a class="dropdown-item" href="/journalsubscription">Journal Subscriptions</a></li>
>>>>>>> 2c507bf222c7e46f08dbfc84563be28e1762abcf
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Register</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/conference">Login</a></li>
                  <li><a class="dropdown-item" href="/apc">Register</a></li>
                </ul>
              </li>
          </div>
        </div>
      </nav>
    </div>
  </section>
  
  @yield('webcontent')



  <!------------footer----------------->

  <!--------Footer--------->
  <!--footer starts from here-->
  <footer class="footer">
    <div class="container bottom_border">
      <div class="row">
        <div class=" col-sm-4 col-md col-sm-4  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2"><strong>Find us</strong></h5>
          <!--headin5_amrc-->
          <p class="mb10">Botscan Publication offers the most affordable self-publishing services in India. 
            The Botscan publication is India's professional young writers with worldwide communities.
          </p>

          <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
          <p><i class="fa fa-phone"></i> +91-9021563292 </p>
          <p><i class="fa fa fa-envelope"></i> kuldevgroup@gmail.com </p>


        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2"><strong>Usefull Links</strong></h5>
          <!--headin5_amrc-->
          <ul class="footer_ul_amrc">
            <li><a href="/">Home</a></li>
            <li><a href="/userinfo">About us</a></li>
            <li><a href="/apc"> Services </a></li>
            <li><a href="/termsandcond">Terms of service</a></li>
            <li><a href="policydetail">Privacy policy</a></li>
            <li><a href="/conference">Guidlines</a></li>
          </ul>
          <!--footer_ul_amrc ends here-->
        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2"><strong>Our Services</strong></h5>
          <!--headin5_amrc-->
          <ul class="footer_ul_amrc">
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Markting</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
          <!--footer_ul_amrc ends here-->
        </div>


        <div class=" col-sm-4 col-md  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2"><strong>Contact us</strong></h5>
          <!--headin5_amrc ends here-->

          <ul class="footer_ul2_amrc">
            <li><a href="#"><i class="fas fa-home fleft padding-right"></i> </a>
            <p> PL NO-1 GNO-16 HARISINGH NAGAR C.OP.H.S.SUDHAKAR 
              <br> NG AURANGABAD- 431001, MAHARASHTRA, INDIA.</p>

           <li><a href="#"><i class="fa fa-globe fleft padding-right"></i> </a>
              <p>For more details and information visit this Website : <a href="#">https://www.lipsum.com/</a></a></p>
            </li>
            <li><a href="#"><i class="fa fa-phone fleft padding-right"></i> </a>
              <p> <b>Contact</b> : <a> +91-9021563292,  +91-9325750894 </a></p>
            </li>
            
          </ul>
          <!--footer_ul2_amrc ends here-->
        </div>
      </div>
    </div>


    <!-- <div class="container">
       <ul class="foote_bottom_ul_amrc">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="/journalsubscription">Services</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>  -->
      <!--foote_bottom_ul_amrc ends here-->
      <p class="text-center "> @ Copyright <b>BotScan</b> All rights Reserved <br> Designed With by <a href="#">@ngle Infotec</a></p>

      <ul class="social_footer_ul">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
      <!--social_footer_ul ends here-->
    </div>

  </footer>

  <script  src="{{Asset('js/script.js')}}"> </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    

</body>

</html>