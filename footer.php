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
    // Function to toggle chat container display
    function toggleChatContainer() {
        var chatContainer = document.getElementById('chat-container');
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
            chatContainer.style.display = 'flex';  // Show chatbot
        } else {
            chatContainer.style.display = 'none';  // Hide chatbot
        }
    }
</script>

<script src="js/index.js" defer></script>


<style>
/* Chatbot Icon */
.chatbot-icon {
    position: fixed;
    bottom: 20px; /* SAĞ ALT KÖŞEYE TAM OTURULDU */
    right: 20px;
    background-color: #00615f;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 10px;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.chatbot-icon img {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

/* Chat Container */
.chat-container {
    position: fixed;
    bottom: 90px; /* ikonun üstünde görünsün */
    right: 20px;
    width: 300px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 10000;
    display: flex;
    flex-direction: column;
}

.chat-header {
    background-color: #00615f;
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
    background-color: #00615f;
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

footer {
    padding-bottom: 150px; /* ikon footer'la çakışmasın */
}
</style>

<script>
    // Close chat event (when the X button is clicked)
    document.querySelector('.close-chat').addEventListener('click', function() {
        document.getElementById('chat-container').style.display = 'none';
    });
</script>

</body>
</html>
