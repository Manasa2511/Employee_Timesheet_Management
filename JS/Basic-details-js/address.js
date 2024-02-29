// JavaScript functions to show and hide the popup
 function showPopup() {
    document.getElementById('warningPopup').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';
  }

  function hidePopup() {
    document.getElementById('warningPopup').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
  }

  // JavaScript funtion for login page
  function redirectToLogin() {
    window.location.href = "http://127.0.0.1:5500/Html/login.html";
  }