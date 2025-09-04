document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
  toggle.addEventListener('click', function(e) {
    e.preventDefault();

    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      if (menu !== this.nextElementSibling) {
        menu.style.display = 'none';
      }
    });

    const menu = this.nextElementSibling;
    menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
  });
});

document.addEventListener('click', function(e) {
  if (!e.target.closest('.dropdown')) {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      menu.style.display = 'none';
    });
  }
});
