
import { packagesData } from "../data/packages-data.js";

const fetchPackages = () => {
    const packageDiv = document.querySelector(".full-package");
    try {
        // Get the package ID from the hidden input field
        const packageId = document.querySelector('#package_form_id').value;
        // Find the package that matches the ID from the hidden input field
        const currentpackage = packagesData.data.find(pkg => pkg.package_id == packageId);
        let packageHTML = "";
        const activities = currentpackage.package_details
            .filter((detail) => detail.detail_type === "activity");

        const activitiesHTML = activities
            .map((activity) =>
                `<li class="bg-gray-200 text-gray-900 small font-semibold px-2 py-1 h-6 rounded-full inline-block" title ="Activities" >${activity.detail_text}</li>`
            )
            .join("");

        const nightSpends = currentpackage.package_details
            .filter((detail) => detail.detail_type === "night_spend");

        const nightSpendsHTML = nightSpends
            .map(
                (night) =>
                    `<li class="bg-gray-200 text-gray-900 small font-semibold px-2 py-1 h-6 rounded-full inline-block" title="Night spend">
                        ${night.detail_text}
                    </li>`
            )
            .join("");

        const overview = currentpackage.package_details
            .filter(detail => detail.detail_type == "overview");

        const overveiwHTML = overview.map(overview => `  <p class="mb-3">${overview.detail_text}</p>`).join(
            "");


        const itineraryHTML = currentpackage.itinerary
            .map((item) => {
                // Check if paragraph_text is an array
                if (!Array.isArray(item.paragraphs)) {
                    console.error(`paragraph_text is not an array for day: ${item.day_heading}`);
                    return ''; // Skip this item if paragraph_text is not an array
                }

                // Generate HTML for paragraphs
                const paragraphsHTML = item.paragraphs
                    .map((paragraph) => `<p class="mb-3">${paragraph}</p>`)
                    .join(""); // Join paragraphs for the current day

                // Generate HTML for the day
                return `
                                        <div class="mb-4">
                                            <h4 class="mb-6  text-lg">${item.day_heading}</h4>
                                            ${paragraphsHTML}
                                        </div>
                                    `;
            })
            .join(""); // Join all days


        packageHTML = `<div>
                                <p class="mb-1 small  text-blue-600">${currentpackage.nights} Nights/${currentpackage.days} Days</p>
                                <h1 class="mb-7 font-bold text-primary_text">${currentpackage.package_name}</h1>
                                <p class="content-center d-flex align-items-center mb-2">
                                    <span class="fs-5 font-bold">Rs ${currentpackage.current_price}</span>
                                    <span class="mx-1 text-gray-600 text-decoration-line-through">Rs ${currentpackage.original_price}</span>
                                    <span class="small text-danger">(${currentpackage.off}% OFF)</span>
                                </p>
                                <div class="mb-4">
                                    <ul class="w-full list-unstyled">
                                        <ul class="d-flex gap-1 mb-2 list-unstyled">
                                            ${nightSpendsHTML}
                                        </ul>
                                        <ul class="d-flex gap-1 flex-wrap list-unstyled">
                                            ${activitiesHTML}
                                        </ul>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                    <ul class="d-flex gap-4 activities-ul flex-wrap list-unstyled">
                                        <li class="${currentpackage.cabs == 0 ? 'opacity-50' : ''}">
                                        <span class="inline-block mr-1 -mb-1">
                                            <img src="../assets/img/cab-logo.png" alt="Activity logo">
                                        </span>
                                        <span>Cabs</span>
                                        </li>
                                        <li class="${currentpackage.flights == 0 ? 'opacity-50' : ''}">
                                            <span class="inline-block mr-1 -mb-1">
                                                <img src="../assets/img/flight-logo.png" alt="Activity logo">
                                            </span>
                                            <span> Flights </span>
                                        </li>
                                        <li class="${currentpackage.hotel_stays == 0 ? 'opacity-50' : ''}">
                                            <span class="inline-block mr-1 -mb-1">
                                                <img src="../assets/img/hotel-logo.png" alt="Activity logo">
                                            </span>
                                            <span>Hotel stays</span>
                                        </li>
                                        <li class="${currentpackage.meals == 0 ? 'opacity-50' : ''}">
                                            <span class="inline-block mr-1 -mb-1">
                                                <img src="../assets/img/meal-logo.png" alt="Activity logo">
                                            </span>
                                            <span> Meals </span>
                                        </li>
                                        <li class="${currentpackage.sightseeing == 0 ? 'opacity-50' : ''}">
                                            <span class="inline-block mr-1 -mb-1">
                                                <img src="../assets/img/Sightseeing-logo.png" alt="Activity logo">
                                            </span>
                                            <span>Sightseeing</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-column mb-5">
                                    <h2 class="mb-2  ">Overview</h2>
                                    ${overveiwHTML}
                                </div>
                                <div class="itinerary-section">
                                    <h3 class="mb-4 font-bold >Itinerary</h3>
                                    ${itineraryHTML}
                                </div>
                            </div>`;


        // Update DOM with the rendered packages
        packageDiv.innerHTML = packageHTML;


    } catch (error) {
        // Handle errors gracefully
        console.error("Error fetching packages:", error);
        packageDiv.innerHTML =
            `<p class="text-danger text-center" >Failed to load packages. Please try again later.....</p>`;
    }
};

// Call the function to fetch packages
document.addEventListener("DOMContentLoaded", () => {
    fetchPackages();
});
