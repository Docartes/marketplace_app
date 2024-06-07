// const cartBtn = document.qu("cart-btn");
// const cart = document.getElementById("cart");
const modalBody = document.querySelector(".modal-body");
const cartCounter = document.getElementById("cart-counter");
let count = 0

const counter = () => {
	count += 1;
	cartCounter.innerHTML = count;
}

// cartBtn.addEventListener("click", () => {
// 	count += 1
// 	cartCounter.innerHTML = count
// })