@extends('layout.header')
@section('webcontent')
<body>

    <div class="paracontainer">
  <div class="userinfo">
    <h1>Information For User</h1>
</div>
    <div class="policy1">
      <div class="policy-content2 animated-content">
        <h3>Worldwide Distribution Network</h3>
        <p>When you publish your article with BotScan, it is published with and gets available in near 120+ countries. We are in partnership with largest global journal distribution networks. Reach to a larger reader base from all over the world with our distribution network.</p>
      </div>
      <img src="{{Asset("image/network.jpg")}}">
    </div>

    <div class="policy1">
    <img src="{{Asset("image/userinfo.jpg")}}">
      <div class="policy-content1 animated-content">
        <h3>Information For Readers</h3>
        <p>We encourage readers to sign up for the publishing notification service for this journal. Use the Register link at the top of the home page for the journal. This registration will result in the reader receiving the Table of Contents by email for each new issue of the journal. This list also allows the journal to claim a certain level of support or readership. See the journal's Privacy Statement, which assures readers that their name and email address will not be used for other purposes.</p>
      </div>
      
    </div>
    <div class="policy1">
      <div class="policy-content2 animated-content">
        <h3>Information For Authors</h3>
        <p>Interested in submitting to this journal? We recommend that you review the About the Journal page for the journal's section policies, as well as the Author Guidelines. Authors need to register with the journal prior to submitting or, if already registered, can simply log in and begin the five-step process.</p>
      </div>
      <img src="{{Asset("image/authorinfo.jpg")}}">
    </div>

    <div class="policy1">
    <img src="{{Asset("image/librarian.jpg")}}">
      <div class="policy-content1 animated-content">
        <h3>Information For Librarians</h3>
        <p>We encourage research librarians to list this journal among their library's electronic journal holdings. As well, it may be worth noting that this journal's open source publishing system is suitable for libraries to host for their faculty members to use with journals they are involved in editing (see Open Journal Systems).</p>
      </div>
    </div>

  </div>
  
</body>
@endsection
