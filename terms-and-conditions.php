<?php
include ("app/controllers/lead_form.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us
    </title>
    <!-- /font awesome link / -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstarp.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
 

</head>

<body>
        <!-- Success Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title text-white" id="successModalLabel">Success!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Your form has been submiited succesfully</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary rounded-3" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title text-white" id="errorModalLabel">Error!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>There was an error while submitting the form. Please try again.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger rounded-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <header class="top-header-outer">
    </header>
    <div class="container-fluid position-relative p-0">
        <div class="navbar-outer position-relative">
        </div>
        <div class="container-fluid py-5 hero-header mb-5">
            <div class="row justify-content-center py-5 mt-4">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white ">Terms and conditions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a
                                    href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" >Terms and conditions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 px-0 px-sm-unset">
        <div class="container py-4">
            <h1 class="display-5 text-primary mb-4">Terms and Conditions</h1>
        
            <p class="mb-3">
                <strong class="h5 d-block">Introduction</strong>
                Welcome to TripCore Tour and Travels! By accessing or using our website, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before using our services.
            </p>
        
            <h2 class="mb-3 h4">Definitions</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li><strong class="d-block">"TripCore Tour and Travels"</strong> refers to our company, website, and services offered.</li>
                <li><strong class="d-block">"User"</strong> refers to any individual or entity accessing or using our website or services.</li>
                <li><strong class="d-block">"Service Providers"</strong> refers to third-party travel agencies, tour operators, or agents.</li>
            </ul>
        
            <h2 class="mb-3 h4">Use of the Website</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>Users must be at least 18 years old to access or use our services.</li>
                <li>The content on the website is for informational purposes only. We reserve the right to modify, suspend, or discontinue any part of the website at any time.</li>
            </ul>
        
            <h2 class="mb-3 h4">Booking and Payments</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>All bookings are subject to availability and confirmation by the respective service providers.</li>
                <li>Payment terms, including deposits and cancellation policies, are determined by the service providers and will be communicated at the time of booking.</li>
            </ul>
        
            <h2 class="mb-3 h4">Responsibilities and Liability</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>Users are responsible for verifying all details related to their bookings before confirming.</li>
                <li>We are not liable for losses, damages, or injuries incurred during travel or due to service provider errors.</li>
            </ul>
        
            <h2 class="mb-3 h4">User Conduct</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>Users agree not to engage in activities that disrupt the website’s functionality or violate any applicable laws.</li>
                <li>Payment terms, including deposits and cancellation policies, are determined by the service providers and will be communicated at the time of booking.</li>
            </ul>
        
            <h2 class="mb-3 h4">Intellectual Property</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>All content, including text, graphics, logos, and software, is the property of TripCore or its licensors and is protected under intellectual property laws.</li>
                <li>Unauthorized reproduction, distribution, or modification of any content is strictly prohibited.</li>
            </ul>
        
            <h2 class="mb-3 h4">Privacy Policy</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>By using our services, you agree to our Privacy Policy, which governs how we collect, use, and protect your information.</li>
            </ul>
        
            <h2 class="mb-3 h4">Third-Party Links</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>Our website may include links to third-party websites for user convenience. We do not endorse or take responsibility for the content, products, or services provided by these websites.</li>
            </ul>
        
            <h2 class="mb-3 h4">Dispute Resolution</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>In the event of disputes arising from bookings or use of the website, users agree to resolve matters amicably with the relevant service provider before seeking legal recourse.</li>
                <li>Any disputes with TripCore will be governed by the laws of [Your Jurisdiction].</li>
            </ul>
        
            <h2 class="mb-3 h4">Changes to Terms</h2>
            <ul class="list-unstyled ps-4 mb-3">
                <li>TripCore reserves the right to update or modify these terms at any time without prior notice. Continued use of the website constitutes acceptance of the revised terms.</li>
            </ul>
        
            <p class="mb-3">
                <strong class="h5 d-block">Contact Us</strong>
                For questions or concerns about these terms, please contact us at:
            </p>
            <ul class="list-unstyled ps-4 mb-3">
                <li>Email: tripcoretravels@gmail.com</li>
                <li>Phone: 7006123004 / 9622007771</li>
            </ul>
        
            <p class="mb-3">
                <strong class="h5 d-block">Acceptance</strong>
                By accessing or using our website, you acknowledge that you have read, understood, and agree to these terms and conditions.
            </p>
        </div>
        
       
        
    </div>
   
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script type="module" src="assets/js/main.js"></script>
    <script src="assets/components/header.js"></script>
    <script src="assets/components/footer.js"></script>
    <script src="assets/js/header.js"></script>
</body>

</html>