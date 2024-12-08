// Sidebar menu functionality
const sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu_bar');
const closeBtn = document.querySelector('#close_btn');
const themeToggler = document.querySelector('.theme-toggler');

// Toggle sidebar menu
menuBtn?.addEventListener('click', () => {
  sideMenu.style.display = "block";
});

closeBtn?.addEventListener('click', () => {
  sideMenu.style.display = "none";
});

// Toggle theme
themeToggler?.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme-variables');
  themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
  themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
});

// Redirect buy buttons
document.querySelectorAll('.buy-btn').forEach(button => {
  button.addEventListener('click', () => {
    window.location.href = 'retailer_address.html';
  });
});



