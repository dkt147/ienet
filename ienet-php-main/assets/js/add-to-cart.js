// cart.js

export function bindAddToCart(selector = '.add-to-cart-btn', callback = null, itemsPerPage = 6) {

    $(document).ready(function () {
        $(document).on('click', `${selector}`, function (e) {
            e.preventDefault();
            var btn = $(this)
            const productId = $(this).data('id');
            // alert(productId)
            $.ajax({
                url: 'Controllers/add-to-cart.php?id=' + productId,
                method: 'GET',
                success: function (response) {
                    var data = JSON.parse(response)
                    // Parse the current value of the cart counter
                    var counter = $('.cartCounter').text(data.count || 0);
                    btn.html("<span>Already Added <span class='ienet-btn__icon'><i class='icon-cart'></i></span></span>");

                    // counter = counter[0];
                    // console.log("Current counter:", counter[0]);  // Log the current counter value

                    // If the parsed value is a valid number, increment it
                    // if (!isNaN(counter)) {
                    //     counter = parseInt(counter) + 1;  // Increment the counter value
                    //     $('.cartCounter').text(counter);  // Replace the existing value with the updated counter
                    // } else {
                    //     $('.cartCounter').text(1); // If the value wasn't valid, reset it to 1
                    //     counter = 1;  // Set the counter variable to 1
                    // }

                    console.log("Updated counter:", counter);  // Log the updated counter value



                    const res = JSON.parse(response);

                    if (res.status === 'success') {
                        // alert('Product added to cart!');

                    } else {
                        alert(res.message || 'Something went wrong.');
                    }
                }
            });
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
        fetch('./assets/js/product.json')
            .then(response => response.json())
            .then(products => {
                const container = document.getElementById('product-list');
                const pagination = document.getElementById('pagination');
                const totalPages = Math.ceil(products.length / itemsPerPage);

                let currentPage = 1;

                const renderProducts = (page) => {
                    container.innerHTML = '';
                    const start = (page - 1) * itemsPerPage;
                    const end = start + itemsPerPage;
                    const pageItems = products.slice(start, end);
                    const savedCart = JSON.parse(localStorage.getItem('cart') || '{}');
                    const seenProductIds = new Set(Object.keys(savedCart).map(id => Number(id)));

                    pageItems.forEach((product, index) => {
                        console.log(product.id)
                        const delay = index * 100;
                        const isDuplicate = seenProductIds.has(product.id);
                        const buttonText = isDuplicate ? "Already Added <span class='ienet-btn__icon'><i class='icon-cart'></i></span>" : "Add To Cart <span class='ienet-btn__icon'><i class='icon-cart'></i></span>";
                        // Add product ID to the set for future checks
                        seenProductIds.add(product.id);
                        const html = `
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="${delay}ms">
                                    <div class="product__item__img">
                                        <img src="${product.image}" alt="${product.title}">
                                        <div class="product__item__btn">
                                            <a href="https://wa.me/+258843736665?text=Olá WalaNet, tenho uma questão e gostaria de conversar."><i class="fab fa-whatsapp"></i></a>

                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                       
                                        <h4 class="product__item__title"><a href="product-details.php">${product.title}</a></h4>
                                        <div class="product__item__price">$${product.price.toFixed(2)}</div>
                                        <a class="ienet-btn product__item__link ${selector.replace('.', '')}" data-id="${product.id}">
                                            <span>${buttonText}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                        container.insertAdjacentHTML('beforeend', html);
                    });

                    if (callback && typeof callback === 'function') callback();
                };

                const pagesPerGroup = 3;

                const renderPagination = () => {
                    if (pagination) {
                        pagination.innerHTML = '';
                    }
                    let html = '';

                    const currentGroup = Math.floor((currentPage - 1) / pagesPerGroup);
                    const startPage = currentGroup * pagesPerGroup + 1;
                    const endPage = Math.min(startPage + pagesPerGroup - 1, totalPages);

                    html += `<li><a href="#" class="prev-group"><i class="icon-arrow-point-to-left"></i></a></li>`;

                    for (let i = startPage; i <= endPage; i++) {
                        html += `<li><a href="#" class="${i === currentPage ? 'current' : ''}" data-page="${i}">${String(i).padStart(2, '0')}</a></li>`;
                    }

                    html += `<li><a href="#" class="next-group"><i class="icon-arrow-point-to-right"></i></a></li>`;
                    if (pagination) {
                        pagination.innerHTML = html;
                    }
                };

                // Initial render
                renderProducts(currentPage);
                renderPagination();
                if (pagination) {
                    // Event delegation for pagination clicks
                    pagination.addEventListener('click', (e) => {
                        e.preventDefault();
                        const target = e.target.closest('a');

                        if (!target) return;

                        if (target.classList.contains('prev-group')) {
                            const newPage = Math.max(1, (Math.floor((currentPage - 1) / pagesPerGroup) - 1) * pagesPerGroup + 1);
                            currentPage = newPage;
                        } else if (target.classList.contains('next-group')) {
                            const newPage = Math.min(totalPages, (Math.floor((currentPage - 1) / pagesPerGroup) + 1) * pagesPerGroup + 1);
                            currentPage = newPage;
                        } else if (target.dataset.page) {
                            currentPage = parseInt(target.dataset.page);
                        }

                        renderProducts(currentPage);
                        renderPagination();
                    });
                }

            });
    });


}
