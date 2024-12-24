<?php
// Variabel untuk judul dan teks dinamis
$title = "Logistic";
$aboutTitle = "About Us";
$aboutContent = "Our vision is to become a global leader in the logistics industry by providing efficient, safe and reliable services. Our mission is to connect the world through an innovative logistics network and provide added value to every customer. With years of experience in the maritime industry, our team of dedicated experts is ready to provide the best solutions for all your international shipping needs.";
$footerContent = "PT Logistic adalah PT yang menyediakan sebuah layanan di bidang distribusi logistik berbasis international";
$services = [
    ["image" => "image/truck.jpg", "title" => "Distribution", "link" => "distibusi.php"],
    ["image" => "image/shipmant.jpg", "title" => "Overseas Delivery", "link" => "overseas.php"],
    ["image" => "image/warehouse.jpg", "title" => "Warehouse", "link" => "warehouses.php"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!--css link-->
    <link rel="stylesheet" href="style.css">
    <!--end css-->

    <!--linkboxicon-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--end link-->

    <!--link font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!--endlink-->
</head>
<body>
    <!--header-->
    <header>
        <a href="#" class="logo"><?php echo $title; ?></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>

        <div class="search-icon">
            <i class='bx bx-search'></i>
        </div>
    </header>
    <!--header end-->
    
    <!--home page-->
    <section class="Home" id="Home">
        <div class="home-text">
            <h1>Connecting the <br> world, Simplifying <br> Logistics </h1>
        </div>
    </section>
    <!--home end-->

    <!--number scroll-->
    <div class="counters">
        <div>
            <div class="counter">
                <h1><span data-count="156">0</span></h1>
                <h3>Project Completed</h3>
            </div>
            <div class="counter">
                <h1><span data-count="227">0</span></h1>
                <h3>Satisfied Clients</h3>
            </div>
            <div class="counter">
                <h1><span data-count="90">0</span>%</h1>
                <h3>Success Rate</h3>
            </div>
            <div class="counter">
                <h1><span data-count="30">0</span>+</h1>
                <h3>Years Experience</h3>
            </div>
        </div>
    </div>
    <!--number scroll end-->

    <!--about page-->
    <section class="About" id="About">
        <h1 class="heading"> <span> <?php echo $aboutTitle; ?> </span></h1>

        <div class="row">
            <div class="image-container">
                <img src="image/Rectangle 1080.png" alt="About Image">
            </div>

            <div class="content">
                <h3>Leading with Innovation, Moving the <br> World with Integrated Logistics <br> Solutions.</h3>
                <p><?php echo $aboutContent; ?></p>
            </div>
        </div>
    </section>
    <!--about page end-->

    <!--service page-->
    <section class="Services" id="Services">
        <h1 class="title"> Services </h1>

        <div class="row">
            <?php foreach ($services as $service): ?>
            <div class="image-container">
                <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
                <a href="<?php echo $service['link']; ?>" class="">
                    <h2><?php echo $service['title']; ?></h2>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!--service end-->

    <!--contact page-->
    <section class="Contact" id="Contact">
        <h1 class="title"> Contact </h1>

        <form action="proses_kontak.php" method="post" class="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </section>
    <!--contact end-->

    <!--footer start -->
    <footer>
        <div class="footer-content">
            <a class="logo-footer"><?php echo $title; ?></a>
            <p><?php echo $footerContent; ?></p>

            <div class="icons">
                <a><i class='bx bxl-facebook-circle'></i></a>
                <a><i class='bx bxl-instagram-alt'></i></a>
                <a><i class='bx bxl-whatsapp'></i></a>
                <a><i class='bx bxl-twitter'></i></a>
            </div>
        </div>

        <div class="footer-content">
            <h4>Media dan Informasi</h4>
            <li><a href="#About">About</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#Contact">Contact</a></li>
        </div>

        <div class="footer-content">
            <h4>Layanan Kami</h4>
            <li><a href="#Services">Distribution</a></li>
            <li><a href="#Services">Overseas Delivery</a></li>
            <li><a href="#Services">Warehouse</a></li>
        </div>

    </footer>
    <!--footer end-->

    <!--script js-->
    <script src="script.js"></script>
    <!--script js end-->
</body>
</html>
