<?php
if(isset($_POST['contact-form'])){
    include("app/controllers/contact_page.php");
}else{
    include ("app/controllers/lead_form.php");
}

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
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let navLinks = document.querySelectorAll(".navbar-nav .nav-link");
        let activePage = "Contact"; // Change this for each page
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
                    <h1 class="display-3 text-white ">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a
                                    href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" >Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center ">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 ">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">Feel free to reach out to us for any queries or assistance. Whether you need help planning your next adventure or have questions about our services, we are here to help.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width:50px;height:50px;"><i class="fa fa-map-marker-alt text-white"></i></div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">SDA Complex, Bemina, Srinagar, Jammu & Kashmir 190018</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width:50px;height:50px;"><i class="fa fa-phone-alt text-white"></i></div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">+91 9622007771</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width:50px;height:50px;"><i class="fa fa-envelope-open text-white"></i></div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">tripcoretravels@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.2343483536256!2d74.76550571134545!3d34.089136515669146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e19b98175f860b%3A0x385c09dcd8530a47!2sTripCore!5e0!3m2!1sen!2sin!4v1738591570322!5m2!1sen!2sin"
                        frameborder="0" style="min-height:300px;border:0;" allowfullscreen aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 ">
                    <form action="#" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height:100px" name="message" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="contact-form">Send Message</button>
                            </div>
                        </div>
                    </form>
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