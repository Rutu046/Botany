@extends('layout.header')
@section('webcontent')
<body> 

  

  <section>
    <body class="sectionabc">
      <section>
        <div class="exploreoffering">
          <h3><strong>Explore Our Offerings</strong></h3>

          <div class="container-card3" id="containerCard3">
            <!-- Conference Proceedings Card -->
            <div class="card3">
              <div class="card-body3">
                <h5>Conference Proceedings</h5>
                <p>BotScan offers conference proceedings in various fields. Explore our collection of
                  valuable research papers presented at conferences.</p>
              </div>
            </div>

            <!-- ISSN and Copyright Card -->
            <div class="card3">
              <div class="card-body3">
                <h5>ISSN and Copyright</h5>
                <p>International Standard Serial Number (ISSN) is assigned to text-based monographic
                  publications. Ensure copyright protection for your articles.</p>
              </div>
            </div>

            <!-- Buy Journals Online Card -->
            <div class="card3">
              <div class="card-body3">
                <h5>Buy Journals Online</h5>
                <p>Explore our online store for journal subscriptions. Choose from academic
                  subscriptions, individual subscriptions, or library subscriptions.</p>
              </div>
            </div>

            <!-- Journal Subscription Card -->
            <div class="card3">
              <div class="card-body3">
                <h5>Journal Subscription</h5>
                <p>Academic Subscription, Library Subscriptions, and more. Subscribe to BotScan and
                  stay updated with the latest research.</p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="btn-group1">
                <button class="btn-primary1" onclick="showSubscriptionButtons()">Journal Subscription</button>
                <button class="btn-primary1" onclick="showSubscriptionButtons()">Academic Subscription</button>
                <button class="btn-primary1" onclick="showSubscriptionButtons()">Journal Subscriptions for the Library</button>
              </div>
      </section>

      <script src="js/conference.js"></script>.

     
    </body>
    @endsection
