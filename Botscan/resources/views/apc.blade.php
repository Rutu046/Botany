
@extends('layout.header')
@section('webcontent')





<body class="body_a">

<header class="header_b">
  <h3>Article Processing Charges (APC)</h3>
</header>

<section class="section_c">
  <div class="div_d">
    <div class="apc-info1">
      <p>BotScan provides all articles in full open access immediately upon publication. For manuscripts submitted from
        1 October 2023, authors will be required to pay a one-time article processing charge (APC) upon formal
        manuscript acceptance.</p>
      <p>The APC is paid for the costs of peer review administration and management, professional production of
        articles in PDF and other formats, website maintenance, dissemination of published papers in various
        platforms, including the provision of online tools for editors and authors, liaison with abstracting and
        indexing services, and other customer services.</p>
    </div>


<p class="message-to-authors1"><strong>Message to our authors:</strong></p><br>
<p class="message-to-authors1"><em>“Research Article” and “Review Article”: A charge of 16,500 INR* (USD 700* is required).</em></p><br>
<p class="message-to-authors1">*Excluded fees and VAT.</p><br>
<p class="message-to-authors1">"The article processing charge must not be refunded if authors have made the payment before the reviewing process."</p><br>



    <p><strong>Payment Instructions for BotScan Article Processing Charges (APC) after an accepted manuscript:</strong></p><br>
    <div class="payment-steps1">
      <ol>
        <li>Please select list >BotScan Article Processing Charges (APC)</li>
        <li>Fill out the information completely & confirm</li>
        <li>Please fill in the debit or credit card information</li>
      </ol>
    </div><br><br>

    <a href="{{ config('app.url', '') }}" class="payment-button1">BotScan - Payment Gateway</a>
    <p class="apc">BotScan Article Processing Charges (APC)</p>
  </div>
</section>



</body>

@endsection
