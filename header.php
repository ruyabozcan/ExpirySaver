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


    .nav-bar ul li a{
    text-decoration: none;

  }
</style>