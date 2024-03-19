const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



var constraints = {
    email: {
      presence: { allowEmpty: false },
      email: true
    },
    password: {
      presence: { allowEmpty: false },
      length: {
        minimum: 6,
        maximum: 128
      }
    },
    name: {
      presence: { allowEmpty: false },
      length: {
        minimum: 2,
        maximum: 128
      }
    }
  };
  
  // Get the forms
  var signUpForm = document.querySelector('.sign-up-container form');
  var signInForm = document.querySelector('.sign-in-container form');
  
  // Add event listeners
  signUpForm.addEventListener('submit', validateForm);
  signInForm.addEventListener('submit', validateForm);
  function validateForm(event) {
    event.preventDefault();
  
    var errors = validate(event.target, constraints);
  
    // Clear any old errors
    event.target.querySelectorAll('.error').forEach(function (el) {
      el.parentNode.removeChild(el);
    });
  
    if (errors) {
      // Display the errors
      Object.keys(errors).forEach(function (key) {
        var error = document.createElement('div');
        error.className = 'error';
        error.style.color = 'red';
        error.style.fontSize = '12px';
        error.textContent = errors[key].join(', ');
  
        var input = event.target.querySelector('input[name="' + key + '"]');
        input.parentNode.insertBefore(error, input.nextSibling);
      });
    } else {
      // Form is valid, you can submit it
    }
  }