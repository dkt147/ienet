$.ajax({
    url: 'Controllers/remove-from-cart.php?id='+productId,
    method: 'GET',
    success: function (response) {
        // Parse the current value of the cart counter
        var counter = $('.cartCounter').text();
        counter = counter[0];
        console.log("Current counter:", counter[0]);  // Log the current counter value
        
        // If the parsed value is a valid number, increment it
        if (!isNaN(counter)) {
            counter = parseInt(counter) + 1;  // Increment the counter value
            $('.cartCounter').text(counter);  // Replace the existing value with the updated counter
        } else {
            $('.cartCounter').text(1); // If the value wasn't valid, reset it to 1
            counter = 1;  // Set the counter variable to 1
        }
        
        console.log("Updated counter:", counter);  // Log the updated counter value
        

        
        const res = JSON.parse(response);
        
            if (res.status === 'success') {
                // alert('Product added to cart!');

            } else {
                alert(res.message || 'Something went wrong.');
            }
    }
});