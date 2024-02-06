
// Toggle search bar active state
function toggleSearch() {
    // Access search bar element by class name
    var search = document.getElementsByClassName('search')[1];

    // Toggle active class on search bar element
    search.classList.toggle('');
}





// Function to toggle shadow class on header
function toggleShadow() {
    // Select header element and its class list
    const header = document.querySelector('header');
    const classList = header.classList;

    // Toggle shadow class based on scroll position
    classList.toggle('shadow', window.scrollY > 0);
}

// Call function on scroll event
window.addEventListener('scroll', toggleShadow);

// Toggle the menu visibility






/*let submenu = document.getElementById("subMenu");
function toggleMenu() {
    submenu.classList.toggle("open-menu");
}*/

let subMenu = document.getElementById("subMenu");

function toggleMenu() {
    subMenu.classList.toggle("open-menu");
}


