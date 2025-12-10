$(document).ready(function() {
  $('#registrationForm').on('submit', function(e) {
    let name = $('#name').val();
    let email = $('#email').val();

    if (name === "" || email === "") {
      alert("Please fill all fields!");
      e.preventDefault();
    } else {
      alert("Form submitted successfully!");
    }
  });
});
