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


  // Function to display logout confirmation popup
  function showLogoutConfirmation() {
      document.querySelector('.logout-overlay').style.display = 'block';
      document.getElementById('logoutConfirmation').style.display = 'block';
  }

  // Function to hide logout confirmation popup
  function hideLogoutConfirmation() {
      document.querySelector('.logout-overlay').style.display = 'none';
      document.getElementById('logoutConfirmation').style.display = 'none';
  }

  // Function to perform logout action
  function logout() {
      // Perform logout action here, such as redirecting to logout page
      alert('You have been logged out');
  }