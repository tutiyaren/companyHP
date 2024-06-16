
document.addEventListener('DOMContentLoaded', function () {
  const pageTop = document.getElementById('page-top');
  const scrollThreshold = 100;

  window.addEventListener('scroll', function () {
    if (window.scrollY > scrollThreshold) {
      pageTop.style.display = 'flex';
      return;
    }
    pageTop.style.display = 'none';
  });

  pageTop.addEventListener('click', function (event) {
    event.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
});

