document.addEventListener("scroll", function () {
    const nav = document.querySelector("#nav");
    if (window.scrollY > 40) {
        // Adjust scroll threshold as needed
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});

// scroll effect on navbar
AOS.init({
    duration: 1000, // Durée de l'animation en ms
    easing: "ease-in-out", // Type d'animation
    once: false,
    offset: 200,
});

document.addEventListener("DOMContentLoaded", () => {
    const imageContainer = document.getElementById("nav");
    const mainImage = document.getElementById("img-logo");
    const pro = document.querySelector(".pro");
    const languageSelect = document.getElementById("languageSelect");
    const changeoption = document.getElementById("changeoption");

    const primaryColor = "#0033cc";
    const defaultColor = "#e8ad1d";

    let hoverImage;
    let defaultImage;

    // Function to set image paths based on screen size
    function updateImagePaths() {
        if (window.innerWidth > 768) {
            hoverImage = "/images/EVO_WEB_Bleu.svg";
            defaultImage = "/images/EVO_WEB_Bleu.svg";
            // defaultImage = "/images/EVO_WEB_Jaune.svg";
        } else {
            hoverImage = "/images/EVO_Mobile_Bleu.svg";
            defaultImage = "/images/EVO_Mobile_Bleu.svg";
        }
        // Set initial image based on scroll position
        updateScrollEffects();
    }

    // Function to apply hover/active styles
    function applyEffects() {
        mainImage.src = hoverImage;
        pro.style.color = primaryColor;
        languageSelect.style.color = primaryColor;
        changeoption.style.color = primaryColor;
        changeoption.style.backgroundColor = "white";
    }

    // Function to reset to default styles
    function resetEffects() {
        updateScrollEffects();
        pro.style.color = primaryColor;
        changeoption.style.color = primaryColor;
        changeoption.style.backgroundColor = "transparent";
    }

    // Function to set logo based on scroll position
    function updateScrollEffects() {
        if (window.scrollY > 40) {
            mainImage.src = hoverImage;
            languageSelect.style.color = primaryColor;
        } else {
            mainImage.src = defaultImage;
            languageSelect.style.color = primaryColor;
        }
    }

    // Initialize paths and styles
    updateImagePaths();

    // Scroll listener (applies to all screen sizes)
    window.addEventListener("scroll", () => {
        updateScrollEffects();
    });

    // Hover listeners (desktop only)
    if (window.innerWidth > 768) {
        imageContainer.addEventListener("mouseenter", applyEffects);
        imageContainer.addEventListener("mouseleave", resetEffects);
    }

    // Handle screen resizing
    window.addEventListener("resize", () => {
        updateImagePaths();
    });
});
