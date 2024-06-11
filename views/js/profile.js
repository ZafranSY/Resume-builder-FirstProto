document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll('.tabs .tab');
    const sections = document.querySelectorAll('.section');
    const proceedButtons = document.querySelectorAll('.button-container .button');

    function showSection(index) {
        tabs.forEach((tab, i) => {
            tab.classList.toggle('active', i === index);
        });
        sections.forEach((section, i) => {
            section.classList.toggle('active', i === index);
        });
    }

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            showSection(index);
        });
    });

    proceedButtons.forEach((button, index) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            if (index < sections.length - 1) {
                showSection(index + 1);
            } else {
                button.closest('form').submit();
            }
        });
    });

    window.nextSection = function(index) {
        showSection(index);
    }
});
