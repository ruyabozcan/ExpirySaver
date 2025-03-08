    <!-- Footer -->
    <footer>
    <div class="footer-left">
        <p>© <?php echo date('Y'); ?> ExpirySaver. All rights reserved.</p>
    </div>
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank"><img src="img/facebook.png" alt="Facebook"></a>
        <a href="https://twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter"></a>
        <a href="https://instagram.com" target="_blank"><img src="img/instagram.png" alt="Instagram"></a>
        <a href="mailto:contact@expirysaver.com"><img src="img/gmail.ico" alt="Email"></a>
    </div>
</footer>
      
      <script type="text/javascript" src="chatbot/chatbot.js"></script>
    <script type="text/javascript" src="chatbot/constants.js"></script>
    <script type="text/javascript" src="chatbot/speech.js"></script>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
      
  
    <!-- JavaScript -->
    <script src="js/index.js" defer></script>
  </body>
  </html>