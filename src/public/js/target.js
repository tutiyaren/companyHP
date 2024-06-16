
document.addEventListener('DOMContentLoaded', function () {
  const menuItems = document.querySelectorAll('.header-menu__li');

  menuItems.forEach((item) => {
    item.addEventListener('click', function (event) {
      event.preventDefault();
      const targetId = this.id;
      const targetElement = document.querySelector(`.${targetId}`);

      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth',
        });
      }
    });
  });
});
