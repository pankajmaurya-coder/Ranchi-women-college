// const menuToggle = document.querySelector("#menuToggle");
// const navbar = document.querySelector("#navbar");

// menuToggle.addEventListener("click", () => {

//     navbar.classList.toggle("active");

// });


// const dropdowns = document.querySelectorAll(".nav-dropdown");

// dropdowns.forEach(dropdown => {

//     const link = dropdown.querySelector("a");

//     link.addEventListener("click", function (e) {

//         if (window.innerWidth <= 992) {

//             e.preventDefault();

//             dropdowns.forEach(item => {

//                 if (item !== dropdown) {
//                     item.classList.remove("active");
//                 }

//             });

//             dropdown.classList.toggle("active");

//         }

//     });

// });

// ==========================================
// MOBILE MENU
// ==========================================

const menuToggle = document.querySelector(".header-bar");
const navbar = document.querySelector(".header-navbar");
const dropdowns = document.querySelectorAll(".nav-dropdown");

menuToggle.addEventListener("click", () => {

    navbar.classList.toggle("active");

});

// ==========================================
// MOBILE DROPDOWN
// ==========================================

dropdowns.forEach((dropdown) => {

    const link = dropdown.querySelector(":scope > a");
    const menu = dropdown.querySelector(".nav-dropdown-menu");

    link.addEventListener("click", (e) => {

        if (window.innerWidth > 992) return;

        e.preventDefault();

        const isOpen = dropdown.classList.contains("active");

        // Close all dropdowns
        dropdowns.forEach((item) => {

            item.classList.remove("active");

            const subMenu = item.querySelector(".nav-dropdown-menu");

            if (subMenu) {
                subMenu.style.maxHeight = null;
            }

        });

        // Open clicked dropdown
        if (!isOpen) {

            dropdown.classList.add("active");

            menu.style.maxHeight = menu.scrollHeight + "px";

        }

    });

});

// ==========================================
// RESET ON RESIZE
// ==========================================

window.addEventListener("resize", () => {

    if (window.innerWidth > 992) {

        navbar.classList.remove("active");

        dropdowns.forEach((dropdown) => {

            dropdown.classList.remove("active");

            const menu = dropdown.querySelector(".nav-dropdown-menu");

            if (menu) {
                menu.style.maxHeight = null;
            }

        });

    }

});