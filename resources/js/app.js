import './bootstrap';
import '../css/app.css';

// Sidebar Toggle
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const profileMenuButton = document.getElementById('profile-menu-button');
    const profileDropdown = document.getElementById('profile-dropdown');
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('open');
            if (sidebarOverlay) {
                sidebarOverlay.classList.toggle('hidden');
            }
        });
    }
    
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.remove('open');
            sidebarOverlay.classList.add('hidden');
        });
    }

    if (profileMenuButton && profileDropdown) {
        profileMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            profileDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function(e) {
            if (!profileMenuButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                profileDropdown.classList.add('hidden');
            }
        });

        window.addEventListener('resize', function() {
            profileDropdown.classList.add('hidden');
        });
    }
    
    // Submenu Toggle
    const submenuToggles = document.querySelectorAll('[data-submenu-toggle]');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const submenuId = this.getAttribute('data-submenu-toggle');
            const submenu = document.getElementById(submenuId);
            if (submenu) {
                submenu.classList.toggle('open');
                const icon = this.querySelector('.submenu-icon');
                if (icon) {
                    icon.classList.toggle('rotate-90');
                }
            }
        });
    });
    
    // Set active menu item
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('.sidebar-item a');
    menuItems.forEach(item => {
        if (item.getAttribute('href') === currentPath) {
            item.closest('.sidebar-item')?.classList.add('active');
            // Open parent submenu if exists
            const submenu = item.closest('.sidebar-submenu');
            if (submenu) {
                submenu.classList.add('open');
                const toggle = document.querySelector(`[data-submenu-toggle="${submenu.id}"]`);
                if (toggle) {
                    const icon = toggle.querySelector('.submenu-icon');
                    if (icon) {
                        icon.classList.add('rotate-90');
                    }
                }
            }
        }
    });
});
