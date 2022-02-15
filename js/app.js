const body = document.body;
const themeToggle = document.getElementById('themeToggle')
const accountUl = document.getElementById('account')
const settingsUl = document.getElementById('settings')
const notivicationUl = document.getElementById('notivication')

const theme = localStorage.getItem('SaveTheme');

if (theme) {
  body.classList.add(theme);
} else {
  body.classList.add('dark');
}

themeToggle.addEventListener('click', function () {
  if (this.checked) {
    body.classList.replace('dark', 'light');
    localStorage.setItem('SaveTheme', 'light');
  } else {
    body.classList.replace('light', 'dark');
    localStorage.setItem('SaveTheme', 'dark');
  }
});

function OpenSettings() {
  accountUl.classList.remove('active');
  notivicationUl.classList.remove('active');
  settingsUl.classList.toggle('active');
}

function OpenAcount() {
  settingsUl.classList.remove('active');
  notivicationUl.classList.remove('active');
  accountUl.classList.toggle('active');
}

function OpenNotivication() {
  accountUl.classList.remove('active');
  settingsUl.classList.remove('active');
  notivicationUl.classList.toggle('active');
}