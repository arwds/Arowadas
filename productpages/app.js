const checkoutstart = document.querySelector(".checkoutButton");
const modal = document.querySelector(".paymentPopup");
const checkoutend = document.querySelector(".close");

checkoutstart.addEventListener("click", ()=>{
    modal.style.display="flex";
})

checkoutend.addEventListener("click", ()=>{
    modal.style.display="none";
})