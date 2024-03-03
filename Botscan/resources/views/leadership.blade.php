@extends('layout.header')
@section('webcontent')
<body>
   

    <div class="leadership">                                     
        <h2><b>Leadership</b></h2>
    </div>
    

    <section id="cards">
        <div class="row row-cols-2 row-cols-md-2 g-4">
            <div class="col">
                <div class="card2 fadeInUp">
                    <img src="{{Asset("image/profile.png")}}" class="card-img-top2" alt="...">
                    <div class="card-body2 text-center">
                        <h4><b>Editor in chief</b></h4>
                        <h5 class="card-title2">Dr. Pawankumar Sheshrao Kharate, <br>M.Sc. Ph.D. (Agriculture Science)</h5>
                        <p class="card-text2">Principal, College of Agriculture Biotechnology, GeoraiTanda, Paithan Road, Aurangabad-431102, Maharashtra, India <br> Contact +91 798791198</p>
                        <a class="Email-www">Email-www,coabat.org</a><br>
                        <a class="URL-http">http://pskharate@coabgt.org</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card2 fadeInUp">
                    <img src="{{Asset("image/profile.png")}}" class="card-img-top2" alt="...">
                    <div class="card-body2 text-center">
                    <h4><b>Publisher</b></h4>
                        <h5 class="card-title2">Dr. Dinesh Sheshrao Kharate, <br>M.Sc. Ph.D. (KulDev Publication)</h5>
                        <p class="card-text2">PLNO-1, GNO-16,Harisingh Nagar, C.OP.H.S.Sudhakar NG, Aurangabad- 431001, Maharashtra, India. ;<br> Contact- +91 9021563292; +91 9325750894</p>
                        <a class="Website-">www.{{ config('app.publisher','')}}.com</a>
                        <a class="Website-">info@{{ config('app.publisher','')}}.com</a>
                        <a class="Website-">support@{{ config('app.publisher','')}}.com</a>
                        <a class="Email-www">kuldevgroup@gmail.com</a>
                        <a class="Website-">{{ config('app.publisher','')}}@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3> "Unlock the Power of Knowledge with BotScan!"</h3>
                    <p> "Discover, Explore, and Innovate. Dive into the vast ocean of knowledge with BotScan. Your gateway to groundbreaking research, where every click opens doors to new insights and discoveries. Whether you're a seasoned researcher, an aspiring academic, or an enthusiastic learner, our platform empowers you to embark on a journey of intellectual growth. Join us today and let your curiosity lead the way!"</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="">Submit Paper Online</a>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        $(document).ready(function(){
            $('.card').addClass('fadeInUp');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  
    </body>
    @endsection


   