var deleteButtons = document.getElementsByClassName('delete-btn')
for (var i =0; i < deleteButtons.length;i++) {
  var button = deleteButtons[i]
  button.addEventListener('click', function(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.parentElement.parentElement.remove()
        updateCartTotal() 
  })
}
 function updateCartTotal() {
         var cartItems = document.getElementsByClassName('cart')[0]
         var cartRows = cartItems.getElementsByClassName('cart1')
         var totalPrice = 0
         for(var i=0; i < cartRows.length;i++) {
           var cartRow = cartRows[i]
           var priceElement = cartRow.getElementsByClassName('price')[0]
           var quantityElement = cartRow.getElementsByClassName('quantity')[0]
           var price = parseFloat(priceElement.innerText.replace('$', ''))
           var quantity = quantityElement.value
           totalPrice = totalPrice + (price * quantity)
           
           
                  }
   document.getElementsByClassName('total-price')[0].innerText ='$'+ totalPrice
 }
         
      
