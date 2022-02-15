const body = document.body;
const themeToggle = document.getElementById('themeToggle')
const accountUl = document.getElementById('account')
const settingsUl = document.getElementById('settings')
const notivicationUl = document.getElementById('notivication')

let theme = localStorage.getItem('theme');

if (theme) {
  body.classList.add(theme);
} else {
  body.classList.add('dark');
}

themeToggle.addEventListener('click', function () {
  if (this.checked) {
    body.classList.replace('dark', 'light');
    localStorage.setItem('theme', 'light');
  } else {
    body.classList.replace('light', 'dark');
    localStorage.setItem('theme', 'dark');
  }
});

function CloseAll() {
  accountUl.classList.remove('active');
  settingsUl.classList.remove('active');
  notivicationUl.classList.remove('active');
}

function OpenSettings() {
  settingsUl.classList.toggle('active');
  CloseAll();
}

function OpenAcount() {
  accountUl.classList.toggle('active');
  CloseAll();
}

function OpenNotivication() {
  notivicationUl.classList.toggle('active');
  CloseAll();
}