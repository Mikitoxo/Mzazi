document.addEventListener("DOMContentLoaded", () => {
    const basketList = document.getElementById("basket-list");
    const subtotalElement = document.getElementById("subtotal");
    const taxElement = document.getElementById("tax");
    const totalElement = document.getElementById("total");
    const basketCountElement = document.getElementById("basket-count");
    const TAX_RATE = 0.16;
  
    let basket = [];
  
    // Update basket UI and calculations
    function updateBasket() {
      basketList.innerHTML = "";
      let subtotal = 0;
  
      basket.forEach((item) => {
        const listItem = document.createElement("li");
        listItem.textContent = `${item.service} - Ksh ${item.price} x ${item.quantity}`;
        basketList.appendChild(listItem);
        subtotal += item.price * item.quantity;
      });
  
      const tax = subtotal * TAX_RATE;
      const total = subtotal + tax;
  
      subtotalElement.textContent = `Ksh ${subtotal.toFixed(2)}`;
      taxElement.textContent = `Ksh ${tax.toFixed(2)}`;
      totalElement.textContent = `Ksh ${total.toFixed(2)}`;
      basketCountElement.textContent = basket.reduce((count, item) => count + item.quantity, 0);
    }
  
    // Add item to the basket
    function addToBasket(service, price) {
      const existingItem = basket.find((item) => item.service === service);
      if (existingItem) {
        existingItem.quantity += 1;
      } else {
        basket.push({ service, price, quantity: 1 });
      }
      updateBasket();
    }
  
    // Handle service selection
    document.querySelectorAll(".select-button").forEach((button) => {
      button.addEventListener("click", () => {
        const service = button.getAttribute("data-service");
        const price = parseFloat(button.getAttribute("data-price"));
        console.log(`Adding: ${service} at Ksh ${price}`);
        addToBasket(service, price);
      });
    });
  
    // Payment button action
    document.querySelector(".payment-button").addEventListener("click", () => {
      if (basket.length === 0) {
        alert("Your basket is empty!");
        return;
      }
      alert(`Order placed! Total: ${totalElement.textContent}`);
      basket = []; // Clear basket after payment
      updateBasket();
    });
  });
  
