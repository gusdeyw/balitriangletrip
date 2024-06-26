const navbar = document.getElementById('navbar')
const navbarLinks = document.querySelectorAll('.navbar-link')
const navbarMenuMob = document.getElementById('navbar-menu-mob')
const sideNavbar = document.getElementById('side-navbar')
const sidebarMob = document.getElementById('sidebar-mob')
const showSideMob = document.getElementById('show-side-mob')
const closeSideNavbar = document.getElementById('close-side-navbar')
const sideNavbarMobContent = document.getElementById('side-navbar-mob-content')

if (Math.ceil(window.scrollY) > 0) {
  navbar.classList.add('bg-white')
  navbarLinks.forEach(element => {
    element.classList.remove('text-white')
    element.classList.add('text-[#283325]')
  });
  navbarMenuMob.classList.remove('text-white')
  navbarMenuMob.classList.add('text-[#283325]')
}

window.onscroll = () => {
  if (Math.ceil(window.scrollY) > 0) {
    navbar.classList.add('bg-white')
    navbarLinks.forEach(element => {
      element.classList.remove('text-white')
      element.classList.add('text-[#283325]')
    });
    navbarMenuMob.classList.remove('text-white')
    navbarMenuMob.classList.add('text-[#283325]')
    // show sidebar button
    showSideMob.classList.remove('hidden')
  } else {
    navbar.classList.remove('bg-white')
    navbarLinks.forEach(element => {
      element.classList.remove('text-[#283325]')
      element.classList.add('text-white')
    });
    navbarMenuMob.classList.remove('text-[#283325]')
    navbarMenuMob.classList.add('text-white')
    // show sidebar button
    showSideMob.classList.add('hidden')
  }

  if (sidebarMob.style.width == '60%') {
    sidebarMob.style.width = '0'
    sidebarMob.style.paddingLeft = '0'
    sidebarMob.style.paddingRight = '0'
  }
}

window.addEventListener('click', (event) => {
  if (navbarMenuMob.contains(event.target)) {
    sideNavbar.style.width = '100%'
  } else if (closeSideNavbar.contains(event.target)) {
    sideNavbar.style.width = '0'
  } else if (showSideMob.contains(event.target)) {
    sidebarMob.style.width = '60%'
  } else if (!sidebarMob.contains(event.target)) {
    sidebarMob.style.width = '0'
    sidebarMob.style.paddingLeft = '0'
    sidebarMob.style.paddingRight = '0'
  }
})
//