var body = document.body;

const theme = localStorage.getItem('theme');

if (theme) {
  body.classList.add(theme);
}

document.querySelector('#themeToggle').addEventListener('click', function () {
  if (this.checked) {
    body.classList.replace('dark', 'light');
    localStorage.setItem('theme', 'light');
  } else {
    body.classList.replace('light', 'dark');
    localStorage.setItem('theme', 'dark');
  }
});