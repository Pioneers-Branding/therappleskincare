<?php require_once 'privacy-config.php'; ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Privacy Policy | The Rapple Skin Care</title>
   <meta name="description" content="How The Rapple Skin Care collects, uses and protects your personal data, and how to exercise your rights under India's DPDP Act.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include('header-links.php') ?>
   <style>
      .nav-container { max-width: 1500px; margin: 0 auto; padding: 0 20px; }
      .policy-content { max-width: 900px; margin: 0 auto; font-size: 16px; line-height: 1.7; }
      .policy-content h2 { font-size: 26px; margin: 35px 0 12px; }
      .policy-content h3 { font-size: 20px; margin: 22px 0 8px; }
      .policy-content p { margin-bottom: 12px; }
      .policy-content ul { padding-left: 22px; margin-bottom: 15px; }
      .policy-content li { list-style: disc; margin-bottom: 6px; }
      .policy-content a { text-decoration: underline; }
      .policy-content table { width: 100%; margin-bottom: 20px; font-size: 15px; }
      .policy-content th, .policy-content td { border: 1px solid #e2d3c8; padding: 10px; vertical-align: top; }
      .policy-content th { background: #f6ece5; }
      .policy-box { background: #f6ece5; border-left: 4px solid #b98b6e; padding: 18px 22px; margin: 20px 0; }
      .policy-box p { margin-bottom: 4px; }
      @media (max-width: 767px) { .policy-content table { display: block; overflow-x: auto; } }
   </style>
</head>

<body>
   <?php include('header.php') ?>
   <main>
      <section class="breadcrumb-area" style="background:#e9d1c1">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                  <div style="padding:80px 30px" class="text-center">
                     <h1 class="font-ovrd" style="font-size:50px">Privacy Policy</h1>
                     <p style="margin:0">Last updated: <?php echo h($policyUpdated); ?> &nbsp;|&nbsp; Read in: <strong>English</strong> | <a href="privacy-policy-hi.php" lang="hi" style="text-decoration:underline">हिन्दी</a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section style="padding:70px 0">
         <div class="container">
            <div class="policy-content">
               <h2>1. Who we are</h2>
               <p>This Privacy Policy explains how <?php echo h($org['brand']); ?>, the skin clinic of <?php echo h($org['doctor']); ?> ("we", "us"), collects, uses and protects personal data through this website, <?php echo h($org['website']); ?>. It follows India's Digital Personal Data Protection Act, 2023 (the "DPDP Act") and the rules made under it.</p>
               <p>This policy covers information you share through this website. Records created during your consultation or treatment at our clinic are handled under our patient confidentiality practices and applicable medical laws.</p>

               <h2>2. What personal data we collect</h2>
               <table>
                  <thead><tr><th>Information</th><th>Where we collect it</th><th>Required?</th></tr></thead>
                  <tbody>
                     <tr><td>Your answers about skin concerns (such as acne, pigmentation, ageing, sensitivity and dryness)</td><td>Skin Quiz</td><td>To get recommendations</td></tr>
                     <tr><td>First and last name, email address and phone number</td><td>Skin Quiz booking step</td><td>Yes, to book a consultation</td></tr>
                     <tr><td>Preferred appointment date and time, and any additional concerns</td><td>Skin Quiz booking step</td><td>Optional. Please don't include detailed medical history; the doctor will discuss it with you at your consultation.</td></tr>
                     <tr><td>Your consent choices, and which version of this notice you saw</td><td>Skin Quiz booking step</td><td>Recorded with your booking</td></tr>
                     <tr><td>Details in a data rights request, including any nominee's name and contact details</td><td><a href="data-request.php">Your Data Rights</a> page</td><td>Only what is needed to handle your request</td></tr>
                     <tr><td>Technical data such as IP address and browser type</td><td>Collected automatically by our hosting provider and by the third-party services listed in section 5</td><td>Automatic</td></tr>
                  </tbody>
               </table>
               <p>We do not use advertising or analytics trackers (such as the Meta Pixel or Google Analytics) on this website, and we do not set cookies ourselves. Some third-party services listed in section 5 may set their own cookies.</p>

               <h2>3. Why we use it</h2>
               <ul>
                  <li>To arrange your consultation and suggest suitable treatment. We do this with your consent, which you give by ticking the required box on the booking step.</li>
                  <li>To send you updates and skin-care tips by WhatsApp, SMS or email, <strong>only</strong> if you tick the optional updates box.</li>
                  <li>To handle your data rights requests and complaints.</li>
                  <li>To keep this website secure and to meet our legal obligations.</li>
               </ul>
               <p>We do not sell your personal data. We will not use it for any other purpose without asking you first.</p>

               <h2>4. Your consent and how to withdraw it</h2>
               <p>The booking step has two separate checkboxes. The first lets us use your details and quiz answers to arrange your consultation. The second, for updates, is optional and unticked by default. You can withdraw either consent at any time, as easily as you gave it:</p>
               <ul>
                  <li>Use the <a href="data-request.php?type=withdraw-marketing">Your Data Rights</a> page;</li>
                  <li>Reply "STOP" to any WhatsApp or SMS message from us;</li>
                  <li>Click "Unsubscribe" in any email update from us; or</li>
                  <li>Contact our Grievance Officer (details in section 11).</li>
               </ul>
               <p>Withdrawing consent does not affect anything we did with your data before you withdrew it.</p>

               <h2>5. Who we share it with</h2>
               <p>We share personal data only with service providers that help us run this website and respond to you. They may use it only on our instructions.</p>
               <ul>
                  <li><strong>Formester</strong> (online form service): receives and stores form submissions, such as data rights requests.</li>
                  <li><strong>Our website hosting provider</strong>: hosts this website and keeps server logs.</li>
                  <li><strong>Email and messaging providers</strong> our team uses to reply to you, such as email and WhatsApp.</li>
                  <li><strong>YouTube and Google Fonts</strong>: the videos on this website and some fonts load from Google, which receives your IP address and browser details and may set cookies, under <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
                  <li><strong>Image services</strong> (Unsplash and placeholder.com): some images on this website load from these services, which receive your IP address and browser details.</li>
                  <li><strong>Instagram and Facebook</strong>: if you follow the links to our social media pages, those sites handle your data under their own policies.</li>
               </ul>
               <p>We may also disclose personal data when the law requires it. We do not share your data with advertisers.</p>

               <h2>6. How long we keep it</h2>
               <ul>
                  <li><strong>Bookings and quiz answers:</strong> up to 12 months after our last contact with you, unless you become a patient, in which case medical-record retention rules apply.</li>
                  <li><strong>Consent for updates:</strong> until you withdraw it. We keep a record of the withdrawal so we can show we respected it.</li>
                  <li><strong>Data rights requests and complaints:</strong> 2 years after the request is closed.</li>
                  <li><strong>Server logs:</strong> up to 1 year, for security.</li>
               </ul>
               <p>After these periods, we delete the data or make it anonymous.</p>

               <h2>7. How we protect it</h2>
               <p>The whole website uses HTTPS encryption, and our forms only send data over secure connections. Access to your details is limited to staff who need it to respond to you. We use service providers that offer appropriate security safeguards. If a personal data breach occurs, we will inform the people affected and the Data Protection Board of India as the law requires.</p>

               <h2>8. Your rights</h2>
               <p>Under the DPDP Act, you have the right to:</p>
               <ul>
                  <li><strong>Access:</strong> get a summary of the personal data we hold about you, how we use it, and who we have shared it with;</li>
                  <li><strong>Correction and erasure:</strong> ask us to correct, complete, update or delete your personal data;</li>
                  <li><strong>Withdraw consent</strong> at any time (see section 4);</li>
                  <li><strong>Grievance redressal:</strong> complain to us and get a response (see section 11); and</li>
                  <li><strong>Nominate</strong> another person to exercise these rights on your behalf if you die or become unable to manage them.</li>
               </ul>
               <p>You can also ask for a copy of your data in a machine-readable format. Parents and legal guardians can exercise these rights on behalf of their children.</p>
               <h3>How to make a request</h3>
               <p>Use the <a href="data-request.php">Your Data Rights</a> page, or contact our Grievance Officer. Before we delete, export or change any data, we will verify your identity by sending a one-time password (OTP) to the email or phone number you gave us, or by calling you back on it. We will acknowledge your request within 2 business days and aim to complete it within 15 business days.</p>

               <h2>9. Children</h2>
               <p>Some of our services, such as ear piercing, are offered to children, but this website is intended for adults. Bookings for a child must be made by the child's parent or legal guardian, and the booking step asks you to confirm this. If we learn that we have collected personal data from someone under 18 without verifiable consent from their parent or guardian, we will delete it.</p>

               <h2>10. Patient reviews</h2>
               <p>Our homepage shows reviews and photos shared by our clients. If you appear in one of these reviews and would like it removed, please use the <a href="data-request.php?type=remove-review">Your Data Rights</a> page and we will remove it within 15 business days.</p>

               <h2>11. Grievance Officer</h2>
               <p>If you have any question or complaint about how we handle your personal data, please contact our Grievance Officer:</p>
               <div class="policy-box">
                  <p><strong>Grievance Officer (Data Protection), <?php echo h($org['brand']); ?></strong></p>
                  <?php if ($grievance['name'] !== ''): ?><p>Name: <?php echo h($grievance['name']); ?></p><?php endif; ?>
                  <p>Email: <a href="mailto:<?php echo h($grievance['email']); ?>"><?php echo h($grievance['email']); ?></a></p>
                  <p>Phone: <a href="tel:<?php echo h(str_replace(' ', '', $grievance['phone'])); ?>"><?php echo h($grievance['phone']); ?></a></p>
                  <p>Online: <a href="data-request.php?type=complaint">Your Data Rights</a> page</p>
                  <?php if ($org['address'] !== ''): ?><p>Address: <?php echo h($org['address']); ?></p><?php endif; ?>
                  <?php if ($grievance['hours'] !== ''): ?><p>Hours: <?php echo h($grievance['hours']); ?></p><?php endif; ?>
               </div>
               <p>We will acknowledge your complaint within 2 business days and aim to resolve it within 15 business days. If we cannot resolve it in this time, we will tell you why and when to expect a resolution.</p>
               <p>If you are not satisfied with our response, you may escalate your complaint to the Data Protection Board of India (DPBI) through its official portal: <a href="https://dpbi.gov.in" target="_blank" rel="noopener">https://dpbi.gov.in</a>. Please contact our Grievance Officer first, as the Board expects you to use our grievance process before approaching it.</p>

               <h2>12. Changes to this policy</h2>
               <p>We may update this policy from time to time. The "Last updated" date at the top shows when it last changed. If a change affects how we use data you have already given us, we will ask for your consent again where required.</p>
            </div>
         </div>
      </section>
   </main>
   <?php include('footer.php') ?>
   <!-- JS here -->
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/nouislider.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/parallax.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/hover-reveal.js"></script>
   <script src="assets/js/tween-max.js"></script>
   <script src="assets/js/jquery.appear.js"></script>
   <script src="assets/js/splide.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/pignose.calendar.full.min.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>
