<?php include('header.php'); ?>



    <section class="cover" >
        
    </section>
    <p class="heading" style="margin: 20px;">Contact Us</p>

    <div class="contact-form">
        <form action="feedback.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea>
            <br>
            <input type="submit" value="Send" name="send">
        </form>
    </div>

    <div class="contact-info" style="padding: 10px;">
        <p>Email: ruyabozcan@outlook.com</p>
        <p>Phone: +90 555-555-5555</p>
        <p>Address: Antalya Bilim University</p>
    </div>

    <div class="chatbot" style="padding: 30px; background-color: rgba(151, 243, 199, 0.5);">
        <p style="font-size: 23px; text-align: center;">Chat Bot Support <img src="bot-mini.png" alt="" height="20"></p>

        <div id="container" class="container">
            <div id="chat" class="chat">
                <div id="messages" class="messages"></div>
                <input id="input" type="text" placeholder="Say something..." autocomplete="off" />
            </div>
        </div>

        <div class="help">
            <p style="font-size: 23px; text-align: center; padding: 10px;">Help & FAQs?</p>

            <button class="accordion">How does ExpirySaver work?</button>
            <div class="panel">
                <p>ExpirySaver connects consumers with local stores offering discounted food products that are nearing their expiration dates. You can save money while reducing food waste by purchasing these products at a lower price.</p>
            </div>

            <button class="accordion">How do I purchase discounted products?</button>
            <div class="panel">
                <p>1) Browse the available products on the ExpirySaver platform.</p>
                <p>2) Select the items you want to buy, which are nearing their expiration dates.</p>
                <p>3) Complete the purchase and pick up your discounted food items from the store.</p>
            </div>

            <button class="accordion">Can I sell my surplus food to ExpirySaver?</button>
            <div class="panel">
                <p style="padding: 10px;">Yes, stores and restaurants can list surplus food products on ExpirySaver for consumers to purchase. You can register as a seller on the platform and start offering discounted products to help reduce food waste.</p>
            </div>
        </div>
    </div>

    
    <?php include('footer.php'); ?>