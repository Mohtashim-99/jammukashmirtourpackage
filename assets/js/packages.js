import { packagesData } from "../data/packages-data.js";

let allPackagesDiv = document.querySelector(".all-package-div");


packagesData.data.forEach((data) => {
    const overview = data.package_details
        .filter(detail => detail.detail_type == "overview");
    const overviewText = (overview[0].detail_text);
    allPackagesDiv.innerHTML += `
                <div class="col-lg-4 col-md-6 ">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="${data.photo}" alt="packageimage">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt text-primary me-2"></i>${data.days} days</small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa-solid fa-moon text-primary me-2"></i>${data.nights} Nights</small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-binoculars text-primary me-2"></i>${data.activities} Activities</small>
                        </div>
                        <div class="text-left p-4 ">
                            <p>${data.package_name}</p>
                            <div class="d-flex align-items-center">
                                <h3 class="me-2">₹${data.current_price}</h3>
                                <span class="text-decoration-line-through">₹${data.original_price}</span>
                            </div>
                            <p class="package-desc">${overviewText}
                                kljdas f dsm,fnmds f,msd f,mds fm,dsm,fnf</p>
                            <div class="d-flex justify-content-between mb-2">
                                <a href="${data.package_name}" class="btn btn-sm btn-outline-primary px-3 rounded-pill">Read More</a>
                                <button class="btn btn-sm btn-primary px-3 rounded-pill package-btn
                                data-package-id="${data.package_id}"
                                data-package-name="${data.package_name}"  
                                data-package-page= "${data.page_name}"
                                data-package-image="${data.photo}"
                                data-package-original-price="${data.original_price}"
                                data-package-current-price="${data.current_price}"
                                data-package-off="${data.off}"
                                ">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>`;

})


document.addEventListener("DOMContentLoaded", () => {
    //Logic for showing package popup
    let packageBtns = document.querySelectorAll(".package-btn");
    let packagePopup = document.querySelector(".package-popup");
    let packagePopupContent = document.querySelector(".package-popup-content");

    packageBtns.forEach((btn) => {
        btn.addEventListener("click", (event) => {

            const packageId = event.target.dataset.packageId;
            const packageName = event.target.dataset.packageName;
            const packagePage = event.target.dataset.packagePage;
            const packageImage = event.target.dataset.packageImage;
            const packageOriginalPrice = event.target.dataset.packageOriginalPrice;
            const packageCurrentPrice = event.target.dataset.packageCurrentPrice;
            const off = event.target.dataset.packageOff;



            const header = packagePopupContent.querySelector(".header");
            const inputPackageId = packagePopupContent.querySelector("#package-id");
            const inputPackageName = packagePopupContent.querySelector("#package-name");
            const inputPackagePage = packagePopupContent.querySelector("#package-page");


            inputPackageId.value = packageId;
            inputPackageName.value = packageName;
            inputPackagePage.value = packagePage;

            header.innerHTML = `
             <div class="me-2 me-md-4" style="width: 3rem; height: 3rem;">
                <img class="img-fluid rounded-3" style="object-fit: cover; aspect-ratio:1/1;" src="${packageImage}" alt="">     
                </div>

                <div>
                    <div>${packageName}</div>
                    <div class="d-flex align-items-center mb-4">
                            <div class="text-lg font-medium me-2">
                                ₹${packageCurrentPrice}
                            </div>
                           <div class="text-muted text-decoration-line-through me-2 small">
                                ₹${packageOriginalPrice}
                            </div>
                            <div class="text-success small fw-semibold">
                                <i class="fas fa-tag me-1"></i> ${off}% OFF
                            </div>
                        </div>
                </div>
     `;

            packagePopup.style.display = "block";
            packagePopupContent.style.animation = 'slideDown 0.3s ease forwards';
            document.body.style.overflow = "hidden";
        });
    });

    window.addEventListener('click', (event) => {
        if (event.target === packagePopup) {
            packagePopup.style.display = 'none';
            document.body.style.overflow = "auto"; // Enable scrolling
        }
    });


})