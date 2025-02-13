// order.js
document.addEventListener('DOMContentLoaded', function () {
    // Get the cart data from localStorage
    const cartData = JSON.parse(localStorage.getItem('cartData'));

    // Check if there's any data
    if (cartData && cartData.length > 0) {
        const cartTableBody = document.querySelector('.tbl-full tbody');
        let totalAmount = 0;

        // Loop through the cart data and append rows to the table
        cartData.forEach((item) => {
            const row = document.createElement('tr');

            row.innerHTML = `
                <td>${item.food}</td>
                <td>${item.name}</td>
                <td>${item.price}</td>
                <td>${item.qty}</td>
                <td>${item.total}</td>
                <td><button class="remove-item">Remove</button></td>
            `;

            cartTableBody.appendChild(row);

            // Add to the total amount
            totalAmount += parseFloat(item.total.replace('$', ''));
        });

        // Update the total in the footer
        document.querySelector('.tbl-full tfoot td:nth-child(2)').innerText = `$${totalAmount.toFixed(2)}`;
    }
});

// Optional: Clear localStorage on form submission
document.querySelector('.form').addEventListener('submit', function () {
    localStorage.removeItem('cartData');
});
