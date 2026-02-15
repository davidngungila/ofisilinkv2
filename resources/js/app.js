import './bootstrap';
import '../css/app.css';

// Sidebar Toggle
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    
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
    
    // Profile Dropdown - Handle click on mobile, hover on desktop
    const profileDropdown = document.getElementById('profile-dropdown');
    if (profileDropdown) {
        const dropdownMenu = profileDropdown.querySelector('.absolute');
        
        // For mobile/touch devices, toggle on click
        if (window.matchMedia('(max-width: 1023px)').matches) {
            profileDropdown.querySelector('button').addEventListener('click', function(e) {
                e.stopPropagation();
                dropdownMenu.classList.toggle('opacity-0');
                dropdownMenu.classList.toggle('invisible');
                dropdownMenu.classList.toggle('opacity-100');
                dropdownMenu.classList.toggle('visible');
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!profileDropdown.contains(e.target)) {
                    dropdownMenu.classList.add('opacity-0', 'invisible');
                    dropdownMenu.classList.remove('opacity-100', 'visible');
                }
            });
        }
    }
    
    // Notification Dropdown - Handle click on mobile, hover on desktop
    const notificationDropdown = document.getElementById('notification-dropdown');
    if (notificationDropdown) {
        const notificationMenu = notificationDropdown.querySelector('.absolute');
        
        // For mobile/touch devices, toggle on click
        if (window.matchMedia('(max-width: 1023px)').matches) {
            const notificationBtn = document.getElementById('notification-btn');
            if (notificationBtn) {
                notificationBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    notificationMenu.classList.toggle('opacity-0');
                    notificationMenu.classList.toggle('invisible');
                    notificationMenu.classList.toggle('opacity-100');
                    notificationMenu.classList.toggle('visible');
                });
            }
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!notificationDropdown.contains(e.target)) {
                    notificationMenu.classList.add('opacity-0', 'invisible');
                    notificationMenu.classList.remove('opacity-100', 'visible');
                }
            });
        }
    }
    
    // Live Time and Date Display
    function updateLiveTime() {
        const timeElement = document.getElementById('live-time');
        const timeElementMobile = document.getElementById('live-time-mobile');
        const dateElement = document.getElementById('live-date');
        const now = new Date();
        
        if (timeElement) {
            const timeOptions = { 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit',
                hour12: true 
            };
            timeElement.textContent = now.toLocaleTimeString('en-US', timeOptions);
        }
        
        if (timeElementMobile) {
            const timeOptions = { 
                hour: '2-digit', 
                minute: '2-digit',
                hour12: true 
            };
            timeElementMobile.textContent = now.toLocaleTimeString('en-US', timeOptions);
        }
        
        if (dateElement) {
            const dateOptions = { 
                weekday: 'short',
                year: 'numeric', 
                month: 'short', 
                day: 'numeric'
            };
            dateElement.textContent = now.toLocaleDateString('en-US', dateOptions);
        }
    }
    
    // Update time and date immediately and then every second
    updateLiveTime();
    setInterval(updateLiveTime, 1000);
});
