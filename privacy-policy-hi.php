<?php require_once 'privacy-config.php'; ?>
<!doctype html>
<html class="no-js" lang="hi">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>गोपनीयता नीति | The Rapple Skin Care</title>
   <meta name="description" content="द रैपल स्किन केयर आपका व्यक्तिगत डेटा कैसे एकत्र, उपयोग और सुरक्षित करता है, और DPDP अधिनियम के तहत आपके अधिकार।">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include('header-links.php') ?>
   <style>
      .nav-container { max-width: 1500px; margin: 0 auto; padding: 0 20px; }
      .policy-content { max-width: 900px; margin: 0 auto; font-size: 16px; line-height: 1.8; }
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
                     <h1 class="font-ovrd" style="font-size:50px">गोपनीयता नीति</h1>
                     <p style="margin:0">अंतिम अपडेट: <?php echo h($policyUpdatedHi); ?> &nbsp;|&nbsp; भाषा: <a href="privacy-policy.php" lang="en" style="text-decoration:underline">English</a> | <strong>हिन्दी</strong></p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section style="padding:70px 0">
         <div class="container">
            <div class="policy-content">
               <h2>1. हम कौन हैं</h2>
               <p>यह गोपनीयता नीति बताती है कि <?php echo h($org['brand']); ?>, <?php echo h($org['doctor']); ?> का स्किन क्लिनिक ("हम"), इस वेबसाइट (<?php echo h($org['website']); ?>) के माध्यम से व्यक्तिगत डेटा कैसे एकत्र, उपयोग और सुरक्षित करता है। यह नीति भारत के डिजिटल व्यक्तिगत डेटा संरक्षण अधिनियम, 2023 ("DPDP अधिनियम") और उसके तहत बने नियमों के अनुसार है।</p>
               <p>यह नीति केवल इस वेबसाइट के माध्यम से दी गई जानकारी पर लागू होती है। हमारे क्लिनिक में परामर्श या इलाज के दौरान बने रिकॉर्ड हमारी रोगी गोपनीयता प्रक्रियाओं और लागू चिकित्सा कानूनों के अनुसार संभाले जाते हैं।</p>

               <h2>2. हम कौन-सा व्यक्तिगत डेटा एकत्र करते हैं</h2>
               <table>
                  <thead><tr><th>जानकारी</th><th>कहाँ एकत्र की जाती है</th><th>अनिवार्य?</th></tr></thead>
                  <tbody>
                     <tr><td>त्वचा की समस्याओं (जैसे मुहाँसे, पिगमेंटेशन, बढ़ती उम्र के लक्षण, संवेदनशीलता और रूखापन) के बारे में आपके जवाब</td><td>स्किन क्विज़</td><td>सुझाव पाने के लिए</td></tr>
                     <tr><td>पहला और अंतिम नाम, ईमेल पता और फ़ोन नंबर</td><td>स्किन क्विज़ का बुकिंग चरण</td><td>हाँ, परामर्श बुक करने के लिए</td></tr>
                     <tr><td>अपॉइंटमेंट की पसंदीदा तारीख और समय, और अन्य समस्याएँ</td><td>स्किन क्विज़ का बुकिंग चरण</td><td>वैकल्पिक। कृपया विस्तृत मेडिकल इतिहास यहाँ न लिखें; डॉक्टर परामर्श के दौरान आपसे इस पर बात करेंगी।</td></tr>
                     <tr><td>आपकी सहमति के विकल्प, और आपने इस सूचना का कौन-सा संस्करण देखा</td><td>स्किन क्विज़ का बुकिंग चरण</td><td>आपकी बुकिंग के साथ दर्ज होता है</td></tr>
                     <tr><td>डेटा अधिकार अनुरोध का विवरण, जिसमें नामांकित व्यक्ति (नॉमिनी) का नाम और संपर्क विवरण शामिल है</td><td><a href="data-request.php">आपके डेटा अधिकार</a> पेज</td><td>केवल उतना, जितना आपके अनुरोध के लिए ज़रूरी है</td></tr>
                     <tr><td>तकनीकी डेटा, जैसे IP पता और ब्राउज़र का प्रकार</td><td>हमारे होस्टिंग प्रदाता और धारा 5 में बताई गई तृतीय-पक्ष सेवाओं द्वारा अपने-आप</td><td>स्वचालित</td></tr>
                  </tbody>
               </table>
               <p>हम इस वेबसाइट पर विज्ञापन या एनालिटिक्स ट्रैकर (जैसे Meta Pixel या Google Analytics) का उपयोग नहीं करते, और हम स्वयं कोई कुकी सेट नहीं करते। धारा 5 में बताई गई कुछ तृतीय-पक्ष सेवाएँ अपनी कुकीज़ सेट कर सकती हैं।</p>

               <h2>3. हम इसका उपयोग क्यों करते हैं</h2>
               <ul>
                  <li>आपका परामर्श तय करने और उपयुक्त इलाज सुझाने के लिए। यह हम आपकी सहमति से करते हैं, जो आप बुकिंग चरण में अनिवार्य बॉक्स पर टिक करके देते हैं।</li>
                  <li>WhatsApp, SMS या ईमेल से अपडेट और त्वचा देखभाल के सुझाव भेजने के लिए, <strong>केवल तभी</strong> जब आप वैकल्पिक अपडेट बॉक्स पर टिक करें।</li>
                  <li>आपके डेटा अधिकार अनुरोधों और शिकायतों का निपटारा करने के लिए।</li>
                  <li>इस वेबसाइट को सुरक्षित रखने और कानूनी दायित्वों को पूरा करने के लिए।</li>
               </ul>
               <p>हम आपका व्यक्तिगत डेटा नहीं बेचते। आपसे पूछे बिना हम इसका किसी अन्य उद्देश्य के लिए उपयोग नहीं करेंगे।</p>

               <h2>4. आपकी सहमति और उसे वापस लेने का तरीका</h2>
               <p>बुकिंग चरण में दो अलग-अलग चेकबॉक्स हैं। पहला हमें आपका परामर्श तय करने के लिए आपके विवरण और क्विज़ के जवाबों का उपयोग करने देता है। दूसरा, अपडेट के लिए, वैकल्पिक है और पहले से टिक नहीं होता। आप किसी भी समय, उतनी ही आसानी से जितनी आसानी से आपने सहमति दी थी, अपनी सहमति वापस ले सकते हैं:</p>
               <ul>
                  <li><a href="data-request.php?type=withdraw-marketing">आपके डेटा अधिकार</a> पेज का उपयोग करके;</li>
                  <li>हमारे किसी भी WhatsApp या SMS संदेश का "STOP" लिखकर जवाब देकर;</li>
                  <li>हमारे किसी भी अपडेट ईमेल में "Unsubscribe" पर क्लिक करके; या</li>
                  <li>हमारे शिकायत अधिकारी से संपर्क करके (विवरण धारा 11 में)।</li>
               </ul>
               <p>सहमति वापस लेने से, उससे पहले आपके डेटा के साथ किए गए कार्य प्रभावित नहीं होते।</p>

               <h2>5. हम इसे किसके साथ साझा करते हैं</h2>
               <p>हम व्यक्तिगत डेटा केवल उन सेवा प्रदाताओं के साथ साझा करते हैं जो इस वेबसाइट को चलाने और आपको जवाब देने में हमारी मदद करते हैं। वे इसका उपयोग केवल हमारे निर्देशों पर कर सकते हैं।</p>
               <ul>
                  <li><strong>Formester</strong> (ऑनलाइन फ़ॉर्म सेवा): फ़ॉर्म की जानकारी, जैसे डेटा अधिकार अनुरोध, प्राप्त और संग्रहीत करता है।</li>
                  <li><strong>हमारा वेबसाइट होस्टिंग प्रदाता</strong>: वेबसाइट होस्ट करता है और सर्वर लॉग रखता है।</li>
                  <li><strong>ईमेल और मैसेजिंग प्रदाता</strong>, जिनका उपयोग हमारी टीम आपको जवाब देने के लिए करती है, जैसे ईमेल और WhatsApp।</li>
                  <li><strong>YouTube और Google Fonts</strong>: इस वेबसाइट के वीडियो और कुछ फ़ॉन्ट Google से लोड होते हैं, जिसे आपका IP पता और ब्राउज़र विवरण मिलता है और जो <a href="https://policies.google.com/privacy?hl=hi" target="_blank" rel="noopener">Google की गोपनीयता नीति</a> के अनुसार कुकीज़ सेट कर सकता है।</li>
                  <li><strong>इमेज सेवाएँ</strong> (Unsplash और placeholder.com): इस वेबसाइट की कुछ तस्वीरें इन सेवाओं से लोड होती हैं, जिन्हें आपका IP पता और ब्राउज़र विवरण मिलता है।</li>
                  <li><strong>Instagram और Facebook</strong>: यदि आप हमारे सोशल मीडिया पेजों के लिंक पर जाते हैं, तो वे साइटें अपनी नीतियों के अनुसार आपका डेटा संभालती हैं।</li>
               </ul>
               <p>कानून द्वारा आवश्यक होने पर हम व्यक्तिगत डेटा का खुलासा कर सकते हैं। हम आपका डेटा विज्ञापनदाताओं के साथ साझा नहीं करते।</p>

               <h2>6. हम इसे कितने समय तक रखते हैं</h2>
               <ul>
                  <li><strong>बुकिंग और क्विज़ के जवाब:</strong> आपसे अंतिम संपर्क के 12 महीने बाद तक, जब तक कि आप हमारे मरीज़ न बन जाएँ; उस स्थिति में मेडिकल रिकॉर्ड रखने के नियम लागू होते हैं।</li>
                  <li><strong>अपडेट की सहमति:</strong> जब तक आप इसे वापस न लें। सहमति वापस लेने का रिकॉर्ड हम रखते हैं, ताकि दिखा सकें कि हमने उसका पालन किया।</li>
                  <li><strong>डेटा अधिकार अनुरोध और शिकायतें:</strong> अनुरोध बंद होने के 2 साल बाद तक।</li>
                  <li><strong>सर्वर लॉग:</strong> सुरक्षा के लिए 1 साल तक।</li>
               </ul>
               <p>इन अवधियों के बाद हम डेटा हटा देते हैं या उसे गुमनाम (anonymous) बना देते हैं।</p>

               <h2>7. हम इसकी सुरक्षा कैसे करते हैं</h2>
               <p>पूरी वेबसाइट HTTPS एन्क्रिप्शन का उपयोग करती है, और हमारे फ़ॉर्म केवल सुरक्षित कनेक्शन पर डेटा भेजते हैं। आपके विवरण तक पहुँच केवल उन कर्मचारियों तक सीमित है जिन्हें आपको जवाब देने के लिए इसकी ज़रूरत है। हम ऐसे सेवा प्रदाताओं का उपयोग करते हैं जो उचित सुरक्षा उपाय प्रदान करते हैं। यदि व्यक्तिगत डेटा का उल्लंघन (breach) होता है, तो हम कानून के अनुसार प्रभावित लोगों और भारतीय डेटा संरक्षण बोर्ड को सूचित करेंगे।</p>

               <h2>8. आपके अधिकार</h2>
               <p>DPDP अधिनियम के तहत आपको ये अधिकार हैं:</p>
               <ul>
                  <li><strong>जानकारी पाने का अधिकार:</strong> हमारे पास आपका कौन-सा व्यक्तिगत डेटा है, हम उसका उपयोग कैसे करते हैं, और किसके साथ साझा किया है, इसका सारांश पाना;</li>
                  <li><strong>सुधार और हटाने का अधिकार:</strong> अपने व्यक्तिगत डेटा को सुधारने, पूरा करने, अपडेट करने या हटाने का अनुरोध करना;</li>
                  <li>किसी भी समय <strong>सहमति वापस लेना</strong> (धारा 4 देखें);</li>
                  <li><strong>शिकायत निवारण:</strong> हमसे शिकायत करना और जवाब पाना (धारा 11 देखें); और</li>
                  <li><strong>नामांकन (नॉमिनेशन):</strong> किसी अन्य व्यक्ति को नामित करना, जो आपकी मृत्यु या असमर्थता की स्थिति में आपकी ओर से इन अधिकारों का उपयोग कर सके।</li>
               </ul>
               <p>आप अपने डेटा की प्रति मशीन-पठनीय (machine-readable) प्रारूप में भी माँग सकते हैं। माता-पिता और कानूनी अभिभावक अपने बच्चों की ओर से इन अधिकारों का उपयोग कर सकते हैं।</p>
               <h3>अनुरोध कैसे करें</h3>
               <p><a href="data-request.php">आपके डेटा अधिकार</a> पेज का उपयोग करें, या हमारे शिकायत अधिकारी से संपर्क करें। कोई भी डेटा हटाने, निर्यात करने या बदलने से पहले हम आपकी पहचान की पुष्टि करेंगे: आपके दिए गए ईमेल या फ़ोन नंबर पर वन-टाइम पासवर्ड (OTP) भेजकर, या उसी नंबर पर आपको वापस कॉल करके। हम 2 कार्य दिवसों के भीतर आपके अनुरोध की प्राप्ति की पुष्टि करेंगे और 15 कार्य दिवसों के भीतर उसे पूरा करने का प्रयास करेंगे।</p>

               <h2>9. बच्चे</h2>
               <p>हमारी कुछ सेवाएँ, जैसे कान छिदवाना, बच्चों को भी दी जाती हैं, लेकिन यह वेबसाइट वयस्कों के लिए है। किसी बच्चे की बुकिंग केवल उसके माता-पिता या कानूनी अभिभावक ही करें, और बुकिंग चरण आपसे इसकी पुष्टि करवाता है। यदि हमें पता चलता है कि हमने माता-पिता या अभिभावक की सत्यापित सहमति के बिना 18 वर्ष से कम आयु के किसी व्यक्ति का व्यक्तिगत डेटा एकत्र किया है, तो हम उसे हटा देंगे।</p>

               <h2>10. मरीज़ों की समीक्षाएँ</h2>
               <p>हमारा होमपेज हमारे क्लाइंट्स द्वारा साझा की गई समीक्षाएँ और तस्वीरें दिखाता है। यदि आप इनमें से किसी समीक्षा में दिखाई देते हैं और उसे हटवाना चाहते हैं, तो कृपया <a href="data-request.php?type=remove-review">आपके डेटा अधिकार</a> पेज का उपयोग करें। हम उसे 15 कार्य दिवसों के भीतर हटा देंगे।</p>

               <h2>11. शिकायत अधिकारी</h2>
               <p>यदि आपके व्यक्तिगत डेटा के उपयोग को लेकर आपका कोई प्रश्न या शिकायत है, तो कृपया हमारे शिकायत अधिकारी से संपर्क करें:</p>
               <div class="policy-box">
                  <p><strong>शिकायत अधिकारी (डेटा संरक्षण), <?php echo h($org['brand']); ?></strong></p>
                  <?php if ($grievance['name'] !== ''): ?><p>नाम: <?php echo h($grievance['name']); ?></p><?php endif; ?>
                  <p>ईमेल: <a href="mailto:<?php echo h($grievance['email']); ?>"><?php echo h($grievance['email']); ?></a></p>
                  <p>फ़ोन: <a href="tel:<?php echo h(str_replace(' ', '', $grievance['phone'])); ?>"><?php echo h($grievance['phone']); ?></a></p>
                  <p>ऑनलाइन: <a href="data-request.php?type=complaint">आपके डेटा अधिकार</a> पेज</p>
                  <?php if ($org['address'] !== ''): ?><p>पता: <?php echo h($org['address']); ?></p><?php endif; ?>
                  <?php if ($grievance['hours_hi'] !== ''): ?><p>समय: <?php echo h($grievance['hours_hi']); ?></p><?php endif; ?>
               </div>
               <p>हम 2 कार्य दिवसों के भीतर आपकी शिकायत की प्राप्ति की पुष्टि करेंगे और 15 कार्य दिवसों के भीतर उसका समाधान करने का प्रयास करेंगे। यदि इस समय में समाधान संभव न हो, तो हम आपको कारण और अपेक्षित समय-सीमा बताएँगे।</p>
               <p>यदि आप हमारे जवाब से संतुष्ट नहीं हैं, तो आप भारतीय डेटा संरक्षण बोर्ड (Data Protection Board of India – DPBI) के आधिकारिक पोर्टल पर अपनी शिकायत आगे बढ़ा सकते हैं: <a href="https://dpbi.gov.in" target="_blank" rel="noopener">https://dpbi.gov.in</a>। कृपया पहले हमारे शिकायत अधिकारी से संपर्क करें, क्योंकि बोर्ड से संपर्क करने से पहले हमारी शिकायत प्रक्रिया का उपयोग करना अपेक्षित है।</p>

               <h2>12. इस नीति में बदलाव</h2>
               <p>हम समय-समय पर इस नीति को अपडेट कर सकते हैं। ऊपर दी गई "अंतिम अपडेट" तारीख बताती है कि इसमें आखिरी बार कब बदलाव हुआ। यदि कोई बदलाव उस डेटा के उपयोग को प्रभावित करता है जो आप पहले ही दे चुके हैं, तो जहाँ आवश्यक हो, हम आपसे दोबारा सहमति लेंगे।</p>
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
