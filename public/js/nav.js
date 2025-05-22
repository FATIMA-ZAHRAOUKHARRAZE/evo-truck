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

    // Define the images to switch between
    const hoverImage = "/images/Transparent.png";
    const defaultImage = "/images/tr2.png";
    // Function to apply the active effects
    function applyEffects() {

        mainImage.src = hoverImage;
        pro.style.color = "#2042be";
        languageSelect.style.color = "#2042be";
        changeoption.style.color = "#2042be";
        changeoption.style.backgroundColor = "white";
    }

    // Function to reset the default effects
    function resetEffects() {
        if (window.scrollY > 40) {
            mainImage.src = hoverImage;
        } else {
        mainImage.src = defaultImage;}
        pro.style.color = "#ffd700";
        languageSelect.style.color = "#ffd700";
        changeoption.style.color = "#ffd700";
        changeoption.style.backgroundColor = "transparent";
    }

    // Add scroll event listener
    if (window.innerWidth > 768) {
        // Add hover event listeners
        imageContainer.addEventListener("mouseenter", applyEffects);
        imageContainer.addEventListener("mouseleave", resetEffects);
        window.addEventListener("scroll", () => {
            if (window.scrollY > 40) {
                applyEffects(); // Apply effects when scrolling down
            } else {
                resetEffects(); // Reset effects when returning to the top
            }
        });
    }
});
