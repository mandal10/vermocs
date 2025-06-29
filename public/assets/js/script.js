const menu = document.getElementById("menu");

function toggleMenu() {
    if (menu.style.left === "0px") {
        menu.style.left = "-100%"; // Hides the menu by sliding it to the left
    } else {
        menu.style.left = "0px"; // Shows the menu by sliding it in from the left
    }
}


function toggleSubMenu(event, submenuId) {
    event.preventDefault(); // Prevent default anchor behavior

    // Get the submenu element and arrow icon
    const submenu = document.getElementById(submenuId);
    const arrow = document.querySelector(`#arrow-${submenuId.split('-')[1]}`);

    // Toggle the "expanded" class for submenu
    if (submenu.classList.contains("expanded")) {
        submenu.classList.remove("expanded");
        arrow.classList.remove("rotate"); // Rotate arrow back
        document.body.classList.remove("menu-open"); // Allow body scroll again
    } else {
        // Collapse any other expanded submenus
        document.querySelectorAll('ul[id^="submenu-"]').forEach((ul) => {
            ul.classList.remove("expanded");
        });
        document.querySelectorAll('.arrow-icon').forEach((icon) => {
            icon.classList.remove("rotate");
        });

        // Expand the clicked submenu and rotate arrow
        submenu.classList.add("expanded");
        arrow.classList.add("rotate");
        document.body.classList.add("menu-open"); // Prevent body scroll when menu is open
    }
}
function toggleSubMenue(element) {
    let submenu = element.parentElement.querySelector(".submenu");
    let arrowIcon = element.querySelector(".arrow-icon i");

    // Toggle visibility with smooth animation
    if (submenu.classList.contains("opacity-0")) {
        submenu.classList.remove("opacity-0", "max-h-0");
        submenu.classList.add("opacity-100", "max-h-[300px]");
        arrowIcon.classList.add("rotate-90"); // Rotate arrow
    } else {
        submenu.classList.remove("opacity-100", "max-h-[300px]");
        submenu.classList.add("opacity-0", "max-h-0");
        arrowIcon.classList.remove("rotate-90"); // Reset arrow
    }
}

// style2

function openYoutubeModal(videoUrl) {
    document.getElementById("youtubeIframe").src = videoUrl + "?autoplay=1";
    document.getElementById("youtubeModal").classList.remove("hidden");
}

function closeYoutubeModal() {
    document.getElementById("youtubeIframe").src = "";
    document.getElementById("youtubeModal").classList.add("hidden");
}


const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
let currentSlide = 0;

function changeSlide(index) {
    if (currentSlide === index) return; // Prevents changing if the same dot is clicked

    // Hide all slides
    slides.forEach(slide => slide.classList.add("hidden"));

    // Show the selected slide
    slides[index].classList.remove("hidden");

    // Update dot styles
    dots.forEach(dot => {
        dot.classList.remove("text-redViolet",);
        dot.classList.add("text-black");
    });

    // Highlight the active dot
    dots[index].classList.add("text-redViolet");

    // Update current slide index
    currentSlide = index;
}


// style 3

let currentIndex = 0;
const slide = document.querySelectorAll(".slide");
const dot = document.querySelectorAll(".dot");

function changeSlides(index) {
    slide.forEach((slide, i) => {
        slide.classList.toggle("hidden", i !== index);
        dot[i].classList.toggle("bg-black", i === index);
        dot[i].classList.toggle("bg-gray-400", i !== index);
    });
    currentIndex = index;
}

document.addEventListener("DOMContentLoaded", function () {


    // ------------------------------
    // 3. Cart Quantity Controls
    // ------------------------------
    document.querySelectorAll(".increment").forEach((button) => {
        button.addEventListener("click", function () {
            let input = this.previousElementSibling;
            let value = parseInt(input.value, 10);
            input.value = value + 1;
        });
    });

    document.querySelectorAll(".decrement").forEach((button) => {
        button.addEventListener("click", function () {
            let input = this.nextElementSibling;
            let value = parseInt(input.value, 10);
            if (value > 1) {
                input.value = value - 1;
            }
        });
    });

    // ------------------------------
    // 4. Checkout Page: Toggle Section Functionality
    // ------------------------------
    function toggleSection(toggleId, contentId, arrowId) {
        const label = document.getElementById(toggleId);
        const content = document.getElementById(contentId);
        const arrow = document.getElementById(arrowId);

        if (content.classList.contains("max-h-0")) {
            // Open section: replace max-h-0 with max-h-[500px] and opacity-0 with opacity-100
            content.classList.replace("max-h-0", "max-h-[500px]");
            content.classList.replace("opacity-0", "opacity-100");
            // Change border: remove left border and add top & bottom borders
            label.classList.remove("border-l-[4px]", "border-l-redViolet");
            label.classList.add("border-t-[4px]", "border-t-redViolet", "border-b-[1px]", "border-b-redViolet");
            arrow.classList.add("rotate-90");
        } else {
            // Close section: collapse and fade out
            content.classList.replace("max-h-[500px]", "max-h-0");
            content.classList.replace("opacity-100", "opacity-0");
            // Revert border: remove top & bottom borders and restore left border
            label.classList.remove("border-t-[4px]", "border-t-redViolet", "border-b-[1px]", "border-b-redViolet");
            label.classList.add("border-l-[4px]", "border-l-redViolet");
            arrow.classList.remove("rotate-90");
        }
    }

    // Attach event listeners for checkout page toggles
    const toggleSectionIds = [
        { toggle: "couponShow", content: "couponBox", arrow: "couponarrow" },
        { toggle: "billing", content: "formopen", arrow: "billingarrow" },
        { toggle: "payment", content: "paymentBox", arrow: "paymentarrow" }
    ];

    toggleSectionIds.forEach((ids) => {
        const toggleElement = document.getElementById(ids.toggle);
        if (toggleElement) {
            toggleElement.addEventListener("click", () =>
                toggleSection(ids.toggle, ids.content, ids.arrow)
            );
        }
    });

    // ------------------------------
    // 5. Shipping Section Toggle (Checkout Page)
    // ------------------------------
    const shippingToggle = document.getElementById("shippingToggle");
    if (shippingToggle) {
        shippingToggle.addEventListener("change", function () {
            const open3 = document.getElementById("shippingOpen");
            if (this.checked) {
                open3.classList.remove("hidden");
            } else {
                open3.classList.add("hidden");
            }
        });
    }

    // ------------------------------
    // 6. Login/Register Page: Toggle Password Visibility
    // ------------------------------
    // Main password field
    const passwordToggle = document.getElementById("passwordToggle");
    const userPassword = document.getElementById("userPassword");
    const passwordToggleIcon = document.getElementById("passwordToggleIcon");

    if (passwordToggle && userPassword && passwordToggleIcon) {
        passwordToggle.addEventListener("click", function () {
            const isPassword = userPassword.getAttribute("type") === "password";
            userPassword.setAttribute("type", isPassword ? "text" : "password");
            if (isPassword) {
                passwordToggleIcon.classList.remove("fa-eye");
                passwordToggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordToggleIcon.classList.remove("fa-eye-slash");
                passwordToggleIcon.classList.add("fa-eye");
            }
        });
    }

    // Confirm password field
    const confirmPasswordToggle = document.getElementById("confirmPasswordToggle");
    const userConfirmPasswordInput = document.getElementById("userConfirmPasswordInput");
    const confirmPasswordToggleIcon = document.getElementById("confirmPasswordToggleIcon");

    if (confirmPasswordToggle && userConfirmPasswordInput && confirmPasswordToggleIcon) {
        confirmPasswordToggle.addEventListener("click", function () {
            const isPassword = userConfirmPasswordInput.getAttribute("type") === "password";
            userConfirmPasswordInput.setAttribute("type", isPassword ? "text" : "password");
            if (isPassword) {
                confirmPasswordToggleIcon.classList.remove("fa-eye");
                confirmPasswordToggleIcon.classList.add("fa-eye-slash");
            } else {
                confirmPasswordToggleIcon.classList.remove("fa-eye-slash");
                confirmPasswordToggleIcon.classList.add("fa-eye");
            }
        });
    }




    // singleProduct page


    // Zoom in effect when mouse hovers over the image
    function zoomIn(event) {
        const img = event.target;
        const rect = img.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        // Adjust the background position based on hover location
        img.style.backgroundPosition = `${(x / img.offsetWidth) * 100}% ${(y / img.offsetHeight) * 100}%`;
        img.style.transform = "scale(1.2)"; // Zoom in
    }

    // Reset the image zoom when the mouse leaves the image
    function zoomOut(event) {
        const img = event.target;
        img.style.backgroundPosition = "center";
        img.style.transform = "scale(1)"; // Reset zoom
    }


    // Initialize Swiper for Thumbnails
    var thumbSwiper = new Swiper(".thumbnail-slider", {
        spaceBetween: 10,
        slidesPerView: 3, // Show 3 thumbnails at a time
        navigation: {
            nextEl: ".thumb-next",
            prevEl: ".thumb-prev",
        },
    });

    // Function to change the main image when clicking a thumbnail
    function changeMainImage(imageUrl) {
        document.getElementById("mainImage").style.backgroundImage = `url(${imageUrl})`;
    }



    // description /additional and ratings

    document.getElementById("descriptionBtn").addEventListener("click", function () {
        showSection("description");
    });

    document.getElementById("additionalInfoBtn").addEventListener("click", function () {
        showSection("additionalInfo");
    });

    document.getElementById("ratingsBtn").addEventListener("click", function () {
        showSection("ratings");
    });

    function showSection(section) {
        // Hide all sections
        document.getElementById("descriptionSection").classList.add("hidden");
        document.getElementById("additionalInfoSection").classList.add("hidden");
        document.getElementById("ratingsSection").classList.add("hidden");

        // Show the clicked section
        document.getElementById(section + "Section").classList.remove("hidden");

        // Update button active state
        document.querySelectorAll("button").forEach(btn => {
            btn.classList.remove("active", "border-black", "text-black");
            btn.classList.add("border-transparent", "text-gray-700");
        });

        // Add the active class to the clicked button
        document.getElementById(section + "Btn").classList.add("active", "border-black", "text-black");
    }


    // review section
    document.querySelectorAll("#starRating .star").forEach(star => {
        star.addEventListener("click", function () {
            let value = this.getAttribute("data-value");
            document.getElementById("selectedStar").value = value;

            document.querySelectorAll("#starRating .star").forEach(s => {
                s.classList.remove("text-yellow-500");
                s.classList.add("text-gray-400");
            });

            this.classList.add("text-yellow-500");
            let prevSibling = this.previousElementSibling;
            while (prevSibling) {
                prevSibling.classList.add("text-yellow-500");
                prevSibling = prevSibling.previousElementSibling;
            }
        });
    });

    document.getElementById("toggleReview").addEventListener("click", function () {
        let form = document.getElementById("reviewForm");
        if (form.classList.contains("hidden")) {
            form.classList.remove("hidden");
            this.textContent = "Cancel Review";
        } else {
            form.classList.add("hidden");
            this.textContent = "Write a Review";
        }
    });






});
// rightsidebar
const images = ["../images/shopbag.jpg", "../images/shopbag2.jpg", "../images/shopbag.jpg"];
let currentIndex1 = 0;
const imageSlider1 = document.getElementById("imageSlider");
const prevBtn1 = document.getElementById("prevBtn");
const nextBtn1 = document.getElementById("nextBtn");

function updateSliderPosition() {
    const offset = -currentIndex1 * 100;
    imageSlider1.style.transform = `translateX(${offset}%)`;
}

prevBtn1.addEventListener("click", function () {
    currentIndex1 = (currentIndex1 - 1 + images.length) % images.length;
    updateSliderPosition();
});

nextBtn1.addEventListener("click", function () {
    currentIndex1 = (currentIndex1 + 1) % images.length;
    updateSliderPosition();
});





