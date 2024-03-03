@extends('layout.header')
@section('webcontent')

<body>

   

    <div class="container4 animated-content ">
        <h2>Terms and Conditions</h2>   
            <h5>1. Paper Review Policy: </h5>
            <p>All submitted process will be reviewed by Full Double Blind Review Process which may take maximum 02 weeks after paper submission. Once paper is accepted, It cannot be withdrawn at any condition. We are advising to all the authors, do not submit same article to multiple journals at same time. You may wait for review report.</p>
            <h5>2. Refund Policy:</h5>
            <p>Wrongly deposit money / extra deposit money or in case if author is not satisfied with our service, will return back payment within 30 days, if respective candidate inform us.</p>
            <h5>3. Delivery Policy:</h5>
            <p> Delivery will usually take place 7 to 10 working days after acceptance of an order, International Orders can take up to 30 days especially at busy periods e.g Festivals. If any products lost during shipment will be re-dispatched without any additional cost. We are not liable for any loss arising from delays in delivery or failure to deliver. We send products through Indian Postal Department's Register Parsel Service.</p>
            <h5>4. Paper Withdrawn/ Cancellation Policy:</h5>
            <p> Authors note that paper cannot be withdrawn at any condition once it is accepted.</p>
            <h5>5. Copyright Policy:</h5>
            <p>Authors must agree that once their submission is accepted, it cannot be withdrawn. Prior permission is required from the publisher to publish contributions elsewhere, unless significant changes are made. Authors affirm that their contribution is original, devoid of adverse interpretations, and does not infringe copyright or trademark rights. Permission is granted to use the article, with appropriate acknowledgment, but not for sale. Plagiarism is strictly prohibited, and all submissions undergo thorough checks. Plagiarism in published articles requires an apology letter to the original author and a one-year ban from publication. Disputes are resolved in Aurangabad, Maharashtra, India.<p>
            <h5>6. Jurisdiction: </h5>
            <p>These Terms of Service are governed by and constructed in accordance with the laws of India, without reference to conflict of laws principles and you irrevocably and unconditionally submit to the non-exclusive jurisdiction of the courts of Aurangabad, India.</p>
        </div>
    </div>

    <script>
        document.getElementById("toggleBtn").addEventListener("click", function() {
            var termsDiv = document.getElementById("terms");
            termsDiv.classList.toggle("hidden");
            if (termsDiv.classList.contains("hidden")) {
                document.getElementById("toggleBtn").textContent = "Show Terms";
            } else {
                document.getElementById("toggleBtn").textContent = "Hide Terms";
            }
        });
    </script>
   
</body>
@endsection
