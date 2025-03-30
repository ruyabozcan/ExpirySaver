<?php include('header.php'); ?>

<!-- Featured Products Section -->
<section class="featured-products">
    <h2>Top Picks For You</h2>
    <div class="product-wrapper">
        <div class="product-card">
            <img src="img/product1.jpeg" alt="Product 1">
            <h3>Organic Apples</h3>
            <p>50% Off - Fresh and healthy</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product2.jpeg" alt="Product 2">
            <h3>Fresh Bread</h3>
            <p>30% Off - Soft and warm</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product3.jpeg" alt="Product 3">
            <h3>Fresh Vegetables</h3>
            <p>40% Off - Crisp and healthy</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product4.jpeg" alt="Product 4">
            <h3>Free-Range Eggs</h3>
            <p>20% Off - Farm fresh</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product5.jpeg" alt="Product 5">
            <h3>Whole Grain Pasta</h3>
            <p>15% Off - Healthy and delicious</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product6.jpeg" alt="Product 6">
            <h3>Organic Milk</h3>
            <p>10% Off - Pure and creamy</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product7.jpeg" alt="Product 7">
            <h3>Local Honey</h3>
            <p>25% Off - Natural sweetness</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product8.jpeg" alt="Product 8">
            <h3>Organic Yogurt</h3>
            <p>35% Off - Creamy and healthy</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product9.jpeg" alt="Product 9">
            <h3>Fresh Oranges</h3>
            <p>40% Off - Juicy and sweet</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product10.jpeg" alt="Product 10">
            <h3>Green Lettuce</h3>
            <p>30% Off - Crisp and fresh</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product11.jpeg" alt="Product 11">
            <h3>Brown Rice</h3>
            <p>20% Off - Nutritious and healthy</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product12.jpeg" alt="Product 12">
            <h3>Almond Butter</h3>
            <p>10% Off - Rich in protein</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product13.jpeg" alt="Product 13">
            <h3>Cashew Nuts</h3>
            <p>15% Off - Crunchy and tasty</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product14.jpeg" alt="Product 14">
            <h3>Chia Seeds</h3>
            <p>25% Off - Packed with nutrients</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product15.jpeg" alt="Product 15">
            <h3>Frozen Berries</h3>
            <p>50% Off - Perfect for smoothies</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
        <div class="product-card">
            <img src="img/product16.jpeg" alt="Product 16">
            <h3>Sweet Potatoes</h3>
            <p>30% Off - Sweet and nutritious</p>
            <a href="product-detail.php" class="btn btn-sm">View Product</a>
        </div>
    </div>
</section>

<!-- CSS - Styles for Professional Design -->
<style>
/* Featured Products Section */
.featured-products {
    padding: 140px 20px 60px;
    text-align: center;
    background-color: #ffffff;
}

.featured-products h2 {
    font-size: 2.5em;
    margin-bottom: 50px;
    color: #00615f;
    font-weight: 600;
}

/* Ürünleri daha iyi hizalamak için */
.product-wrapper {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
    padding: 20px 0;
}

/* Ürün kartlarını daha ferah hale getirdim */
.product-card {
    background-color: #ffffff;
    width: 270px; /* Kart genişliğini biraz artırdım */
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 25px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

/* Görsellerin taşmasını önledim */
.product-card img {
    width: 100%;
    max-height: 180px;
    object-fit: cover;
    border-radius: 10px;
}

/* Başlık ve metinlere daha fazla boşluk verdim */
.product-card h3 {
    font-size: 1.6em;
    margin: 15px 0;
}

.product-card p {
    font-size: 1.1em;
    color: #555;
    margin-bottom: 15px;
}

/* Butonun daha güzel görünmesi için */
.product-card .btn-sm {
    display: inline-block;
    padding: 12px 25px;
    font-size: 1.1em;
    background-color: #00615f;
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.product-card .btn-sm:hover {
    background-color: #004f4a;
    transform: scale(1.1); /* Hoverda buton biraz büyüyecek */
}

/* Mobil uyumluluk */
@media (max-width: 768px) {
    .product-wrapper {
        flex-direction: column;
        align-items: center;
    }

    .product-card {
        width: 90%;
    }
}
</style>

<?php include('footer.php'); ?>
