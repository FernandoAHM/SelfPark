function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// XCerrar el menu si el usuario hace click afuera de el
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}