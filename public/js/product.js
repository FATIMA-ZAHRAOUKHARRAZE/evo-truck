    // Select the <nav> element inside .pagination-wrapper
    const navElement = document.querySelector('.pagination-wrapper nav');
    if (navElement) {
    // Create a new <div> element
    const divElement = document.createElement('div');
    // Copy attributes from the <nav> to the <div>
    Array.from(navElement.attributes).forEach(attr => {
        divElement.setAttribute(attr.name, attr.value);
    });
    // Copy the content of the <nav> to the <div>
    divElement.innerHTML = navElement.innerHTML;
    // Replace the <nav> with the <div>
    navElement.parentNode.replaceChild(divElement, navElement);
    console.log('<nav> has been replaced with <div>!');
    } else {
    console.log('No <nav> found inside .pagination-wrapper');
    }