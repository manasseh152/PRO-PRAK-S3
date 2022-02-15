const body = document.body;
const accountUl = document.getElementById('account')
const settingsUl = document.getElementById('settings')
const themeToggle = document.getElementById('themeToggle')
const notivication = document.getElementById('notivication')

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

notivication.addEventListener('click', function () {
  if (this.click) {
    accountUl.classList.remove('active');
    settingsUl.classList.remove('active');
  }
});

function OpenSettings() {
  accountUl.classList.remove('active');
  settingsUl.classList.toggle('active');
}


function OpenAcount() {
  accountUl.classList.toggle('active');
  settingsUl.classList.remove('active');
}