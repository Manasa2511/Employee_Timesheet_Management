function calculateTotal() {
    var basicSalary = parseFloat(document.getElementById('basicSalary').value);
    var bonus = parseFloat(document.getElementById('bonus').value);
    var taxes = parseFloat(document.getElementById('taxes').value);
    var insurance = parseFloat(document.getElementById('insurance').value);

    var totalEarnings = basicSalary + bonus;
    var totalDeductions = taxes + insurance;
    var netSalary = totalEarnings - totalDeductions;

    document.getElementById('totalSalary').innerText = netSalary.toFixed(2);
}
 // JavaScript functions to show and hide the popup
 function showPopup() {
    document.getElementById('warningPopup').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';
  }

  function hidePopup() {
    document.getElementById('warningPopup').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
  }