function addform() {
    document.getElementById("addPopup").style.display="block";
  }
function closeForm() {
    document.getElementById("addPopup").style.display= "none";
   
  }
window.onclick = function(event) {
    var modal = document.getElementById('addPopup');

    if (event.target == modal) {
      closeForm();
    }
  }