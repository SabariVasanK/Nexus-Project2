<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techy Software Company</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Welcome to Techy Software Company</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#products">Products/Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="container">
            <h2>Transforming Ideas into Reality</h2>
            <p>We are dedicated to delivering top-notch software solutions to meet your business needs.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are a team of passionate developers with expertise in AI and software development.</p>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <h2>Our Products/Services</h2>
            <div class="product">
                <img src="computer.png" alt="Computer Image">
                <h3>Software Solutions</h3>
                <p>We offer custom software development tailored to your specific requirements.</p>
            </div>
            <div class="product">
                <img src="ai.jpg" alt="AI Image">
                <h3>AI Solutions</h3>
                <p>Explore our AI solutions to automate and optimize your business processes.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="submit.php" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Techy Software Company. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
