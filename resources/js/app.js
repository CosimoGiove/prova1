import './bootstrap';
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'
import.meta.glob([
    '../img/**'
])
const checkbox = document.getElementById('myCheckbox');
  const div = document.getElementById('myDiv');

  checkbox.addEventListener('click', function() {
    if (checkbox.checked) {
      div.classList.add('pizzeriafinita');
    } else {
      div.classList.remove('pizzeriafinita');
    }
  });
