document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');
  
    form.addEventListener('submit', function (event) {
      var name = document.querySelector('input[name="name"]').value;
      var email = document.querySelector('input[name="email"]').value;
      var password = document.querySelector('input[name="password"]').value;
      var cpassword = document.querySelector('input[name="cpassword"]').value;
  
      if (name.trim() === '') {
        alert('Name cannot be empty!');
        event.preventDefault();
      } else if (
        email.trim() === '' ||
        password.trim() === '' ||
        cpassword.trim() === ''
      ) {
        alert('All fields must be filled out!');
        event.preventDefault();
      }
    });
  
    var inputs = document.querySelectorAll('input');
  
    inputs.forEach(function (input) {
      input.addEventListener('blur', function () {
        if (this.value.trim() === '') {
          var fieldName = this.name.charAt(0).toUpperCase() + this.name.slice(1);
          alert(fieldName + ' cannot be empty!');
        }
      });
    });
  });