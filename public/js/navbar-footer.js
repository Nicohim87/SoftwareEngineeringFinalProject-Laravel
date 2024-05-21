document.addEventListener('DOMContentLoaded', function() {
    var pageTitle = document.title; // Get the title of the webpage
    var buttons = document.querySelectorAll('nav a');

    buttons.forEach(function(button) {
        var buttonText = button.textContent.trim();
        if (buttonText === pageTitle) {
                button.classList.add('active');
        }
    });
});