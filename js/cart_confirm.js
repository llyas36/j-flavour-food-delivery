// cart.js
document.getElementById('confirm-order').addEventListener('click', function () {
    // Get the cart table body
    const cartTableBody = document.querySelector('#cart-content table.cart-table tbody');

    // Create an array to hold the cart data
    const cartData = [];

    // Loop through all rows in the table body
    cartTableBody.querySelectorAll('tr').forEach((row) => {
        const cells = row.querySelectorAll('td');
        cartData.push({
            food: cells[0].innerHTML.trim(), // Food image or icon
            name: cells[1].innerHTML.trim(),
            price: cells[2].innerHTML.trim(),
            qty: cells[3].innerHTML.trim(),
            total: cells[4].innerHTML.trim(),
        });
    });

    // Store the cart data in localStorage
    localStorage.setItem('cartData', JSON.stringify(cartData));

    // Redirect to order.html
    window.location.href = 'order.html';
});
