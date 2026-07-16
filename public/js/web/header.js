
const menuToggle = document.querySelector(".header-bar");
const navbar = document.querySelector(".header-navbar");
const dropdowns = document.querySelectorAll(".nav-dropdown");

menuToggle.addEventListener("click", () => {

    navbar.classList.toggle("active");

});

dropdowns.forEach((dropdown) => {

    const link = dropdown.querySelector(":scope > a");
    const menu = dropdown.querySelector(".nav-dropdown-menu");

    link.addEventListener("click", (e) => {

        if (window.innerWidth > 992) return;

        e.preventDefault();

        const isOpen = dropdown.classList.contains("active");

        dropdowns.forEach((item) => {

            item.classList.remove("active");

            const subMenu = item.querySelector(".nav-dropdown-menu");

            if (subMenu) {
                subMenu.style.maxHeight = null;
            }

        });

       
        if (!isOpen) {

            dropdown.classList.add("active");

            menu.style.maxHeight = menu.scrollHeight + "px";

        }

    });

});

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

// notic
const marquees=document.querySelectorAll('.notice-marquee');

marquees.forEach(box=>{
    const track=box.querySelector('.notice-track');
    track.innerHTML+=track.innerHTML;

    let id=setInterval(()=>{
        box.scrollTop+=1;
        if(box.scrollTop>=track.scrollHeight/2){
            box.scrollTop=0;
        }
    },35);

    box.addEventListener('mouseenter',()=>clearInterval(id));

    box.addEventListener('mouseleave',()=>{
        id=setInterval(()=>{
            box.scrollTop+=1;
            if(box.scrollTop>=track.scrollHeight/2){
                box.scrollTop=0;
            }
        },35);
    });
});