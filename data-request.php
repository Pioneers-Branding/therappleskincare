<?php
require_once 'privacy-config.php';

// Request types. The slug can be pre-selected with ?type=..., e.g. data-request.php?type=withdraw-marketing
$requestTypes = [
    'access'             => 'Get a summary of my data',
    'correct'            => 'Correct or update my data',
    'delete'             => 'Delete my data',
    'export'             => 'Export my data (machine-readable copy)',
    'remove-review'      => 'Remove my review or photo from the website',
    'withdraw-marketing' => 'Stop updates and messages (withdraw consent for updates)',
    'withdraw-all'       => 'Withdraw all consent',
    'nominate'           => 'Nominate someone to exercise my rights',
    'complaint'          => 'Complaint or other request',
];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Your Data Rights | The Rapple Skin Care</title>
   <meta name="description" content="Ask The Rapple Skin Care to access, correct, delete or export your personal data, remove a review, withdraw consent, or nominate someone.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include('header-links.php') ?>
   <style>
      .nav-container { max-width: 1500px; margin: 0 auto; padding: 0 20px; }
      .policy-content { max-width: 800px; margin: 0 auto; font-size: 16px; line-height: 1.7; }
      .policy-content a { text-decoration: underline; }
      .policy-box { background: #f6ece5; border-left: 4px solid #b98b6e; padding: 18px 22px; margin: 20px 0 30px; }
      .policy-box p { margin-bottom: 4px; }
      .data-request-form label { font-weight: 600; margin-bottom: 6px; display: block; }
      .data-request-form .form-field { margin-bottom: 18px; }
      .data-request-form input[type=text], .data-request-form input[type=email], .data-request-form input[type=tel],
      .data-request-form select, .data-request-form textarea { width: 100%; border: 1px solid #e2d3c8; border-radius: 6px; padding: 12px 14px; background: #fff; }
      .data-request-form fieldset { border: 1px solid #e2d3c8; border-radius: 6px; padding: 18px; margin-bottom: 18px; }
      .data-request-form legend { font-size: 18px; width: auto; padding: 0 6px; float: none; margin-bottom: 0; }
      .data-request-form .consent-check { display: flex; align-items: flex-start; gap: 10px; font-weight: 400; cursor: pointer; }
      .data-request-form .consent-check input[type=checkbox] { appearance: auto; -webkit-appearance: checkbox; width: 18px; height: 18px; flex: 0 0 18px; margin: 3px 0 0; }
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
                     <h1 class="font-ovrd" style="font-size:50px">Your Data Rights</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section style="padding:70px 0">
         <div class="container">
            <div class="policy-content">
               <p>Under India's Digital Personal Data Protection Act, 2023, you can ask us to show, correct, delete or export the personal data you have shared with us, remove a review or photo, stop updates, withdraw your consent, or nominate someone to act for you. Parents and guardians can make requests for their children. Use this form, or contact our Grievance Officer at <a href="mailto:<?php echo h($grievance['email']); ?>"><?php echo h($grievance['email']); ?></a> or <a href="tel:<?php echo h(str_replace(' ', '', $grievance['phone'])); ?>"><?php echo h($grievance['phone']); ?></a> (details in our <a href="privacy-policy.php">Privacy Policy</a>).</p>

               <div class="policy-box">
                  <p><strong>What happens next</strong></p>
                  <p>1. We acknowledge your request within 2 business days.</p>
                  <p>2. Before we delete, export or change any data, we verify your identity by sending a one-time password (OTP) to the email or phone number you gave us, or by calling you back on it.</p>
                  <p>3. We aim to complete your request within 15 business days and will tell you once it is done.</p>
               </div>

               <form accept-charset="UTF-8" action="<?php echo h($dataRequestEndpoint); ?>" method="POST" class="data-request-form" id="data-request-form">
                  <input type="hidden" name="form_type" value="Data rights request">

                  <div class="form-field">
                     <label for="dr-type">What would you like us to do? *</label>
                     <select id="dr-type" name="request_type" required>
                        <option value="" disabled selected>Choose a request</option>
                        <?php foreach ($requestTypes as $slug => $label): ?>
                           <option value="<?php echo h($label); ?>" data-slug="<?php echo h($slug); ?>"><?php echo h($label); ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div class="form-field">
                     <label for="dr-name">Your full name *</label>
                     <input id="dr-name" type="text" name="name" required>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-field">
                        <label for="dr-email">Email you gave us *</label>
                        <input id="dr-email" type="email" name="email" required>
                     </div>
                     <div class="col-md-6 form-field">
                        <label for="dr-phone">Phone number (optional)</label>
                        <input id="dr-phone" type="tel" name="phone" pattern="[0-9+\- ]{10,15}">
                     </div>
                  </div>
                  <div class="form-field">
                     <label for="dr-message">Describe what you need *</label>
                     <textarea id="dr-message" name="message" rows="4" required placeholder="For example: which details to correct, or which review to remove."></textarea>
                  </div>

                  <fieldset id="dr-nominee">
                     <legend>Nominee details</legend>
                     <p style="font-size:14px">Your nominee can exercise your data rights (access, correction, deletion) on your behalf if you pass away or become unable to manage them. We will ask for ID proof for you and your nominee when we verify this request.</p>
                     <div class="row">
                        <div class="col-md-6 form-field">
                           <label for="dr-nominee-name">Nominee's full name *</label>
                           <input id="dr-nominee-name" type="text" name="nominee_name">
                        </div>
                        <div class="col-md-6 form-field">
                           <label for="dr-nominee-relation">Relationship to you *</label>
                           <input id="dr-nominee-relation" type="text" name="nominee_relationship">
                        </div>
                        <div class="col-md-6 form-field">
                           <label for="dr-nominee-phone">Nominee's phone number *</label>
                           <input id="dr-nominee-phone" type="tel" name="nominee_phone">
                        </div>
                        <div class="col-md-6 form-field">
                           <label for="dr-nominee-email">Nominee's email</label>
                           <input id="dr-nominee-email" type="email" name="nominee_email">
                        </div>
                     </div>
                  </fieldset>

                  <div class="form-field">
                     <label class="consent-check">
                        <input type="checkbox" name="identity_confirmation" value="yes" required>
                        <span>I confirm I am the person named above (or the parent or guardian of the child concerned), or legally authorised to act for them. I understand <?php echo h($org['brand']); ?> will verify my identity before acting on this request, and will use these details only to handle it. *</span>
                     </label>
                  </div>
                  <input type="hidden" name="consent_version" value="<?php echo h($consentVersion); ?>">

                  <div class="text-center">
                     <button type="submit" class="appointment-cta-button">Submit request</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
   </main>
   <?php include('footer.php') ?>

   <script>
      (function () {
         var select = document.getElementById('dr-type');
         var box = document.getElementById('dr-nominee');
         var required = ['dr-nominee-name', 'dr-nominee-relation', 'dr-nominee-phone'];
         // Pre-select the request type from ?type=...
         var wanted = new URLSearchParams(window.location.search).get('type');
         if (wanted) {
            for (var i = 0; i < select.options.length; i++) {
               if (select.options[i].getAttribute('data-slug') === wanted) { select.selectedIndex = i; break; }
            }
         }
         // Show the nominee fields (and make them required) only for nomination requests.
         function update() {
            var opt = select.options[select.selectedIndex];
            var isNominate = opt && opt.getAttribute('data-slug') === 'nominate';
            box.style.display = isNominate ? '' : 'none';
            required.forEach(function (id) { document.getElementById(id).required = isNominate; });
         }
         select.addEventListener('change', update);
         update();
      })();
   </script>

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
