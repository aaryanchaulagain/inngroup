
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <a href="/">INN<span>GROUP</span></a>
            </div>

            <div class="nav-content" id="navContent">
                <ul class="nav-links">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>

                <div class="search-container">
                    <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" placeholder="Search services...">
                </div>
            </div>

            <div class="nav-right">
                <a href="{{ route('admin.login') }}" class="btn-login">Client Login</a>
                <button class="mobile-toggle" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>



