<?php
include ("app/controllers/package_form.php");
include ("app/controllers/lead_form.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kashmir tour package</title>
    <!-- /font awesome link / -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstarp.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let navLinks = document.querySelectorAll(".navbar-nav .nav-link");
        let activePage = "Home"; // Change this for each page
        navLinks.forEach(link => {
            link.classList.remove("active"); // Remove active class from all links
            if (link.textContent.trim() === activePage) {
                link.classList.add("active"); // Add active class to the specified link
            }
        });
    });
    </script>
    <style>
    .toggle-btn i {
        transition: transform 0.4s ease-in-out;
        /* Smooth rotation transition */
    }

    /* Rotate caret when the answer section is expanded */
    .toggle-btn .rotated {
        transform: rotate(180deg);
    }

    .answer-section {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out;
    }

    .answer-section.show {
        max-height: 500px;

    }

    .card-img-top {
        transition: transform 0.3s ease;
    }

    .card:hover .card-img-top {
        transform: scale(1.1);
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


    <header class="top-header-outer"></header>
    <div class="container-fluid position-relative p-0">
        <div class="navbar-outer position-relative"></div>
        <div class="container-fluid py-5 hero-header mb-5"></div>
    </div>

    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h4>Welcome to Our Website-Your Gateway to Incredible </h4>
            </div>
            <div>
                <p class="mb-5">
                We are expert in creating amazing tours and our Jammu and Kashmir tour packages have kayaked gigantic deals into your lap. For the last 12 years, we have tasted the fruit of perseverance and determination in building cordial relations with travelers and turned them into customized experiences par excellence. From Jammu to Kashmir to Ladakh, we at TripCore make the extraordinary a reality for every adventure traveler composite. 
                </p>
            </div>
            <div class="text-center mb-4">
                <h4>“Foundation Based on Trust for Over a Decade” </h4>
            </div>
            <div>
                <p class="mb-5">  
                With more than ten years of observation under our belts, we’ve constantly improved our services to what can only be the best. Everything that can be arranged has been arranged without a single hitch. Our ties and first-hand experience allow us to provide you with exciting deals that would make your journey through Jammu/Kashmir/Ladakh even more exciting. Join the ranks of many eyes opened by our impeccable service-given and let us walk you through the Narrows of these magnificent destinations. 
                </p>
            </div>
            <div class="text-center mb-4">
                <h4>“Travel to the Unexplored Beauty of Jammu, Kashmir, and Ladakh”</h4>
            </div>
            <div>
                <p class="mb-5">
                Explore the looming tops of snowy peaks in Kashmir, the private landscapes of Ladakh, and the culture of Jammu. At TripCore, we could tailor your needs into exceptional memories-whether it be adventure, peace, or a combination of both. Our exquisite travel experts, tailor-made itineraries, and pocket-friendly packages make every journey a smooth experience devoid of bumps. We explain to our clients what makes them come back time and time again! 
                </p>
            </div>
           
        </div>
    </section>
    <section class="container-xxl py-5 destination">
        <div class="container mb-5">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Destination
                </h6>
                <h2>Popular Destination</h2>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="assets/img/pahalgam.jpg" alt="Destination image" />
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                Pahalgam
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="assets/img/two-children.jpg " alt="Destination image" />
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                Nishat
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="assets/img/clock-tower-sri.jpg" alt="Destination image" />
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                Clock tower
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6" style="min-height: 350px">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="assets/img/snowboarding.jpg"
                        alt="Destination image" style="object-fit: cover" />
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                        Glumarg
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Packages
                </h6>
                <h2 class="mb-5 fw-semibold">Kashmir tour package</h2>
            </div>
            <div class="row g-4 justify-content-center Kashmir-tour-package-div">
                <!-- <div class="col-lg-4 col-md-6 ">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/package-1.jpg" alt="packageimage">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa-solid fa-moon text-primary me-2"></i>2 Nights</small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-binoculars text-primary me-2"></i>2 Activities</small>
                        </div>
                        <div class="text-left p-4 ">
                            <p>Here will be the title</p>
                            <div class="d-flex align-items-center">
                                <h3 class="me-2">₹149.00</h3>
                                <span class="text-decoration-line-through">₹454</span>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos kdfjkldjk
                                kljdas f dsm,fnmds f,msd f,mds fm,dsm,fnf</p>
                            <div class="d-flex justify-content-between mb-2">
                                <a href="" class="btn btn-sm btn-outline-primary px-3 rounded-pill">Read More</a>
                                <a href="" class="btn btn-sm btn-primary px-3 rounded-pill">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden"><img class="img-fluid" src="assets/img/package-2.jpg"
                                alt="website template image"></div>
                        <div class="d-flex border-bottom"><small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Indonesia</small> <small
                                class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small> <small
                                class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small></div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$139.00</h3>
                            <div class="mb-3"><small class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small></div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2"><a
                                    href="https://www.free-css.com/free-css-templates"
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius:30px 0 0 30px;">Read More</a> <a
                                    href="https://www.free-css.com/free-css-templates"
                                    class="btn btn-sm btn-primary px-3" style="border-radius:0 30px 30px 0;">Book
                                    Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden"><img class="img-fluid" src="assets/img/package-3.jpg"
                                alt="website template image"></div>
                        <div class="d-flex border-bottom"><small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Malaysia</small> <small
                                class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small> <small
                                class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small></div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$189.00</h3>
                            <div class="mb-3"><small class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small> <small
                                    class="fa fa-star text-primary"></small></div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2"><a
                                    href="https://www.free-css.com/free-css-templates"
                                    class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius:30px 0 0 30px;">Read More</a> <a
                                    href="https://www.free-css.com/free-css-templates"
                                    class="btn btn-sm btn-primary px-3" style="border-radius:0 30px 30px 0;">Book
                                    Now</a></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <div class="package-popup position-fixed top-0 start-0 vw-100 vh-100  z-50 px-2"
        style="background-color: rgba(0, 0, 0, 0.5); display:none;">
        <div class="position-absolute top-50 start-50 translate-middle bg-white w-100 mx-auto p-4 rounded shadow-r-base mx-2 package-popup-content"
            style="max-width: 400px">
            <div class="header d-flex mb-4">
                <!-- From JS -->
            </div>
            <form action="" method="POST">
                <input type="hidden" id="package-id" name="package-id" />
                <input type="hidden" id="package-name" name="package-name" />
                <input type="hidden" id="package-page" name="package-page" />

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your full name*" required name="full-name" />
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your phone no*" required name="phone-no" />
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Id" name="email" />
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" placeholder="Number of Rooms" name="rooms" />
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Current location*" required name="location" />
                </div>
                <button type="submit" class="btn btn-primary w-100 rounded" name="package-enquiry-btn">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-left">
                <h4 class="mb-5 fw-semibold">Winter tour package</h4>
            </div>
            <div class="row g-4 justify-content-center winter-tour-package-div"></div>
        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-left">
                <h4 class="mb-5 fw-semibold">Honeymoon Tour Packages</h4>
            </div>
            <div class="row g-4 justify-content-center Honeymoon-tour-package-div"></div>
        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-left">
                <h4 class="mb-5 fw-semibold">Budget Tour Packages</h4>
            </div>
            <div class="row g-4 justify-content-center budget-tour-package-div"></div>
        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-left">
                <h4 class="mb-5 fw-semibold">Group Tour Packages</h4>
            </div>
            <div class="row g-4 justify-content-center group-tour-package-div"></div>
        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-left">
                <h4 class="mb-5 fw-semibold">Kashmir Summer Tour Packages</h4>
            </div>
            <div class="row g-4 justify-content-center Kashmir-summer-tour-package-div"></div>
        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-left">
                <h4 class="mb-5 fw-semibold">Ladakh Tour Packages</h4>
            </div>
            <div class="row g-4 justify-content-center ladakh-tour-package-div"></div>
        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-center ">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    FROM OUR BLOG
                </h6>
                <h2 class="mb-5">OUR RECENT POSTS</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border-0 shadow-r-base hover-shadow transition-shadow duration-300 bg-white">
                        <div class="overflow-hidden">
                            <img class="ratio ratio-16x9 object-fit-cover card-img-top" style="aspect-ratio:16/9;"
                                alt="Blog image"
                                src="assets/img/gulamrg.jpg" />
                        </div>
                        <div class="card-body p-4 ">
                            <h6 class="card-subtitles text-muted fw-bold">
                                Mohtashim anayat
                            </h6>
                            <h5 class="card-title mb-2 text-truncate fw-bold">
                            Gulmarg in Winters: A Snowy Paradise
                            </h5>
                            <p class="card-text line-clamp-3">
                            Gulmarg, nestled in the Pir Panjal range of Jammu and Kashmir, transforms into a mesmerizing winter wonderland as the snow blankets its landscapes. Known as India's premier ski destination, Gulmarg offers a breathtaking experience for adventure seekers and nature lovers alike.  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum maiores totam, quaerat cumque explicabo nisi provident necessitatibus, ratione quo unde ab excepturi possimus vel cupiditate quae dolorum tempora molestiae laborum?
                            </p>
                            <a class="card-link text-primary" href="blogs/gulmarg-in-winters.php">
                                Continue Reading...
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-r-base hover-shadow transition-shadow duration-300 bg-white">
                        <div class="overflow-hidden">
                            <img class="ratio ratio-16x9 object-fit-cover card-img-top" style="aspect-ratio:16/9;"
                                alt="Blog image"
                                src="assets/img/markhor.webp" />
                        </div>
                        <div class="card-body p-4 ">
                            <h6 class="card-subtitles text-muted fw-bold">
                            Khalid zahoor
                            </h6>
                            <h5 class="card-title mb-2 text-truncate fw-bold">
                            The Markhor in Kashmir: Ecology, Conservation, and Cultural Significance
                            </h5>
                            <p class="card-text line-clamp-3">
                            The Kashmir markhor ( Capra falconeri ), a majestic wild goat species, is native to the mountainous regions of Kashmir and northern Pakistan. Recognizable by its spiraled horns and rugged appearance, it inhabits steep, rocky terrains of the Himalayas and Hindu Kush ranges. The species is classified as Near Threatened on the IUCN Red List, with populations fragmented due to habitat loss, poaching, and competition with livestock.
                            </p>
                            <a class="card-link text-primary" href="blogs/markhor-in-kashmir.php">
                                Continue Reading...
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-r-base hover-shadow transition-shadow duration-300 bg-white">
                        <div class="overflow-hidden">
                            <img class="ratio ratio-16x9 object-fit-cover card-img-top" style="aspect-ratio:16/9;"
                                alt="Blog image" 
                                src="https://images.unsplash.com/photo-1527668752968-14dc70a27c95?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c3dpdHplcmxhbmR8ZW58MHx8MHx8fDA%3D" />
                        </div>
                        <div class="card-body p-4">
                            <h6 class="card-subtitles text-muted fw-bold">
                                Khalid zahoor
                            </h6>
                            <h5 class="card-title mb-2 text-truncate fw-bold">
                            Life is a beautiful journey not a destination
                            </h5>
                            <p class="card-text line-clamp-3">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, pariatur? A id, officiis sapiente quisquam eum perspiciatis rem molestiae nisi at odio harum nesciunt ipsam possimus perferendis ex accusamus ad! dsfkjds fkjdfkldjfk ld
                            </p>
                            <a class="card-link text-primary" href="blogs/gulmarg-in-winters.php">
                                Continue Reading...
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Faq
                </h6>
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
            </div>
            <div class="faq-div"></div>
        </div>
    </section>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script type="module" src="/assets/js/main.js"></script>
    <script src="/assets/components/header.js"></script>
    <script src="/assets/components/footer.js"></script>
    <script src="/assets/js/header.js"></script>

</body>

</html>