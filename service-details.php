<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Service Details</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php include('header-links.php') ?>

   <style>
      .nav-container {
         max-width: 1500px;
         margin: 0 auto;
         padding: 0 20px;
      }

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
      .custom-list {
         list-style-type: none;
         padding-left: 0;
      }

      .custom-list li::before {
         content: "✧";
         margin-right: 8px;
         color: #000;
         /* You can change the color of the icon here */
      }
   </style>

   <style>
      /* Chemical Peel Section */
      .peel-section {
         max-width: 1400px;
         background: var(--light);
         border-radius: 20px;
         overflow: hidden;
         box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
         display: grid;
         grid-template-columns: 1fr 1fr;
         animation: fadeIn 1s ease;
      }

      @keyframes fadeIn {
         from {
            opacity: 0;
            transform: translateY(20px);
         }

         to {
            opacity: 1;
            transform: translateY(0);
         }
      }

      .peel-content {
         padding: 50px;
         display: flex;
         flex-direction: column;
         justify-content: center;
      }

      .peel-image {
         position: relative;
         overflow: hidden;
      }

      .peel-image img {
         width: 100%;
         height: 100%;
         object-fit: cover;
         transition: var(--transition);
      }

      .peel-image:hover img {
         transform: scale(1.03);
      }

      .peel-image::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: linear-gradient(135deg, rgba(138, 79, 255, 0.2) 0%, rgba(255, 255, 255, 0) 60%);
         z-index: 1;
      }

      .section-tag {
         display: inline-block;
         background-color: var(--primary-light);
         color: var(--primary);
         padding: 8px 15px;
         border-radius: 50px;
         font-size: 14px;
         font-weight: 600;
         margin-bottom: 15px;
      }

      .section-title {
         font-size: 2.5rem;
         color: var(--dark);
         margin-bottom: 20px;
         line-height: 1.2;
      }

      .section-title span {
         color: var(--primary);
      }

      .section-desc {
         color: #666;
         margin-bottom: 30px;
         line-height: 1.6;
      }

      .benefits-grid {
         display: grid;
         grid-template-columns: repeat(2, 1fr);
         gap: 20px;
         margin-bottom: 40px;
      }

      .benefit-item {
         display: flex;
         align-items: flex-start;
         gap: 10px;
      }

      .benefit-icon {
         color: var(--primary);
         font-size: 20px;
         margin-top: 3px;
      }

      .benefit-text {
         color: var(--dark);
         font-weight: 500;
      }

      .cta-button {
         display: inline-flex;
         align-items: center;
         justify-content: center;
         background-color: var(--primary);
         color: white;
         padding: 15px 30px;
         border-radius: 50px;
         text-decoration: none;
         font-weight: 600;
         transition: var(--transition);
         width: fit-content;
         box-shadow: 0 10px 20px rgba(138, 79, 255, 0.2);
      }

      .cta-button:hover {
         transform: translateY(-3px);
         box-shadow: 0 15px 25px rgba(138, 79, 255, 0.3);
      }

      .cta-button i {
         margin-left: 8px;
         transition: var(--transition);
      }

      .cta-button:hover i {
         transform: translateX(5px);
      }

      /* Responsive Design */
      @media (max-width: 992px) {
         .peel-section {
            grid-template-columns: 1fr;
         }

         .peel-image {
            height: 300px;
            order: -1;
         }

         .peel-content {
            padding: 40px;
         }
      }

      @media (max-width: 576px) {
         .peel-content {
            padding: 30px 20px;
         }

         .section-title {
            font-size: 2rem;
         }

         .benefits-grid {
            grid-template-columns: 1fr;
         }
      }
   </style>

   <style>
      .chempeel-container {
         max-width: 1400px;
         margin: 0 auto;
         display: flex;
         padding-top: 40px;
         padding-bottom: 40px;
         border: 1px solid #e0e0e0;
      }

      .chempeel-content {
         flex: 1;
         padding: 50px 20px;
      }

      .chempeel-image {
         flex: 1;
         background: #f5f5f5;
      }

      .chempeel-image img {
         width: 100%;
         height: 100%;
         object-fit: cover;
         display: block;
      }

      .chempeel-header {
         margin-bottom: 30px;
      }

      .chempeel-title {
         font-size: 28px;
         font-weight: 600;
         color: #333;
         margin-bottom: 15px;
         /* font-family: 'Helvetica Neue', Arial, sans-serif; */
      }

      .chempeel-description {
         font-size: 16px;
         line-height: 1.6;
         color: #555;
      }

      .chempeel-benefits {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 15px;
         margin-bottom: 30px;
      }

      .chempeel-benefit {
         display: flex;
         align-items: flex-start;
      }

      .chempeel-benefit-icon {
         color: #6B4C3A;
         margin-right: 10px;
         font-size: 18px;
      }

      .chempeel-benefit-text {
         font-size: 15px;
         color: #333;
      }

      .chempeel-button {
         display: inline-block;
         background-color: #6B4C3A;
         color: white;
         padding: 12px 25px;
         text-decoration: none;
         font-weight: 500;
         font-size: 15px;
      }

      @media (max-width: 768px) {
         .chempeel-container {
            flex-direction: column;
         }

         .chempeel-image {
            order: -1;
            height: 300px;
         }

         .chempeel-content {
            padding: 30px 25px;
         }

         .chempeel-benefits {
            grid-template-columns: 1fr;
         }
      }
   </style>

   <style>
      .peel-process {
         background-color: #e9d1c1;
      }

      .peel-process-container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 60px 20px;
         font-family: 'Helvetica Neue', Arial, sans-serif;
      }

      .peel-process-container p {
         font-size: 16px;
         line-height: 1.6;
         color: #5A3921;
         /* margin-bottom: 30px; */
      }

      .peel-process-title {
         text-align: center;
         font-size: 32px;
         font-weight: 600;
         color: #5A3921;
         margin-bottom: 20px;
      }

      .peel-steps {
         display: flex;
         flex-direction: column;
         gap: 30px;
         position: relative;
      }



      .peel-step {
         display: flex;
         gap: 25px;
         align-items: flex-start;
         position: relative;
         z-index: 1;
      }

      .peel-step-number {
         background-color: #6B4C3A;
         color: white;
         width: 40px;
         height: 40px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         flex-shrink: 0;
         font-size: 18px;
      }

      .peel-step-content {
         padding-bottom: 30px;
         border-bottom: 1px solid #000;
         flex-grow: 1;
      }

      .peel-step-title {
         font-size: 20px;
         font-weight: 600;
         color: #333;
         margin-bottom: 10px;
      }

      .peel-step-desc {
         font-size: 16px;
         line-height: 1.6;
         color: #000;
      }

      @media (min-width: 768px) {
         .peel-steps {
            gap: 0;
         }

         .peel-step {
            width: 50%;
            padding-right: 40px;
            box-sizing: border-box;
         }

         .peel-step:nth-child(even) {
            margin-left: auto;
            padding-left: 40px;
            padding-right: 0;
         }

         .peel-step:nth-child(odd) .peel-step-content {
            text-align: right;
         }

         .peel-step:last-child .peel-step-content {
            border-bottom: none;
         }

         .peel-steps::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 1px;
            height: 100%;
            background-color: #000;
            transform: translateX(-50%);
         }
      }

      @media (max-width: 767px) {
         .peel-step:last-child .peel-step-content {
            border-bottom: none;
            padding-bottom: 0;
         }

         .peel-step-number {
            margin-top: 3px;
         }
      }
   </style>

   <style>
      .derm-stats-container {
         max-width: 1400px;
         margin: 0 auto;
         margin-bottom: 50px;
         padding: 10px 0;
      }

      .derm-stats-grid {
         display: grid;
         grid-template-columns: repeat(4, 1fr);
         gap: 15px;
         padding: 0 10px;
      }

      .derm-stat-box {
         text-align: center;
         padding: 15px 10px;
         border: 1px solid #e0e0e0;
      }

      .derm-stat-icon {
         width: 40px;
         height: 40px;
         margin: 0 auto 10px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 20px;
         color: #6B4C3A;
         border: 2px solid #6B4C3A;
      }

      .derm-stat-number {
         font-size: 28px;
         font-weight: 700;
         color: #333;
         margin-bottom: 5px;
      }

      .derm-stat-text {
         font-size: 14px;
         color: #555;
         line-height: 1.3;
      }

      /* Tablets - 2 columns */
      @media (max-width: 992px) {
         .derm-stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
         }
      }

      /* Mobile - 2 columns with tighter spacing */
      @media (max-width: 576px) {
         .derm-stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
            padding: 0 5px;
         }

         .derm-stat-box {
            padding: 12px 5px;
         }

         .derm-stat-icon {
            width: 35px;
            height: 35px;
            font-size: 18px;
         }

         .derm-stat-number {
            font-size: 24px;
         }

         .derm-stat-text {
            font-size: 12px;
         }
      }
   </style>

   <style>
      .about-peels-container {
         max-width: 1400px;
         margin: 0 auto;
         padding: 80px 20px;
         /* font-family: 'Helvetica Neue', Arial, sans-serif; */
      }

      .about-peels-header {
         text-align: center;
         margin-bottom: 60px;
      }

      .about-peels-title {
         font-size: 30px;
         font-weight: 700;
         color: #222;
         margin-bottom: 15px;
         position: relative;
         display: inline-block;
      }

      /* .about-peels-title:after {
         content: '';
         position: absolute;
         bottom: -10px;
         left: 50%;
         transform: translateX(-50%);
         width: 80px;
         height: 3px;
         background: #6B4C3A;
      } */

      .about-peels-subtitle {
         font-size: 18px;
         color: #555;
         max-width: 700px;
         margin: 0 auto;
         line-height: 1.6;
      }

      .about-peels-content {
         display: flex;
         /* align-items: center; */
         gap: 50px;
      }

      .about-peels-image {
         flex: 1;
         position: relative;
      }

      .about-peels-image img {
         width: 100%;
         height: auto;
         display: block;
         box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      }

      .about-peels-text {
         flex: 1;
      }

      .about-peels-accordion {
         margin-top: 30px;
      }

      .accordion-item {
         margin-bottom: 15px;
      }

      .accordion-header {
         padding: 18px 25px;
         background: #5a392180;
         cursor: pointer;
         display: flex;
         justify-content: space-between;
         align-items: center;
         font-weight: 600;
         color: #0a0a0a;
      }

      .accordion-header:hover {
         background: #5a392180;
      }

      .accordion-icon {
         transition: transform 0.3s ease;
      }

      .accordion-item.active .accordion-icon {
         transform: rotate(45deg);
      }

      .accordion-content {
         padding: 0 25px;
         max-height: 0;
         overflow: hidden;
         transition: max-height 0.3s ease;
         color: #555;
         background-color: #e9d1c1;
         line-height: 1.6;
      }

      .accordion-item.active .accordion-content {
         padding: 20px 25px;
         max-height: 300px;
      }

      @media (max-width: 900px) {
         .about-peels-content {
            flex-direction: column;
         }

         .about-peels-title {
            font-size: 30px;
         }

         .about-peels-subtitle {
            font-size: 16px;
         }
      }
   </style>

   <style>
      .peel-faq-container {
         max-width: 1400px;
         margin: 0 auto;
         padding-bottom: 40px;
         padding-left: 20px;
         padding-right: 20px;
         padding-top: 60px;
         font-family: 'Helvetica Neue', Arial, sans-serif;
         /* background-color: #faf6f0; */
         /* Cream background */
      }

      .peel-faq-header {
         text-align: center;
         margin-bottom: 60px;
      }

      .peel-faq-title {
         font-size: 36px;
         font-weight: 700;
         color: #5a3921;
         /* Deep skin tone */
         margin-bottom: 15px;
         position: relative;
         display: inline-block;
      }



      .peel-faq-subtitle {
         font-size: 18px;
         color: #7a5c44;
         /* Medium-dark skin tone */
         max-width: 700px;
         margin: 0 auto;
         line-height: 1.6;
      }

      .peel-faq-grid {
         display: grid;
         grid-template-columns: 1fr;
         gap: 20px;
         max-width: 1000px;
         margin: 0 auto;
      }

      .peel-faq-item {
         background: white;
         border: 1px solid #e8d5c0;
         /* Light skin-tone border */
         border-radius: 0;
         overflow: hidden;
         box-shadow: 0 3px 10px rgba(199, 154, 123, 0.1);
         /* Subtle skin-tone shadow */
      }

      .peel-faq-question {
         padding: 20px 25px;
         background-color: #fff9f0;
         /* Light cream */
         color: #5a3921;
         /* Deep skin tone */
         font-weight: 600;
         font-size: 18px;
         display: flex;
         justify-content: space-between;
         align-items: center;
         cursor: pointer;
         transition: all 0.3s ease;
      }

      .peel-faq-question:hover {
         background-color: #fffbf5;
         /* Warmer cream */
      }

      .peel-faq-icon {
         color: #c79a7b;
         /* Medium skin tone */
         transition: transform 0.3s ease;
         font-size: 20px;
      }

      .peel-faq-item.active .peel-faq-icon {
         transform: rotate(45deg);
         color: #9c6f4a;
         /* Darker skin tone */
      }

      .peel-faq-answer {
         padding: 0 25px;
         max-height: 0;
         overflow: hidden;
         transition: max-height 0.3s ease;
         color: #7a5c44;
         /* Medium-dark skin tone */
         line-height: 1.6;
         background: #fff9f0;
      }

      .peel-faq-item.active .peel-faq-answer {
         padding: 0 25px 25px;
         max-height: 500px;
      }

      @media (max-width: 768px) {
         .peel-faq-title {
            font-size: 30px;
         }

         .peel-faq-subtitle {
            font-size: 16px;
         }

         .peel-faq-question {
            padding: 18px 20px;
            font-size: 16px;
         }
      }
   </style>

   <style>
      .choose-us-container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 80px 20px;
         font-family: 'Helvetica Neue', Arial, sans-serif;
         position: relative;
         text-align: center;
      }

      .choose-us-header {
         margin-bottom: 60px;
      }

      .choose-us-title {
         font-size: 36px;
         font-weight: 700;
         color: #5a3921;
         margin-bottom: 15px;
         position: relative;
         display: inline-block;
      }

      .choose-us-title:after {
         content: '';
         position: absolute;
         bottom: -10px;
         left: 50%;
         transform: translateX(-50%);
         width: 80px;
         height: 3px;
         background: #c79a7b;
      }

      .choose-us-subtitle {
         font-size: 18px;
         color: #7a5c44;
         max-width: 700px;
         margin: 0 auto;
         line-height: 1.6;
      }

      .choose-us-content {
         position: relative;
         min-height: 500px;
         margin: 60px auto;
      }

      .choose-us-image {
         width: 300px;
         height: 300px;
         margin: 0 auto;
         border-radius: 50%;
         overflow: hidden;
         position: relative;
         z-index: 2;
         border: 8px solid #f5e9d9;
         box-shadow: 0 10px 30px rgba(199, 154, 123, 0.2);
      }

      .choose-us-image img {
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      .choose-us-point {
         position: absolute;
         width: 220px;
         padding: 25px;
         background: white;
         border: 1px solid #e8d5c0;
         box-shadow: 0 5px 15px rgba(199, 154, 123, 0.1);
         z-index: 3;
      }

      .choose-us-point.top-left {
         top: 0;
         left: 10%;
      }

      .choose-us-point.top-right {
         top: 0;
         right: 10%;
      }

      .choose-us-point.bottom-left {
         bottom: 0;
         left: 10%;
      }

      .choose-us-point.bottom-right {
         bottom: 0;
         right: 10%;
      }

      .choose-us-point.left-center {
         left: 5%;
         top: 50%;
         transform: translateY(-50%);
      }

      .choose-us-point.right-center {
         right: 5%;
         top: 50%;
         transform: translateY(-50%);
      }

      .point-icon {
         width: 50px;
         height: 50px;
         margin: 0 auto 15px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: #f5e9d9;
         color: #9c6f4a;
         font-size: 20px;
         border-radius: 50%;
      }

      .point-title {
         font-size: 18px;
         font-weight: 600;
         color: #5a3921;
         margin-bottom: 10px;
      }

      .point-desc {
         font-size: 15px;
         color: #7a5c44;
         line-height: 1.5;
      }

      @media (max-width: 992px) {
         .choose-us-content {
            min-height: 400px;
         }

         .choose-us-point {
            width: 180px;
            padding: 20px;
         }
      }

      @media (max-width: 768px) {
         .choose-us-content {
            display: flex;
            flex-direction: column;
            min-height: auto;
            margin: 40px auto;
         }

         .choose-us-image {
            width: 200px;
            height: 200px;
            margin-bottom: 40px;
         }

         .choose-us-point {
            position: static;
            width: 100%;
            max-width: 400px;
            margin: 0 auto 20px;
            transform: none !important;
         }

         .choose-us-point:last-child {
            margin-bottom: 0;
         }
      }

      @media (max-width: 576px) {
         .choose-us-title {
            font-size: 30px;
         }

         .choose-us-subtitle {
            font-size: 16px;
         }
      }
   </style>

   <style>
      .why-choose {
         background-color: #E9D1C1;
      }

      .split-choose-container {
         max-width: 1400px;
         margin: 0 auto;
         padding: 60px 20px;
         font-family: 'Helvetica Neue', Arial, sans-serif;
      }

      .split-choose-wrapper {
         display: flex;
         align-items: center;
         gap: 40px;
      }

      .split-choose-left {
         flex: 1;
      }

      .split-choose-right {
         flex: 1;
      }

      .split-choose-title {
         font-size: 34px;
         font-weight: 600;
         color: #5a3921;
         margin-bottom: 20px;
         position: relative;
         /* padding-bottom: 10px; */
      }



      .split-choose-subtitle {
         font-size: 17px;
         color: #7a5c44;
         line-height: 1.5;
         margin-bottom: 30px;
      }

      .split-choose-image {
         width: 100%;
         border-radius: 4px;
         overflow: hidden;
         box-shadow: 0 15px 30px rgba(199, 154, 123, 0.15);
      }

      .split-choose-image img {
         width: 100%;
         height: auto;
         display: block;
      }

      .split-choose-grid {
         display: grid;
         grid-template-columns: repeat(2, 1fr);
         gap: 20px;
      }

      .split-choose-card {
         background: #F6E4DA;
         padding: 25px;
         border: 1px solid #f0e4d4;
      }

      .split-choose-icon {
         width: 50px;
         height: 50px;
         border: 1px solid #9c6f4a;
         margin-bottom: 15px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: #f9f2e8;
         color: #9c6f4a;
         font-size: 20px;
         border-radius: 50%;
      }

      .split-choose-card-title {
         font-size: 18px;
         font-weight: 600;
         color: #5a3921;
         margin-bottom: 10px;
      }

      .split-choose-card-desc {
         font-size: 15px;
         color: #7a5c44;
         line-height: 1.5;
      }

      @media (max-width: 992px) {
         .split-choose-wrapper {
            flex-direction: column;
            gap: 30px;
         }

         .split-choose-left,
         .split-choose-right {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
         }

         .split-choose-title {
            text-align: center;
         }

         .split-choose-title:after {
            left: 50%;
            transform: translateX(-50%);
         }

         .split-choose-subtitle {
            text-align: center;
         }
      }

      @media (max-width: 576px) {
         .split-choose-grid {
            grid-template-columns: 1fr;
         }

         .split-choose-title {
            font-size: 28px;
         }
      }
   </style>

   <style>
      /* Footer Section */
      .footer-main-section {
         background-color: #F1C6B3;
         padding: 80px 0 40px;
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
         padding-top: 40px;
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
        .skin-transform-body {
            background: #f8f6f3;
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            margin: 0;
            padding: 0;
        }

        .skin-transform-slider-section {
            padding: 80px 0;
            max-width:1500px;
            margin:0 auto;
        }

        .skin-transform-section-title {
            color: #8b4513;
            font-weight: 300;
            margin-bottom: 16px;
            text-align: center;
            font-size: 2.8rem;
            letter-spacing: -0.02em;
        }

        .skin-transform-section-description {
            color: #a0522d;
            text-align: center;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
        }

        .skin-transform-swiper-container {
            width: 100%;
            height: 400px;
            position: relative;
            overflow: hidden;
        }

        .skin-transform-swiper-slide {
            text-align: center;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 15px;
        }

        .skin-transform-slide-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .skin-transform-slide-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            color: #8b4513;
            padding: 20px;
            text-align: center;
        }

        .skin-transform-slide-title {
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 4px;
            color: #8b4513;
        }

        .skin-transform-slide-subtitle {
            font-size: 0.9rem;
            color: #a0522d;
            font-weight: 300;
        }

        /* Clean Navigation Buttons */
        .skin-transform-swiper-button-next,
        .skin-transform-swiper-button-prev {
            color: #8b4513 !important;
            background: #ffffff;
            width: 44px !important;
            height: 44px !important;
            margin-top: -22px !important;
            border: 1px solid #e8d5c4;
        }

        .skin-transform-swiper-button-next:after,
        .skin-transform-swiper-button-prev:after {
            font-size: 16px !important;
            font-weight: 400;
        }

        /* Clean Pagination */
        .skin-transform-swiper-pagination {
            bottom: 20px !important;
        }

        .skin-transform-swiper-pagination-bullet {
            background: #d4b896 !important;
            opacity: 0.4 !important;
            width: 8px !important;
            height: 8px !important;
            margin: 0 4px !important;
        }

        .skin-transform-swiper-pagination-bullet-active {
            background: #8b4513 !important;
            opacity: 1 !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .skin-transform-slider-section {
                padding: 60px 0;
            }
            
            .skin-transform-section-title {
                font-size: 2.2rem;
            }
            
            .skin-transform-section-description {
                font-size: 1rem;
                padding: 0 20px;
                margin-bottom: 40px;
            }
            
            .skin-transform-swiper-container {
                height: 350px;
            }
            
            .skin-transform-swiper-button-next,
            .skin-transform-swiper-button-prev {
                width: 36px !important;
                height: 36px !important;
                margin-top: -18px !important;
            }
            
            .skin-transform-swiper-button-next:after,
            .skin-transform-swiper-button-prev:after {
                font-size: 14px !important;
            }
        }

        @media (max-width: 480px) {
            .skin-transform-slider-section {
                padding: 40px 0;
            }
            
            .skin-transform-swiper-container {
                height: 300px;
            }
            
            .skin-transform-section-title {
                font-size: 1.9rem;
            }
            
            .skin-transform-section-description {
                padding: 0 15px;
            }
        }
    </style>

   <?php include('header.php') ?>


   <main>

      <!-- breadcrumb-area-start -->
      <section class="breadcrumb-area tpbreadcrumb-overlay" data-background="assets/img/banner/banner-service.png">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                  <div class="tpbreadcrumb text-center">
                     <h2 class="tpbreadcrumb-title">Chemical Peels</h2>
                     <p>Glow up with smoother, clearer skin.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- about-peels-container -->
      <div class="about-peels-container">
         <div class="about-peels-content">
            <div class="about-peels-image">
               <img
                  src="assets/img/services/chemical-peel.jpg"
                  alt="Chemical peel treatment">
            </div>

            <div class="about-peels-text">
               <h2 class="about-peels-title  font-ovrd">What is Chemical Peels?</h2>
               <p class="fs-5">A chemical peel is a dermatological treatment that uses a chemical solution to exfoliate and remove the top layers of the skin, promoting the growth of new, smoother, and more evenly toned skin. Depending on the depth—superficial, medium, or deep—the peel can target various skin concerns such as fine lines, acne scars, sun damage, uneven pigmentation, and dull texture. </p>

               <div class="about-peels-accordion">
                  <div class="accordion-item">
                     <div class="accordion-header">
                        <span>Treatment Levels</span>
                        <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="accordion-content">
                        <p><b>Light Peels – </b>Great for glow and mild texture</p>
                        <p><b>Medium Peels – </b> Target spots, scars, and deeper concerns</p>
                        <p><b>Deep Peels – </b>For advanced sun damage and visible wrinkles</p>
                     </div>
                  </div>

                  <div class="accordion-item">
                     <div class="accordion-header">
                        <span>Who It’s For</span>
                        <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="accordion-content">
                        <p>Perfect for those dealing with acne scars, sun spots, rough texture, or fine lines. We'll help you choose the right one in a consultation.</p>
                     </div>
                  </div>

                  <div class="accordion-item">
                     <div class="accordion-header">
                        <span>Recovery Process</span>
                        <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="accordion-content">
                        <p><b>Light Peels – </b> 1–3 days of mild peeling</p>
                        <p><b>Medium Peels – </b> Around 7 days</p>
                        <p><b>Deep Peels: </b> 10–14 days with guided aftercare</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Stats -->
      <div class="derm-stats-container">
         <div class="derm-stats-grid">
            <div class="derm-stat-box">
               <div class="derm-stat-icon">
                  <i class="fas fa-user-md"></i>
               </div>
               <div class="derm-stat-number">15+</div>
               <div class="derm-stat-text">Years of Medical Experience</div>
            </div>

            <div class="derm-stat-box">
               <div class="derm-stat-icon">
                  <i class="fas fa-procedures"></i>
               </div>
               <div class="derm-stat-number">10,000+</div>
               <div class="derm-stat-text">Successful Treatments Performed</div>
            </div>

            <div class="derm-stat-box">
               <div class="derm-stat-icon">
                  <i class="fas fa-certificate"></i>
               </div>
               <div class="derm-stat-number">8</div>
               <div class="derm-stat-text">Board Certifications Held</div>
            </div>

            <div class="derm-stat-box">
               <div class="derm-stat-icon">
                  <i class="fas fa-flask"></i>
               </div>
               <div class="derm-stat-number">25+</div>
               <div class="derm-stat-text">Advanced Skin Care Techniques</div>
            </div>
         </div>
      </div>

      <!-- Chemical Peel Process -->
      <div class="peel-process">
         <div class="peel-process-container">
            <h2 class="peel-process-title font-ovrd ">How Our Chemical Peel Treatment Works</h2>
            <p class="pb-60 text-center">Our chemical peel treatment is a multi-step process designed to rejuvenate your
               skin and
               address specific
               concerns. Here's what to expect:</p>

            <div class="peel-steps">
               <div class="peel-step">
                  <div class="peel-step-number">1</div>
                  <div class="peel-step-content">
                     <h3 class="peel-step-title font-ovrd fs-2">Consultation</h3>
                     <p class="peel-step-desc">Our skincare specialist will assess your skin type and concerns to
                        recommend
                        the
                        perfect peel strength and formulation for your needs.</p>
                  </div>
               </div>

               <div class="peel-step">
                  <div class="peel-step-number">2</div>
                  <div class="peel-step-content">
                     <h3 class="peel-step-title font-ovrd fs-2">Skin Preparation</h3>
                     <p class="peel-step-desc">Your skin will be thoroughly cleansed and prepped to ensure optimal peel
                        penetration and even application.</p>
                  </div>
               </div>

               <div class="peel-step">
                  <div class="peel-step-number">3</div>
                  <div class="peel-step-content">
                     <h3 class="peel-step-title font-ovrd fs-2">Peel Application</h3>
                     <p class="peel-step-desc">The chemical solution is carefully applied in layers, with timing
                        precisely
                        monitored for your skin's tolerance.</p>
                  </div>
               </div>

               <div class="peel-step">
                  <div class="peel-step-number">4</div>
                  <div class="peel-step-content">
                     <h3 class="peel-step-title font-ovrd fs-2">Neutralization</h3>
                     <p class="peel-step-desc">The peel is neutralized at the perfect moment to stop the chemical
                        process,
                        followed by a soothing application.</p>
                  </div>
               </div>

               <div class="peel-step">
                  <div class="peel-step-number">5</div>
                  <div class="peel-step-content">
                     <h3 class="peel-step-title font-ovrd fs-2">Aftercare</h3>
                     <p class="peel-step-desc">We provide detailed instructions and recommended products to support your
                        skin's
                        healing process and maintain results.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Chemical Peel Benefits Section -->
      <div class="chempeel-container">
         <div class="chempeel-content">
            <div class="chempeel-header">
               <h2 class="chempeel-title font-ovrd fs-2">Benefits of Chemical Peels</h2>
               <p class="chempeel-description fs-5">
                  Gentle exfoliation. Visible glow.<br>
                  Our professional chemical peels are safe, effective, and tailored to your skin’s needs, helping you achieve a brighter, smoother, more even look over time.
               </p>
            </div>

            <div class="chempeel-benefits">
               <div class="chempeel-benefit">
                  <span class="chempeel-benefit-icon"><i class="fas fa-check"></i></span>
                  <span class="chempeel-benefit-text">Removes dead skin build-up</span>
               </div>
               <div class="chempeel-benefit">
                  <span class="chempeel-benefit-icon"><i class="fas fa-check"></i></span>
                  <span class="chempeel-benefit-text">Softens fine lines and wrinkles</span>
               </div>
               <div class="chempeel-benefit">
                  <span class="chempeel-benefit-icon"><i class="fas fa-check"></i></span>
                  <span class="chempeel-benefit-text">Fades dark spots and marks</span>
               </div>
               <div class="chempeel-benefit">
                  <span class="chempeel-benefit-icon"><i class="fas fa-check"></i></span>
                  <span class="chempeel-benefit-text">Clears clogged pores</span>
               </div>
               <div class="chempeel-benefit">
                  <span class="chempeel-benefit-icon"><i class="fas fa-check"></i></span>
                  <span class="chempeel-benefit-text">Improves skin texture and tone</span>
               </div>
               <div class="chempeel-benefit">
                  <span class="chempeel-benefit-icon"><i class="fas fa-check"></i></span>
                  <span class="chempeel-benefit-text">Safe for all skin types</span>
               </div>
            </div>

            <a href="#" class="chempeel-button">Schedule Consultation</a>
         </div>

         <div class="chempeel-image">
            <img src="assets/img/services/chemical-peel.jpg" alt="Chemical peel treatment">
         </div>
      </div>

      <!-- Why Choose Our Chemical Peels -->
      <div class="why-choose">
         <div class="split-choose-container">
            <div class="split-choose-wrapper">
               <div class="split-choose-left">
                  <h2 class="split-choose-title font-ovrd">Why Choose Dr Rapple for Chemical Peels Treatment</h2>
                  <p class="split-choose-subtitle">
                     Professional skin rejuvenation with personalized care and proven results from board-certified
                     dermatologists
                  </p>
                  <div class="split-choose-image">
                     <img
                        src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Professional chemical peel treatment">
                  </div>
               </div>

               <div class="split-choose-right">
                  <div class="split-choose-grid">
                     <div class="split-choose-card">
                        <div class="split-choose-icon">
                           <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="split-choose-card-title font-ovrd">Expert Dermatologists</h3>
                        <p class="split-choose-card-desc">Board-certified specialists with 15+ years experience in
                           advanced
                           peel
                           techniques</p>
                     </div>

                     <div class="split-choose-card">
                        <div class="split-choose-icon">
                           <i class="fas fa-biohazard"></i>
                        </div>
                        <h3 class="split-choose-card-title font-ovrd">Medical-Grade Solutions</h3>
                        <p class="split-choose-card-desc">Premium formulations not available in over-the-counter
                           products
                        </p>
                     </div>

                     <div class="split-choose-card">
                        <div class="split-choose-icon">
                           <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3 class="split-choose-card-title font-ovrd">Safety First Approach</h3>
                        <p class="split-choose-card-desc">Precise application protocols to minimize risks and side
                           effects
                        </p>
                     </div>

                     <div class="split-choose-card">
                        <div class="split-choose-icon">
                           <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="split-choose-card-title font-ovrd">Proven Effectiveness</h3>
                        <p class="split-choose-card-desc">10,000+ successful treatments with consistent, visible results
                        </p>
                     </div>

                     <div class="split-choose-card">
                        <div class="split-choose-icon">
                           <i class="fas fa-user-cog"></i>
                        </div>
                        <h3 class="split-choose-card-title font-ovrd">Customized Treatments</h3>
                        <p class="split-choose-card-desc">Peels tailored to your specific skin type and concerns</p>
                     </div>

                     <div class="split-choose-card">
                        <div class="split-choose-icon">
                           <i class="fas fa-clinic-medical"></i>
                        </div>
                        <h3 class="split-choose-card-title font-ovrd">Premium Facility</h3>
                        <p class="split-choose-card-desc">State-of-the-art clinic with highest hygiene standards</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container-fluid">
        <div class="skin-transform-slider-section">
            <div class="">
                <h1 class="skin-transform-section-title font-ovrd">Skin Transformation Journey</h1>
                <p class="skin-transform-section-description">
                    Discover the remarkable results our patients have achieved through our advanced skin treatments. 
                    Each transformation represents renewed confidence and improved skin health.
                </p>
                
                <div class="skin-transform-swiper-container swiper">
                    <div class="swiper-wrapper">
                        <div class="skin-transform-swiper-slide swiper-slide">
                            <img src="assets/img/before-after/ba-chemical-peel.webp" alt="Acne Treatment" class="skin-transform-slide-image">
                            
                        </div>
                        
                        <div class="skin-transform-swiper-slide swiper-slide">
                            <img src="assets/img/before-after/ba-chemical-peel.webp" alt="Anti-aging Treatment" class="skin-transform-slide-image">
                            
                        </div>
                        
                        <div class="skin-transform-swiper-slide swiper-slide">
                            <img src="assets/img/before-after/ba-chemical-peel.webp" alt="Skin Brightening" class="skin-transform-slide-image">
                            
                        </div>
                        
                        <div class="skin-transform-swiper-slide swiper-slide">
                            <img src="assets/img/before-after/ba-chemical-peel.webp" alt="Scar Treatment" class="skin-transform-slide-image">
                            
                        </div>
                        
                        <div class="skin-transform-swiper-slide swiper-slide">
                            <img src="assets/img/before-after/ba-chemical-peel.webp" alt="Pigmentation Treatment" class="skin-transform-slide-image">
                            
                        </div>
                        
                        <div class="skin-transform-swiper-slide swiper-slide">
                            <img src="assets/img/before-after/ba-chemical-peel.webp" alt="Skin Rejuvenation" class="skin-transform-slide-image">
                            
                        </div>
                    </div>
                    
                    <!-- Navigation buttons -->
                    <div class="skin-transform-swiper-button-next swiper-button-next"></div>
                    <div class="skin-transform-swiper-button-prev swiper-button-prev"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    

      <!-- <section class="transformation-showcase">
         <div class="showcase-container">
            <div class="showcase-header">
               <h2 class="showcase-title font-ovrd">Before & After</h2>
            </div>


            <div class="treatment-tabs">
               <button class="tab-button tab-active" data-tab="filler">Filler Treatment</button>
               <button class="tab-button" data-tab="laser">Laser Treatment</button>
            </div>


            <div class="comparison-wrapper">

               <div class="tab-content-panel panel-active" id="filler-content">
                  <div class="image-comparison-container" id="filler-comparison">
                     <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=900&h=500&fit=crop&crop=face"
                        alt="Before Filler Treatment" class="before-image">
                     <img
                        src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?w=900&h=500&fit=crop&crop=face"
                        alt="After Filler Treatment" class="after-image">
                     <div class="comparison-slider">
                        <div class="slider-handle">
                           <div class="slider-arrows">
                              <div class="arrow-left"></div>
                              <div class="arrow-right"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comparison-labels">
                     <span class="label-before">Before</span>
                     <span class="label-after">After</span>
                  </div>
               </div>


               <div class="tab-content-panel" id="laser-content">
                  <div class="image-comparison-container" id="laser-comparison">
                     <img
                        src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=900&h=500&fit=crop&crop=face"
                        alt="Before Laser Treatment" class="before-image">
                     <img
                        src="https://images.unsplash.com/photo-1594824709349-7aef8e22aaca?w=900&h=500&fit=crop&crop=face"
                        alt="After Laser Treatment" class="after-image">
                     <div class="comparison-slider">
                        <div class="slider-handle">
                           <div class="slider-arrows">
                              <div class="arrow-left"></div>
                              <div class="arrow-right"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comparison-labels">
                     <span class="label-before">Before</span>
                     <span class="label-after">After</span>
                  </div>
               </div>
            </div>
         </div>
      </section> -->

      <!-- Chemical Peel FAQs -->
      <div class="peel-faq-container">
         <div class="peel-faq-header">
            <h2 class="peel-faq-title font-ovrd">Chemical Peel FAQs</h2>
            <p class="peel-faq-subtitle">
               Get answers to common questions about our professional chemical peel treatments
            </p>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-md-6 mb-4">
                  <div class="peel-faq-item h-100">
                     <div class="peel-faq-question">
                        <span>How often should I get a chemical peel?</span>
                        <span class="peel-faq-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="peel-faq-answer">
                        <p>Light peels can be done every 2-4 weeks, medium peels every 3-6 months, and deep peels are
                           typically a one-time treatment. Your dermatologist will recommend a schedule based on your
                           skin type and concerns.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="peel-faq-item h-100">
                     <div class="peel-faq-question">
                        <span>Does a chemical peel hurt?</span>
                        <span class="peel-faq-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="peel-faq-answer">
                        <p>Light peels cause minimal discomfort (like mild tingling). Medium peels may sting
                           temporarily. Deep peels require anesthesia. We use cooling techniques to maximize your
                           comfort during all treatments.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="peel-faq-item h-100">
                     <div class="peel-faq-question">
                        <span>Can chemical peels treat acne?</span>
                        <span class="peel-faq-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="peel-faq-answer">
                        <p>Yes! Salicylic acid peels are excellent for acne as they penetrate oil glands. Glycolic acid
                           peels also help by exfoliating dead skin cells that clog pores. We customize the peel to your
                           acne type.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="peel-faq-item h-100">
                     <div class="peel-faq-question">
                        <span>How should I prepare for a peel?</span>
                        <span class="peel-faq-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="peel-faq-answer">
                        <p>Stop retinoids 3-7 days prior, avoid sun exposure, and don't wax or shave 24 hours before.
                           For deeper peels, we may prescribe a pre-treatment skincare regimen to prepare your skin.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="peel-faq-item h-100">
                     <div class="peel-faq-question">
                        <span>Can I wear makeup after treatment?</span>
                        <span class="peel-faq-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="peel-faq-answer">
                        <p>After light peels, you can typically wear makeup the next day. Medium peels require 5-7 days
                           before makeup. We'll provide specific aftercare instructions and recommend mineral-based
                           makeup when you're ready.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="peel-faq-item h-100">
                     <div class="peel-faq-question">
                        <span>Are chemical peels safe for dark skin?</span>
                        <span class="peel-faq-icon"><i class="fas fa-plus"></i></span>
                     </div>
                     <div class="peel-faq-answer">
                        <p>Yes, when performed properly. We use special formulations for melanin-rich skin to minimize
                           pigmentation risks. Lactic acid and mandelic acid peels are particularly gentle options for
                           darker skin tones.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Call to Action Section -->
      <section class="cta-area mb-40 mt-0">
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
                        <a class="tp-btn text-dark mt-20 mb-70 mb-md-0" href="/contact.html">Book Now</a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="cta-phone text-center pl-10">
                        <a class="tp-ripple" href="tel:0123456789"><i
                              class="fa-light text-secondary fa-phone-volume"></i></a>
                     </div>
                  </div>
               </div>
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
   <script src="assets/js/beforeafter.jquery-1.0.0.min.js"></script>
   <script src="assets/js/splide.js"></script>
   <script src="assets/js/pignose.calendar.full.min.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>


   <script>
      document.querySelectorAll('.peel-faq-question').forEach(question => {
         question.addEventListener('click', () => {
            const item = question.parentElement;
            item.classList.toggle('active');

            // Close other open items
            document.querySelectorAll('.peel-faq-item').forEach(otherItem => {
               if (otherItem !== item && otherItem.classList.contains('active')) {
                  otherItem.classList.remove('active');
               }
            });
         });
      });
   </script>

   <script>
      document.querySelectorAll('.accordion-header').forEach(header => {
         header.addEventListener('click', () => {
            const item = header.parentElement;
            item.classList.toggle('active');

            // Close other open items
            document.querySelectorAll('.accordion-item').forEach(otherItem => {
               if (otherItem !== item && otherItem.classList.contains('active')) {
                  otherItem.classList.remove('active');
               }
            });
         });
      });
   </script>

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
   
   <script>
        document.addEventListener('DOMContentLoaded', function() {
            const skinTransformSwiper = new Swiper('.skin-transform-swiper-container', {
                // Basic settings
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                speed: 600,
                effect: 'slide',
                
                // Responsive breakpoints
                slidesPerView: 1,
                // spaceBetween: 10,
                centeredSlides: false,
                
                breakpoints: {
                    // Phone (1 slide)
                    320: {
                        slidesPerView: 1,
                        // spaceBetween: 20,
                        centeredSlides: true,
                    },
                    // Tablet (2 slides)
                    768: {
                        slidesPerView: 2,
                        // spaceBetween: 10,
                        centeredSlides: false,
                    },
                    // Desktop (3 slides)
                    1024: {
                        slidesPerView: 2,
                        // spaceBetween: 10,
                        centeredSlides: false,
                    }
                },
                
                // Navigation
                navigation: {
                    nextEl: '.skin-transform-swiper-button-next',
                    prevEl: '.skin-transform-swiper-button-prev',
                },
                
                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                
                // Touch settings
                touchRatio: 1,
                touchAngle: 45,
                grabCursor: true,
                
                // Accessibility
                a11y: {
                    enabled: true,
                },
            });
        });
    </script>

   
</body>

</html>