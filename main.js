/** 
 * File: main.js
 * Author: Yash Balotiya
 * Description: This file is the main file of the project. It is the entry point of the project. It is initlizing the the required logical stuffs on startup.
 * Created on: 23/03/2025
 * Last Modified: 02/05/2025
*/

window.onload = () => {
    // Navbar Initialization for index page
    document.querySelector('#meta-tab-icon').href = './assets/images/sai-logo.png';
    document.querySelector('#meta-og-image').href = './assets/images/sai-logo.png';

    // document.querySelector('#navbar-style').href = './shared/navbar/navbar.css';
    // document.querySelector('#navbar-responsive-style').href = './shared/navbar/responsive.css';
    // document.querySelector('#footer-style').href = './shared/footer/footer.css';

    // document.querySelector('#logoHref').href = './';
    // document.querySelector('#navbar-logo').src = './assets/images/Banner.png';

    // document.querySelector('.nav-link1').href = 
    // document.querySelector('.nav-link14').href = './pages/donate';
    // document.querySelector('.nav-link2').href = 
    // document.querySelector('.nav-link15').href =  './';
    // document.querySelector('.nav-link3').href = 
    // document.querySelector('.nav-link16').href = './pages/about';
    // document.querySelector('.nav-link4').href = 
    // document.querySelector('.nav-link17').href = './pages/certificates';
    // document.querySelector('.nav-link5').href = 
    // document.querySelector('.nav-link18').href = './pages/events/index.php?category=Upcoming';
    // document.querySelector('.nav-link6').href = 
    // document.querySelector('.nav-link19').href = './pages/events/index.php?category=Current';
    // document.querySelector('.nav-link7').href = 
    // document.querySelector('.nav-link20').href = './pages/events/index.php?category=Past';
    // document.querySelector('.nav-link8').href = 
    // document.querySelector('.nav-link21').href = './pages/news';
    // document.querySelector('.nav-link9').href = 
    // document.querySelector('.nav-link22').href = './pages/projects/past.php';
    // document.querySelector('.nav-link10').href = 
    // document.querySelector('.nav-link23').href = './pages/projects/current.php';
    // document.querySelector('.nav-link11').href = 
    // document.querySelector('.nav-link24').href = './pages/cancer-aids';
    // document.querySelector('.nav-link12').href = 
    // document.querySelector('.nav-link25').href = './pages/other-projects';
    // document.querySelector('.nav-link13').href = 
    // document.querySelector('.nav-link26').href = './pages/contact';

    // Footer Initialization for index page
    document.querySelector('.foot-link2').href = './';
    document.querySelector('.foot-link3').href = './pages/about';
    document.querySelector('.foot-link4').href = './pages/certificates';
    document.querySelector('.foot-link5').href = './pages/events/index.php?category=Upcoming';
    document.querySelector('.foot-link6').href = './pages/events/index.php?category=Current';
    document.querySelector('.foot-link7').href = './pages/events/index.php?category=Past';
    document.querySelector('.foot-link8').href = './pages/news';
    document.querySelector('.foot-link9').href = './pages/projects/past.php';
    document.querySelector('.foot-link10').href = './pages/projects/current.php';
    document.querySelector('.foot-link11').href = './pages/cancer-aids';
    document.querySelector('.foot-link12').href = './pages/other-projects';
    document.querySelector('.foot-link13').href = './pages/contact';
    document.querySelector('.footerDonateBtn').addEventListener('click', () => {
        redirectTo('./pages/donate');
    });
}

function showSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}

function redirectTo(url) {
    window.location.href = url;
}