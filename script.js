let navItems = document.querySelectorAll('.nav-item');

navItems.forEach(navItem => {
  navItem.addEventListener('click', function() {
    navItems.forEach(n => n.classList.remove('active'));
    this.classList.add('active');
  });
})