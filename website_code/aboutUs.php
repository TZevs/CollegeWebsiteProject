<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/desktop.css" />
    <link 
        rel="stylesheet"
        media="only screen and (max-width:720px)"
        href="styles/mobile.css"
    />
    <script src="js/web.js" defer></script>
    <script src="https://kit.fontawesome.com/683ed5d49e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
    <?php
        include("includes/header.php");
    ?>
    <section class="pageHeader">
        <h1>About Us</h1>
        <div class="btn">
            <a class="yellow" href="facilities.php">Visit Facilities</a>
            <a class="orange" href="courses.php">Visit Courses</a>
        </div>
    </section>
    <div class="breakLine"></div>
    <main id="mainAbout">
        <h2><i class="fa-solid fa-computer"></i>  Cantor College was established in 1989 to specialize in Computing and Design.  <i class="fa-solid fa-pen-nib"></i></h2>
            <div class="row">
                <div class="column">
                    <img src="images/CareerCentre.jpg" alt="CareersFair" class="col-img">
                    <p>At Cantor College, we want to give students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills and experience to succeed.</p>
                </div>
                <div class="column">
                    <p>Cantor College gives you the opportunities that can give you the edge when you enter the world of work, through our teaching and our links to some of the world's leading researchers and employers.</p>
                    <img src="images/volunteer.jpg" alt="Volunteer_StLukes" class="col-img">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <img src="images/Graduation.jpg" alt="Grads" class="col-img">
                    <p>Our students have gone on to successful careers in a wide range of industries across the globe.</p>
                </div>
                <div class="column">
                    <p>Whatever your ambitions, our learning and support can help to get the most out of your time with Cantor College, both as a student and in your future career.</p>
                    <img src="images/Engineering.jpg" alt="Work_Placement" class="col-img">
                </div>  
                
            </div>
        
    </main>
    <?php
        include("includes/footer.php");
    ?>
</body>
</html>