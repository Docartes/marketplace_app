document.addEventListener('DOMContentLoaded', () => {
  const cartBtn = document.querySelectorAll(".cart-btn");
  const products = document.querySelectorAll(".title");
  const price = document.querySelectorAll(".price");
  const modalBody = document.querySelector(".modal-body");
  const total = document.querySelector('.total');
  const cartCounter = document.getElementById("cart-counter");
  const checkoutBtn = document.querySelector(".checkout")
  let totalPrice = 0;
  let items = [];
  let count = 0;

  const formatCurrency = (value, locale, currency) => {
  	return new Intl.NumberFormat(locale, { style: 'currency', currency: currency }).format(value);
	};

  const addCart = (title, price) => {
    console.log(`Adding item to cart: ${title} - Rp${price}`);
    modalBody.innerHTML += `
      <div class="d-flex justify-content-between">
        <p>${title}</p>
        <p>Rp${price}</p>
      </div>
    `;
    
    // Update the total price
    total.innerHTML = `Total: Rp${totalPrice.toLocaleString()}`;
  };

  const checkout = () => {
  	const currency = formatCurrency(totalPrice, "id-ID", "IDR");
  	const data = items.map((elem, index) => {return `${index + 1}. ${elem.title} - ${formatCurrency(elem.price, "id-ID", "IDR")} %0D%0A `})
  	window.open(`https://wa.me/YOUR_NUMBER?text=${data} %0D%0A Total: ${currency}`, "_blank").focus()
  };

  checkoutBtn.addEventListener("click", () => {
  	checkout()
  })

  for (let i = 0; i < cartBtn.length; i++) {
    cartBtn[i].addEventListener("click", () => {
      count++;
      cartCounter.innerHTML = count;
      const itemPrice = Number(price[i].innerText.replace(/[Price:\sRp.,]/g, ''));
      const item = {
        "price": itemPrice,
        "title": products[i].innerText
      };
      items.push(item);
      totalPrice += item.price;
      addCart(item.title, item.price);
      console.log(`Total Price: Rp${totalPrice.toLocaleString()}`);
    });
  }
});
