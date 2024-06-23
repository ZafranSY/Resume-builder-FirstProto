document.addEventListener('DOMContentLoaded', function() {
    const proceedButtons = document.querySelectorAll('.proceedButton');
    const tabs = document.querySelectorAll(".tabs div");
    const sections = document.querySelectorAll(".section");

    function setActiveTab(index) {
        tabs.forEach((tab, i) => {
            if (i === index)
                tab.classList.add("active");
            else
                tab.classList.remove("active");
        });

        sections.forEach((section, i) => {
            if (i === index)
                section.classList.add("active");
            else
                section.classList.remove("active");
        });
    }

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
            setActiveTab(index);
        });
    });

    proceedButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentSection = button.closest('.section');
            const nextSectionId = button.getAttribute('data-next');
            const nextSection = document.getElementById(nextSectionId);

            // Check if the current section has any invalid inputs
            const inputs = currentSection.querySelectorAll('input:required, textarea:required, select:required');
            let isValid = true;
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                }
            });

            if (isValid) {
                if (currentSection && nextSection) {
                    currentSection.classList.remove('active');
                    nextSection.classList.add('active');

                    // Optionally, update active tab based on next section
                    const currentTab = document.querySelector('.tab.active');
                    const nextTab = document.querySelector(`.tab[data-tab=${nextSectionId}]`);
                    if (currentTab && nextTab) {
                        currentTab.classList.remove('active');
                        nextTab.classList.add('active');
                    }
                }
            } else {
                // Handle validation error, optionally focus on the first invalid input
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        input.focus();
                        // You can also add UI feedback or message for the user
                        console.log('Please fill out all required fields.');
                    }
                });
            }
        });
    });
});
