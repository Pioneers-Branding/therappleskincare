<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Dr Rapple</title>
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
            transform: translateX(-30px);
         }

         to {
            opacity: 1;
            transform: translateX(0);
         }
      }

      @keyframes fadeInRight {
         from {
            opacity: 0;
            transform: translateX(30px);
         }

         to {
            opacity: 1;
            transform: translateX(0);
         }
      }

      .container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 20px;
      }

      .font-ovrd {
         font-family: inherit;
      }

      /* Our Services Section */
     

      .services-header {
         text-align: center;
         margin-bottom: 40px;
         animation: fadeInUp 1s ease-out 0.2s both;
      }

      .services-header h2 {
         font-size: 3rem;
         font-weight: 300;
         color: #5a4037;
         margin-bottom: 16px;
         letter-spacing: -1px;
      }

      .services-header p {
         font-size: 1.2rem;
         color: #8B6F47;
         max-width: 800px;
         margin: 0 auto;
      }

      .services-grid {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
         gap: 23px;
      }

      .service-item {
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         border: 1px solid #E8D4C4;
         padding: 40px 30px;
         text-align: center;
         animation: fadeInUp 1s ease-out both;
         position: relative;
         height: 300px;
         display: flex;
         flex-direction: column;
         justify-content: flex-end;
         align-items: center;
      }

      .service-item:hover {
         transform: translateY(-5px);
         box-shadow: 0 10px 20px rgba(139, 111, 77, 0.2);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .service-item::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background: rgba(0, 0, 0, 0.2);
         z-index: 1;
         border-radius:20px;
      }

      .service-content {
         position: relative;
         z-index: 2;
      }

    

      /* Responsive Design */
      @media (max-width: 768px) {
         .services-header h2 {
            font-size: 2.2rem;
         }

         .services-grid {
            grid-template-columns: 1fr;
            gap: 30px;
         }

         .service-item {
            padding: 30px 20px;
            height: 250px;
         }
      }

      @media (max-width: 576px) {
         .service-item {
            height: 220px;
            padding: 20px 15px;
         }

         .service-title {
            font-size: 1.2rem;
         }

         .service-for {
            font-size: 0.9rem;
         }
      }
   </style>

   <style>
      .video-section {
         padding: 70px 0px;
         background: #ECD9CB;
         position: relative;
         overflow: hidden;
      }

      .container {
         max-width: 1400px;
         margin: 0 auto;
         padding: 0 20px;
         position: relative;
         z-index: 2;
      }

      .section-header {
         text-align: center;
         margin-bottom: 40px;
      }

      .section-title {
         font-size: 2.8rem;
         font-weight: 300;
         color: #8b6f4d;
         margin-bottom: 16px;
         letter-spacing: -0.02em;
      }

      .section-subtitle {
         font-size: 1.2rem;
         color: #a08370;
         font-weight: 300;
         line-height: 1.6;
         max-width: 800px;
         margin: 0 auto;
      }

      .video-slider {
         position: relative;
         overflow: hidden;
         backdrop-filter: blur(10px);
         border: 1px solid rgba(245, 222, 208, 0.3);
         box-shadow: 0 20px 60px rgba(139, 111, 77, 0.08);
      }

      .video-container {
         display: flex;
         transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .video-slide {
         flex: 0 0 auto;
         background: #ffffff;
         margin-right: 20px;
         position: relative;
      }

      .video-slide:last-child {
         margin-right: 0;
      }

      .video-wrapper {
         position: relative;
         padding-bottom: 177.78%;
         /* 9:16 aspect ratio for YouTube Shorts */
         height: 0;
         overflow: hidden;
         background: #f8f4f0;
      }

      .video-wrapper iframe {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         border: none;
      }

      .video-info {
         padding: 30px 25px;
         background: linear-gradient(135deg, #ffffff 0%, #fdfbf8 100%);
         border-top: 1px solid rgba(245, 222, 208, 0.2);
         /* height: 220px; */
         overflow: hidden;
         display: flex;
         flex-direction: column;
         justify-content: flex-start;
      }

      .video-title {
         font-style: italic;
         font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
         font-size: 1.3rem;
         font-weight: 400;
         color: #8b6f4d;
         margin-bottom: 12px;
         line-height: 1.3;
         display: -webkit-box;
         -webkit-line-clamp: 2;
         -webkit-box-orient: vertical;
         overflow: hidden;
      }

      .video-description {
         font-size: 0.95rem;
         color: #9d8577;
         line-height: 1.6;
         font-weight: 300;
         display: -webkit-box;
         -webkit-line-clamp: 4;
         -webkit-box-orient: vertical;
         overflow: hidden;
         flex-grow: 1;
      }

      .treatment-badge {
         position: absolute;
         top: 15px;
         left: 15px;
         background: rgba(139, 111, 77, 0.9);
         color: white;
         padding: 6px 12px;
         font-size: 0.8rem;
         font-weight: 400;
         letter-spacing: 0.5px;
         backdrop-filter: blur(10px);
         z-index: 10;
      }

      .slider-navigation {
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-top: 40px;
      }

      .nav-button {
         width: 50px;
         height: 50px;
         border: 1px solid rgba(139, 111, 77, 0.2);
         background: rgba(255, 255, 255, 0.9);
         color: #8b6f4d;
         cursor: pointer;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 20px;
         transition: all 0.3s ease;
         backdrop-filter: blur(10px);
      }

      .nav-button:hover {
         background: rgba(139, 111, 77, 0.1);
         border-color: rgba(139, 111, 77, 0.3);
         transform: translateY(-2px);
         box-shadow: 0 8px 25px rgba(139, 111, 77, 0.15);
      }

      .nav-button:disabled {
         opacity: 0.4;
         cursor: not-allowed;
         transform: none;
         box-shadow: none;
      }

      .slider-dots {
         display: flex;
         gap: 12px;
      }

      .dot {
         width: 12px;
         height: 12px;
         background: rgba(139, 111, 77, 0.3);
         cursor: pointer;
         transition: all 0.3s ease;
         position: relative;
      }

      .dot::after {
         content: '';
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 0;
         height: 0;
         background: #8b6f4d;
         transition: all 0.3s ease;
      }

      .dot.active::after {
         width: 100%;
         height: 100%;
      }

      .dot:hover {
         background: rgba(139, 111, 77, 0.5);
      }

      /* Desktop - 3 videos visible */
      @media (min-width: 1200px) {
         .video-slide {
            width: calc(33.333% - 14px);
         }
      }

      /* Tablet - 2 videos visible */
      @media (min-width: 768px) and (max-width: 1199px) {
         .video-slide {
            width: calc(50% - 10px);
         }

         .container {
            max-width: 900px;
         }
      }

      /* Mobile - 1 video visible */
      @media (max-width: 767px) {
         .video-slide {
            width: 100%;
            margin-right: 0;
         }

         .video-section {
            padding: 60px 0;
         }

         .container {
            padding: 0 15px;
         }

         .section-title {
            font-size: 2.2rem;
         }

         .section-subtitle {
            font-size: 1.1rem;
         }

         .video-info {
            padding: 25px 20px;
            height: 200px;
         }

         .video-title {
            font-size: 1.2rem;
         }

         .video-description {
            font-size: 0.9rem;
            -webkit-line-clamp: 3;
         }

         .nav-button {
            width: 45px;
            height: 45px;
            font-size: 18px;
         }

         .slider-navigation {
            margin-top: 30px;
         }

         .treatment-badge {
            font-size: 0.75rem;
            padding: 5px 10px;
         }
      }

      @media (max-width: 480px) {
         .section-header {
            margin-bottom: 30px;
         }

         .section-title {
            font-size: 1.9rem;
         }

         .video-info {
            padding: 20px 15px;
            height: 180px;
         }

         .video-title {
            font-size: 1.1rem;
            margin-bottom: 10px;
         }

         .video-description {
            font-size: 0.85rem;
         }
      }

      /* Smooth scroll behavior */
      .video-container {
         scroll-behavior: smooth;
      }

      .banner-list {
         display: inline-block;
         list-style: none;
         /* padding: 0 10px; */
         font-size: 1.5rem;
         color: #6B4C3A;
         font-weight: 500;
         margin-right: 20px;
         transition: color 0.3s ease;
      }

      .banner-list-item {
         /* color: #A67C5A; */
         margin-bottom: 6px;
      }

      .service-title {
         font-size: 1.6rem;
         font-family: --tp-ff-heading;
         color: #6B4C3A;
         font-weight: 300;
         margin-bottom: 10px;
         /* text-transform: uppercase; */
      }
   </style>

   <style>
      .tabs {
         display: flex;
         justify-content: center;
         margin-bottom: 20px;
         margin-top: 20px;
      }

      .tab-pane {
         margin: 0 auto;
         transition: opacity 0.3s ease-in-out;
         overflow: hidden;
      }

      .tab-pane.active {
         /* height: auto; */
         overflow: visible;
      }

      .tab-button {
         padding: 8px 16px;
         font-size: 1rem;
         color: #6B4C3A;
         font-style: italic;
         background-color: #F5E6D3;
         border: 1px solid #E8D4C4;
         /* border-radius: 0.375rem; */
         cursor: pointer;
         transition: all 0.3s ease;
         margin-right: 10px;
      }

      .tab-button.active {
         border-bottom: 2px solid #A67C5A;
         color: #A67C5A;
         font-weight: 600;
      }
   </style>

   <style>
      .main-container {
         max-width: 1400px;
      }

      .page-header {
         text-align: center;
      }

      .page-header h1 {
         font-weight: 700;
         color: #2c2c2c;
         margin-bottom: 0.5rem;
      }

      .page-header p {
         font-weight: 400;
         font-size: 1.1rem;
         color: #4a4a4a;
      }

      .skin-type-card {
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         border: 1px solid #ECD9CB;
         padding: 2rem;
         text-align: center;
         transition: all 0.3s ease;
         cursor: pointer;
         height: 100%;
         display: flex;
         border-radius:20px;
         flex-direction: column;
         align-items: center;
         justify-content: flex-end;
         position: relative;
         min-height: 300px;
      }

      .skin-type-card::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background: rgba(0, 0, 0, 0.2);
         z-index: 1;
         border-radius:20px;
      }

      .skin-type-card:hover {
         transform: translateY(-5px);
         box-shadow: 0 10px 20px rgba(184, 124, 93, 0.2);
      }

      .card-content {
         position: relative;
         z-index: 2;
      }

      .skin-type-card h3 {
         font-weight: 600;
         color: #ffffff;
         margin-bottom: 0.75rem;
      }

      .skin-type-card p {
         font-size: 0.95rem;
         line-height: 1.6;
         margin-bottom: 0px;
         color: #ffffff;
      }

      .custom-modal-content {
         background-color: #ECD9CB;
         border-radius: 1rem;
         border: none;
         color: #4a4a4a;
      }

      .custom-modal-header {
         border-bottom: 1px solid #ECD9CB;
      }

      .custom-modal-title {
         color: #2c2c2c;
         font-weight: 700 !important;
      }

      .modal-image {
         /* width: 150px; */
         height: 250px;
         /* border-radius: 50%; */
         object-fit: cover;
         margin: 0 auto 1.5rem;
         /* border: 3px solid #ECD9CB; */
         /* box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); */
         display: block;
      }

      .custom-modal-body h5 {
         color: #2c2c2c;
         font-weight: 600;
         margin-top: 1rem;
         margin-bottom: 0.5rem;
      }

      .modal-cta-btn {
         background-color: #b87c5d;
         border: none;
         color: #f8f4e3;
         font-weight: 600;
         padding: 0.75rem 2rem;
         border-radius: 0rem;
         transition: background-color 0.3s ease;
      }

      .modal-cta-btn:hover {
         background-color: #a56b4f;
         color: #f8f4e3;
      }

      .font-ovrd {
         font-family: inherit;
      }

      /* Responsive adjustments */
      @media (max-width: 768px) {
         .skin-type-card {
            min-height: 250px;
            padding: 1.5rem;
         }

         .page-header {
            padding: 2rem 0;
         }

         /* .modal-image {
            width: 120px;
            height: 120px;
         } */
      }

      @media (max-width: 576px) {
         .skin-type-card {
            min-height: 220px;
            padding: 1rem;
         }

         /* .modal-image {
            width: 100px;
            height: 100px;
         } */
      }
   </style>

   <style>
      /* Clean and simple skin type section */
      .skin-discovery-section {
         background: linear-gradient(135deg, #f8f4e3 0%, #e9d1c1 100%);
         /* padding: 100px 0; */
      }

      .discovery-container {
         max-width: 1400px;
         margin: 0 auto;
         padding: 0 20px;
      }

      .discovery-grid {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 80px;
         align-items: center;
      }

      .content-area {
         padding: 20px 0;
      }

      .section-title {
         font-size: 3.2rem;
         font-weight: 500;
         color: #5a4037;
         margin-bottom: 15px;
         line-height: 1.2;
      }

      .section-description {
         font-size: 1.2rem;
         line-height: 1.7;
         color: #6b4c3a;
         margin-bottom: 40px;
      }

      .primary-button {
         display: inline-block;
         padding: 18px 40px;
         background-color: #b87c5d;
         color: #fff;
         text-decoration: none;
         font-size: 1.1rem;
         font-weight: 500;
         text-transform: uppercase;
         letter-spacing: 1px;
      }

      .image-area {
         padding: 0;
      }

      .main-image {
         width: 100%;
         height: 500px;
         object-fit: cover;
         display: block;
      }

      /* Responsive Design */
      @media (max-width: 992px) {
         .discovery-grid {
            grid-template-columns: 1fr;
            gap: 60px;
            text-align: center;
         }

         .section-title {
            font-size: 2.8rem;
         }

         .skin-discovery-section {
            padding: 80px 0;
         }
      }

      @media (max-width: 768px) {
         .discovery-container {
            padding: 0 15px;
         }

         .section-title {
            font-size: 2.4rem;
         }

         .section-description {
            font-size: 1.1rem;
         }

         .main-image {
            height: 400px;
         }

         .skin-discovery-section {
            padding: 60px 0;
         }
      }

      @media (max-width: 576px) {
         .section-title {
            font-size: 2rem;
         }

         .section-description {
            font-size: 1rem;
            margin-bottom: 30px;
         }

         .primary-button {
            padding: 15px 35px;
            font-size: 1rem;
         }

         .main-image {
            height: 300px;
         }
      }
   </style>

   <style>
      /* Before & After Section */
      .transformation-showcase {
         background-color: #f0e6d6;
         padding: 80px 0;
      }

      .showcase-container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 20px;
      }

      .showcase-header {
         text-align: center;
         margin-bottom: 30px;
      }

      .showcase-title {
         font-size: 3rem;
         font-weight: 600;
         color: #5a4037;
         margin-bottom: 10px;
         font-style: italic;
      }

      .treatment-tabs {
         display: flex;
         justify-content: center;
         gap: 0;
         margin-bottom: 50px;
      }

      .tab-button {
         padding: 15px 40px;
         background-color: transparent;
         color: #8B6F47;
         border: 2px solid #d4b896;
         cursor: pointer;
         font-size: 1.1rem;
         font-weight: 500;
         font-style: italic;
         transition: all 0.3s ease;
      }

      .tab-button:first-child {
         border-right: none;
      }

      .tab-button.tab-active {
         background-color: #d4b896;
         color: #5a4037;
      }

      .comparison-wrapper {
         max-width: 900px;
         margin: 0 auto;
      }

      .image-comparison-container {
         position: relative;
         width: 100%;
         height: 500px;
         overflow: hidden;
         background-color: #e9d1c1;
         border: 3px solid #d4b896;
      }

      .before-image,
      .after-image {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      .after-image {
         clip-path: inset(0 50% 0 0);
      }

      .comparison-slider {
         position: absolute;
         top: 0;
         left: 50%;
         width: 4px;
         height: 100%;
         background-color: #fff;
         cursor: ew-resize;
         z-index: 10;
         transform: translateX(-50%);
      }

      .slider-handle {
         position: absolute;
         top: 50%;
         left: 50%;
         width: 40px;
         height: 40px;
         background-color: #fff;
         border: 3px solid #b87c5d;
         transform: translate(-50%, -50%);
         cursor: ew-resize;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .slider-arrows {
         display: flex;
         gap: 2px;
      }

      .arrow-left,
      .arrow-right {
         width: 0;
         height: 0;
         border-style: solid;
      }

      .arrow-left {
         border-left: 4px solid transparent;
         border-right: 6px solid #b87c5d;
         border-top: 4px solid transparent;
         border-bottom: 4px solid transparent;
      }

      .arrow-right {
         border-left: 6px solid #b87c5d;
         border-right: 4px solid transparent;
         border-top: 4px solid transparent;
         border-bottom: 4px solid transparent;
      }

      .comparison-labels {
         display: flex;
         justify-content: space-between;
         margin-top: 20px;
         font-weight: 500;
         color: #6b4c3a;
      }

      .label-before {
         text-align: left;
      }

      .label-after {
         text-align: right;
      }

      /* Tab Content */
      .tab-content-panel {
         display: none;
      }

      .tab-content-panel.panel-active {
         display: block;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
         .transformation-showcase {
            padding: 60px 0;
         }

         .showcase-title {
            font-size: 2.5rem;
         }

         .treatment-tabs {
            flex-direction: column;
            align-items: center;
            gap: 0;
         }

         .tab-button {
            padding: 12px 30px;
            font-size: 1rem;
            width: 250px;
         }

         .tab-button:first-child {
            border-right: 2px solid #d4b896;
            border-bottom: none;
         }

         .tab-button:last-child {
            border-top: none;
         }

         .image-comparison-container {
            height: 400px;
         }

         .slider-handle {
            width: 35px;
            height: 35px;
         }
      }

      @media (max-width: 576px) {
         .showcase-container {
            padding: 0 15px;
         }

         .showcase-title {
            font-size: 2rem;
         }

         .image-comparison-container {
            height: 300px;
         }

         .tab-button {
            padding: 10px 25px;
            width: 200px;
         }

         .slider-handle {
            width: 30px;
            height: 30px;
         }

         .comparison-labels {
            font-size: 0.9rem;
         }
      }

      .nav-container {
         max-width: 1500px;
         margin: 0 auto;
         padding: 0 20px;
      }
   </style>

   <style>
      /* Footer Section */
      .footer-main-section {
         background-color: #F1C6B3;
         padding: 60px 0 20px;
      }

      .footer-content-wrapper {
         max-width: 1400px;
         margin: 0 auto;
         padding: 0 20px;
      }

      .footer-grid-layout {
         display: grid;
         grid-template-columns: 1fr 1fr 1fr 1fr;
         gap: 60px;
         margin-bottom: 60px;
      }

      /* Brand Section */
      .brand-identity-area {
         display: flex;
         flex-direction: column;
      }

      .brand-logo-container {
         margin-bottom: 30px;
      }

      .brand-logo-image {
         width: 180px;
         height: auto;
         display: block;
      }

      .brand-description-text {
         font-size: 1rem;
         line-height: 1.7;
         color: #6b4c3a;
         margin-bottom: 40px;
         font-weight: 400;
      }

      .social-media-links {
         display: flex;
         gap: 20px;
         margin-top: auto;
      }

      .social-link-item {
         width: 40px;
         height: 40px;
         border-radius: 50%;
         background-color: #6b4c3a;
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         text-decoration: none;
         transition: background-color 0.3s ease;
      }

      .social-link-item:hover {
         background-color: #5a4037;
         color: #fff;
      }

      /* Services Section */
      .services-navigation-area {
         padding-left: 10px;
      }

      .additional-services-area {
         padding-left: 10px;
      }

      .footer-section-title {
         font-size: 1.6rem;
         font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
         font-weight: 400;
         color: #5a4037;
         margin-bottom: 30px;
      }

      .services-menu-list {
         list-style: none;
         padding: 0;
         margin: 0;
      }

      .service-menu-item {
         margin-bottom: 15px;
      }

      .service-link-text {
         color: #8b6f47;
         text-decoration: none;
         font-size: 1rem;
         transition: color 0.3s ease;
      }

      .service-link-text:hover {
         color: #6b4c3a;
      }

      /* Pages and Appointment Section */
      .pages-appointment-area {
         padding-left: 10px;
      }

      .other-pages-section {
         margin-bottom: 50px;
      }

      .pages-grid-layout {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 15px 20px;
         margin-top: 20px;
      }

      .page-navigation-link {
         color: #8b6f47;
         text-decoration: none;
         font-size: 1rem;
         transition: color 0.3s ease;
      }

      .page-navigation-link:hover {
         color: #6b4c3a;
      }

      .appointment-cta-area {
         margin-top: 40px;
      }

      .cta-description-text {
         font-size: 0.95rem;
         line-height: 1.6;
         color: #6b4c3a;
         margin-bottom: 25px;
      }

      .appointment-cta-button {
         display: inline-block;
         padding: 14px 28px;
         background-color: #b87c5d;
         color: #fff;
         text-decoration: none;
         font-size: 1rem;
         font-weight: 500;
         text-transform: uppercase;
         letter-spacing: 0.5px;
         transition: all 0.3s ease;
      }

      .appointment-cta-button:hover {
         background-color: #a67c5a;
         color: #fff;
         transform: translateY(-2px);
      }

      /* Copyright Section */
      .copyright-section {
         text-align: center;
         padding-top: 20px;
         border-top: 1px solid #d4b896;
      }

      .copyright-text {
         color: #8b6f47;
         font-size: 0.95rem;
         margin: 0;
      }

      /* Responsive Design */
      @media (max-width: 1200px) {
         .footer-grid-layout {
            grid-template-columns: 1fr 1fr 1fr;
            gap: 50px;
         }

         .pages-appointment-area {
            grid-column: 1 / -1;
            padding-left: 0;
            margin-top: 30px;
         }

         .other-pages-section {
            margin-bottom: 30px;
         }
      }

      @media (max-width: 992px) {
         .footer-grid-layout {
            grid-template-columns: 1fr 1fr;
            gap: 50px;
         }

         .additional-services-area,
         .pages-appointment-area {
            grid-column: 1 / -1;
            padding-left: 0;
            margin-top: 30px;
         }

         .brand-logo-image {
            width: 150px;
         }

         .footer-main-section {
            padding: 60px 0 30px;
         }
      }

      @media (max-width: 768px) {
         .footer-grid-layout {
            grid-template-columns: 1fr;
            gap: 40px;
         }

         .services-navigation-area,
         .additional-services-area,
         .pages-appointment-area {
            padding-left: 0;
         }

         .footer-content-wrapper {
            padding: 0 20px;
         }

         .brand-logo-image {
            width: 130px;
         }

         .pages-grid-layout {
            grid-template-columns: 1fr 1fr;
            gap: 15px 20px;
         }
      }

      @media (max-width: 576px) {
         .footer-main-section {
            padding: 40px 0 20px;
         }

         .footer-content-wrapper {
            padding: 0 15px;
         }

         .brand-logo-image {
            width: 120px;
         }

         .footer-section-title {
            font-size: 1.2rem;
         }

         .brand-description-text {
            font-size: 0.95rem;
         }

         .pages-grid-layout {
            grid-template-columns: 1fr;
            gap: 12px;
         }

         .social-media-links {
            gap: 15px;
         }

         .social-link-item {
            width: 35px;
            height: 35px;
         }

         .appointment-cta-button {
            padding: 12px 24px;
            font-size: 0.9rem;
         }
      }
   </style>
</head>

<body>

    <?php include('header.php') ?>

   <!-- header-search -->
   <div class="tpsearchbar tp-sidebar-area">
      <button class="tpsearchbar__close"><i class="fal fa-times"></i></button>
      <div class="search-wrap text-center">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 col-12 pt-100 pb-100">
                  <h2 class="tpsearchbar__title">What Are You Looking For?</h2>
                  <div class="tpsearchbar__form">
                     <form action="#">
                        <input type="text" name="search" placeholder="Search Product...">
                        <button class="tpsearchbar__search-btn"><i class="fal fa-search"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="search-body-overlay"></div>
   <!-- header-search-end -->

   <main>

      <!-- banner-area-start -->
      <section class="banner-area theme-bg-2 p-relative wow fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="tpbanner">
                     <div class="tpbanner-content">
                        <h2 class="tpbanner-title  font-ovrd">Where Confidence Meets Clear Skin</h2>
                        <b></b>
                        <p>Discover expert skin, hair & aesthetic care designed just for you - because every face tells a story, and we help you love yours.</p>
                     </div>
                     <ul class="banner-list">
                        <a href="contact" class="appointment-cta-button">
                            Book An Appointment
                          </a>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="tpbanner-shape p-relative">
                     <div class="tpbanner-shape-1  d-lg-none d-xl-block">
                        <img src="assets/img/banner/hero-banner-img.webp" alt="">
                     </div>
                     <!--<div class="tpbanner-shape-2 d-none d-lg-block">-->
                     <!--   <img src="assets/img/banner/banner-1shape-1.svg" alt="">-->
                     <!--</div>-->
                     <!--<div class="tpbanner-shape-3">-->
                     <!--   <img src="assets/img/banner/banner-1shape-2.svg" alt="">-->
                     <!--</div>-->
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="tpbanner-video wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="tpbanner-video-info">
               <a class="tp-btn" href="appointment.html">Get Appointment</a>
            </div>
            <div class="tpbanner-video-thumb p-relative">
               <img src="assets/img/banner/video-1-bg-1.jpg" alt="">
               <div class="tpbanner-video-play">
                  <a class="popup-video" href="https://www.youtube.com/watch?v=TYYf8zYjP5k">
                     <i>
                        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M20 10.268C21.3333 11.0378 21.3333 12.9623 20 13.7321L3.5 23.2583C2.16666 24.0281 0.500001 23.0659 0.500001 21.5263L0.500002 2.47372C0.500002 0.934117 2.16667 -0.0281314 3.5 0.741669L20 10.268Z"
                              fill="currentColor" />
                        </svg>
                     </i>
                  </a>
               </div>
            </div>
         </div> -->
      </section>
      
     

       <section class="services-section pt-70 pb-70 theme-bg-4">
         <div class="container">
            <div class="services-header">
               <h2 class="font-ovrd">Popular Treatments</h2>
               <p >From everyday skin troubles to aesthetic goals, our treatments are thoughtfully designed to suit your skin, your pace, and your comfort.</p>
            </div>

           <div class="row">
               <div class="col-md-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Hair-Fall-1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="hair-fall"><h5 class="treatment-title font-ovrd">Hair Fall</h5></a>
                          <p class="treatment-desc">Strengthens follicles and promotes healthy hair growth.</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Chemical-Peel-1.webp"   class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="chemical-peel"><h5 class="treatment-title font-ovrd">Chemical Peel</h5></a>
                          <p class="treatment-desc"> Exfoliates dull skin to reveal a brighter complexion.</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Facial-Rejuvenation-1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="skin-rejuvenation"><h5 class="treatment-title font-ovrd">Facial Rejuvenation</h5></a>
                          <p class="treatment-desc"> Revitalizes skin for a fresh, youthful glow.</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Anti-Aging-1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="anti-aging"><h5 class="treatment-title font-ovrd">Anti Aging</h5></a>
                          <p class="treatment-desc"> Targets wrinkles, sagging, and loss of elasticity for firmer skin.</p>
                        </div>
                    </div>
               </div>
           </div>
         </div>
      </section>

      <!-- about-area-start -->
      <section class="about-area pt-60 pb-60  wow fadeInUp" style="background:#E9D1C1">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">

                  <div class="wow fadeInUp mb-30" data-wow-duration="1s" data-wow-delay=".6s">
                     <img src="assets/img/about/dr-rapple-latest.webp" class="img-fluid brb" alt="">
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="about-wrapper">
                     <div class="tpsection about-left mb-45">
                        <h2 class="tpsection-title  font-ovrd">Exceptional Care <br> Exceptional Technology</h2>
                     </div>
                     <div class="about-box">
                        <div class="row">
                           <div class="col-lg-6 col-md-6">
                              <div class="about-box-content p-relative mb-30">
                                 <p>To offer honest, expert, and personalized skin care that truly understands your journey. We aim to make everyone from teenagers to grown-ups feel seen, heard, and cared for through skin, hair, and aesthetic treatments that work.
                                 </p>
                                 <h5 class="about-box-title  font-ovrd">Our Mission</h5>
                                 <div class="about-box-shape">
                                    <img src="assets/img/about/about-1-shape-2.png" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="about-box-content about-box-2 p-relative mb-30">
                                 <p>To become a trusted skin wellness destination where real people find real results in a space that’s kind, safe, and rooted in science. <br>Because we believe that when your skin feels better, you feel stronger, freer, and more yourself.
                                 </p>
                                 <h5 class="about-box-title font-ovrd">Our Vision</h5>
                                 <div class="about-box-shape">
                                    <img src="assets/img/about/about-1-shape-2.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   

      <!-- Know Your Skin Type Section -->
      <section class="skin-discovery-section"  style="background:#ECD9CB">
         <div class="discovery-container">
            <div class="discovery-grid wow fadeInUp">
               <div class="content-area">
                  <h2 class="section-title font-ovrd">Know Your Skin Type</h2>
                  <p class="section-description">
                     Every skin tells a different story.<br>
Some shine, some flake, some feel tight, and some break out - understanding your skin type is the first step toward treating it right.<br>
Get to know what your skin needs to glow, heal, and stay healthy with care that’s just right for you.

                  </p>
                    <a href="quiz" class="appointment-cta-button glow-button">
                      Discover Your Skin Type 
                    </a>
                    
                    <style>
                      .glow-button {
                        position: relative;
                        animation: glowing 1.5s infinite;
                      }
                    
                      @keyframes glowing {
                        0% {
                          box-shadow: 0 0 5px #FF7043, 0 0 10px #FF7043, 0 0 15px #FF7043;
                        }
                        50% {
                          box-shadow: 0 0 15px #FF7043, 0 0 25px #FF7043, 0 0 35px #FF7043;
                        }
                        100% {
                          box-shadow: 0 0 5px #FF7043, 0 0 10px #FF7043, 0 0 15px #FF7043;
                        }
                      }
                    </style>

               </div>
               <div class="image-area wow fadeInUp">
                  <img src="assets/img/about/rapple.png" alt="Skin Type Analysis" class="main-image">
               </div>
            </div>
         </div>
      </section>


      <!-- Our Services Section -->
      <section class="services-section pt-70 pb-70"  style="background:#E9D1C1">
         <div class="container">
            <div class="services-header">
               <h2 class="font-ovrd">Our Services</h2>
               <p >From everyday skin troubles to aesthetic goals, our treatments are thoughtfully designed to suit your skin, your pace, and your comfort.</p>
            </div>
            
             <div class="row">
               <div class="col-lg-4 col-sm-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/botox1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="botox-and-neuromodulators"><h5 class="treatment-title font-ovrd">Botox</h5></a>
                          <p class="treatment-desc">Smooths fine lines and prevents new wrinkles from forming.</p>
                        </div>
                    </div>
               </div>
               
               <div class="col-lg-4 col-sm-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Dermal-Fillers1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="dermal-fillers"><h5 class="treatment-title font-ovrd">Dermal Filler</h5></a>
                          <p class="treatment-desc">Restores lost volume and enhances natural facial contours.</p>
                        </div>
                    </div>
               </div>
               
               <div class="col-lg-4 col-sm-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Acne1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="acne-and-scar"><h5 class="treatment-title font-ovrd">Acne & Scar</h5></a>
                          <p class="treatment-desc">Treats active acne and reduces stubborn scars for clear skin.</p>
                        </div>
                    </div>
               </div>
               
               <div class="col-lg-4 col-sm-6">
                    <div class="treatment-card wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Pigmentation1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="pigmentation-and-uneven-tone"><h5 class="treatment-title font-ovrd">Pigmentation</h5></a>
                          <p class="treatment-desc">Lightens dark spots and evens out skin tone.</p>
                        </div>
                    </div>
               </div>
          
               <div class="col-lg-4 col-sm-6">
                    <div class="treatment-card  wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Microneedling1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="microneedling"><h5 class="treatment-title font-ovrd">Microneedling</h5></a>
                          <p class="treatment-desc">Stimulates collagen to refine texture and minimize pores.</p>
                        </div>
                    </div>
               </div>
            
               <div class="col-lg-4 col-sm-6">
                    <div class="treatment-card  wow fadeInUp mt-3" bis_skin_checked="1">
                        <img src="assets/img/services/Minor-Procedures1.webp"  class="brb">
                        <div class="treatment-overlay" bis_skin_checked="1">
                          <a href="dermato-surgeries"><h5 class="treatment-title font-ovrd">Minor Procedures</h5></a>
                          <p class="treatment-desc">Small changes, visible impact</p>
                        </div>
                    </div>
               </div>
           </div>

         </div>
      </section>

      <script>
         // Tab functionality
         document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanels = document.querySelectorAll('.tab-content-panel');

            tabButtons.forEach(button => {
               button.addEventListener('click', () => {
                  const targetTab = button.getAttribute('data-tab');

                  // Remove active classes
                  tabButtons.forEach(btn => btn.classList.remove('tab-active'));
                  tabPanels.forEach(panel => panel.classList.remove('panel-active'));

                  // Add active classes
                  button.classList.add('tab-active');
                  document.getElementById(targetTab + '-content').classList.add('panel-active');

                  // Reinitialize slider for the active tab
                  initializeSlider(targetTab + '-comparison');
               });
            });

            // Initialize sliders
            initializeSlider('filler-comparison');
            initializeSlider('laser-comparison');

            function initializeSlider(containerId) {
               const container = document.getElementById(containerId);
               if (!container) return;

               const slider = container.querySelector('.comparison-slider');
               const afterImage = container.querySelector('.after-image');
               let isDragging = false;

               function updateSlider(x) {
                  const containerRect = container.getBoundingClientRect();
                  const percentage = Math.max(0, Math.min(100, ((x - containerRect.left) / containerRect.width) * 100));

                  slider.style.left = percentage + '%';
                  afterImage.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
               }

               // Mouse events
               slider.addEventListener('mousedown', (e) => {
                  isDragging = true;
                  e.preventDefault();
               });

               document.addEventListener('mousemove', (e) => {
                  if (!isDragging) return;
                  updateSlider(e.clientX);
               });

               document.addEventListener('mouseup', () => {
                  isDragging = false;
               });

               // Touch events for mobile
               slider.addEventListener('touchstart', (e) => {
                  isDragging = true;
                  e.preventDefault();
               });

               document.addEventListener('touchmove', (e) => {
                  if (!isDragging) return;
                  e.preventDefault();
                  const touch = e.touches[0];
                  updateSlider(touch.clientX);
               });

               document.addEventListener('touchend', () => {
                  isDragging = false;
               });

               // Click to move slider
               container.addEventListener('click', (e) => {
                  if (e.target === slider || slider.contains(e.target)) return;
                  updateSlider(e.clientX);
               });
            }
         });
      </script>

      <!-- before-after-area-start -->
      <section class="video-section wow fadeInUp">
         <div class="container">
            <div class="section-header">
               <h2 class="font-ovrd section-title">Your Skin. Your Journey</h2>
               <p class="section-subtitle">
                  Our videos bring you closer to real skin transformations, simple skincare tips, and honest moments from our clinic — no filters, just real results.
               </p>
               </p>
            </div>

            <div class="video-slider" id="videoSlider">
               <div class="video-container" id="videoContainer">
                  <!-- Video Slide 1 -->
                  <div class="video-slide">
                     <!-- <div class="treatment-badge">ACNE TREATMENT</div> -->
                     <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/8DDwDND8GmM" allowfullscreen></iframe>
                     </div>
                     <div class="video-info">
                        <h3 class="video-title">HAIR PRP 💉#haircare #hairfall #hairprp #plateletrichplasma #drrapple
                           #skincare</h3>
                        <!-- <p class="video-description">This advanced treatment uses your own growth factors to stimulate
                           hair regrowth, strengthen follicles, and restore natural volume—ideal for those struggling
                           with thinning hair or hair fall.</p> -->
                     </div>
                  </div>

                  <!-- Video Slide 2 -->
                  <div class="video-slide">
                     <!-- <div class="treatment-badge">ANTI-AGING</div> -->
                     <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/WryezBnW4lc" allowfullscreen></iframe>
                     </div>
                     <div class="video-info">
                        <h3 class="video-title">Vitamin D low? Here’s the test to confirm and how to fix it.
                           #VitaminDDeficiency #VitaminDTest</h3>
                        <!-- <p class="video-description">45-year-old Maria's remarkable anti-aging results achieved through
                           our
                           revolutionary non-invasive radiofrequency treatments - no surgery required.</p> -->
                     </div>
                  </div>

                  <!-- Video Slide 3 -->
                  <div class="video-slide">
                     <!-- <div class="treatment-badge">PIGMENTATION</div> -->
                     <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/717euI34jeU" allowfullscreen></iframe>
                     </div>
                     <div class="video-info">
                        <h3 class="video-title">Oily skin? Let’s turn that shine into glow — your perfect routine starts
                           here! #OilySkinCare</h3>
                        <!-- <p class="video-description">Stubborn melasma patches that persisted for years completely
                           cleared
                           using our multi-modal approach with chemical peels and targeted laser treatments.</p> -->
                     </div>
                  </div>

                  <!-- Video Slide 4 -->
                  <div class="video-slide">
                     <!-- <div class="treatment-badge">SCAR REMOVAL</div> -->
                     <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/yJtiONCTPWU" allowfullscreen></iframe>
                     </div>
                     <div class="video-info">
                        <h3 class="video-title">3 Hidden Foods That Worsen Acne (Yes, Even Canned!) #acnecare #acnetips
                           #clearskinjourney</h3>
                        <!-- <p class="video-description">Witness the transformative power of fractional laser resurfacing
                           and
                           microneedling on deep acne scars over a 4-month treatment period.</p> -->
                     </div>
                  </div>

                  <!-- Video Slide 5 -->
                  <div class="video-slide">
                     <!-- <div class="treatment-badge">SKIN RENEWAL</div> -->
                     <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/K9bUuXqXo-M" allowfullscreen></iframe>
                     </div>
                     <div class="video-info">
                        <h3 class="video-title">📌 Save this reel & share it with someone struggling with dark circles!
                           ✨Do you have dark circles ???</h3>
                        <!-- <p class="video-description">See how our comprehensive skin renewal program transformed rough,
                           uneven
                           skin texture into smooth, glowing complexion in just 3 months.</p> -->
                     </div>
                  </div>

                  <!-- Video Slide 6 -->
                  <div class="video-slide">
                     <!-- <div class="treatment-badge">ROSACEA</div> -->
                     <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/NuPY8GkZMKo" allowfullscreen></iframe>
                     </div>
                     <div class="video-info">
                        <h3 class="video-title">Everything you need to know about tattoo removal ✒️ #TattooRemoval
                           #LaserTattooRemoval</h3>
                        <!-- <p class="video-description">Chronic facial redness and inflammation from rosacea successfully
                           treated
                           with our specialized IPL therapy and customized skincare regimen.</p> -->
                     </div>
                  </div>
               </div>
            </div>

            <div class="slider-navigation">
               <button class="nav-button" id="prevBtn">‹</button>
               <div class="slider-dots" id="sliderDots"></div>
               <button class="nav-button" id="nextBtn">›</button>
            </div>
         </div>
      </section>
      <!-- before-after-area-end -->

     
      <!-- Main Content Container -->
      <section class="pt-70 pb-70"  style="background:#E9D1C1"> 
         <div class="container">
            <div class="services-header">
               <h2 class="font-ovrd">Discover Your Skin Type</h2>
               <p>Click on any skin type to learn more about its characteristics and how to care for it.</p>
            </div>
         <!-- Skin Type Cards Grid -->
         <div class="row g-4">
            <!-- Dry Skin Card -->
            <div class="col-md-6 col-lg-4">
               <div class="skin-type-card  wow fadeInUp" style="background-image: url('assets/img/skin-type/dry-skin.webp')"
                  data-bs-toggle="modal" data-bs-target="#skinModal" data-skin-type="Dry Skin"
                  data-skin-image="assets/img/skin-type/dry-skin.webp"
                  data-skin-description="Feels tight, often with rough or flaky patches. It produces less oil than other skin types and can appear dull."
                  data-skin-treatment="Focus on hydration with hyaluronic acid and ceramide-rich products. Use a gentle, non-foaming cleanser and thick moisturizers to lock in moisture.">
                  <div class="card-content">
                     <h3 class="font-ovrd">Dry Skin</h3>
                     <p>Feels tight, may have flaky patches, and lacks natural moisture.</p>
                  </div>
               </div>
            </div>

            <!-- Oily Skin Card -->
            <div class="col-md-6 col-lg-4">
               <div class="skin-type-card wow fadeInUp" style="background-image: url('assets/img/skin-type/Oily-Skin.webp')"
                  data-bs-toggle="modal" data-bs-target="#skinModal" data-skin-type="Oily Skin"
                  data-skin-image="assets/img/skin-type/Oily-Skin.webp"
                  data-skin-description="Feels sticky to the touch and appears shiny, especially in the T-zone. Pores are often enlarged and visible."
                  data-skin-treatment="Incorporate products with salicylic acid or niacinamide to control oil production. Use a gentle foaming cleanser and a lightweight, oil-free moisturizer.">
                  <div class="card-content">
                     <h3 class="font-ovrd">Oily Skin</h3>
                     <p>Appears shiny, feels oily, and has enlarged, visible pores.</p>
                  </div>
               </div>
            </div>

            <!-- Combination Skin Card -->
            <div class="col-md-6 col-lg-4">
               <div class="skin-type-card wow fadeInUp" style="background-image: url('assets/img/skin-type/Combination-Skin.webp')"
                  data-bs-toggle="modal" data-bs-target="#skinModal" data-skin-type="Combination Skin"
                  data-skin-image="assets/img/skin-type/Combination-Skin.webp"
                  data-skin-description="Characterized by both oily and dry areas. Typically, the T-zone (forehead, nose, and chin) is oily, while the cheeks are dry."
                  data-skin-treatment="Use a targeted approach. Use a gentle cleanser for all areas, and then apply different products to the T-zone and cheeks as needed, focusing on balancing moisture.">
                  <div class="card-content">
                     <h3 class="font-ovrd">Combination Skin</h3>
                     <p>Oily in the T-zone (forehead, nose, chin) and dry on the cheeks.</p>
                  </div>
               </div>
            </div>

            <!-- Normal Skin Card -->
            <div class="col-md-6 col-lg-4">
               <div class="skin-type-card wow fadeInUp" style="background-image: url('assets/img/skin-type/Normal-Skin.webp')"
                  data-bs-toggle="modal" data-bs-target="#skinModal" data-skin-type="Normal Skin"
                  data-skin-image="assets/img/skin-type/Normal-Skin.webp"
                  data-skin-description="Well-balanced, with a healthy moisture content and minimal imperfections. It is neither too oily nor too dry and feels comfortable."
                  data-skin-treatment="Maintain this balance with a simple, consistent routine. Use a mild cleanser, a hydrating serum, and a moisturizer with SPF to protect against sun damage.">
                  <div class="card-content">
                     <h3 class="font-ovrd ">Normal Skin</h3>
                     <p>Balanced, with no excessive oiliness or dryness. It's often clear and radiant.</p>
                  </div>
               </div>
            </div>

            <!-- Sensitive Skin Card -->
            <div class="col-md-6 col-lg-4">
               <div class="skin-type-card wow fadeInUp" style="background-image: url('assets/img/skin-type/Sensitive-Skin.webp')"
                  data-bs-toggle="modal" data-bs-target="#skinModal" data-skin-type="Sensitive Skin"
                  data-skin-image="assets/img/skin-type/Sensitive-Skin.webp"
                  data-skin-description="Prone to redness, itching, and reactions to certain products. It is easily irritated and can feel hot or uncomfortable to the touch."
                  data-skin-treatment="Opt for hypoallergenic and fragrance-free products. Look for soothing ingredients like aloe vera or chamomile, and patch test new products to avoid reactions.">
                  <div class="card-content">
                     <h3 class="font-ovrd">Sensitive Skin</h3>
                     <p>Reacts negatively to products, becomes red or inflamed easily, and feels irritated.</p>
                  </div>
               </div>
            </div>

            <!-- Acne-Prone Skin Card -->
            <div class="col-md-6 col-lg-4">
               <div class="skin-type-card wow fadeInUp" style="background-image: url('assets/img/skin-type/Acne-Prone-Skin.webp')"
                  data-bs-toggle="modal" data-bs-target="#skinModal" data-skin-type="Acne-Prone Skin"
                  data-skin-image="assets/img/skin-type/Acne-Prone-Skin.webp"
                  data-skin-description="Regularly develops breakouts, blemishes, or pimples. This type can be oily or combination and is prone to clogged pores."
                  data-skin-treatment="Utilize treatments with benzoyl peroxide or retinoids to target breakouts. Ensure your routine includes thorough cleansing and products that won't clog pores (non-comedogenic).">
                  <div class="card-content">
                     <h3 class="font-ovrd">Acne-Prone Skin</h3>
                     <p>Experiences frequent breakouts, pimples, and clogged pores.</p>
                  </div>
               </div>
            </div>
         </div>
      </div> 
      </section>
      

      <!-- Skin Type Modal -->
      <div class="modal fade" id="skinModal" tabindex="-1" aria-labelledby="skinModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="custom-modal-content modal-content">
               <div class="custom-modal-header modal-header">
                  <h5 class="custom-modal-title modal-title font-ovrd" id="skinModalLabel"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="custom-modal-body modal-body">
                  <img id="modalImage" class="modal-image" src="" alt="Skin type image">
                  <p id="modalDescription"></p>
                  <h5 class="font-ovrd">Suggested Treatment</h5>
                  <p id="modalTreatment"></p>
               </div>
            </div>
         </div>
      </div>

      <!-- appoinment-form-area-start -->
      
      <section class="appoinment-form-area pt-70 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-xxl-5 col-xl-6 col-lg-5">
                  <div class="tpsection mb-30">
                     <div class=" mb-20">
                        <span class="font-dark">Get Appointment</span>
                     </div>
                     <h2 class="tpsection-title font-ovrd fts-normal">Your skin deserves expert attention</h2>
                  </div>
               </div>
               <div class="col-xxl-7 col-xl-6 col-lg-7">
                  <div class="form-wrap wow fadeInUp" data-wow-duration="1.8s" data-wow-delay=".7s">
                    <!--<form accept-charset='UTF-8' action='https://app.formester.com/forms/GaT6dwYwp/submissions' method='POST'>-->
                    <!--    <div class="row">-->
                    <!--       <div class="col-lg-6">-->
                    <!--          <div class="appoinment-form-input mb-30">-->
                    <!--             <input type="text" placeholder="Name*" required>-->
                    <!--          </div>-->
                    <!--       </div>-->
                    <!--       <div class="col-lg-6">-->
                    <!--          <div class="appoinment-form-input mb-30">-->
                    <!--             <input type="text" placeholder="Phone Number*" required>-->
                    <!--          </div>-->
                    <!--       </div>-->
                    <!--       <div class="col-lg-12">-->
                    <!--          <div class="appoinment-form-input mb-30">-->
                    <!--             <input type="email" placeholder="Email Address">-->
                    <!--          </div>-->
                    <!--       </div>-->
                    <!--       <div class="col-lg-12">-->
                    <!--          <div class="form-inner-input">-->
                    <!--             <textarea placeholder="Write Your Message" name="message"></textarea>-->
                    <!--          </div>-->
                    <!--       </div>-->
                    <!--       <div class="col-lg-12">-->
                    <!--          <div class="appoinment-form-submit mb-30">-->
                    <!--             <button class="tp-btn"><span class="font-dark">Get Appointment</span></button>-->
                    <!--          </div>-->
                    <!--       </div>-->
                    <!--    </div>-->
                    <!-- </form>-->
                    <script defer data-active  data-widget-type="group"
                        data-person="224e1d4d-7a86-400e-b929-d00a2910c054" src="https://app.wacrs.com/install-widget/bundle.js?key=3317d291-ecfa-438a-b38e-cd2e80d7a937"></script><div data-active id="whatapp-people-widget-224e1d4d-7a86-400e-b929-d00a2910c054"></div>
                    
            
                  </div>
               </div>
            </div>
         </div>
         <!--<div class="appoinment-shape">-->
         <!--   <div class="appoinment-shape-1">-->
         <!--      <img src="assets/img/shape/form-shape-1.png" alt="">-->
         <!--   </div>-->
         <!--   <div class="appoinment-shape-2">-->
         <!--      <img src="assets/img/shape/form-shape-2.png" alt="">-->
         <!--   </div>-->
         <!--</div>-->
      </section>
      <!-- appoinment-form-area-end -->

       <!-- testimonial-area-start -->
         <section class="testimonial-area theme-bg-4  pt-70 pb-30 wow fadeInUp">
            <div class="container">
                <div class="services-header">
                   <h2 class="font-ovrd">What Says Our Client’s Says</h2>
                   <p>From everyday skin troubles to aesthetic goals, our treatments are thoughtfully designed to suit your skin, your pace, and your comfort.</p>
                </div>
             
               <div class="testimonial-2-active splide">
                  <div class="splide__track">
                     <div class="splide__list">
                         <div class="splide__slide">
                           <div class="testimonial-2 p-relative">
                              <div><img src="assets/img/testimonial/Meenakshi swarup-1.png" style="width:120px"></div>
                              <div class="testimonial-2-rating mt-3">
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                              </div>
                              <div class="testimonial-2-content">
                                 <p>I had an excellent experience with Dr. Parneet Sidhu at the department of Dermatology, Muzaffernagar Medical College. From the very first consultation, she made me feel completely at ease. <br>What impressed me most was the her professionalism combined with genuine care and empathy. My skin has improved significantly under her guidance, and I truly appreciate the follow-up and attention to detail. The department is well-managed, hygienic, and the staff is equally courteous. <br>I highly recommend Dr. Parneet to anyone looking for a knowledgeable, skilled, and compassionate dermatologist.</p>
                                 <div class="testimonial-2-author">
                                    <h4 class="font-ovrd">Meenakshi Swarup( Chairman Muzaffarnagar)</h4>
                                 </div>
                              </div>
                              <div class="testimonial-2-shape">
                                 <img src="assets/img/testimonial/testimonial-2-quote-1.png" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="splide__slide">
                           <div class="testimonial-2 p-relative">
                              <div><img src="assets/img/testimonial/Lakhwinder-1.png" style="width:120px"></div>
                              <div class="testimonial-2-rating mt-3">
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                              </div>
                              <div class="testimonial-2-content">
                                 <p>I was diagnosed with ductal carcinoma in 2023, and since then I have undergone several treatments including chemotherapy, surgery, radiation therapy, and targeted therapy. During this journey, my skin was badly affected—I developed acne breakouts, freckles, dark spots, dryness, and even hypertrichosis on my face.<br>When I met you, you recommended treatments such as laser diode, IPL, and hydrafacial. These procedures have significantly improved my skin texture and appearance.<br>I sincerely want to thank you for your guidance, care, and expertise. Your treatment has not only healed my skin but also restored my confidence.</p>
                                 <div class="testimonial-2-author">
                                    <h4 class="font-ovrd">Lakhwinder Kaur (Breast Cancer Survivor)</h4>
                                 </div>
                              </div>
                              <div class="testimonial-2-shape">
                                 <img src="assets/img/testimonial/testimonial-2-quote-1.png" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="splide__slide">
                           <div class="testimonial-2 p-relative">
                              <div><img src="assets/img/testimonial/Blessi.png" style="width:120px"></div>
                              <div class="testimonial-2-rating mt-3">
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                              </div>
                              <div class="testimonial-2-content">
                                 <p>Just 3–4 months ago, my acne was so bad that I used to isolate myself <br>it was truly traumatic. I felt hopeless until I had a consultation with Dr. Rapple. She completely changed things for me by guiding me through simple dietary changes and recommending minimal, effective skincare. <br>Now, after almost 6 months, my skin is fully clear. I still use the same face wash, moisturizer, and sunscreen because they genuinely work. I’m honestly surprised by the results. So grateful thank you so much, Dr. Rapple!"</p>
                                 <div class="testimonial-2-author">
                                    <h4 class="font-ovrd">Blessi</h4>
                                 </div>
                              </div>
                              <div class="testimonial-2-shape">
                                 <img src="assets/img/testimonial/testimonial-2-quote-1.png" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="splide__slide">
                           <div class="testimonial-2 p-relative">
                               <div><img src="assets/img/testimonial/Poonam -1.png" style="width:120px"></div>
                              <div class="testimonial-2-rating mt-3">
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                              </div>
                              <div class="testimonial-2-content">
                                 <p>I had a wonderful experience with Dr Parneet Sidhu.I was dealing with skin problems.Their expertise and personalised approach to skin care made a significant difference in my treatment.Dr Sidhu applied Botox and eye fillers .The results have been outstanding.My skin looks radiant and I feel younger and more confident.Thank you Dr Parneet Sidhu for your excellent care and expertise </p>
                                 <div class="testimonial-2-author">
                                    <h4 class=" font-ovrd">Poonam</h4>
                                 </div>
                              </div>
                              <div class="testimonial-2-shape">
                                 <img src="assets/img/testimonial/testimonial-2-quote-1.png" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="splide__slide">
                           <div class="testimonial-2 p-relative">
                              <div><img src="assets/img/testimonial/Sukhchain-1.png" style="width:120px"></div>
                              <div class="testimonial-2-rating mt-3">
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 <i class="fa-sharp fa-solid fa-star-sharp"></i>
                              </div>
                              <div class="testimonial-2-content">
                                 <p>I was diagnosed by Dr Parneet Sidhu, Dermatologist regarding my skin problem and she applied Botox & micro needling on my face . She is an adept in her profession efficiently . Her professional expertization  is really wonderful full of rapid healing. Now my  forehead wrinkles are vanished completely . I am feeling grateful to her for her great medicinal services and highly recommend her for the patients.</p>
                                 <div class="testimonial-2-author">
                                    <h4 class="font-ovrd">Sukhchain Singh</h4>
                                 </div>
                              </div>
                              <div class="testimonial-2-shape">
                                 <img src="assets/img/testimonial/testimonial-2-quote-1.png" alt="">
                              </div>
                           </div>
                        </div>
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- testimonial-area-end -->

      <!-- cta-area-start -->
      <section class="cta-area pt-70 pb-70">
         <div class="container">
            <div class="cta-bg"
               data-background="https://images.unsplash.com/photo-1713085085470-fba013d67e65?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
               <div class="row align-items-center">
                  <div class="col-lg-9 col-md-9">
                     <div class="tpsection">
                        <div class="font-dark mb-20">
                           <span>Get Appointment</span>
                        </div>
                        <h2 class="tpsection-title">Consultation With <br> Our Doctor</h2>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="cta-phone text-center pl-10">
                        <a class="tp-ripple" href="tel:7385218413"><i class="fa-light fa-phone-volume"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- cta-area-end -->


   </main>

    <?php include('footer.php') ?>


    
   <!-- JS here -->
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/nouislider.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/parallax.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/jquery.appear.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/splide.js"></script>
   <script src="assets/js/pignose.calendar.full.min.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/beforeafter.jquery-1.0.0.min.js"></script>

   <script>
      class VideoSlider {
         constructor() {
            this.currentIndex = 0;
            this.totalSlides = document.querySelectorAll('.video-slide').length;
            this.videoContainer = document.getElementById('videoContainer');
            this.prevBtn = document.getElementById('prevBtn');
            this.nextBtn = document.getElementById('nextBtn');
            this.dotsContainer = document.getElementById('sliderDots');

            this.visibleSlides = this.getVisibleSlides();
            this.maxIndex = Math.max(0, this.totalSlides - this.visibleSlides);

            this.init();
            this.handleResize();
         }

         getVisibleSlides() {
            const width = window.innerWidth;
            if (width >= 1200) return 3;
            if (width >= 768) return 2;
            return 1;
         }

         init() {
            this.createDots();
            this.updateSlider();
            this.bindEvents();
            this.startAutoPlay();
         }

         createDots() {
            this.dotsContainer.innerHTML = '';
            const totalDots = this.maxIndex + 1;

            for (let i = 0; i < totalDots; i++) {
               const dot = document.createElement('div');
               dot.classList.add('dot');
               if (i === 0) dot.classList.add('active');
               dot.addEventListener('click', () => this.goToSlide(i));
               this.dotsContainer.appendChild(dot);
            }
         }

         updateSlider() {
            const slideWidth = 100 / this.visibleSlides;
            const translateX = -this.currentIndex * slideWidth;
            this.videoContainer.style.transform = `translateX(${translateX}%)`;

            // Update dots
            document.querySelectorAll('.dot').forEach((dot, index) => {
               dot.classList.toggle('active', index === this.currentIndex);
            });

            // Update navigation buttons
            this.prevBtn.disabled = this.currentIndex === 0;
            this.nextBtn.disabled = this.currentIndex >= this.maxIndex;
         }

         nextSlide() {
            if (this.currentIndex < this.maxIndex) {
               this.currentIndex++;
               this.updateSlider();
               this.resetAutoPlay();
            }
         }

         prevSlide() {
            if (this.currentIndex > 0) {
               this.currentIndex--;
               this.updateSlider();
               this.resetAutoPlay();
            }
         }

         goToSlide(index) {
            if (index >= 0 && index <= this.maxIndex) {
               this.currentIndex = index;
               this.updateSlider();
               this.resetAutoPlay();
            }
         }

         handleResize() {
            window.addEventListener('resize', () => {
               const newVisibleSlides = this.getVisibleSlides();
               if (newVisibleSlides !== this.visibleSlides) {
                  this.visibleSlides = newVisibleSlides;
                  this.maxIndex = Math.max(0, this.totalSlides - this.visibleSlides);

                  // Adjust current index if needed
                  if (this.currentIndex > this.maxIndex) {
                     this.currentIndex = this.maxIndex;
                  }

                  this.createDots();
                  this.updateSlider();
               }
            });
         }

         bindEvents() {
            this.nextBtn.addEventListener('click', () => this.nextSlide());
            this.prevBtn.addEventListener('click', () => this.prevSlide());

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
               if (e.key === 'ArrowLeft') this.prevSlide();
               if (e.key === 'ArrowRight') this.nextSlide();
            });

            // Touch/swipe support
            let startX = 0;
            let endX = 0;

            this.videoContainer.addEventListener('touchstart', (e) => {
               startX = e.touches[0].clientX;
            });

            this.videoContainer.addEventListener('touchmove', (e) => {
               e.preventDefault();
            });

            this.videoContainer.addEventListener('touchend', (e) => {
               endX = e.changedTouches[0].clientX;
               const diff = startX - endX;

               if (Math.abs(diff) > 50) {
                  if (diff > 0) {
                     this.nextSlide();
                  } else {
                     this.prevSlide();
                  }
               }
            });
         }

         startAutoPlay() {
            this.autoPlayInterval = setInterval(() => {
               if (this.currentIndex >= this.maxIndex) {
                  this.currentIndex = 0;
               } else {
                  this.currentIndex++;
               }
               this.updateSlider();
            }, 6000);
         }

         resetAutoPlay() {
            clearInterval(this.autoPlayInterval);
            this.startAutoPlay();
         }

         pauseAutoPlay() {
            clearInterval(this.autoPlayInterval);
         }

         resumeAutoPlay() {
            this.startAutoPlay();
         }
      }

      // Initialize slider when DOM is loaded
      document.addEventListener('DOMContentLoaded', () => {
         const slider = new VideoSlider();

         // Pause autoplay when user hovers over the slider
         const videoSlider = document.getElementById('videoSlider');
         videoSlider.addEventListener('mouseenter', () => slider.pauseAutoPlay());
         videoSlider.addEventListener('mouseleave', () => slider.resumeAutoPlay());
      });
   </script>

   <script>
      document.addEventListener('DOMContentLoaded', () => {
         const tabButtons = document.querySelectorAll('.tab-button');
         const tabPanes = document.querySelectorAll('.tab-pane');

         tabButtons.forEach(button => {
            button.addEventListener('click', () => {
               // Remove 'active' class from all buttons and panes
               tabButtons.forEach(btn => btn.classList.remove('active'));
               tabPanes.forEach(pane => pane.classList.remove('active'));

               // Add 'active' class to the clicked button
               button.classList.add('active');

               // Add 'active' class to the corresponding pane
               const targetId = button.getAttribute('data-tab-target');
               const targetPane = document.getElementById(targetId);
               if (targetPane) {
                  targetPane.classList.add('active');
               }
            });
         });
      });
   </script>

   <script>
      // Wait for DOM to be fully loaded
      document.addEventListener('DOMContentLoaded', function () {
         // Handle modal content updates
         const skinModal = document.getElementById('skinModal');

         skinModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const skinType = button.getAttribute('data-skin-type');
            const skinDescription = button.getAttribute('data-skin-description');
            const skinTreatment = button.getAttribute('data-skin-treatment');
            const skinImage = button.getAttribute('data-skin-image');

            // Debug logging
            console.log('Modal opening for:', skinType);
            console.log('Image path:', skinImage);

            const modalTitle = skinModal.querySelector('#skinModalLabel');
            const modalDescription = skinModal.querySelector('#modalDescription');
            const modalTreatment = skinModal.querySelector('#modalTreatment');
            const modalImage = skinModal.querySelector('#modalImage');

            modalTitle.textContent = skinType;
            modalDescription.textContent = skinDescription;
            modalTreatment.textContent = skinTreatment;

            if (skinImage) {
               modalImage.src = skinImage;
               modalImage.alt = skinType + ' image';
               console.log('Image src set to:', modalImage.src);
            } else {
               console.error('No image path found for:', skinType);
            }
         });
      });
   </script>
</body>

</html>