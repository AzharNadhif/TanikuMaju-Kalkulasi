
    document.addEventListener('DOMContentLoaded', function() {
        function checkScreenWidth() {
            const navbarNav = document.getElementById('navbarNav');
            // Check if screen width is below 991px
            if (window.innerWidth < 991) {
                // Create new list item for Profile
                if (!document.getElementById('profile-link')) { // Check if the link already exists
                    const li = document.createElement('li');
                    li.classList.add('nav-item');
                    li.innerHTML = `<a class="nav-link" href="/profil" id="profile-link">Profile</a>`;
                    navbarNav.querySelector('.navbar-nav').appendChild(li);
                }
            } else {
                // Remove the Profile link if screen width is 991px or above
                const profileLink = document.getElementById('profile-link');
                if (profileLink) {
                    profileLink.parentNode.removeChild(profileLink);
                }
            }
        }

        // Call the function initially to check screen size
        checkScreenWidth();

        // Add event listener to check screen size on window resize
        window.addEventListener('resize', checkScreenWidth);
    });

