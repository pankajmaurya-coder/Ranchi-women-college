document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menuToggle");
    const navbar = document.getElementById("navbar");

    if (menuToggle && navbar) {

        menuToggle.addEventListener("click", function () {

            navbar.classList.toggle("active");

            const icon = this.querySelector("i");

            if (navbar.classList.contains("active")) {

                this.setAttribute("aria-expanded", "true");

                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");

            } else {

                this.setAttribute("aria-expanded", "false");

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            }

        });

    }

    const dropdowns = document.querySelectorAll(".nav-dropdown");

    dropdowns.forEach(function (dropdown) {

        const link = dropdown.querySelector(":scope > a");

        if (!link) return;

        link.addEventListener("click", function (e) {

            if (window.innerWidth > 992) return;

            e.preventDefault();

            dropdowns.forEach(function (item) {

                if (item !== dropdown) {

                    item.classList.remove("active");

                }

            });

            dropdown.classList.toggle("active");

        });

    });

    window.addEventListener("resize", function () {

        if (window.innerWidth > 992) {

            navbar.classList.remove("active");

            dropdowns.forEach(function (item) {

                item.classList.remove("active");

            });

            if (menuToggle) {

                menuToggle.setAttribute("aria-expanded", "false");

                const icon = menuToggle.querySelector("i");

                if (icon) {

                    icon.classList.remove("fa-xmark");
                    icon.classList.add("fa-bars");

                }

            }

        }

    });

});