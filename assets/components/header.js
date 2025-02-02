const topHeaderHTML = ` <div class="container-fluid bg-dark px-5 d-none d-lg-block">
                            <div class="row ">
                                <div class="d-inline-flex align-items-center container" style="height:45px;">
                                    <marquee behavior="scroll" direction="">Discount 15% on all packages </marquee> 
                                </div>  
                            </div>
                        </div>`;

const navbarHTML = `<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                        <a href="" class="navbar-brand p-0">
                            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto py-0">
                                <a href="/" class="nav-item nav-link">Home</a>
                                <a href="/destination.php" class="nav-item nav-link">Destinations</a>
                                <a href="/packages/" class="nav-item nav-link">Tour packages</a>
                                <a href="/blogs/" class="nav-item nav-link">Blogs</a>
                                <a href="/about.php" class="nav-item nav-link">About</a>
                                <a href="/contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <a href=""
                                class="btn btn-primary rounded-pill py-2 px-4 header-btn"  data-bs-toggle="modal" data-bs-target="#travelFormModal">Get Quote</a>
                        </div>
                    </nav>
                    
                    
      
        <div class="modal fade" id="travelFormModal" tabindex="-1" aria-labelledby="travelFormLabel" aria-hidden="true">
            <div class="modal-dialog mt-5"  style="top: 3%;">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <h5 class="modal-title" id="travelFormLabel">Travel Details Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone-no" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="travelDate" class="form-label">Date of Travelling</label>
                        <input type="date" class="form-control" id="travelDate" name="travelDate" required>
                    </div>
                     <div class="mb-3">
                        <label for="no-of-travellers" class="form-label">No of travellers</label>
                        <input type="text" class="form-control" id="no-of-travellers" name="no-of-travellers" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="lead_form">Submit</button>
                </form>
                </div>
            </div>
            </div>
        </div>

     `;

document.querySelector(".top-header-outer").innerHTML = topHeaderHTML;
document.querySelector(".navbar-outer").innerHTML = navbarHTML;
