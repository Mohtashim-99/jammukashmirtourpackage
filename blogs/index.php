<?php
include ("../app/controllers/lead_form.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs
    </title>
    <!-- /font awesome link / -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstarp.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let navLinks = document.querySelectorAll(".navbar-nav .nav-link");
            let activePage = "Blogs"; // Change this for each page
            navLinks.forEach(link => {
                link.classList.remove("active"); // Remove active class from all links
                if (link.textContent.trim() === activePage) {
                    link.classList.add("active"); // Add active class to the specified link
                }
            });
        });
    </script>

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
                    <h1 class="display-3 text-white ">Blogs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active">Blogs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center ">
                <h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                <h1 class="mb-5">Featured Blogs</h1>
            </div>
        </div>

        <div class="container my-5  blog-card">
               <!-- From database -->
            <div class="d-flex mb-4  flex-column mb-6">
                <!-- Text Content -->
                <div class="w-100">
                    <div class="d-flex flex-wrap gap-1 mb-2">
                        <div class="blog-category">Product Updates</div>
                        <div class="blog-meta">FEB 01, 2025</div>
                    </div>
                    <h3 class="blog-title fw-500-important">Gulmarg in Winters: A Snowy Paradise</h3>

                </div>
                <div class="d-flex gap-4 flex-column flex-md-row">
                    <div class="w-100 w-md-50">
                        <p class="blog-description">
                            Gulmarg, nestled in the Pir Panjal range of Jammu and Kashmir, transforms into a mesmerizing winter wonderland as the snow blankets its landscapes. Known as India's premier ski destination, Gulmarg offers a breathtaking experience for adventure seekers and nature lovers alike....
                        </p>
                        <a href="gulmarg-in-winters.php" class="read-more">Read more &rsaquo;</a>
                    </div>


                    <div class="w-100 w-md-50">
                        <img src="/assets/img/gulamrg.jpg"
                            alt="Blog Image" class="img-fluid rounded-3 object-fit-cover" style="aspect-ratio: 16/9;">
                    </div>
            </div>
            <div class="d-flex mb-4  flex-column mb-6">
                <!-- Text Content -->
                <div class="w-100">
                    <div class="d-flex flex-wrap gap-1 mb-2">
                        <div class="blog-category">Product Updates</div>
                        <div class="blog-meta">FEB 02, 2025</div>
                    </div>
                    <h3 class="blog-title fw-500-important">The Markhor in Kashmir: Ecology, Conservation, and Cultural Significance</h3>

                </div>
                <div class="d-flex gap-4 flex-column flex-md-row">
                    <div class="w-100 w-md-50">
                        <p class="blog-description">
                            The Kashmir markhor ( Capra falconeri ), a majestic wild goat species, is native to the mountainous regions of Kashmir and northern Pakistan. Recognizable by its spiraled horns and rugged appearance, it inhabits steep, rocky terrains of the Himalayas and Hindu Kush ranges. The species is classified as Near Threatened on the IUCN Red List, with populations fragmented due to habitat loss, poaching, and competition with livestock....
                        </p>
                        <a href="markhor-in-kashmir.php" class="read-more">Read more &rsaquo;</a>
                    </div>


                    <div class="w-100 w-md-50">
                        <img src="/assets/img/markhor.webp"
                            alt="Blog Image" class="img-fluid rounded-3 object-fit-cover" style="aspect-ratio: 16/9;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="/assets/components/header.js"></script>
    <script src="/assets/components/footer.js"></script>
    <script src="/assets/js/header.js"></script>

</body>

</html>