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

<!-- JavaScript for Chatbot -->
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

    // Function to toggle chat container display
    function toggleChatContainer() {
        var chatContainer = document.getElementById('chat-container');
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
            chatContainer.style.display = 'block';
        } else {
            chatContainer.style.display = 'none';
        }
    }
    </script>

    <script src="js/index.js" defer></script>

    <!-- Chatbot Icon at Footer -->
    <div id="chatbot-icon" class="chatbot-icon" onclick="toggleChatContainer()">
        <img src="img/bot-mini.png" alt="Chatbot" />
    </div>

    <!-- Chat Container -->
    <div id="chat-container" class="chat-container" style="display: none;">
        <div class="chat-header">
        <h4>Chat with us</h4>
        <button id="close-chat" class="close-chat">X</button>
        </div>
        <div class="chat-body">
        <!-- Chat content goes here -->
        </div>
        <div class="chat-footer">
        <input type="text" placeholder="Type a message..." />
        <button>Send</button>
        </div>
    </div>

    <style>
        /* Chatbot Icon Styles */
        .chatbot-icon {
        position: fixed;
        bottom: 80px; /* Higher than the footer */
        right: 20px;
        background-color: #06c167; /* Green background color */
        border-radius: 50%; /* Make it round */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        padding: 10px;
        z-index: 9999; /* Ensure it is above other elements */
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        }

        .chatbot-icon img {
        width: 60px; /* Icon width */
        height: 60px; /* Icon height */
        object-fit: contain; /* Ensure the image fits well */
        }

        .chatbot-icon:hover {
        background-color: #04b159; /* Hover color */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Increase shadow on hover */
        }

        /* Chat Container Styles */
        .chat-container {
        position: fixed;
        bottom: 150px; /* Above the chatbot icon */
        right: 20px;
        width: 300px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 10000; /* Ensure it is above other elements */
        display: flex;
        flex-direction: column;
        }

        .chat-header {
        background-color: #06c167;
        color: white;
        padding: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .chat-body {
        flex: 1;
        padding: 10px;
        overflow-y: auto;
        }

        .chat-footer {
        padding: 10px;
        display: flex;
        }

        .chat-footer input {
        flex: 1;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        .chat-footer button {
        margin-left: 10px;
        padding: 5px 10px;
        background-color: #06c167;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }

        .close-chat {
        background: none;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        }

        /* Footer adjustments */
        footer {
        padding-bottom: 100px; /* Space above the footer */
        }
    </style>

    <script>
        // Close chat event
        document.getElementById('close-chat').addEventListener('click', function() {
        document.getElementById('chat-container').style.display = 'none';
        });
    </script>

    </body>
    </html>
