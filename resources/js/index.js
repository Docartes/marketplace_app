document.addEventListener('DOMContentLoaded', () => {
  const searchBtn = document.querySelector(".search");
  const searchInput = document.querySelector(".search-input");
  const cartBtn = document.querySelectorAll(".cart-btn");
  const cards = document.querySelectorAll(".card");
  const products = document.querySelectorAll(".title")
  const price = document.querySelectorAll(".price");
  const modalBody = document.querySelector(".modal-body");
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
        <p>${price}</p>
      </div>
    `;
  };

  searchInput.addEventListener("input", (e) => {
    const value = e.target.value.toLowerCase();

    for ( let i = 0; i < cards.length; i++ ) {
      let data = cards[i].childNodes[1].childNodes[3].childNodes[1].childNodes[1].innerText.toLowerCase();
      if (data.includes(value) !== true) {
        cards[i].classList.add("d-none")
      } else {
        cards[i].classList.remove("d-none")
      }
    }
  }); 



  const checkout = () => {
  	const currency = formatCurrency(totalPrice, "id-ID", "IDR");
  	const data = items.map((elem, index) => {return `${index + 1}. ${elem.title} - ${formatCurrency(elem.price, "id-ID", "IDR")}`})
  	window.open(`https://wa.me/YOUR_NUMBER?text=${data}%0D%0ATotal: ${currency}`, "_blank").focus()
  };

  checkoutBtn.addEventListener("click", () => {
  	checkout();
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
      addCart(item.title, formatCurrency(item.price, "id-ID", "IDR"));
    });
  }
});
