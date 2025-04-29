document.addEventListener('DOMContentLoaded', function() {
    // Sidebar toggle functionality
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const dashboardSidebar = document.querySelector('.dashboard-sidebar');
    
    if (sidebarToggle && dashboardSidebar) {
        sidebarToggle.addEventListener('click', function() {
            dashboardSidebar.classList.toggle('active');
        });
    }
    
    // Collapsible sidebar menu items
    const navLinks = document.querySelectorAll('.sidebar-nav .nav-link[data-bs-toggle="collapse"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const icon = this.querySelector('.fa-chevron-down');
            if (icon) {
                icon.classList.toggle('rotate');
            }
        });
    });
    
    // Add active class to current nav item
    const currentPath = window.location.pathname;
    const navItems = document.querySelectorAll('.sidebar-nav .nav-link');
    
    navItems.forEach(item => {
        if (item.getAttribute('href') === currentPath) {
            item.classList.add('active');
        }
    });
    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
});

// Add rotation class to chevron icon when collapsed
document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]').forEach(link => {
    link.addEventListener('click', function() {
        const icon = this.querySelector('.fa-chevron-down');
        if (icon) {
            icon.classList.toggle('fa-rotate-180');
        }
    });
});