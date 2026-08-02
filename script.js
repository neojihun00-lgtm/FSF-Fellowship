

AOS.init({

    duration: 1000,

    once: true,

    easing: "ease-in-out"

});


/*========== Sticky Navbar ==========*/

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {

    if (window.scrollY > 60) {

        navbar.classList.add("sticky");

    } else {

        navbar.classList.remove("sticky");

    }

});


/*========== Active Navigation ==========*/

const currentPage = window.location.pathname.split("/").pop();

const navLinks = document.querySelectorAll(".navbar .nav-link");

navLinks.forEach(link => {

    const href = link.getAttribute("href");

    if (href === currentPage) {

        link.classList.add("active");

    }

});


/*========== Smooth Scroll ==========*/

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function (e) {

        e.preventDefault();

        document.querySelector(this.getAttribute("href")).scrollIntoView({

            behavior: "smooth"

        });

    });

});


/*========== Back To Top Button ==========*/

const backToTop = document.createElement("button");

backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';

backToTop.className = "back-to-top";

document.body.appendChild(backToTop);

window.addEventListener("scroll", () => {

    if (window.scrollY > 300) {

        backToTop.classList.add("show");

    } else {

        backToTop.classList.remove("show");

    }

});

backToTop.addEventListener("click", () => {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

});


/*========== Scroll Progress Bar ==========*/

const progress = document.createElement("div");

progress.className = "progress-bar-scroll";

document.body.prepend(progress);

window.addEventListener("scroll", () => {

    let scrollTop = document.documentElement.scrollTop;

    let scrollHeight = document.documentElement.scrollHeight -

                       document.documentElement.clientHeight;

    let progressWidth = (scrollTop / scrollHeight) * 100;

    progress.style.width = progressWidth + "%";

});


/*=========================================
            script.js - Part 2
=========================================*/


/*========== Gallery Hover Effect ==========*/

const galleryCards = document.querySelectorAll(".gallery-card");

galleryCards.forEach(card => {

    card.addEventListener("mouseenter", () => {

        card.style.transform = "translateY(-10px) scale(1.02)";

    });

    card.addEventListener("mouseleave", () => {

        card.style.transform = "translateY(0) scale(1)";

    });

});


/*========== Mentor Card Hover ==========*/

const mentorCards = document.querySelectorAll(".mentor-card");

mentorCards.forEach(card => {

    card.addEventListener("mouseenter", () => {

        card.style.transform = "translateY(-12px)";

        card.style.transition = ".4s";

    });

    card.addEventListener("mouseleave", () => {

        card.style.transform = "translateY(0)";

    });

});


/*========== Achievement Counter Animation ==========*/

const counters = document.querySelectorAll(".counter");

const speed = 150;

counters.forEach(counter => {

    const updateCounter = () => {

        const target = +counter.innerText.replace("+","");

        const count = +counter.getAttribute("data-count") || 0;

        const increment = target / speed;

        if (count < target) {

            counter.setAttribute("data-count", Math.ceil(count + increment));

            counter.innerText = Math.ceil(count + increment);

            setTimeout(updateCounter, 15);

        } else {

            counter.innerText = target + (counter.innerText.includes("+") ? "+" : "");

        }

    };

    updateCounter();

});


/*========== Interactive Rating ==========*/

const stars = document.querySelectorAll(".rating-stars i");

stars.forEach((star, index) => {

    star.addEventListener("click", () => {

        stars.forEach((s, i) => {

            if (i <= index) {

                s.classList.add("active");

            } else {

                s.classList.remove("active");

            }

        });

    });

});


/*========== Button Ripple Effect ==========*/

const buttons = document.querySelectorAll(".btn");

buttons.forEach(btn => {

    btn.addEventListener("click", function(e){

        const circle = document.createElement("span");

        circle.classList.add("ripple");

        const rect = this.getBoundingClientRect();

        circle.style.left = e.clientX - rect.left + "px";

        circle.style.top = e.clientY - rect.top + "px";

        this.appendChild(circle);

        setTimeout(() => {

            circle.remove();

        },600);

    });

});


/*========== Fade In Elements ==========*/

const fadeItems = document.querySelectorAll(".glass-card, .achievement-card, .badge-card");

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.classList.add("show");

        }

    });

});

fadeItems.forEach(item => {

    observer.observe(item);

});


/*========== Loading Screen ==========*/

window.addEventListener("load", () => {

    const loader = document.querySelector(".loader");

    if(loader){

        loader.style.opacity = "0";

        setTimeout(() => {

            loader.style.display = "none";

        },600);

    }

});


