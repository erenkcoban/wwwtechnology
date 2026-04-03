const table = document.getElementById("cartTable");

let cart = JSON.parse(localStorage.getItem("cart")) || [];

// TABLE RENDER
cart.forEach((product, index) => {

  const row = document.createElement("tr");

  const subtotal = product.price * product.qty;

  row.innerHTML = `
    <td>${product.title}</td>
    <td>$${product.price}</td>
    <td>
      <input type="number" value="${product.qty}" min="1" data-index="${index}">
    </td>
    <td>$${subtotal.toFixed(2)}</td>
    <td>
      <button class="remove" data-index="${index}">Remove</button>
    </td>
  `;

  table.appendChild(row);
});


//  TOTAL FUNCTION 
function calculateTotal(cart) {
  let total = 0;

  cart.forEach(item => {
    total += item.price * item.qty;
  });

  document.getElementById("total").textContent =
    "Total: $" + total.toFixed(2);
}

calculateTotal(cart);


// REMOVE
document.querySelectorAll(".remove").forEach(btn => {
  btn.addEventListener("click", e => {

    const index = e.target.dataset.index;

    cart.splice(index, 1);

    localStorage.setItem("cart", JSON.stringify(cart));

    location.reload();
  });
});


// UPDATE QUANTITY
document.querySelectorAll("input[type='number']").forEach(input => {
  input.addEventListener("change", e => {

    const index = e.target.dataset.index;

    cart[index].qty = Number(e.target.value);

    localStorage.setItem("cart", JSON.stringify(cart));

    location.reload();
  });
});