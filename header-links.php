<!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/fav-icon.png">
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nouislider.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/splide.css">
   <link rel="stylesheet" href="assets/css/odometer.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
   
   <style>
       
       .brb{
           border-radius:20px;
       }
       
       .bg-1{
           background:#ECD9CB;
       }
       
       .bg-2{
           background:#E9D1C1;
       }
       
   </style>
   
   <style>
    
   .treatment-card {
      position: relative;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      border-radius:20px;
    }

    .treatment-card img, .service-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .treatment-card:hover img, .service-img img {
      transform: scale(1.05);
      border-radius:20px;
    }

    .treatment-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.1));
      color: #fff;
      padding: 20px;
      display: flex;
      border-radius:20px;
      flex-direction: column;
      justify-content: end;
    }

    .treatment-title {
      font-size: 1.5rem;
      font-weight: 500;
      margin-bottom: 0.5rem;
      color: #fff;
    }

    .treatment-desc {
      font-size: 0.95rem;
      line-height: 1.4;
      opacity: 0;
      color:white;
      max-height: 0;
      overflow: hidden;
      transition: opacity 0.4s ease, max-height 0.4s ease;
    }

    .treatment-card:hover .treatment-desc {
      opacity: 1;
      max-height: 200px;
      margin-top: 0.5rem;
    }
</style>
      