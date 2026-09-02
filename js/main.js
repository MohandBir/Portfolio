document.addEventListener("DOMContentLoaded", function () {
    // Mobile nav toggle
    var toggle = document.querySelector(".nav-toggle");
    var navLinks = document.querySelector(".nav-links");

    if (toggle && navLinks) {
        toggle.addEventListener("click", function () {
            toggle.classList.toggle("is-open");
            navLinks.classList.toggle("is-open");
        });

        navLinks.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                toggle.classList.remove("is-open");
                navLinks.classList.remove("is-open");
            });
        });
    }

    // Highlight active nav link based on current path/hash
    var currentPath = window.location.pathname.replace(/\/+$/, "") || "/";
    document.querySelectorAll(".nav-links a").forEach(function (link) {
        var linkPath = link.getAttribute("href");
        if (!linkPath) return;
        var linkPathOnly = linkPath.split("#")[0].replace(/\/+$/, "") || "/";
        if (linkPathOnly === currentPath && (linkPath.indexOf("#") === -1 || window.location.hash === "#" + linkPath.split("#")[1])) {
            link.classList.add("active");
        }
    });

    // Reveal on scroll
    var revealEls = document.querySelectorAll(".reveal");
    if ("IntersectionObserver" in window && revealEls.length) {
        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15 }
        );
        revealEls.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        revealEls.forEach(function (el) {
            el.classList.add("is-visible");
        });
    }

    // Back to top button
    var backToTop = document.querySelector(".back-to-top");
    if (backToTop) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 400) {
                backToTop.classList.add("is-visible");
            } else {
                backToTop.classList.remove("is-visible");
            }
        });
    }

    // Basic client-side validation for the contact form
    var contactForm = document.querySelector(".contact-form");
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            var name = contactForm.querySelector("#name");
            var email = contactForm.querySelector("#email");
            var message = contactForm.querySelector("#message");
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!name.value.trim() || !email.value.trim() || !message.value.trim()) {
                e.preventDefault();
                alert("Merci de remplir tous les champs obligatoires.");
                return;
            }

            if (!emailPattern.test(email.value.trim())) {
                e.preventDefault();
                alert("Merci de saisir une adresse email valide.");
            }
        });
    }
});
