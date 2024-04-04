// JavaScript for cart functionality
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCartClicked);
    });

    function addToCartClicked(event) {
        const button = event.target;
        const product = button.parentElement.parentElement;
        const productName = product.querySelector('.product-name').innerText;
        const productPrice = product.querySelector('.product-price').innerText;
        addToCart(productName, productPrice);
    }

    function addToCart(productName, productPrice) {
        alert(`Added ${productName} to cart for ${productPrice}`);
    }
});
