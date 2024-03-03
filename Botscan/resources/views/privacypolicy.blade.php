
@extends('layout.header')
@section('webcontent')

<body>
   
    
        <h2 class="PP">Privacy Policy</h2>
        <div class="gap animated-content">
        <div class="highlight animated-content">
            <p><strong>BotScan takes your privacy seriously: </strong> By visiting this website you agree to be bound by the terms and conditions of this Privacy Policy. This Privacy Policy is incorporated into and incorporated into the Terms of Use.</p>
            <button class="lrn-btn">Learn More</button>
            <div class="hidden">
                <p>In most cases, you can visit the KulDev Publications website without telling us who you are or revealing any information about yourself. However, there may be times when we need information from you. KulDev Publications will not rent, sell or share your personal information with third parties or unaffiliated companies, except to provide the products or services you request with your permission or as follows; We operate under a strict confidentiality agreement, providing information to trusted partners on behalf of or together with KulDev Publications.</p>
            </div>
        </div>

        <div class="highlight">
            <p><strong>Cookies, and other technologies: </strong>We sometimes collect anonymous information from visits to our sites to help us provide better customer service. </p>
            <button class="lrn-btn">Learn More</button>
            <div class="hidden">
                <p>We sometimes collect anonymous information from visits to our sites to help us provide better customer service. For example, we keep track of the domains from which people visit and we also measure visitor activity on BotScan or KulDev publications web sites, but we do so in ways that keep the information anonymous. BotScan or its affiliates or authors may use this data to analyze trends and statistics and to help us provide better customer service. We maintain the highest levels of confidentiality for this information, our affiliates and authors follow the same high levels of confidentiality. This anonymous information is used and analyzed only at an aggregate level to help us understand trends and patterns. None of this information is reviewed at an individual level. If you do not want your transaction details used in this manner, you can either disable your cookies or opt-out at the download or request page.</p>
            </div>
        </div>

        <div class="highlight">
            <p><strong>Mailers: </strong>BotScan may, if you so choose, send direct mailers to you at the address given by you.</p>
            <button class="lrn-btn">Learn More</button>
            <div class="hidden">
                <p>BotScan may, if you so choose, send direct mailers to you at the address given by you. You have the option to 'opt-out' of this direct mailer by way of links provided at the bottom of each mailer. We respect your privacy and in the event that you choose to not receive such mailers, we will take all steps to remove you from the list..</p>
            </div>
        </div>

        <div class="highlight">
            <p><strong>Anti-Spam Policy: </strong>BotScan may, if you so choose, send direct mailers to you at the address given by you.</p>
            <button class="lrn-btn">Learn More</button>
            <div class="hidden">
                <p>BotScan recognizes the receipt, transmission or distribution of spam emails unsolicited bulk emails as a major concern and has taken reasonable measures, to minimize the transmission and effect of spam emails in its computing environment. All emails received by BotScan, are subject to spam check, in coordination with Norton subscription service. Any email identified as spam will be rejected with sufficient information to the Sender for taking necessary action. With this measure, along with other technical spam reduction measures, BotScan hopes to minimize the effect of spam emails. BotScan reserves the right to reject and/or report any suspicious spam emails, to the authorities concerned, for necessary action, from time to time.</p>
            </div>
        </div>

        <div class="highlight">
            <p><strong>Links to Other Sites: </strong>Our Website links to other websites that may collect personally identifiable information about you. </p>
            <button class="lrn-btn">Learn More</button>
            <div class="hidden">
                <p>Our Website links to other websites that may collect personally identifiable information about you. BotScan not responsible for the privacy practices or the content of those linked websites</p>
            </div>
        </div>

        <div class="highlight">
            <p><strong>Security Precautions: </strong>Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. </p>
            <button class="lrn-btn">Learn More</button>
            <div class="hidden">
                <p>Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access.</p>
            </div>
        </div>
        
        <div class="highlight">
            <p><strong>Your Consent: </strong>By using the Website and/ or by providing your information, you consent to the collection </p>
            <button class="lrn-btn">Learn More</button>
            <div class="hidden">
                <p>By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to your consent for sharing your information as per this privacy policy.</p>
            </div>
        </div>
</div>
        
        <!-- Repeat similar structure for other highlighted points -->
    </div>
    <script>
        const toggleButtons = document.querySelectorAll('.lrn-btn');
        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');
                if (content.classList.contains('hidden')) {
                    button.textContent = 'Learn More';
                } else {
                    button.textContent = 'Hide Details';
                }
            });
        });
    </script>

  
    </body>
    @endsection