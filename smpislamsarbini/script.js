// Efek header saat scroll
window.addEventListener('scroll', function () {
  const header = document.getElementById('navbar');
  if (window.scrollY > 50) {
    header.style.background = 'rgba(26, 58, 58, 1)';
  } else {
    header.style.background = 'rgba(26, 58, 58, 0.95)';
  }
});