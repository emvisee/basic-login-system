let pages = ['home-button', 'profile-button', 'signup-button', 'login-button'];
let i;
if (window.location.pathname.includes('index.php')) i = 0;
else if (window.location.pathname.includes('profile.php')) i = 1;
else if (window.location.pathname.includes('signup.php')) i = 2;
else if (window.location.pathname.includes('login.php')) i = 3;

if (document.getElementsByClassName('active-page').length != 0) {
    document.getElementsByClassName('active-page')[0].classList.remove('active-page');
}

document.getElementById(pages[i]).classList.add('active-page');