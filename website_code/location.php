<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/desktop.css" />
    <link 
        rel="stylesheet"
        href="styles/mobile.css"
        media="only screen and (max-width:720px)"
    />
    <script src="js/web.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to find us</title>
</head>
<body>
    <?php
        include("includes/header.php")
    ?>
    
    <section class="pageHeader">
        <h1>How To Find and Contact Us</h1>
        <p>Our location in Google maps and our contact information.</p>
    </section>
    <div class="breakLine"></div>

    <div class="contact">
        <h2><u>Contact Us Here:</u></h2>
        <h3>Call: (01321) 2340 235</h3>
        <h3>Fax: (01321) 2340 236</h3>
        <h3>Email: <a href="#">info@cantorcollege.ac.uk</a></h3>
    </div>

    <div class="breakLine"></div>

    <main class="main-loc">
        <div class="campusMap">
            <h2>The Cantor Building is located on the City Campus</h2>
            <img src="images/CityCampusMap.jpg" alt="City_Campus_Map" class="imgMap" />
        </div>
        
        <iframe title="Google_Map" class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2380.1204235247938!2d-1.470350122441325!3d53.376894772298236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798338bc5a1d13%3A0xad74824d1242efa8!2sCantor%20College!5e0!3m2!1sen!2suk!4v1703946419736!5m2!1sen!2suk" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <div class="address">
            <h3>Cantor College</h3>
            <h3>Main Street</h3>
            <h3>Sheffield</h3>
            <h3>SC4 2BB</h3>
        </div>
    </main>

    <?php
        include("includes/footer.php")
    ?>
</body>
</html>