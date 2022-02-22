const body = document.body
const themeToggle = document.getElementById('themeToggle')
const animationToggle = document.getElementById('animationToggle')
const accountUl = document.getElementById('account')
const settingsUl = document.getElementById('settings')
const notivicationUl = document.getElementById('notivication')

var theme = localStorage.getItem('SaveTheme')
var animation = localStorage.getItem('SaveAniation')

if (theme) {
  body.classList.add(theme);
} else {
  body.classList.add('dark');
  localStorage.setItem('SaveTheme', 'dark')
}

if (animation) {
  body.classList.add(animation);
} else {
  body.classList.add('animationON');
  localStorage.setItem('SaveAniation', 'animationON')
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

animationToggle.addEventListener('click', function () {
  if (this.checked) {
    body.classList.replace('animationOFF', 'animationON');
    localStorage.setItem('SaveAniation', 'animationON');
  } else {
    body.classList.replace('animationON', 'animationOFF');
    localStorage.setItem('SaveAniation', 'animationOFF');
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