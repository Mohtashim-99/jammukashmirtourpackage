
<?php
include ("../app/controllers/package_form.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Packages
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
        let activePage = "Tour packages"; // Change this for each page
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
       <div class="modal  fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
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
                    <h1 class="display-3 text-white ">Tour packages</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a
                                    href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" >packages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center ">
                <h6 class="section-title bg-white text-center text-primary px-3">packges</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center all-package-div">
                
            </div>
        
        </div>
    </div>
    <div class="package-popup position-fixed top-0 start-0 vw-100 vh-100  z-50 px-2"
        style="background-color: rgba(0, 0, 0, 0.5); display:none;">
        <div class="position-absolute top-50 start-50 translate-middle bg-white w-100 mx-auto p-4 rounded shadow-lg mx-2 package-popup-content"
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
   
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script type="module" src="/assets/js/packages.js"></script>
    <script src="/assets/components/header.js"></script>
    <script src="/assets/components/footer.js"></script>
    <script src="/assets/js/header.js"></script>

</body>

</html>