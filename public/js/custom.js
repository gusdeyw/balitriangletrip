const navbar = document.getElementById('navbar')
const navbarLinks = document.querySelectorAll('.navbar-link')
window.onscroll = () => {
  console.log(navbarLinks, 'navbar');
  if (Math.ceil(window.scrollY) > 0) {
    navbar.classList.add('bg-white')
    navbarLinks.forEach(element => {
      element.classList.remove('text-white')
      element.classList.add('text-[#283325]')
    });
    // navbar.classList.remove('bg-black/20')
  } else {
    navbar.classList.remove('bg-white')
    navbarLinks.forEach(element => {
      element.classList.remove('text-[#283325]')
      element.classList.add('text-white')
    });
    // navbar.classList.add('bg-black/20')
  }
}