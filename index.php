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
    </div>
</section>

<!-- CSS - Styles for Professional Design -->
<style>
/* Featured Products Section */
.featured-products {
    padding: 140px 20px 60px; /* Üstten ekstra boşluk eklendi */
    text-align: center;
    background-color: #ffffff;
}

.featured-products h2 {
    font-size: 2.5em;
    margin-bottom: 50px; /* Başlık ile ürünler arasındaki mesafe arttı */
    color: #055c5c;
}

/* Ürünleri daha iyi hizalamak için */
.product-wrapper {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px; /* Kartlar arasına daha fazla boşluk ekledim */
    padding: 20px 0;
}

/* Ürün kartlarını daha ferah hale getirdim */
.product-card {
    background-color: #ffffff;
    width: 260px; /* Kart genişliğini biraz daha artırdım */
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 25px;
    transition: transform 0.3s ease;
}

.product-card:hover {
    transform: translateY(-10px);
}

/* Görsellerin taşmasını önledim */
.product-card img {
    width: 100%;
    max-height: 180px;
    object-fit: cover; /* Resmin taşmasını engellemek için */
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
    background-color: #055c5c;
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.product-card .btn-sm:hover {
    background-color: #04a59f;
}

/* Mobil uyumluluk */
@media (max-width: 768px) {
    .product-wrapper {
        flex-direction: column;
        align-items: center;
    }

    .product-card {
        width: 90%; /* Mobilde daha geniş görünmesi için */
    }
}