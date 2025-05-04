<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/minilogo.png">
    <title>ExpirySaver</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="chatbot/chatbot.css">
</head>

<body>
<header>
        <a href="index.php">
            <img src="img/ourlogo.png" alt="ExpirySaver Logo" class="logo">
        </a>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php" class="active1">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="https://myapprack.com/expirysaver/">Login</a></li>       
            </ul>
        </nav>
    </header>

    <script>
        document.querySelector(".hamburger").addEventListener("click", function() {
            document.querySelector(".nav-bar").classList.toggle("active");
        });
    </script>

<style>
    header {
        position: fixed;
    }

    .nav-bar ul li a {
        text-decoration: none;
    }
</style>

<!-- Chatbot Embed Code -->
<script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>

<!-- Chatbot Wrapper -->
<div id="chatbot-wrapper" style="position: fixed; bottom: 20px; right: 100px; z-index: 9999;">
<!-- Chatbot Icon at Footer -->
<div id="chatbot-icon" class="chatbot-icon" onclick="toggleChatContainer()">
    <img src="img/bot-mini.png" alt="Chatbot" />
</div>


    <!-- Chatbot Embed -->
    <zapier-interfaces-chatbot-embed
        id="chatbot-embed"
        is-popup="false"
        chatbot-id="cma8hrywe003gc7vdaz2mpjx8"
        height="600px"
        width="400px"
        style="display: none; position: fixed; bottom: 80px; right: 100px; z-index: 9999;">
    </zapier-interfaces-chatbot-embed>
</div>

<script>
    // Toggle visibility of chatbot on icon click
    var chatbotEmbed = document.getElementById('chatbot-embed');
    var chatbotIcon = document.getElementById('chatbot-icon');

    chatbotIcon.addEventListener('click', function() {
        // Toggle the visibility of the chatbot
        if (chatbotEmbed.style.display === 'none' || chatbotEmbed.style.display === '') {
            chatbotEmbed.style.display = 'block';
        } else {
            chatbotEmbed.style.display = 'none';
        }
    });
</script>




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


</body>
</html>
