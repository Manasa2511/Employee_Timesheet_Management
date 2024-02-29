// JavaScript functions to show and hide the popup
 function showPopup() {
    document.getElementById('warningPopup').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';
  }

  function hidePopup() {
    document.getElementById('warningPopup').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
  }