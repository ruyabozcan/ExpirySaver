<?php include('header.php'); ?>

<!-- Cover Section -->
<section class="cover"></section>

<!-- Heading Section -->
<p class="heading" style="margin: 20px; font-size: 24px; font-weight: bold; text-align: center;">Contact Us</p>

<!-- Contact Form Section -->
<div class="contact-form">
    <form action="feedback.php" method="post">
        <!-- Name Input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <!-- Email Input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <!-- Message Textarea -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <!-- Submit Button -->
        <input type="submit" value="Send" name="send">
    </form>
</div>

<!-- Contact Info Section -->
<div class="contact-info">
    <p><i class="fa fa-envelope"></i> Email: ruyabozcan@outlook.com</p>
    <p><i class="fa fa-phone"></i> Phone: +90 555-555-5555</p>
    <p><i class="fa fa-map-marker"></i> Address: Antalya Bilim University</p>
</div>

<!-- Chatbot Section -->
<div class="chatbot" style="padding: 30px; background-color: rgba(151, 243, 199, 0.5); border-radius: 10px; margin-top: 30px;">
    <p style="font-size: 23px; text-align: center; color: #00615f;">Chat Bot Support <img src="bot-mini.png" alt="" height="20"></p>

    <!-- Chat Container -->
    <div id="container" class="container">
        <div id="chat" class="chat">
            <div id="messages" class="messages"></div>
            <input id="input" type="text" placeholder="Say something..." autocomplete="off" />
        </div>
    </div>

    <!-- Help & FAQ Section -->
    <div class="help">
        <p style="font-size: 23px; text-align: center; padding: 10px; color: #00615f;">Help & FAQs</p>

        <!-- FAQ Accordion -->
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

<!-- Footer -->
<?php include('footer.php'); ?>

<!-- FAQ Accordion Script -->
<script>
    // Toggle accordion panels on click
    document.querySelectorAll(".accordion").forEach(button => {
        button.addEventListener("click", function () {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            panel.style.maxHeight = panel.style.maxHeight ? null : panel.scrollHeight + "px";
        });
    });
</script>
