const params = new URLSearchParams(window.location.search);
const productId = params.get("id");

const url = `https://fakestoreapi.com/products/${productId}`;

fetch(url)
  .then(res => res.json())
  .then(product => {

    const div = document.getElementById("productDetails");

    div.innerHTML = `
      <h2>${product.title}</h2>
      <img src="${product.image}" width="200">
      <p>${product.description}</p>
      <p><strong>$${product.price}</strong></p>
    `;

    // ADD TO CART
    document.getElementById("addToCartBtn").addEventListener("click", () => {

      const qty = Number(document.getElementById("quantity").value);

      let cart = JSON.parse(localStorage.getItem("cart")) || [];

      const item = {
        id: product.id,
        title: product.title,
        price: product.price,
        qty: qty
      };

      cart.push(item);

      localStorage.setItem("cart", JSON.stringify(cart));

      alert("Product added to cart!");
    });

  });