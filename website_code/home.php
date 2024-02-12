<?php
    require_once("includes/config.php");

    $query3Comp = "SELECT * FROM courses ORDER BY CourseID LIMIT 0,4";
    $resultComp = $mysqli->query($query3Comp); 

    $query3Arts = "SELECT * FROM courses ORDER BY CourseID DESC LIMIT 0,4";
    $resultArts = $mysqli->query($query3Arts);
?>
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
    <title>Cantor College</title>
</head>
<body>
    <?php
    include("includes/header.php");
    ?>
    <section id="home">
        <h1>Welcome To Cantor College</h1>
        <p>Cantor College was established in 1989 to specialize in Computing and Design.</p>
        <div class="btn">
            <a class="yellow" href="aboutUs.php">Learn More</a>
            <a class="orange" href="courses.php">Visit Courses</a>
        </div>
    </section>

    <div class="breakLine"></div>

    <section id="facilities">
        <h2><a href="facilities.php">Facilities</a></h2>
        <p>The College is located in the attractive and pleasantly refurbished Building.</p>
        <div class="fac-base">
            <div class="fac-box">
                <i class="fa-solid fa-wifi"></i>
                <h3>Wifi Technology</h3>
                <p>Accessible throughout the building using student login details.</p>
            </div>
            <div class="fac-box">
                <i class="fa-solid fa-bicycle"></i>
                <h3>Cycle Racks</h3>
                <p>A secure area to store your bike.</p>
            </div>
            <div class="fac-box">
                <i class="fa-solid fa-wheelchair"></i>
                <h3>Disabled Access</h3>
                <p>Parking for disabled badge holders.</p>
            </div>
        </div>
    </section>

    <div class="breakLine"></div>

    <section id="map">
        <h2><a href="location.php">How To Find Us</a></h2>
        <p>Cantor College : Main Street : Sheffield : SC4 2BB</p>
        <iframe title="Google_Map" class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2380.1204235247938!2d-1.470350122441325!3d53.376894772298236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798338bc5a1d13%3A0xad74824d1242efa8!2sCantor%20College!5e0!3m2!1sen!2suk!4v1703946419736!5m2!1sen!2suk" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    
    <div class="breakLine"></div>

    <section id="homeCourses">
        <h2 class="corh2"><a href="courses.php">Some of Our Available Courses</a></h2>
        <h2><i class="fa-solid fa-computer"></i> Computing <i class="fa-solid fa-computer-mouse"></i></h2>
        <div class="cor-base">
            <?php 
                while ($obj = $resultComp -> fetch_object()) {
                    echo "<div class=\"courseItem\">";
                    echo "<h2>{$obj->CourseTitle}</h2>";
                    echo "<div class=\"courseContent\">";
                    echo "<h4>{$obj->CourseType}</h4>";
                    echo "<h4>{$obj->CourseAwardName}</h4>";
                    echo "<h4>{$obj->ModeOfAttendance}</h4>";
                    echo "</div>";
                    echo "<p>{$obj->CourseSummary}</p>";
                    echo "<div class=\"courseContent\">";
                    echo "<h5>Starting Year: {$obj->YearOfEntry}</h5>";
                    echo "<h5>Course Length: {$obj->StudyLength}</h5>";
                    echo "</div>";
                    echo "<div class=\"courseContent\">";
                    echo "<h5>UCAS Points: {$obj->UcasPoints}</h5>";
                    echo "<h5>UCAS Code: {$obj->UcasCode}</h5>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
        <h2><i class="fa-solid fa-paintbrush"></i>Art & Design <i class="fa-solid fa-palette"></i></h2>
        <div class="cor-base">
        <?php 
                while ($obj = $resultArts -> fetch_object()) {
                    echo "<div class=\"courseItem\">";
                    echo "<h2>{$obj->CourseTitle}</h2>";
                    echo "<div class=\"courseContent\">";
                    echo "<h4>{$obj->CourseType}</h4>";
                    echo "<h4>{$obj->CourseAwardName}</h4>";
                    echo "<h4>{$obj->ModeOfAttendance}</h4>";
                    echo "</div>";
                    echo "<p>{$obj->CourseSummary}</p>";
                    echo "<div class=\"courseContent\">";
                    echo "<h5>Starting Year: {$obj->YearOfEntry}</h5>";
                    echo "<h5>Course Length: {$obj->StudyLength}</h5>";
                    echo "</div>";
                    echo "<div class=\"courseContent\">";
                    echo "<h5>UCAS Points: {$obj->UcasPoints}</h5>";
                    echo "<h5>UCAS Code: {$obj->UcasCode}</h5>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </section>
    <?php
    include("includes/footer.php");
    ?>
</body>
</html>