function togglePopup(){
  let popup = document.getElementById("popup-1");
  if(popup){
    popup.classList.toggle("active");
    if(!popup.classList.contains("active")){
      popup.parentElement.removeChild(popup);
    }
  }
}
