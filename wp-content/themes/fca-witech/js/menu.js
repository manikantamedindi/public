function toggleMenu() {
  $('#menu-toggle').on('click', function(e) {
    e.preventDefault();
    $('#menu').toggleClass('header__navigation--active');
  });
}
