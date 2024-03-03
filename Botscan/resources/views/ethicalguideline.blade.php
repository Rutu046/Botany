
@extends('layout.header')
@section('webcontent')

<body>
<div class="container3">
  <div class="EP">
    <h2>Editorial Policies</h2>
</div>
    <div class="policy">
      <div class="policy-content animated-content">
        <h4>● BotScan expects the highest ethical standards</h4>
        <p>BotScan expects the highest ethical standards from their authors, reviewers, and editors when conducting research, submitting papers, and throughout the peer-review process.</p>
      </div>
      <img src="{{Asset("image/ethicalstd1.jpg")}}">
    </div>
    <div class="policy">
    <img src="{{Asset("image/peer1.jpg")}}">
      <div class="policy-content animated-content">
        <h4>● Peer Review</h4>
        <p> BotScan employs a double-blind review process, in which the author identities are concealed from the reviewers, and vice versa, throughout the review process.</p>
      </div>
      
    </div>
    <div class="policy">
      <div class="policy-content animated-content">
        <h4>● Retraction Policy</h4>
        <p>All Publications shall act in accordance with COPE Retraction Guidelines.</p>
      </div>
      <img src="{{Asset("image/retraction.jpg")}}">
    </div>
  </div>

</body>
@endsection
