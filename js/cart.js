document.addEventListener("DOMContentLoaded", () => {
    const cartTableBody = document.querySelector(".cart-table tbody");
    const cartBadge = document.querySelector(".badge");
    const cartTotal = document.getElementById("cart-total");

    let cartItems = [];
    let cartCount = 0;

    // Add "Add To Cart" button event listeners
    document.querySelectorAll(".btn-primary").forEach((button, index) => {
        button.addEventListener("click", (event) => {
            event.preventDefault();

            // Get food details
            const foodBox = button.closest(".food-menu-box");
            const foodName = foodBox.querySelector("h4").textContent;
            const foodPrice = parseFloat(foodBox.querySelector(".food-price").textContent.replace("$", ""));
            const foodQty = parseInt(foodBox.querySelector('input[type="number"]').value);
            const foodImg = foodBox.querySelector("img").src;

            // Check if the item is already in the cart
            const existingItemIndex = cartItems.findIndex(item => item.name === foodName);
            if (existingItemIndex !== -1) {
                // Update the quantity and total of the existing item
                cartItems[existingItemIndex].qty += foodQty;
                cartItems[existingItemIndex].total = cartItems[existingItemIndex].qty * cartItems[existingItemIndex].price;
            } else {
                // Add a new item to the cart
                const newItem = {
                    name: foodName,
                    price: foodPrice,
                    qty: foodQty,
                    total: foodPrice * foodQty,
                    img: foodImg,
                };
                cartItems.push(newItem);
            }

            // Update the cart table and totals
            updateCartTable();
            updateCartBadge();
        });
    });

    // Update cart table
    function updateCartTable() {
        // Clear the table body
        cartTableBody.innerHTML = "";

        // Add each item to the table
        cartItems.forEach((item, index) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td><img src="${item.img}" alt="${item.name}" class="img-responsive" width="50"></td>
                <td>${item.name}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td>${item.qty}</td>
                <td>$${item.total.toFixed(2)}</td>
                <td><a href="#" class="btn-delete" data-index="${index}">&times;</a></td>
            `;
            cartTableBody.appendChild(row);
        });

        // Add delete functionality
        addDeleteHandlers();

        // Update the cart total
        const total = cartItems.reduce((sum, item) => sum + item.total, 0);
        cartTotal.textContent = `$${total.toFixed(2)}`;
    }

    // Update the cart badge
    function updateCartBadge() {
        cartCount = cartItems.reduce((sum, item) => sum + item.qty, 0);
        cartBadge.textContent = cartCount;
    }

    // Add delete functionality
    function addDeleteHandlers() {
        document.querySelectorAll(".btn-delete").forEach(button => {
            button.addEventListener("click", (event) => {
                event.preventDefault();

                // Get the item index
                const itemIndex = parseInt(button.getAttribute("data-index"));

                // Remove the item from the cart
                cartItems.splice(itemIndex, 1);

                // Update the cart table and totals
                updateCartTable();
                updateCartBadge();
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const cartButton = document.getElementById("shopping-cart");
    const cartContent = document.getElementById("cart-content");

    // Initially hide the cart content
    cartContent.style.display = "none";

    // Toggle cart visibility when cart button is clicked
    cartButton.addEventListener("click", (event) => {
        event.preventDefault();
        if (cartContent.style.display === "none") {
            cartContent.style.display = "block"; // Show the cart
        } else {
            cartContent.style.display = "none"; // Hide the cart
        }
    });

    // Optional: Add close functionality (if needed)
    const confirmOrderButton = document.getElementById("confirm-order");
    confirmOrderButton.addEventListener("click", (event) => {
        alert("Order Confirmed!");
        cartContent.style.display = "none"; // Hide the cart after confirmation
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const confirmOrderButton = document.getElementById("confirm-order");

    confirmOrderButton.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent any default behavior of the button
        window.location.href = "order.php"; // Redirect to Foods.php
    });
});





document.addEventListener("DOMContentLoaded", function () {
    const cart = [];

    // Add to Cart button logic
    document.querySelectorAll(".food-menu-box form").forEach((form) => {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const foodName = this.querySelector("h4").textContent.trim();
            const price = parseFloat(this.querySelector(".food-price").textContent.replace("$", ""));
            const qty = parseInt(this.querySelector("input[type='number']").value);

            // Add item to cart
            cart.push({ name: foodName, price, qty });

            alert(`${foodName} added to the cart`);
        });
    });

    // Confirm Order button logic
    const confirmOrderButton = document.getElementById("confirm-order");
    if (confirmOrderButton) {
        confirmOrderButton.addEventListener("click", function () {
            // Send cart to backend using fetch
            fetch("add_to_cart.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ cart }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        window.location.href = "order.php"; // Redirect to order page
                    } else {
                        alert("Failed to confirm order.");
                    }
                });
        });
    }
});




console.log("Cart.js loaded successfully.");
console.log("...............................");
console.log("...............................");
console.log("...............................");