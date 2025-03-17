document.addEventListener("DOMContentLoaded", function () {
    // Menu Toggle (Sidebar)
    const sidebarToggle = document.querySelector(".sidebar-toggle");
    const primarySidebar = document.querySelector(".primary-sidebar");
    const closeMenu = document.querySelector(".close-menu")

    if (sidebarToggle && primarySidebar && closeMenu) {
        sidebarToggle.addEventListener("click", () => {
            const visible = primarySidebar.getAttribute("data-visible");

            if (visible === "false") {
                primarySidebar.setAttribute("data-visible", "true");
                sidebarToggle.setAttribute("aria-expanded", "true");
                body.style.overflowY = "hidden";
            } else {
                primarySidebar.setAttribute("data-visible", "false");
                sidebarToggle.setAttribute("aria-expanded", "false");
                body.style.overflowY = "auto";
            }
        })

        closeMenu.addEventListener("click", () => {
            primarySidebar.setAttribute("data-visible", "false");
            closeMenu.setAttribute("aria-expanded", "false");
            body.style.overflowY = "auto";
        })
    }

    // const mediaQuery = window.matchMedia("(max-width: 64em)");

    // function handleMediaQueryChange(e) {
    //     if (e.matches) {
    //         primarySidebar.classList.remove("collapsed");
    //     }
    // }

    // mediaQuery.addEventListener("change", handleMediaQueryChange);

    // handleMediaQueryChange(mediaQuery);

    // Menu Button (Nav)
    const menuBtn = document.querySelector(".menu-btn");
    const primaryNav = document.querySelector(".primary-header__nav");
    const overlay = document.getElementById("primary-header__overlay");
    const body = document.querySelector("body");

    if (menuBtn && primaryNav && overlay) {
        menuBtn.addEventListener("click", () => {
            const visible = primaryNav.getAttribute("data-visible");

            if (visible === "false") {
                primaryNav.setAttribute("data-visible", "true");
                menuBtn.setAttribute("aria-expanded", "true");
                overlay.classList.add("active");
                body.style.overflowY = "hidden";
            } else {
                primaryNav.setAttribute("data-visible", "false");
                menuBtn.setAttribute("aria-expanded", "false");
                overlay.classList.remove("active");
                body.style.overflowY = "auto"; //scroll
            }
        });

        overlay.addEventListener("click", () => {
            primaryNav.setAttribute("data-visible", "false");
            menuBtn.setAttribute("aria-expanded", "false");
            overlay.classList.remove("active");
            body.style.overflowY = "scroll";
        });
    }

    // Price Toggle
    const price = document.querySelector(".price-text");
    const frequency = document.querySelector(".frequency-text");
    const priceMonthly = "24,99";
    const priceAnnual = "123,45";

    function changePrice() {
        if (document.getElementById("annual").checked) {
            price.innerHTML = priceAnnual;
            frequency.innerHTML = "/ano";
        } else if (document.getElementById("monthly").checked) {
            price.innerHTML = priceMonthly;
            frequency.innerHTML = "/mês";
        }
    }

    const monthlyInput = document.getElementById("monthly");
    const annualInput = document.getElementById("annual");

    if (monthlyInput && annualInput) {
        monthlyInput.addEventListener("change", changePrice);
        annualInput.addEventListener("change", changePrice);
    }

    changePrice();
});
