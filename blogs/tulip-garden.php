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
    <header class="top-header-outer" >
    </header>
    <div class="container-fluid position-relative p-0">
        <div class="navbar-outer position-relative" style="z-index:99999;">
        </div>
        <div class="container-fluid py-5 hero-header mb-5">
            <div class="row justify-content-center py-5 mt-4">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white ">Blogs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/blogs">Blogs</a></li>
                            <li class="breadcrumb-item text-white active">Markhor in Kashmir</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div
    <div class="container-xxl py-5">
      

    <div class="container p-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="text-warning mb-2">
                    Product Updates · FEB 02, 2025
                </div>
                <h1 class="display-4 fw-medium mb-4 fs-1" id="beauty-of-tulip-garden">
                Exploring the Beauty of a Tulip Garden: Nature’s Vibrant Symphony
                </h1>
                <p class=" mb-4">
                Tulips, with their brilliant colors and elegant petals, are among the most cherished flowers in the world. They symbolize renewal and beauty, making them a perfect addition to gardens that celebrate the vibrancy of spring. Nowhere is this truer than in Kashmir, home to the breathtaking Indira Gandhi Memorial Tulip Garden, Asia’s largest tulip garden. Set against the backdrop of the majestic Zabarwan Range and Dal Lake, this garden transforms into a paradise of colors every spring.
                </p>
                <img src="../assets/img/tulip-garden.webp" alt="Blog image" class="img-fluid mb-4 w-100 object-fit-cover rounded-4"style="aspect-ratio:16/9"/>
                <h4 class="fw-medium mb-4" id="allure-of-tulips">
                The Allure of Tulips
                </h4>
                <p>Kashmir’s tulip garden boasts a stunning variety of tulips, from soft pastels to vivid reds, purples, and golden yellows. The sight of over a million tulip bulbs blooming in harmony creates a mesmerizing landscape that attracts tourists from across the globe. These delicate yet resilient flowers symbolize perfect love, new beginnings, and the arrival of spring after Kashmir’s long winter.</p>
                <h4 class="fw-medium mb-4" id="design-and-beauty-of-tulip-garden">
                Design and Beauty of the Tulip Garden
                </h4>
                <p>The Indira Gandhi Memorial Tulip Garden is meticulously designed to enhance the natural beauty of its surroundings. Here’s what makes it special:</p>
                <ul class="mb-5">
                    <li class="mb-3 fs-6"><strong class=" mb-3 fs-5"> Diverse Varieties:</strong> With over 60 varieties, the garden showcases early, mid, and late-blooming tulips, ensuring a prolonged display of colors.</li>
                    <li class="mb-3 fs-6"><strong class=" mb-3 fs-5"> Terraced Layout:</strong> The garden follows a gentle terraced design, allowing visitors to enjoy panoramic views of the tulip beds set against the snow-capped mountains.</li>
                    <li class="mb-3 fs-6"><strong class="mb-3 fs-5">Seasonal Attractions:</strong> Apart from tulips, the garden features daffodils, hyacinths, and other vibrant spring blooms, adding to its charm.</li>
                </ul>
                <h4 class="fw-medium mb-4" id="best-time-to-visit">Best Time to Visit</h4>
                <p>The tulip garden opens for a short but spectacular season from late March to mid-April. This period marks the annual Tulip Festival, a grand celebration of nature’s beauty, complete with cultural performances, local handicrafts, and Kashmiri cuisine.</p>
                <h4 class="fw-medium mb-4" id="how-to-grow-tulips">
                How to Grow Tulips Like Kashmir’s Iconic Garden
                </h4>
                <p>Inspired by the beauty of Kashmir’s tulip garden? You can recreate a miniature version in your home garden:</p>
                <ul class="mb-4 ">
                    <li class="mb-3 fs-6"><strong class=" mb-3 fs-5">Choose Quality Bulbs:</strong>  Opt for high-quality tulip bulbs suited to your climate.</li>
                    <li class="mb-3 fs-6"><strong class="mb-3 fs-5">Plant in Autumn:</strong> Tulip bulbs should be planted in well-drained soil, 6-8 inches deep and spaced 4-6 inches apart.</li>
                    <li class="mb-3 fs-6"><strong class="mb-3 fs-5">Sunlight and Watering:</strong> Tulips thrive in full sunlight and require regular watering during their growth phase but less after blooming.</li>
                    <li class="mb-3 fs-6"><strong class="mb-3 fs-5">Naturalizing Tulips:</strong> To maintain their beauty year after year, let the foliage die back naturally before removing it.</li>
                 
                </ul>
                <h4 class="fw-medium mb-4" id="conservation-efforts">
                Conclusion
                </h4>
                <p>A visit to Kashmir’s Tulip Garden is a feast for the senses, offering a vibrant spectacle that celebrates the arrival of spring. Whether strolling through its colorful terraces or planting tulips in your own garden, these flowers bring a sense of renewal and joy. If you ever get a chance, witnessing this breathtaking floral wonder in Kashmir should be on your bucket list!</p> 
            </div>
            <div class="col-lg-4 ps-md-5">
                <div class="sticky-top" style="top: 6rem;">
                    <div class="mb-4">
                        <h2 class="h5 fw-medium mb-3">
                            In this article
                        </h2>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a class="" href="#beauty-of-tulip-garden">
                                Beauty of Tulip Garden
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="" href="#allure-of-tulips">
                                The Allure of Tulips
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="" href="#design-and-beauty-of-tulip-garden">
                                Design and Beauty of the Tulip Garden
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="" href="#best-time-to-visit">
                                Best Time to Visit
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="" href="#how-to-grow-tulips">
                                How to Grow Tulips
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h2 class="h5 fw-semibold mb-3">
                            Author
                        </h2>
                        <div class="d-flex align-items-center">
                            <img src="../assets/img/touseem.jpeg" alt="Author's profile picture" class="rounded-circle me-3 object-fit-cover" width="50" height="50" />
                            <div>
                                <p class="fw-semibold mb-0">
                                        TOWSEEM HASSAN
                                </p>
                                <p class="text-secondary">
                                    TRAVELLER
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex gap-3 align-items-center">
                            <a class="btn btn-sm btn-outline-dark btn-sm-square rounded-circle me-2"
                            href="https://www.facebook.com/jio.sim.94009" target="_blank">
                                <i class="fab fa-facebook-f fw-normal"></i>
                            </a> 
                            <a class="btn btn-sm btn-outline-dark btn-sm-square rounded-circle me-2"
                            href="https://www.instagram.com/towseem__07" target="_blank">
                                <i class="fab fa-instagram fw-normal"></i>
                            </a> 
                        </div>
                    </div>
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