function isLoggedIn() {
  return sessionStorage.getItem('loggedin') === 'true';
}

function updateNavigation() {
  const loginLink = document.getElementById('a[href="Login.html"]');
  const registerLink = document.getElementById('a[href="Register.html"]');
  const logoutLink = document.getElementById('logout-link');

  if (isLoggedIn()) {
    loginLink.style.display = 'none';
    registerLink.style.display = 'none';
    logoutLink.style.display = 'inline';
  } else {
    loginLink.style.display = 'inline';
    registerLink.style.display = 'inline';
    logoutLink.style.display = 'none';
  }
}

window.onload = function() {
  updateNavigation();
};

const loginForm = document.getElementById('login-form');
loginForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  const data = {
    username: username,
    password: password
  };

  fetch('LoginPhp.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.location.href = 'Homepage.html';
    } else {
      alert(data.message);
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
});

/*pricing plan script */
document.getElementById("select-plan1").addEventListener("click", function()
{
window.location.href = "Login.html";
});
document.getElementById("select-plan2").addEventListener("click", function()
{
window.location.href = "Login.html";
});
document.getElementById("select-plan3").addEventListener("click", function()
{
window.location.href = "Login.html";
});

function showMessagex(){
  alert("Login or Register to get a Plan")
}
function showMessagey(){
  alert("Login or Register to get a Plan")
}
function showMessagez(){
  alert("Login or Register to get a Plan")
}