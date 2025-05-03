document.addEventListener('DOMContentLoaded', function () {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const dashboardSidebar = document.querySelector('.dashboard-sidebar');

    // Sidebar toggle
    if (sidebarToggle && dashboardSidebar) {
        sidebarToggle.addEventListener('click', () => {
            dashboardSidebar.classList.toggle('active');
        });
    }

    // Handle collapsible menu icons
    const navLinks = document.querySelectorAll('.sidebar-nav .nav-link[data-bs-toggle="collapse"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            const icon = this.querySelector('.fa-chevron-down');
            if (icon) {
                icon.classList.toggle('fa-rotate-180');
            }
        });
    });

    // Highlight the active link
    const currentPath = window.location.pathname;
    const navItems = document.querySelectorAll('.sidebar-nav .nav-link');

    navItems.forEach(item => {
        const itemHref = item.getAttribute('href');
        if (itemHref && currentPath === new URL(itemHref, window.location.origin).pathname) {
            item.classList.add('active');
        }
    });

    // Bootstrap tooltips
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));

    // Bootstrap popovers
    const popoverTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.forEach(el => new bootstrap.Popover(el));
});
