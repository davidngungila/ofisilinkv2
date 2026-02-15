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
        
        // Tanzania timezone options (Africa/Dar_es_Salaam, UTC+3)
        const timeOptions = { 
            hour: '2-digit', 
            minute: '2-digit', 
            second: '2-digit',
            hour12: true,
            timeZone: 'Africa/Dar_es_Salaam'
        };
        
        const timeOptionsMobile = { 
            hour: '2-digit', 
            minute: '2-digit',
            hour12: true,
            timeZone: 'Africa/Dar_es_Salaam'
        };
        
        const dateOptions = { 
            weekday: 'short',
            year: 'numeric', 
            month: 'short', 
            day: 'numeric',
            timeZone: 'Africa/Dar_es_Salaam'
        };
        
        if (timeElement) {
            timeElement.textContent = now.toLocaleTimeString('en-US', timeOptions);
        }
        
        if (timeElementMobile) {
            timeElementMobile.textContent = now.toLocaleTimeString('en-US', timeOptionsMobile);
        }
        
        if (dateElement) {
            dateElement.textContent = now.toLocaleDateString('en-US', dateOptions);
        }
    }
    
    // Update time and date immediately and then every second
    updateLiveTime();
    setInterval(updateLiveTime, 1000);
    
    // Real-time Search Filtering - Works on all search inputs
    function initializeSearch(input) {
        // Prevent duplicate initialization
        if (input.dataset.searchInitialized === 'true') return;
        input.dataset.searchInitialized = 'true';
        
        const container = input.closest('.bg-white, .bg-gray-50, .rounded-lg, .shadow-sm, .border') || document.body;
        const table = container.querySelector('table');
        
        if (table) {
            const tbody = table.querySelector('tbody');
            if (tbody) {
                const originalRows = Array.from(tbody.querySelectorAll('tr'));
                
                input.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase().trim();
                    
                    originalRows.forEach(row => {
                        const text = row.textContent.toLowerCase();
                        if (!searchTerm || text.includes(searchTerm)) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                });
            }
        } else {
            // Handle grid/card layouts
            const gridContainer = container.querySelector('.grid, .space-y-4, .space-y-6, .space-y-3');
            if (gridContainer) {
                const cards = Array.from(gridContainer.querySelectorAll('div[class*="bg-white"], div[class*="border"], div[class*="rounded"], div[class*="shadow"]'));
                if (cards.length > 0) {
                    input.addEventListener('input', function() {
                        const searchTerm = this.value.toLowerCase().trim();
                        
                        cards.forEach(card => {
                            const text = card.textContent.toLowerCase();
                            if (!searchTerm || text.includes(searchTerm)) {
                                card.style.display = '';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                }
            }
            
            // Also check for list items
            const listItems = container.querySelectorAll('li, .space-y-4 > div, .space-y-6 > div');
            if (listItems.length > 0 && !gridContainer) {
                input.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase().trim();
                    
                    listItems.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        if (!searchTerm || text.includes(searchTerm)) {
                            item.style.display = '';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            }
        }
    }
    
    // Initialize ALL search inputs - Very aggressive detection to catch everything
    function initializeAllSearches() {
        const allTextInputs = document.querySelectorAll('input[type="text"]');
        
        allTextInputs.forEach(input => {
            // Skip if already initialized
            if (input.dataset.searchInitialized === 'true') return;
            
            const placeholder = (input.getAttribute('placeholder') || '').toLowerCase();
            const parent = input.parentElement;
            const grandParent = parent?.parentElement;
            const container = input.closest('.bg-white, .bg-gray-50, .rounded-lg, .border, .shadow-sm');
            
            // Check for search icon anywhere nearby
            const hasSearchIcon = parent?.querySelector('svg path[d*="M21 21l-6-6"], svg path[d*="m21 21l-6-6"]') ||
                                 grandParent?.querySelector('svg path[d*="M21 21l-6-6"], svg path[d*="m21 21l-6-6"]') ||
                                 input.previousElementSibling?.querySelector('svg path[d*="M21 21l-6-6"]');
            
            // Check if container has filterable content
            const hasTable = container?.querySelector('table tbody');
            const hasGrid = container?.querySelector('.grid');
            const hasList = container?.querySelector('.space-y-4, .space-y-6, .space-y-3');
            const hasFilterableContent = hasTable || hasGrid || hasList;
            
            // Check if in filter/search section
            const isInFilterSection = input.closest('.bg-gray-50, [class*="filter"], [class*="search"], .p-6');
            
            // Check placeholder for search keywords
            const isSearchPlaceholder = placeholder.includes('search') || 
                                       placeholder.includes('by') || 
                                       placeholder.includes('find') ||
                                       placeholder.includes('filter');
            
            // Initialize if ANY of these conditions are true
            if (hasFilterableContent || 
                isSearchPlaceholder || 
                hasSearchIcon || 
                isInFilterSection ||
                (container && (hasTable || hasGrid || hasList))) {
                initializeSearch(input);
            }
        });
    }
    
    // Initialize on page load
    initializeAllSearches();
    
    // Also initialize on DOM ready (in case script loads before DOM)
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeAllSearches);
    } else {
        initializeAllSearches();
    }
    
    // Re-initialize for dynamically added content (if any)
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            mutation.addedNodes.forEach(function(node) {
                if (node.nodeType === 1) { // Element node
                    const newInputs = node.querySelectorAll ? node.querySelectorAll('input[type="text"]') : [];
                    newInputs.forEach(input => {
                        if (!input.dataset.searchInitialized) {
                            initializeAllSearches();
                        }
                    });
                }
            });
        });
    });
    
    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
    
    // Tab Functionality - Enhanced to work with all tab structures
    function initializeTabs() {
        // Find all tab navigation containers
        document.querySelectorAll('nav.flex, nav[class*="-mb-px"], .flex.-mb-px, nav[role="tablist"]').forEach(tabNav => {
            const tabs = Array.from(tabNav.querySelectorAll('button[role="tab"], button'));
            if (tabs.length === 0) return;
            
            // Find parent container
            const tabContainer = tabNav.closest('.bg-white, .rounded-lg, .border, .shadow-sm');
            
            tabs.forEach((tab, index) => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const tabId = this.getAttribute('data-tab');
                    
                    // Update all tab buttons in this group
                    tabs.forEach((t, i) => {
                        if (i === index || (tabId && t.getAttribute('data-tab') === tabId)) {
                            t.classList.remove('text-gray-600', 'hover:text-gray-800');
                            t.classList.add('text-[#940000]', 'border-b-2', 'border-[#940000]');
                        } else {
                            t.classList.remove('text-[#940000]', 'border-b-2', 'border-[#940000]', 'bg-[#940000]', 'text-white');
                            t.classList.add('text-gray-600', 'hover:text-gray-800');
                        }
                    });
                    
                    // Handle content sections with data-tab-content attribute
                    if (tabId) {
                        const allContentSections = tabContainer ? 
                            tabContainer.querySelectorAll('[data-tab-content]') : 
                            document.querySelectorAll('[data-tab-content]');
                        
                        allContentSections.forEach(section => {
                            const sectionTabId = section.getAttribute('data-tab-content');
                            if (sectionTabId === tabId) {
                                section.classList.remove('hidden');
                            } else {
                                section.classList.add('hidden');
                            }
                        });
                    } else {
                        // Fallback: use index-based matching
                        if (tabContainer) {
                            const allSections = Array.from(tabContainer.querySelectorAll('div[class*="p-6"], div[class*="border"]'));
                            const contentSections = allSections.filter(section => {
                                return section !== tabNav && !tabNav.contains(section) && 
                                       !section.closest('nav') && 
                                       section !== tabNav.nextElementSibling?.querySelector('div');
                            });
                            
                            contentSections.forEach((section, i) => {
                                if (i === index) {
                                    section.classList.remove('hidden');
                                } else {
                                    section.classList.add('hidden');
                                }
                            });
                        }
                    }
                });
            });
        });
    }
    
    // Initialize tabs on page load
    initializeTabs();
    
    // Filter dropdowns - Enhanced filtering
    function initializeFilters() {
        const filterSelects = document.querySelectorAll('select');
        filterSelects.forEach(select => {
            const container = select.closest('.bg-white, .bg-gray-50, .p-6') || document.body;
            const table = container.querySelector('table');
            
            if (table) {
                const tbody = table.querySelector('tbody');
                if (tbody) {
                    const originalRows = Array.from(tbody.querySelectorAll('tr'));
                    const selectIndex = Array.from(select.parentElement.parentElement.querySelectorAll('select')).indexOf(select);
                    
                    select.addEventListener('change', function() {
                        const filterValue = this.value.toLowerCase().trim();
                        const searchInput = container.querySelector('input[type="text"]');
                        const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';
                        
                        originalRows.forEach(row => {
                            let matchesFilter = true;
                            let matchesSearch = true;
                            
                            // Check filter
                            if (filterValue && filterValue !== 'all' && filterValue !== '') {
                                const cells = row.querySelectorAll('td');
                                if (cells.length > selectIndex) {
                                    const cellText = cells[selectIndex].textContent.toLowerCase();
                                    matchesFilter = cellText.includes(filterValue) || 
                                                   cells[selectIndex].querySelector('span[class*="rounded-full"]')?.textContent.toLowerCase().includes(filterValue);
                                }
                            }
                            
                            // Check search
                            if (searchTerm) {
                                const rowText = row.textContent.toLowerCase();
                                matchesSearch = rowText.includes(searchTerm);
                            }
                            
                            row.style.display = (matchesFilter && matchesSearch) ? '' : 'none';
                        });
                    });
                }
            }
        });
    }
    
    // Initialize filters
    initializeFilters();
    
    // Grid/List View Toggle
    document.querySelectorAll('button:contains("Grid View"), button:contains("List View")').forEach(button => {
        const parent = button.closest('.bg-white, .rounded-lg');
        if (!parent) return;
        
        const gridContainer = parent.querySelector('.grid');
        const listContainer = parent.querySelector('table, .space-y-4');
        
        if (button.textContent.includes('Grid View')) {
            button.addEventListener('click', function() {
                const listBtn = Array.from(parent.querySelectorAll('button')).find(b => b.textContent.includes('List View'));
                if (listBtn) {
                    this.classList.add('bg-[#940000]', 'text-white');
                    this.classList.remove('text-gray-600', 'hover:bg-gray-50');
                    listBtn.classList.remove('bg-[#940000]', 'text-white');
                    listBtn.classList.add('text-gray-600', 'hover:bg-gray-50');
                }
                if (gridContainer) gridContainer.classList.remove('hidden');
                if (listContainer) listContainer.classList.add('hidden');
            });
        } else if (button.textContent.includes('List View')) {
            button.addEventListener('click', function() {
                const gridBtn = Array.from(parent.querySelectorAll('button')).find(b => b.textContent.includes('Grid View'));
                if (gridBtn) {
                    this.classList.add('bg-[#940000]', 'text-white');
                    this.classList.remove('text-gray-600', 'hover:bg-gray-50');
                    gridBtn.classList.remove('bg-[#940000]', 'text-white');
                    gridBtn.classList.add('text-gray-600', 'hover:bg-gray-50');
                }
                if (gridContainer) gridContainer.classList.add('hidden');
                if (listContainer) listContainer.classList.remove('hidden');
            });
        }
    });
    
    // View Toggle - Enhanced
    document.querySelectorAll('.flex button').forEach(button => {
        const text = button.textContent.trim();
        if (text === 'Grid View' || text === 'List View' || text === 'Grid' || text === 'List') {
            const container = button.closest('.bg-white, .rounded-lg, .border');
            if (!container) return;
            
            button.addEventListener('click', function() {
                const isGrid = text.includes('Grid');
                const allViewButtons = Array.from(container.querySelectorAll('button')).filter(b => 
                    b.textContent.includes('Grid') || b.textContent.includes('List')
                );
                
                // Update button states
                allViewButtons.forEach(btn => {
                    if ((isGrid && btn.textContent.includes('Grid')) || (!isGrid && btn.textContent.includes('List'))) {
                        btn.classList.add('bg-[#940000]', 'text-white');
                        btn.classList.remove('text-gray-600', 'hover:bg-gray-50', 'border', 'border-gray-300');
                    } else {
                        btn.classList.remove('bg-[#940000]', 'text-white');
                        btn.classList.add('text-gray-600', 'hover:bg-gray-50');
                        if (!btn.classList.contains('border')) {
                            btn.classList.add('border', 'border-gray-300');
                        }
                    }
                });
                
                // Toggle content visibility
                const gridContent = container.querySelector('.grid');
                const listContent = container.querySelector('table, .space-y-4');
                
                if (isGrid) {
                    if (gridContent) gridContent.classList.remove('hidden');
                    if (listContent) listContent.classList.add('hidden');
                } else {
                    if (gridContent) gridContent.classList.add('hidden');
                    if (listContent) listContent.classList.remove('hidden');
                }
            });
        }
    });
    
    // Combined search and filter - Enhanced to work with all inputs
    function setupCombinedFilters() {
        document.querySelectorAll('.bg-white, .bg-gray-50, .rounded-lg').forEach(container => {
            const table = container.querySelector('table');
            if (!table) return;
            
            const tbody = table.querySelector('tbody');
            if (!tbody) return;
            
            const originalRows = Array.from(tbody.querySelectorAll('tr'));
            const searchInput = container.querySelector('input[type="text"]');
            const filterSelects = container.querySelectorAll('select');
            
            if (!searchInput && filterSelects.length === 0) return;
            
            function applyAllFilters() {
                const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';
                
                originalRows.forEach(row => {
                    let matches = true;
                    
                    // Check search term
                    if (searchTerm) {
                        const rowText = row.textContent.toLowerCase();
                        matches = matches && rowText.includes(searchTerm);
                    }
                    
                    // Check all filter dropdowns
                    filterSelects.forEach((select, selectIndex) => {
                        const filterValue = select.value.toLowerCase().trim();
                        if (filterValue && filterValue !== 'all' && filterValue !== '' && filterValue !== 'all status' && filterValue !== 'all departments') {
                            const cells = row.querySelectorAll('td');
                            let filterMatch = false;
                            
                            // Try to match in the corresponding column or any column
                            cells.forEach((cell, cellIndex) => {
                                const cellText = cell.textContent.toLowerCase();
                                const badgeText = cell.querySelector('span[class*="rounded-full"]')?.textContent.toLowerCase() || '';
                                
                                if (cellText.includes(filterValue) || badgeText.includes(filterValue)) {
                                    filterMatch = true;
                                }
                            });
                            
                            matches = matches && filterMatch;
                        }
                    });
                    
                    row.style.display = matches ? '' : 'none';
                });
            }
            
            if (searchInput) {
                searchInput.addEventListener('input', applyAllFilters);
                searchInput.addEventListener('keyup', applyAllFilters);
            }
            
            filterSelects.forEach(select => {
                select.addEventListener('change', applyAllFilters);
            });
        });
    }
    
    // Setup combined filters
    setupCombinedFilters();
});
