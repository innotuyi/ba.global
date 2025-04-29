
    document.addEventListener('DOMContentLoaded', function () {
        // Handle click on top-level dropdown (e.g., SERVICES, HOME, CONTACT)
        const dropbtns = document.querySelectorAll('.dropbtn');
        dropbtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent default link behavior
                console.log('Clicked on top-level:', this.textContent); // Debug: Confirm click event
                const dropdownContent = this.nextElementSibling; // Get the dropdown-content
                const isVisible = dropdownContent.style.display === 'block';

                // Close all other dropdowns
                document.querySelectorAll('.dropdown-content').forEach(content => {
                    if (content !== dropdownContent) {
                        content.style.display = 'none';
                        content.style.opacity = '0';
                    }
                });

                // Toggle the clicked dropdown
                dropdownContent.style.display = isVisible ? 'none' : 'block';
                dropdownContent.style.opacity = isVisible ? '0' : '1';
            });
        });

        // Handle click on Medical Jobs to toggle its subcontent
        const medicalJobsHeading = document.querySelector('.dropdown-section.medical-jobs .dropdown-heading');
        if (medicalJobsHeading) {
            medicalJobsHeading.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent default link behavior
                e.stopPropagation(); // Prevent event from bubbling up to parent dropdown
                console.log('Clicked on Medical Jobs'); // Debug: Confirm click event
                const subcontent = this.nextElementSibling; // Get the dropdown-subcontent
                const isVisible = subcontent.style.display === 'flex';

                // Close all other subcontents
                document.querySelectorAll('.dropdown-subcontent').forEach(content => {
                    if (content !== subcontent) {
                        content.style.display = 'none';
                    }
                });

                // Toggle the clicked subcontent
                subcontent.style.display = isVisible ? 'none' : 'flex';
                console.log('Subcontent display:', subcontent.style.display); // Debug: Confirm display change
            });
        } else {
            console.error('Medical Jobs heading not found'); // Debug: Check if selector is correct
        }

        // Handle click on subcontent items (e.g., Physiotherapy, Laboratory, Furnitures) to toggle nested subcontent
        const subcontentItems = document.querySelectorAll('.dropdown-column > a');
        subcontentItems.forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent default link behavior
                e.stopPropagation(); // Prevent event from bubbling up
                console.log('Clicked on subcontent item:', this.textContent); // Debug: Confirm click event
                const nestedSubcontent = this.nextElementSibling; // Get the nested dropdown-subcontent
                const isVisible = nestedSubcontent.style.display === 'flex';

                // Close all other nested subcontents
                document.querySelectorAll('.dropdown-subcontent.nested').forEach(content => {
                    if (content !== nestedSubcontent) {
                        content.style.display = 'none';
                    }
                });

                // Toggle the clicked nested subcontent
                nestedSubcontent.style.display = isVisible ? 'none' : 'flex';
                console.log('Nested subcontent display:', nestedSubcontent.style.display); // Debug: Confirm display change
            });
        });

        // Close dropdowns when clicking outside, but exclude clicks within the dropdown
        document.addEventListener('click', function (e) {
            const target = e.target;
            const dropdown = target.closest('.dropdown');
            const isDropbtn = target.classList.contains('dropbtn');
            const isDropdownHeading = target.classList.contains('dropdown-heading');
            const isSubcontentItem = target.closest('.dropdown-column > a');

            // If the click is not on a dropbtn, dropdown-heading, or subcontent item, and not within a dropdown
            if (!dropdown && !isDropbtn && !isDropdownHeading && !isSubcontentItem) {
                console.log('Clicked outside dropdown'); // Debug: Confirm outside click
                document.querySelectorAll('.dropdown-content').forEach(content => {
                    content.style.display = 'none';
                    content.style.opacity = '0';
                });
                document.querySelectorAll('.dropdown-subcontent').forEach(content => {
                    content.style.display = 'none';
                });
                document.querySelectorAll('.dropdown-subcontent.nested').forEach(content => {
                    content.style.display = 'none';
                });
            }
        });
    });


