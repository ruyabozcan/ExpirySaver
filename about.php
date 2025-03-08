<?php include('header.php'); ?>

<!-- Cover Section -->
<div class="coverc" style="width: 100%; height: 400px; background: url('img/about3.jpg') no-repeat center center; background-size: cover; display: flex; justify-content: center; align-items: center; text-align: center; padding: 20px;">
    <p class="title" style="font-size: 36px; color: white; font-weight: 700; margin: 0; padding: 10px; text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);">
        Welcome to <span style="color: #00615f;">ExpirySaver</span>
    </p>
</div>


<!-- About Us Section -->
<p class="heading" style="text-align: center; font-size: 32px; font-weight: bold; margin-top: 20px; color: #333;">About Us</p>

<!-- About Description -->
<div class="para" style="background-color: #f4f9f9; padding: 40px 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); max-width: 900px; margin: 30px auto;">
    <p style="font-size: 18px; color: #555; line-height: 1.8; text-align: center;">
        At <strong style="color: #00615f;">ExpirySaver</strong>, we are committed to reducing food waste and helping consumers save money. 
        Our platform connects customers with stores offering discounted products that are nearing their expiration dates. 
        By purchasing these products, users can enjoy high-quality items at a lower cost while contributing to a more sustainable future.
    </p>
</div>


<!-- Services Section -->
<section id="services">
    <h2 style="text-align: center; font-size: 30px; margin-top: 40px;">Our Services</h2>
    <div class="service" style="text-align: center; margin: 20px;">
        <i class="fa fa-leaf" style="font-size: 40px; color: #00615f;"></i>
        <h3>Sustainability</h3>
        <p>Our platform helps reduce food waste and promotes sustainability.</p>
    </div>
    <div class="service" style="text-align: center; margin: 20px;">
        <i class="fa fa-money" style="font-size: 40px; color: #00615f;"></i>
        <h3>Discounted Products</h3>
        <p>Get high-quality food at a lower cost by purchasing surplus items.</p>
    </div>
    <div class="service" style="text-align: center; margin: 20px;">
        <i class="fa fa-truck" style="font-size: 40px; color: #00615f;"></i>
        <h3>Fast Delivery</h3>
        <p>Enjoy quick and convenient delivery options for your purchases.</p>
    </div>
</section>

<!-- Location Map Section -->
<div class="map">
    <p style="font-size: 24px; margin-bottom: 10px;">Our Location</p>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.2849025700054!2d30.655501018804738!3d36.885835411080285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c0ac6078bc17ef%3A0x5fd67f917a225f07!2zQW50YWx5YSBCaWxpbSBVbml2ZXJzaXR5!5e0!3m2!1str!2str!4v1677682279871!5m2!1str!2str"
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>

<!-- Footer -->
<?php include('footer.php'); ?>

<!-- Additional Styles for Responsive Design -->
<style>
    /* Cover Section */
    .coverc {
        width: 100%;
        height: 400px;
        background: url('img/about3.jpg') no-repeat;
        background-size: cover;
        display: grid;
        place-items: center;
        padding-top: 8rem;
    }

    /* Title Styling */
    .title {
        font-size: 38px;
        text-align: center;
        align-items: center;
    }

    /* Paragraph Styling */
    .para p {
        font-size: 23px;
        margin-left: 20px;
        margin-right: 20px;
    }

    /* Map Styling */
    .map {
        text-align: center;
        margin: 20px auto;
    }

    .map iframe {
        width: 80%;
        max-width: 800px;
        height: 400px;
        border: 0;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Mobile Adjustments */
    @media (max-width: 767px) {
        .para p {
            font-size: 16px;
        }

        .map iframe {
            width: 90%;
            height: 250px;
        }

        .title {
            font-size: 28px;
            margin: 10px;
            text-align: center;
            align-items: center;
        }
    }
</style>

