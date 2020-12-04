(function() {
    const form = document.querySelector('#sectionForm');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();
// function myFunction() {
  
//  document.getElementById("evdisable").style.display="block";
  
//   document.getElementById("evdisable").style.display="block";
//   document.getElementById("check1").enabled = true;
  

// //   function myFunction1(item) {
// // prompt(item);
// // }
// }
// function valthisform(){


// var checkboxes = document.querySelectorAll('input[type="checkbox"]');
//  var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
//  if (checkedOne=true)
//  {

//  }
//  else{
//    alert('choose time slot');
//  }
// }