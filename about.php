<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>About Dr Rapple</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php include('header-links.php') ?>

   <style>
      /* Load-in animations */
      @keyframes fadeInUp {
         from {
            opacity: 0;
            transform: translateY(30px);
         }

         to {
            opacity: 1;
            transform: translateY(0);
         }
      }

      @keyframes fadeInLeft {
         from {
            opacity: 0;
            transform: translateY(-30px);
         }

         to {
            opacity: 1;
            transform: translateY(0);
         }
      }

      @keyframes fadeInRight {
         from {
            opacity: 0;
            transform: translateY(30px);
         }

         to {
            opacity: 1;
            transform: translateY(0);
         }
      }

      .container {
         max-width: 1400px;
         margin: 0 auto;
         padding: 0 20px;
      }

      /* Know Your Skin Type Section */
      .skin-type-section {
         /* padding: 80px 0; */
         background: linear-gradient(135deg, #F5E6D3 0%, #E8D4C4 100%);
         animation: fadeInUp 1s ease-out;
      }

      .skin-type-content {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 60px;
         align-items: center;
      }

      .skin-type-text {
         animation: fadeInLeft 1.2s ease-out;
      }

      .skin-type-text h2 {
         font-size: 3rem;
         font-weight: 300;
         color: #6B4C3A;
         margin-bottom: 24px;
         letter-spacing: -1px;
      }

      .skin-type-text p {
         font-size: 1.2rem;
         color: #8B6F47;
         /* margin-bottom: 32px; */
         line-height: 1.8;
      }

      .skin-type-title {
         font-size: 2.5rem;
         font-weight: 500;
         font-family: --tp-ff-heading;
         font-style: italic;
         color: #6B4C3A;
         margin-bottom: 16px;
         letter-spacing: -0.5px;
      }

      .cta-button {
         display: inline-block;
         padding: 16px 40px;
         background-color: #A67C5A;
         color: #FAF7F2;
         text-decoration: none;
         font-size: 1.1rem;
         font-weight: 500;
         letter-spacing: 0.5px;
         transition: all 0.3s ease;
         border: 2px solid #A67C5A;
      }

      .cta-button:hover {
         background-color: #fff3e1;
         color: #A67C5A;
         transform: translateY(-2px);
      }

      .skin-type-image {
         animation: fadeInRight 1.2s ease-out;
      }

      .skin-type-image img {
         width: 100%;
         /* height: 400px; */
         object-fit: cover;
         filter: sepia(20%) saturate(1.2);
      }

      /* Our Services Section */
      .services-section {
         padding: 100px 0;
         background-color: #FAF7F2;
      }

      .services-header {
         text-align: center;
         margin-bottom: 80px;
         animation: fadeInUp 1s ease-out 0.2s both;
      }

      .services-header h2 {
         font-size: 3rem;
         font-weight: 300;
         color: #6B4C3A;
         margin-bottom: 16px;
         letter-spacing: -1px;
      }

      .services-header p {
         font-size: 1.2rem;
         color: #8B6F47;
         max-width: 600px;
         margin: 0 auto;
      }

      .services-grid {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
         gap: 40px;
         margin-top: 60px;
      }

      .service-item {
         background-color: #F5E6D3;
         padding: 40px 30px;
         text-align: center;
         border: 1px solid #E8D4C4;
         animation: fadeInUp 1s ease-out both;
      }

      .service-item:nth-child(1) {
         animation-delay: 0.1s;
      }

      .service-item:nth-child(2) {
         animation-delay: 0.2s;
      }

      .service-item:nth-child(3) {
         animation-delay: 0.3s;
      }

      .service-item:nth-child(4) {
         animation-delay: 0.4s;
      }

      .service-item:nth-child(5) {
         animation-delay: 0.5s;
      }

      .service-item:nth-child(6) {
         animation-delay: 0.6s;
      }

      .service-item:nth-child(7) {
         animation-delay: 0.7s;
      }

      .service-item:nth-child(8) {
         animation-delay: 0.8s;
      }

      .service-icon {
         width: 200px;
         height: 200px;
         margin: 0 auto 24px;
         background-color: #f0dcca;
         border-radius: 100%;
         display: flex;
         overflow: hidden;
         align-items: center;
         object-fit: cover;
         justify-content: center;
      }

      .service-icon img {
         width: 100%;
         height: 100%;
         /* filter: brightness(0) invert(1) sepia(100%) saturate(200%) hue-rotate(15deg) brightness(80%); */
         object-fit: cover;
      }

      .service-item h3 {
         font-size: 1.4rem;
         color: #6B4C3A;
         margin-bottom: 12px;
         font-weight: 400;
      }

      .service-item .service-for {
         font-size: 0.95rem;
         color: #A67C5A;
         font-style: italic;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
         .skin-type-content {
            grid-template-columns: 1fr;
            gap: 40px;
            text-align: center;
         }

         .skin-type-text h2,
         .services-header h2 {
            font-size: 2.2rem;
         }

         .services-grid {
            grid-template-columns: 1fr;
            gap: 30px;
         }

         .service-item {
            padding: 30px 20px;
         }
      }

      .nav-container {
         max-width: 1500px;
         margin: 0 auto;
         padding: 0 20px;
      }

      .blog-cover {
         width: 100%;
         height: 300px;
         object-fit: cover;
         /* border-radius: 10px; */
         transition: transform 0.3s ease;
      }
   </style>
</head>

<body>
    
  <?php include('header.php') ?>

  

   <main>

      <!-- breadcrumb-area-start -->
      <section class="breadcrumb-area tpbreadcrumb-overlay" data-background="assets/img/about/about-breadcrumbs.webp">
         <div class=" container">
            <div class="row align-items-center">
               <div class="col-12">
                  <div class="tpbreadcrumb text-center">
                     <h2 class="tpbreadcrumb-title  font-ovrd">About Dr. Parneet Sidhu</h2>
                     <p>Welcome to my personal page! Here, you'll find information <br> about my background, skills, and
                        passions.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- about-area-start -->
      <section class="about-area pt-60">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <div class="about-inner mb-60">
                     <div class="tpsection mb-30">
                        <h2 class="tpsection-title mb-25  font-ovrd">Healthy Skin, Happy You</h2>
                        <p>Dr. Rapple is a board-certified dermatologist dedicated to helping people feel confident in their skin and hair. She believes in listening to each patient’s concerns, offering honest advice, and using safe, advanced treatments for real, lasting results. Her approach is gentle, personal, and focused on making every patient feel comfortable throughout their journey.</p>
                     </div>
                     <ul>
                        <li>
                           <span>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_364_2683)">
                                    <path
                                       d="M12.0001 0C18.6301 0 24.0001 5.37 24.0001 12C24.0001 18.63 18.6301 24 12.0001 24C5.37006 24 5.59967e-05 18.63 5.59967e-05 12C-0.019944 5.39 5.32006 0.02 11.9301 0C11.9501 0 11.9801 0 12.0001 0Z"
                                       fill="currentColor" />
                                    <path
                                       d="M18.6516 8.69027L10.1316 17.2203L5.35156 12.4803L7.30156 10.5703L10.1316 13.3603L16.7016 6.78027L18.6516 8.69027Z"
                                       fill="white" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_364_26831">
                                       <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </span>
                           Healthy skin you can feel proud of
                        </li>
                        <li>
                           <span>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_364_2683)">
                                    <path
                                       d="M12.0001 0C18.6301 0 24.0001 5.37 24.0001 12C24.0001 18.63 18.6301 24 12.0001 24C5.37006 24 5.59967e-05 18.63 5.59967e-05 12C-0.019944 5.39 5.32006 0.02 11.9301 0C11.9501 0 11.9801 0 12.0001 0Z"
                                       fill="currentColor" />
                                    <path
                                       d="M18.6516 8.69027L10.1316 17.2203L5.35156 12.4803L7.30156 10.5703L10.1316 13.3603L16.7016 6.78027L18.6516 8.69027Z"
                                       fill="white" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_364_26832">
                                       <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </span>
                           Strong, beautiful hair full of life
                        </li>
                        <li>
                           <span>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_364_2683)">
                                    <path
                                       d="M12.0001 0C18.6301 0 24.0001 5.37 24.0001 12C24.0001 18.63 18.6301 24 12.0001 24C5.37006 24 5.59967e-05 18.63 5.59967e-05 12C-0.019944 5.39 5.32006 0.02 11.9301 0C11.9501 0 11.9801 0 12.0001 0Z"
                                       fill="currentColor" />
                                    <path
                                       d="M18.6516 8.69027L10.1316 17.2203L5.35156 12.4803L7.30156 10.5703L10.1316 13.3603L16.7016 6.78027L18.6516 8.69027Z"
                                       fill="white" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_364_26833">
                                       <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </span>
                          Personalized care for every concern
                        </li>
                        <li>
                           <span>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_364_2683)">
                                    <path
                                       d="M12.0001 0C18.6301 0 24.0001 5.37 24.0001 12C24.0001 18.63 18.6301 24 12.0001 24C5.37006 24 5.59967e-05 18.63 5.59967e-05 12C-0.019944 5.39 5.32006 0.02 11.9301 0C11.9501 0 11.9801 0 12.0001 0Z"
                                       fill="currentColor" />
                                    <path
                                       d="M18.6516 8.69027L10.1316 17.2203L5.35156 12.4803L7.30156 10.5703L10.1316 13.3603L16.7016 6.78027L18.6516 8.69027Z"
                                       fill="white" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_364_26834">
                                       <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </span>
                           Results that last and boost your confidence
                        </li>
                     </ul>
                     <div >
                        <a href="contact" class="appointment-cta-button">Contact With Us</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about-inner-wrap text-lg-end mb-60 wow fadeInRight" data-wow-duration="1s"
                     data-wow-delay=".2s">
                     <div class="about-inner-thumb">
                        <img src="assets/img/about/rapple-whychoose.webp" class="img-fluid brb">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about-area-end -->
      
      <style>
 

        .timeline-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .timeline-item {
            margin-bottom: 80px;
            position: relative;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .year-badge {
            background-color: #ECD9CB;
            border-radius: 50px;
            padding: 15px 25px;
            font-size: 18px;
            font-weight: 600;
            color: #8B7355;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            display: inline-block;
            margin-bottom: 20px;
        }

        .content-card {
            background-color: #ECD9CB;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .content-card .icon {
            font-size: 24px;
            color: #8B7355;
            margin-bottom: 15px;
        }

        .content-card h3 {
            font-size: 24px;
            font-weight: 700;
            color: #2c2c2c;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .content-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 0;
            font-size: 15px;
        }

        .timeline-image {
            border-radius: 20px;
            width: 100%;
            height: 300px;
            object-fit: cover;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }

        .year-mobile {
            display: none;
        }

        .year-desktop {
            position: absolute;
            left: 50%;
            transform: translateY(-50%);
            z-index: 10;
            top: -20px;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            .year-desktop {
                display: none;
            }
            
            .year-mobile {
                display: block;
                text-align: center;
                margin-bottom: 30px;
            }

            .timeline-item {
                margin-bottom: 60px;
            }

            .content-card {
                padding: 25px;
            }

            .content-card h3 {
                font-size: 20px;
            }

            .timeline-image {
                height: 250px;
                margin-bottom: 20px;
            }

            .year-badge {
                font-size: 16px;
                padding: 12px 20px;
            }
        }

        /* Tablet adjustments */
        @media (max-width: 992px) and (min-width: 769px) {
            .content-card {
                padding: 30px;
            }
            
            .timeline-image {
                height: 280px;
            }
        }

        /* Animation */
        .timeline-item {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .timeline-item:nth-child(2) {
            animation-delay: 0.2s;
        }

        .timeline-item:nth-child(3) {
            animation-delay: 0.4s;
        }

        .timeline-item:nth-child(4) {
            animation-delay: 0.6s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
      
      

      <!-- history-area-start -->
      <section class="history-area pt-70 pb-70 bg-2">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tpsection text-center mb-65">
                     <h2 class="tpsection-title  font-ovrd">My Professional Growth History</h2>
                  </div>
               </div>
            </div>
            <div class='row'>
                <div class="col-12">
                     <div class="timeline-container">
                        <!-- Timeline Item 1 -->
                        <div class="timeline-item">
                            <div class="year-desktop">
                                <div class="year-badge">2018 </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <!-- Mobile Year -->
                                <div class="col-12 year-mobile">
                                    <div class="year-badge">2018</div>
                                </div>
                                
                                <!-- Desktop: Image Left, Content Right -->
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <img src="assets/img/about/Medical1.webp" alt="Medical Foundation" class="timeline-image">
                                </div>
                                <div class="col-lg-6 order-lg-2 order-3">
                                    <div class="content-card">
                                        <h3 class="font-ovrd">Medical Foundation Completed</h3>
                                        <p>Graduated with an MBBS from Muzaffarnagar Medical College and Hospital, backed by a strong academic foundation. <br>Achieved distinction in Biochemistry (80%), ranking among the top performers in the batch.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Timeline Item 2 -->
                        <div class="timeline-item">
                            <div class="year-desktop">
                                <div class="year-badge">2018 - 2019</div>
                            </div>
                            
                            <div class="row align-items-center">
                                <!-- Mobile Year -->
                                <div class="col-12 year-mobile">
                                    <div class="year-badge">2018 - 2019</div>
                                </div>
                                
                                <!-- Desktop: Content Left, Image Right -->
                                <div class="col-lg-6 order-lg-1 order-3">
                                    <div class="content-card">
                                        <h3 class="font-ovrd">Internship from the government multispeciality hospital (GMSH sec 16), Chandigarh</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-2 order-2">
                                    <img src="assets/img/about/Internship.webp" alt="Specialized Training" class="timeline-image">
                                </div>
                            </div>
                        </div>
                
                        <!-- Timeline Item 3 -->
                        <div class="timeline-item">
                            <div class="year-desktop">
                                <div class="year-badge">2020 </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <!-- Mobile Year -->
                                <div class="col-12 year-mobile">
                                    <div class="year-badge">2020 </div>
                                </div>
                                
                                <!-- Desktop: Image Left, Content Right -->
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <img src="assets/img/about/Specialized1.webp" alt="Advanced Fellowship" class="timeline-image">
                                </div>
                                <div class="col-lg-6 order-lg-2 order-3">
                                    <div class="content-card">
                                       
                                        <h3 class="font-ovrd">Specialized Training Begun</h3>
                                        <p>Started MD Dermatology at Muzaffarnagar Medical College and Hospital, with focused training in venereology and leprology.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="year-desktop">
                                <div class="year-badge">Aug 2023</div>
                            </div>
                            
                            <div class="row align-items-center">
                                <!-- Mobile Year -->
                                <div class="col-12 year-mobile">
                                    <div class="year-badge">Aug 2023</div>
                                </div>
                                
                                <!-- Desktop: Content Left, Image Right -->
                                <div class="col-lg-6 order-lg-1 order-3">
                                    <div class="content-card">
                                        <h3 class="font-ovrd">Completed MD with bronze medal</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-2 order-2">
                                    <img src="assets/img/about/Completed.webp" alt="Specialized Training" class="timeline-image">
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="year-desktop">
                                <div class="year-badge">2024 <br>Onward </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <!-- Mobile Year -->
                                <div class="col-12 year-mobile">
                                    <div class="year-badge">2024  Onward </div>
                                </div>
                                
                                <!-- Desktop: Image Left, Content Right -->
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <img src="assets/img/about/Clinical1.webp" alt="Advanced Fellowship" class="timeline-image">
                                </div>
                                <div class="col-lg-6 order-lg-2 order-3">
                                    <div class="content-card">
                                        <h3 class="font-ovrd">Clinical Leadership & Global Learning</h3>
                                        <p>Joined as a Senior Resident in 2024 and became an Assistant Professor in 2025, leading patient care and treatment planning. <br>Expanded skills through international dermatology conferences in Bangkok and Dubai.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                       
                </div>
            </div>
         </div>
      </section>
      <!-- history-area-end -->

      <!-- choose-area-start -->
      <section class="choose-area  pt-70 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-12">
                  <div class="choose-inner-thumb text-lg-end wow fadeInLeft" data-wow-duration="1s"
                     data-wow-delay=".4s">
                     <img src="assets/img/about/abt-2.png" alt="" class="brb">
                  </div>
               </div>
               <div class="col-xl-8 col-lg-12">
                  <div class="choose-inner-wrap">
                     <div class="tpsection mb-50">
                        <h2 class="tpsection-title  font-ovrd">Why Choose Dr. Parneet Sidhu?</h2>
                     </div>
                     <div class="choose-inner-info d-flex">
                        <div class="choose-inner-content">
                           <div class="choose-inner-text">
                              <p>Every consultation is about listening, understanding, and building trust. You're never rushed or sold to, just guided with honesty and care.</p>
                           </div>
                           <div class="about-3-list-item mb-25">
                              <div class="about-3-list-icon">
                                 <span>
                                    <img src="assets/img/about/Support-When.png" class="img-fluid" style="width:60px">
                                 </span>
                              </div>
                              <div class="about-3-list-content">
                                 <h2 class=" font-ovrd">Support When You Need It</h2>
                                 <b>We’re here for your skin, every step of the way.</b>
                                 <p>Got a question after your visit? Need aftercare help? We're just a call or message away because your peace of mind matters.</p>
                              </div>
                           </div>
                           <div class="about-3-list-item mb-25">
                              <div class="about-3-list-icon">
                                 <span>
                                    <img src="assets/img/about/Expert-Backed.png" class="img-fluid" style="width:60px">
                                 </span>
                              </div>
                              <div class="about-3-list-content">
                                 <h2 class=" font-ovrd">Expert-Backed Treatments</h2>
                                 <b>Led by experts, backed by science.</b>
                                 <p>From acne to anti-aging, every treatment is done with skill, safety, and your skin's unique needs in mind.</p>
                              </div>
                           </div>
                        </div>
                        <div class="choose-inner-sm-thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                           <img src="assets/img/about/abt-3.png" alt="" class="brb">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- choose-area-end -->


   </main>

   <!-- footer-area-start -->
   
   
   <?php include('footer.php') ?>
   <!-- footer-area-end -->



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