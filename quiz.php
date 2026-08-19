<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Know your skin</title>
    <meta name="description" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include('header-links.php'); ?>

    <style>
        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #8B6F47;
            background: #e9d1c1;
            min-height: 100vh;
        }

        .nav-container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .quiz-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Progress Bar */
        .progress-container {
            margin-bottom: 30px;
            background-color: #E8D4C4;
            height: 6px;
            position: relative;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #A67C5A, #8B6F47);
            width: 0%;
            transition: width 0.5s ease;
        }

        .step-indicator {
            text-align: center;
            margin-bottom: 20px;
            color: #6B4C3A;
            font-size: 1.1rem;
        }

        /* Quiz Steps */
        .quiz-step {
            display: none;
            animation: fadeInUp 0.6s ease-out;
            background-color: #ECD9CB;
            border: 2px solid #E8D4C4;
            box-shadow: 0 10px 30px rgba(107, 76, 58, 0.1);
            overflow: hidden;
        }

        .quiz-step.active {
            display: block;
        }

        /* Welcome Step Styling */
        .quiz-step#step0 {
            padding: 60px 40px;
            text-align: center;
        }

        .quiz-step#step0 h2 {
            font-size: 2.5rem;
            color: #6B4C3A;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .quiz-step#step0 .concern-image {
            width: 90%;
            height: 300px;
            padding: 10px;
            margin: 0 auto 40px;
            border: 3px solid #E8D4C4;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F5E6D3;
        }

        .quiz-step#step0 .concern-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: sepia(20%) saturate(1.1);
        }

        /* Question Steps */
        .quiz-step h3 {
            font-size: 1.6rem;
            color: #6B4C3A;
            padding: 30px 40px 20px;
            text-align: center;
            font-weight: 400;
            background-color: #FAF7F2;
        }

        /* Background Image Container */
        .image-options-container {
            position: relative;
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Background Images for Each Step */
        .quiz-step#step1 .image-options-container {
            background-image: url('https://images.unsplash.com/photo-1660646463659-df77c1580723?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        }

        .quiz-step#step2 .image-options-container {
            background-image: url('https://plus.unsplash.com/premium_photo-1664203068177-2641a2a55a4e?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        }

        .quiz-step#step3 .image-options-container {
            background-image: url('https://images.pexels.com/photos/7581587/pexels-photo-7581587.jpeg');
        }

        .quiz-step#step4 .image-options-container {
            background-image: url('https://images.pexels.com/photos/6643063/pexels-photo-6643063.jpeg');
        }

        .quiz-step#step5 .image-options-container {
            background-image: url('https://sfycdn.speedsize.com/56385b25-4e17-4a9a-9bec-c421c18686fb/cdn.shopify.com/s/files/1/0410/9608/5665/t/3/assets/pf-28c41d03--Copy-of-Merry-Christmas-A-Happy-New-Year-8.jpg?v=1600449281');
        }

        /* Dark overlay for better text readability */
        .image-options-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .quiz-options {
            display: flex;
            justify-content: center;
            gap: 20px;
            position: absolute;
            z-index: 2;
            flex-wrap: wrap;
            bottom: 30px;
            left: 0;
            right: 0;
        }

        .quiz-option {
            padding: 10px 25px;
            background-color: transparent;
            border: 2px solid #F5E6D3;
            color: #FAF7F2;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            min-width: 30px;
            width: fit-content;
            backdrop-filter: blur(5px);
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .quiz-option:hover {
            background-color: rgba(245, 230, 211, 0.2);
            border-color: #FAF7F2;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .quiz-option.selected {
            background-color: rgba(166, 124, 90, 0.8);
            color: #FAF7F2;
            border-color: #A67C5A;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin: 30px 40px;
        }

        .nav-btn {
            padding: 12px 30px;
            background-color: #A67C5A;
            color: #FAF7F2;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            background-color: #F1C6B3;
        }

        .nav-btn:disabled {
            background-color: #F1C6B3;
            cursor: not-allowed;
        }

        /* Results Section */
        .results-section {
            text-align: left;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
        }

        .results-section h2 {
            color: #6B4C3A;
            margin-bottom: 30px;
            text-align: center;
            font-size: 2rem;
        }

        .recommended-treatments {
            background-color: #F5E6D3;
            padding: 30px;
            margin-bottom: 40px;
            border-left: 4px solid #A67C5A;
        }

        .recommended-treatments h3 {
            color: #6B4C3A;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }

        .treatment-list {
            color: #8B6F47;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* Form Section */
        .appointment-form {
            background-color: #FAF7F2;
            padding: 40px;
            border: 1px solid #E8D4C4;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #6B4C3A;
            font-weight: 500;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #E8D4C4;
            background-color: #FAF7F2;
            color: #8B6F47;
            font-size: 1rem;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #A67C5A;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background-color: #A67C5A;
            color: #FAF7F2;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #8B6F47;
        }

        /* Thank You Section */
        .thank-you {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 60px 40px;
        }

        .thank-you h2 {
            color: #6B4C3A;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .thank-you p {
            font-size: 1.2rem;
            color: #8B6F47;
            line-height: 1.8;
        }

        .thank-you .concern-image {
            width: 120px;
            height: 90px;
            margin: 0 auto 30px;
            border: 3px solid #E8D4C4;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F5E6D3;
        }

        .thank-you .concern-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Animations */
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

        /* Mobile Responsive Design */
        @media (max-width: 768px) {
            .quiz-container {
                padding: 15px;
                min-height: 100vh;
            }

            .quiz-step h3 {
                font-size: 1.3rem;
                padding: 20px 20px 15px;
            }

            .image-options-container {
                height: 280px;
            }

            .quiz-options {
                gap: 12px;
                padding: 0 10px;
            }

            .quiz-option {
                padding: 12px 25px;
                font-size: 1rem;
                min-width: 90px;
            }

            .nav-buttons {
                margin: 20px;
                gap: 15px;
            }

            .nav-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .quiz-step#step0 {
                padding: 40px 20px;
            }

            .quiz-step#step0 h2 {
                font-size: 1.8rem;
            }

            .quiz-step#step0 .concern-image {
                height: 200px;
                width: 95%;
            }

            .results-section {
                padding: 30px 20px;
            }

            .results-section h2 {
                font-size: 1.6rem;
            }

            .appointment-form {
                padding: 25px 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .thank-you {
                padding: 40px 20px;
            }

            .thank-you h2 {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 480px) {
            .quiz-container {
                padding: 10px;
            }

            .progress-container {
                margin-bottom: 20px;
            }

            .image-options-container {
                height: 240px;
            }

            .quiz-options {
                /* flex-direction: column; */
                align-items: center;
                gap: 10px;
            }

            .quiz-option {
                /* width: 140px; */
                padding: 10px 20px;
            }

            .nav-buttons {
                flex-direction: column;
                margin: 15px;
            }
        }
    </style>
</head>

<body>

    <?php include('header.php'); ?>

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



    <div class="quiz-container">
        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
        <div class="step-indicator" id="stepIndicator">Step 1 of 7</div>

        <!-- Form Element (encompasses entire quiz) -->
        <form id="skinQuizForm" action="https://formspree.io/f/YOUR_FORM_ID" method="POST">

            <!-- Welcome Step -->
            <div class="quiz-step active" id="step0">
                <h2 class="font-ovrd">Discover Your Perfect Skin Treatment</h2>
                <div class="concern-image">
                    <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Skin Care">
                </div>
                <p style="font-size: 1.2rem; margin-bottom: 40px; color: #8B6F47; line-height: 1.6;">
                    Take our personalized quiz to understand your skin's unique needs and discover the most suitable
                    treatments for your concerns.
                </p>
                <div class="nav-buttons">
                    <div></div>
                    <button type="button" class="nav-btn" onclick="nextStep()">Start Quiz</button>
                </div>
            </div>

            <!-- Question 1: Acne -->
            <div class="quiz-step" id="step1">
                <h3 class="font-ovrd">Do you experience frequent acne breakouts?</h3>
                <div class="image-options-container">
                    <div class="quiz-options">
                        <div class="quiz-option" onclick="selectOption(this, 'acne', 'yes')">Yes</div>
                        <div class="quiz-option" onclick="selectOption(this, 'acne', 'maybe')">Maybe</div>
                        <div class="quiz-option" onclick="selectOption(this, 'acne', 'no')">No</div>
                    </div>
                </div>
                <input type="hidden" name="acne_concern" id="acne_concern" value="">
                <div class="nav-buttons">
                    <button type="button" class="nav-btn" onclick="prevStep()">Previous</button>
                    <button type="button" class="nav-btn" onclick="nextStep()" disabled id="next1">Next</button>
                </div>
            </div>

            <!-- Question 2: Pigmentation -->
            <div class="quiz-step" id="step2">
                <h3 class="font-ovrd">Do you have dark spots, pigmentation, or uneven skin tone?</h3>
                <div class="image-options-container">
                    <div class="quiz-options">
                        <div class="quiz-option" onclick="selectOption(this, 'pigmentation', 'yes')">Yes</div>
                        <div class="quiz-option" onclick="selectOption(this, 'pigmentation', 'maybe')">Maybe</div>
                        <div class="quiz-option" onclick="selectOption(this, 'pigmentation', 'no')">No</div>
                    </div>
                </div>
                <input type="hidden" name="pigmentation_concern" id="pigmentation_concern" value="">
                <div class="nav-buttons">
                    <button type="button" class="nav-btn" onclick="prevStep()">Previous</button>
                    <button type="button" class="nav-btn" onclick="nextStep()" disabled id="next2">Next</button>
                </div>
            </div>

            <!-- Question 3: Aging -->
            <div class="quiz-step" id="step3">
                <h3 class="font-ovrd">Are you concerned about fine lines, wrinkles, or signs of aging?</h3>
                <div class="image-options-container">
                    <div class="quiz-options">
                        <div class="quiz-option" onclick="selectOption(this, 'aging', 'yes')">Yes</div>
                        <div class="quiz-option" onclick="selectOption(this, 'aging', 'maybe')">Maybe</div>
                        <div class="quiz-option" onclick="selectOption(this, 'aging', 'no')">No</div>
                    </div>
                </div>
                <input type="hidden" name="aging_concern" id="aging_concern" value="">
                <div class="nav-buttons">
                    <button type="button" class="nav-btn" onclick="prevStep()">Previous</button>
                    <button type="button" class="nav-btn" onclick="nextStep()" disabled id="next3">Next</button>
                </div>
            </div>

            <!-- Question 4: Sensitivity -->
            <div class="quiz-step" id="step4">
                <h3 class="font-ovrd">Does your skin feel sensitive or react easily to products?</h3>
                <div class="image-options-container">
                    <div class="quiz-options">
                        <div class="quiz-option" onclick="selectOption(this, 'sensitivity', 'yes')">Yes</div>
                        <div class="quiz-option" onclick="selectOption(this, 'sensitivity', 'maybe')">Maybe</div>
                        <div class="quiz-option" onclick="selectOption(this, 'sensitivity', 'no')">No</div>
                    </div>
                </div>
                <input type="hidden" name="sensitivity_concern" id="sensitivity_concern" value="">
                <div class="nav-buttons">
                    <button type="button" class="nav-btn" onclick="prevStep()">Previous</button>
                    <button type="button" class="nav-btn" onclick="nextStep()" disabled id="next4">Next</button>
                </div>
            </div>

            <!-- Question 5: Dryness -->
            <div class="quiz-step" id="step5">
                <h3 class="font-ovrd">Do you struggle with dry or dull-looking skin?</h3>
                <div class="image-options-container">
                    <div class="quiz-options">
                        <div class="quiz-option" onclick="selectOption(this, 'dryness', 'yes')">Yes</div>
                        <div class="quiz-option" onclick="selectOption(this, 'dryness', 'maybe')">Maybe</div>
                        <div class="quiz-option" onclick="selectOption(this, 'dryness', 'no')">No</div>
                    </div>
                </div>
                <input type="hidden" name="dryness_concern" id="dryness_concern" value="">
                <div class="nav-buttons">
                    <button type="button" class="nav-btn" onclick="prevStep()">Previous</button>
                    <button type="button" class="nav-btn" onclick="nextStep()" disabled id="next5">Next</button>
                </div>
            </div>

            <!-- Results & Appointment Form -->
            <div class="quiz-step results-section" id="step6">
                <h2 class="font-ovrd">Your Personalized Treatment Recommendations</h2>

                <div class="recommended-treatments">
                    <h3 class="font-ovrd">Based on your responses, we recommend:</h3>
                    <div class="treatment-list" id="treatmentRecommendations"></div>
                </div>

                <div class="appointment-form">
                    <h3 class="font-ovrd" style="margin-bottom: 30px; text-align: center;">Book Your Consultation</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="last_name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="preferredDate">Preferred Date</label>
                            <input type="date" id="preferredDate" name="preferred_date">
                        </div>
                        <div class="form-group">
                            <label for="preferredTime">Preferred Time</label>
                            <select id="preferredTime" name="preferred_time">
                                <option value="">Select Time</option>
                                <option value="9:00 AM">9:00 AM</option>
                                <option value="10:00 AM">10:00 AM</option>
                                <option value="11:00 AM">11:00 AM</option>
                                <option value="12:00 PM">12:00 PM</option>
                                <option value="2:00 PM">2:00 PM</option>
                                <option value="3:00 PM">3:00 PM</option>
                                <option value="4:00 PM">4:00 PM</option>
                                <option value="5:00 PM">5:00 PM</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="additionalConcerns">Additional Concerns or Questions</label>
                        <textarea id="additionalConcerns" name="additional_concerns" rows="4"
                            placeholder="Please share any specific concerns or questions you'd like to discuss..."></textarea>
                    </div>

                    <!-- Hidden field for recommendations -->
                    <input type="hidden" name="recommended_treatments" id="recommendedTreatmentsField" value="">

                    <button type="submit" class="submit-btn">Book My Consultation</button>
                </div>

                <div class="nav-buttons" style="margin-top: 30px;">
                    <button type="button" class="nav-btn" onclick="prevStep()">Previous</button>
                    <div></div>
                </div>
            </div>

            <!-- Thank You Step -->
            <div class="quiz-step thank-you" id="step7">
                <h2 class="font-ovrd">Thank You!</h2>
                <div class="concern-image">
                    <img src="https://via.placeholder.com/120x90/F5E6D3/8B6F47?text=Success" alt="Thank You">
                </div>
                <p>Your consultation request has been submitted successfully. We will contact you within 24 hours to
                    confirm your appointment and discuss your personalized treatment plan.</p>
                <p style="margin-top: 20px; font-style: italic;">We look forward to helping you achieve your skin goals!
                </p>
            </div>

        </form>
    </div>

    <?php include('footer.php'); ?>


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
        let currentStep = 0;
        const totalSteps = 7;
        let answers = {};

        function updateProgress() {
            const progress = (currentStep / totalSteps) * 100;
            document.getElementById('progressBar').style.width = progress + '%';
            document.getElementById('stepIndicator').textContent = `Step ${currentStep + 1} of ${totalSteps + 1}`;
        }

        function showStep(step) {
            document.querySelectorAll('.quiz-step').forEach(s => s.classList.remove('active'));
            document.getElementById(`step${step}`).classList.add('active');
            updateProgress();
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                if (currentStep === 5) {
                    generateRecommendations();
                }
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function selectOption(element, concern, value) {
            // Remove selection from siblings
            element.parentNode.querySelectorAll('.quiz-option').forEach(opt => {
                opt.classList.remove('selected');
            });

            // Add selection to clicked option
            element.classList.add('selected');

            // Store answer
            answers[concern] = value;
            document.getElementById(`${concern}_concern`).value = value;

            // Enable next button
            const nextBtn = document.getElementById(`next${currentStep}`);
            if (nextBtn) {
                nextBtn.disabled = false;
            }
        }

        function generateRecommendations() {
            let recommendations = [];

            // Treatment recommendation logic
            if (answers.acne === 'yes' || answers.acne === 'maybe') {
                recommendations.push("• Chemical Peels for acne treatment and prevention");
                recommendations.push("• Clinical Dermatology consultation for targeted acne management");
            }

            if (answers.pigmentation === 'yes' || answers.pigmentation === 'maybe') {
                recommendations.push("• Chemical Peels for pigmentation and skin brightening");
                recommendations.push("• Laser Resurfacing for advanced pigmentation correction");
            }

            if (answers.aging === 'yes' || answers.aging === 'maybe') {
                recommendations.push("• Facial Rejuvenation treatments (Botox, Fillers, Threads)");
                recommendations.push("• Vampire Facial (PRP) for natural anti-aging");
                recommendations.push("• Microneedling for skin texture improvement");
            }

            if (answers.sensitivity === 'yes') {
                recommendations.push("• Gentle Clinical Dermatology assessment");
                recommendations.push("• PRP treatments for sensitive skin rejuvenation");
            }

            if (answers.dryness === 'yes' || answers.dryness === 'maybe') {
                recommendations.push("• Beauty Drips for skin hydration and wellness");
                recommendations.push("• Chemical Peels for skin texture improvement");
                recommendations.push("• PRP treatments for natural skin restoration");
            }

            // If no major concerns
            if (recommendations.length === 0) {
                recommendations.push("• Preventive skincare consultation");
                recommendations.push("• Beauty Drips for overall skin wellness");
                recommendations.push("• Light Chemical Peels for maintenance");
            }

            // Display recommendations
            document.getElementById('treatmentRecommendations').innerHTML = recommendations.join('<br>');
            document.getElementById('recommendedTreatmentsField').value = recommendations.join('; ');
        }

        // Form submission handling
        document.getElementById('skinQuizForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Here you would normally submit to your backend
            // For demo, we'll just show the thank you step
            setTimeout(() => {
                currentStep = 7;
                showStep(currentStep);
            }, 500);
        });

        // Initialize
        updateProgress();
    </script>
</body>

</html>