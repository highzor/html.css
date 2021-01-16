var myForm = document.getElementById('ajax-contact-form');
document.getElementById('ajax-contact-form').addEventListener('submit', function(evt) {
  debugger;
  var nameField = document.getElementById("recipient-name");
  var telField = document.getElementById("example-tel-input");
  var emailField = document.getElementById("example-email-input");

  if (!nameField.value) {
    evt.preventDefault();
    nameField.placeholder = 'Пожалуйста, представьтесь';
    nameField.classList.add('is-invalid');
    return false;
  } else if (!telField.value && !emailField.value) {
    evt.preventDefault();
    nameField.classList.remove('is-invalid');
    telField.placeholder = 'Заполните хотя бы одно из полей';
    emailField.placeholder = 'Заполните хотя бы одно из полей';
    telField.classList.add('is-invalid');
    emailField.classList.add('is-invalid');
    return false;
  } else { sendMy(evt); }});

  function sendMy(evt) {
    alert('hi');
    debugger;
    var http = new XMLHttpRequest(), f = document.getElementById('ajax-contact-form');
    var th = $(this);
    evt.preventDefault();
    http.open("POST", "contact.php", true);
    http.onreadystatechange = function() {
      if (http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
        if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поля формы, если в ответе первым словом будет имя отправителя (nameFF)
          th.trigger("reset");
        }
      }
    }
    http.onerror = function() {
      debugger;
      alert('sorry');
    }
    http.send(new FormData(f));
  }
