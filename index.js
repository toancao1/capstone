/* https://www.w3schools.com/howto/howto_js_redirect_webpage.asp */

function redirectTo(page) {
  window.location.href = page;
}

function redirectToAndStop(page, event) {
  event.preventDefault(); // Prevent the default behavior of the link
  redirectTo(page);
}

function toggleDropdown() {
  var dropdownContent = document.querySelector('.dropdown-content');
  dropdownContent.classList.toggle('show');
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};

