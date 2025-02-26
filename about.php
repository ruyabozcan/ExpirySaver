<?php include('header.php'); ?>


    <style>
        .coverc {
            width: 100%;
            height: 400px;
            background: url('img/about3.jpg') no-repeat;
            background-size: cover;
            display: grid;
            place-items: center;
            padding-top: 8rem;
        }
        .title {
            font-size: 38px;
            text-align: center;
            align-items: center;
        }
        .para p {
            font-size: 23px;
            margin-left: 20px;
            margin-right: 20px;
        }
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
  
    <div class="coverc">
        <p class="title">Welcome to <u>ExpirySaver</u></p>
    </div>

    <p class="heading" style="text-align: center; font-size: 28px; margin-top: 20px;">About Us</p>

    <div class="para">
        <p>
            At ExpirySaver, we are committed to reducing food waste and helping consumers save money.
            Our platform connects customers with stores offering discounted products that are nearing their expiration dates.
            By purchasing these products, users can enjoy high-quality items at a lower cost while contributing to a more sustainable future.
        </p>
    </div>

    <div class="map">
        <p style="font-size: 24px; margin-bottom: 10px;">Our Location</p>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.2849025700054!2d30.655501018804738!3d36.885835411080285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c0ac6078bc17ef%3A0x5fd67f917a225f07!2zQW50YWx5YSBCaWxpbSBVbml2ZXJzaXR5!5e0!3m2!1str!2str!4v1677682279871!5m2!1str!2str"
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>

    
    <?php include('footer.php'); ?>