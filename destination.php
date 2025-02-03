<?php
include ("app/controllers/lead_form.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations
    </title>
    <!-- /font awesome link / -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstarp.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let navLinks = document.querySelectorAll(".navbar-nav .nav-link");
        let activePage = "Destinations"; // Change this for each page
        navLinks.forEach(link => {
            link.classList.remove("active"); // Remove active class from all links
            if (link.textContent.trim() === activePage) {
                link.classList.add("active"); // Add active class to the specified link
            }
        });
    });
    </script>

    <style>
        .destination-card {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            transition: transform 0.3s;
        }

        .destination-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .destination-card:hover img {
            transform: scale(1.1);
        }

        .destination-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .destination-card:hover .destination-overlay {
            opacity: 1;
        }
    </style>
 

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
                    <h1 class="display-3 text-white">Destinations</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a
                                    href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active">Destinations</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center ">
                <h6 class="section-title bg-white text-center text-primary px-3">Destinations</h6>
                <h2 class="mb-5">Popular destinations</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="destination-card">
                         <img style="aspect-ratio: 16/9 ; object-fit: cover;"  style="aspect-ratio: 16/9 ; object-fit: cover;" src="assets/img/gulamrg.jpg" alt="Destination image">
                        <div class="destination-overlay">Gulmarg</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="destination-card">
                         <img style="aspect-ratio: 16/9 ; object-fit: cover;"  src="assets/img/boat-dull.avif" alt="Destination image">
                        <div class="destination-overlay">Dal lake</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="destination-card">
                         <img style="aspect-ratio: 16/9 ; object-fit: cover;"  src="assets/img/pahalgam.jpg" alt="Destination 3">
                        <div class="destination-overlay">Pahalgam</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="destination-card">
                         <img style="aspect-ratio: 16/9 ; object-fit: cover;"  src="assets/img/clock-tower-sri.jpg" alt="Destination image">
                        <div class="destination-overlay">Clock tower</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="destination-card">
                         <img style="aspect-ratio: 16/9 ; object-fit: cover;"  src="assets/img/sonmarg.webp" alt="Destination image">
                        <div class="destination-overlay">Sonmarg</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="destination-card">
                         <img style="aspect-ratio: 16/9 ; object-fit: cover;"  src="assets/img/gurez-valley.webp" alt="Destination image">
                        <div class="destination-overlay">Gurez valley</div>
                    </div>
                </div>
             
            </div>
            
        </div>
    </div>
   
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="assets/components/header.js"></script>
    <script src="assets/components/footer.js"></script>
    <script src="assets/js/header.js"></script>
</body>

</html>