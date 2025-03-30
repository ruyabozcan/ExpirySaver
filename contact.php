<?php include('header.php'); ?>

<!-- Cover Section -->
<section class="cover"></section>

<!-- Heading Section -->
<p class="heading" style="margin: 20px; font-size: 24px; font-weight: bold; text-align: center; color: #00615f;">Contact Us</p>

<!-- Contact Form Section -->
<div class="contact-form" style="max-width: 600px; margin: 0 auto; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); background-color: #f9f9f9;">
    <form action="feedback.php" method="post">
        <!-- Name Input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required placeholder="Your Name" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ddd;">

        <!-- Email Input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Your Email" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ddd;">

        <!-- Message Textarea -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" required placeholder="Your Message" rows="4" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ddd;"></textarea>

        <!-- Submit Button -->
        <input type="submit" value="Send" name="send" style="width: 100%; padding: 12px; background-color: #00615f; color: white; font-size: 16px; border-radius: 5px; border: none; cursor: pointer;">
    </form>
</div>

<!-- Contact Info Section -->
<div class="contact-info" style="text-align: center; margin-top: 40px;">
    <p><i class="fa fa-envelope" style="color: #00615f;"></i> Email: ruyabozcan@outlook.com</p>
    <p><i class="fa fa-phone" style="color: #00615f;"></i> Phone: +90 555-555-5555</p>
    <p><i class="fa fa-map-marker" style="color: #00615f;"></i> Address: Antalya Bilim University</p>
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
<div class="help-section" style="max-width: 900px; margin: 60px auto; padding: 30px; background-color: #f8f8f8; border-radius: 12px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);">

    <!-- Section Title -->
    <p style="font-size: 34px; text-align: center; color: #00615f; font-weight: 600; margin-bottom: 40px; letter-spacing: 1px;">Help & FAQs</p>

    <!-- FAQ Accordion -->

    <div class="faq-item" style="margin-bottom: 25px;">
        <button class="accordion" style="background-color: #00615f; color: white; padding: 18px 25px; width: 100%; border: none; border-radius: 10px; font-size: 20px; text-align: left; cursor: pointer; transition: 0.3s; box-sizing: border-box; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);">
            How does ExpirySaver work?
        </button>
        <div class="panel" style="padding: 20px; background-color: #ffffff; border-radius: 10px; margin-top: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
            <p class="full-content" style="font-size: 17px; line-height: 1.6; color: #333; display: none;">
                ExpirySaver connects consumers with local stores offering discounted food products that are nearing their expiration dates. You can save money while reducing food waste by purchasing these products at a lower price. The platform makes it easy to access these deals, saving both money and the environment.
            </p>
        </div>
    </div>

    <div class="faq-item" style="margin-bottom: 25px;">
        <button class="accordion" style="background-color: #00615f; color: white; padding: 18px 25px; width: 100%; border: none; border-radius: 10px; font-size: 20px; text-align: left; cursor: pointer; transition: 0.3s; box-sizing: border-box; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);">
            How do I purchase discounted products?
        </button>
        <div class="panel" style="padding: 20px; background-color: #ffffff; border-radius: 10px; margin-top: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
            <p class="full-content" style="font-size: 17px; line-height: 1.6; color: #333; display: none;">
                1) Browse the available products on the ExpirySaver platform.
                <br> 2) Select the items you want to buy, which are nearing their expiration dates.
                <br> 3) Complete the purchase and pick up your discounted food items from the store.
                <br> It's easy and convenient to shop for discounted food that would otherwise go to waste.
            </p>
        </div>
    </div>

    <div class="faq-item" style="margin-bottom: 25px;">
        <button class="accordion" style="background-color: #00615f; color: white; padding: 18px 25px; width: 100%; border: none; border-radius: 10px; font-size: 20px; text-align: left; cursor: pointer; transition: 0.3s; box-sizing: border-box; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);">
            Can I sell my surplus food to ExpirySaver?
        </button>
        <div class="panel" style="padding: 20px; background-color: #ffffff; border-radius: 10px; margin-top: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
            <p class="full-content" style="font-size: 17px; line-height: 1.6; color: #333; display: none;">
                Yes, stores and restaurants can list surplus food products on ExpirySaver for consumers to purchase. You can register as a seller on the platform and start offering discounted products to help reduce food waste. It's a simple way to make use of surplus food and contribute to a more sustainable community.
            </p>
        </div>
    </div>

</div>

<!-- FAQ Accordion Script -->
<script>
    document.querySelectorAll(".accordion").forEach(button => {
        button.addEventListener("click", function () {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            let isExpanded = panel.style.maxHeight ? true : false;

            // Hide or show the full content on click
            if (isExpanded) {
                panel.style.maxHeight = null;
                panel.querySelector(".full-content").style.display = "none";
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                panel.querySelector(".full-content").style.display = "block";
            }
        });
    });
</script>





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
