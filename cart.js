var deleteButtons = document.getElementsByClassName('delete-btn')
for (var i =0; i < deleteButtons.length;i++) {
  var button = deleteButtons[i]
  button.addEventListener('click', function(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.parentElement.parentElement.remove()
                          
                          }
 }
