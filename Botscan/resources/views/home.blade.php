@extends('layout.header')
@section('webcontent')

<!-----------------Slider------------------>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="slogan">We are global <br>Publisher</h1><br><br>
              <p>Focused to publishing significant research. Let's make a positive change. togrther,Are you in?</p>
              <br><br>
              <form>
                <button type="submit " class="submit-btn1">Submit Article</Article></button>
              </form>
            </div>
            <div class="col-md-5">
              <img src="{{Asset('image/pic3.png')}}" class="d-block w-100 img1">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="slogan">Peer Reviewed<br>Journal</h3><br><br>
              <p>Scholarly Peer Review high indexed international journals in various streams.</p>
              <form>
                <button type="submit" class="submit-btn2">Submit Article</button>
              </form>
            </div>
            <div class="col-md-5">
              <img src="{{Asset('image/pic4.jpg')}}" class="d-block w-100 img2">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="slogan">Promote your work</h3><br><br>
              <p>Red our advice on increasing the impact and visibility of your publication</p>
              <form>
                <button type="submit" class="submit-btn3">Submit Article</button>
              </form>
            </div>
            <div class="col-md-6">
              <img src="{{Asset('image/pic2.jpg')}}" class="d-block img3">
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button1" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div><br><br>

  <!------------------container----------------->
  <div class="container">
    <div class="row content">
      <div class="col-sm-4">
        <img src="{{Asset('image/about journal.jpg')}}" alt="Placeholder Image" class="img-fluid">
      </div>
      <div class="data col-sm-8 animated-content" >
        <h2 class="heading">About Journal</h2>
        <p>The BotScan as an international journal offers the most affordable
          self-publishing services in all over the world. The BotScan journal has professional writers
          with worldwide communities. We provide relevant networking opportunities support literature ovarious animal
          sciences an individual throughout our services. We are engage in the publishing,
          supplying and exporting of variable textual sources. Our journal have well qualified and strong
          workforce of editors and reviewers along the ethical writers. Our hardcore editorial team of professionals
          includes doctors, engineers, scientists, social activities and researchers. Our are
          well experience and expert in theirs field of journal publications and provide possible assistancein quality
          product and managing textual matters to sustainable society. We aim to provideprofessional self publications
          on research and review articles; guidance and support to all
          emerging authors who inspire to write and publish their articles with our worldwide availability
          on journal webpage.</p>
      </div>
    </div><br>
  </div>

  <div class="container">
    <div class="row content">
      <div class="col-sm-4">
        <img src="{{Asset('image/aims1.png')}}" alt="Placeholder Image" class="img-fluid">
      </div>   
      <div class="data col-sm-8 animated-content">
        <h2 class="heading">Aims & Scope</h2>
        <p>BotScan is a peer-reviewed Open Access journal covering all areas of Biological
          sciences, launched in 2023. It is published 12 Issues (Monthly) by the KulDev Publication. The scope
          of journal is to assessment and publishing in all agricultural sciences, bacteriology, plant Sciences,
          plant taxonomy, crop science, applied zoology, entomology, protozoology, cell biology, tissue culture,
          economic zoology, vectors, experimental zoology, virology, animal taxonomy, infections, plant toxicology
          , plant and animal physiology, vertebrate zoology, microbiology, animal health, invertebrate zoology,
          helminthology, parasitology, biophysics, biotechnology, toxicology, apiculture, picisculture, bee
          keeping, fishery science, endocrinology, marine fishery, sea food, dairy science, animal husbandry,
          sericulture, livestock, limnology, marine animals and plant diversity and agricultural engineering.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row content">
      <div class="data animated-content">
        <h2 class="heading">Indexed and Abstracts</h2>
        <p>BotScan is indexed in the Indian-Journal Citation Index Centre (ICI), Google Scholar, CAB Abstracts,
          EBSCOhost, JournalSeek, ASEAN Citation Index (ACI), ROAD: the Directory of Open Access scholarly
          Resources, creative commons, crossref, open access and peer review.</p>
      </div>
    </div>
  </div><br><br>

  <div class="container">
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mission</h5>
            <p class="card-textt">We are committed to providing premium quality publications that create values for our
              peoples. We build diverse team and provide equal growth opportunity for all writers by creating positive
              environment, societal and economic difference for community.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vision</h5>
            <p class="card-textt">To maintained sustainable writing growth through continuous innovation, market
              development and public relation while creating long-term value for all writers.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Values</h5>
            <p class="card-textt">We believed in open communication and understand public needs, offers new publications
              exceed their expectation..</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div><br><br><br>

  <!-------editor cards----->
  <div class="container">
    <div>
      <h2 class="heading">Editorial Board</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col1">
        
        <div class="card1 h-100">
          <img src="{{Asset('image/profile.png')}}" class="card-img-top">
          <div class="card-body1">
            <h5 class="card-title1">Dr. Dharmpal ChokhobaWagh, M.Sc.Ph.D. <br>(Zoology & Fishery Science)</h5>
            <p class="card-text1">Assistant Professor, Department of Zoology and Fishery Scinece, Millind College of
              Science, Nagsen, Aurangabad-431004, Maharashtra, India
              Email-milindscience.in; URL-http://milinscience.in/senior-college-faculties
              Contact +91 8668429590</p>
          </div>

        </div>
      </div>
      <div class="col1">
        <div class="card1 h-100">
          <img src="{{Asset('image/profile.png')}}" class="card-img-top" alt="...">
          <div class="card-body1">
            <h5 class="card-title1">Dr. Sandeepsing Gaur, M.Sc.Ph.D. <br>(Chemical Science)</h5>
            <p class="card-text1">Professor, Head, PG Department of Chemistry, SantRamdas Arts, Commerce and Science
              College, Ghansawangi, Jalna-423709, Maharashtra, IndiaEmail-santramascollege@yahoo.co.in;
              URL-http://www.srcgContact +91 8788338094.</p>
          </div>

        </div>
      </div>
      <div class="col1">
        <div class="card1 h-100">
          <img src="{{Asset('image/profile.png')}}" class="card-img-top" alt="...">
          <div class="card-body1">
            <h5 class="card-title1 ">Dr. Vijay D. Suryawanshi, M.Sc.Ph.D. <br>(Zoology & Animal Science)</h5>
            <p class="card-text1">Assistant Professor, PG Department of Zoology, SantRamdas Arts, Commerce and Science
              College, Ghansawangi, Jalna-423709, Maharashtra, India
              Email-santramascollege@yahoo.co.in; URL-http://www.srcg
              Contact +91 9765009491.</p> </li>
          </div>        
        </div>
      </div>
    </div>
  
  </div>
  <div><br><br>
    <a href="/editeam" class="button">View More</a>
    <!--<button type="button" class="button">view more</button>-->
  </div><br><br>

  <!---------Logos--------->

  <div>
    <h3 class="heading">Sponsors and Support</h3>
    <div class="slider-container">
    <div class="slider">
        <img src="{{Asset('image/asean_c_i.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/cab_abstracts.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/creative_commons.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/crossref.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/doi.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/EBSCOHOST.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/embase.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/eng_village.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/google.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/journal_seek.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/open_access.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/perreview.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/public_knowledge_project.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/SRC.png')}}" alt="logo" width="200" height="100">
        <img src="{{Asset('image/INTER_STAND.png')}}" alt="logo" width="200" height="100">

        <!-- Add the rest of your logos -->

      </div>
    
  </div>

  <!--<script src="{{Asset("js/script.js")}}"></script>-->


@endsection