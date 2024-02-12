<?php
    require_once("includes/config.php");
    $queryArt = "SELECT * FROM courses WHERE CourseSubject = 'Art and design'";
    $resultArt = $mysqli->query($queryArt);

    $queryComp = "SELECT * FROM courses WHERE CourseSubject = 'Computing'";
    $resultComp = $mysqli->query($queryComp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/desktop.css" />
    <link 
        rel="stylesheet"
        media="only screen and (max-width:720px)"
        href="styles/mobile.css"
    />
    <script src="js/web.js" defer></script>
    <script src="https://kit.fontawesome.com/683ed5d49e.js" crossorigin="anonymous"></script>
    <title>Courses</title>
</head>
<body>
    <?php
    include("includes/header.php");
    ?>
    <section class="pageHeader">
        <h1>Courses</h1>
        <p>All available Art and Design and Computing Courses listed here.</p>
    </section>
    <div class="breakLine"></div>

    <main class="mainCor">
        <div class="row">
            <div class="column">
                <h1><i class="fa-solid fa-paintbrush"></i>Art & Design <i class="fa-solid fa-palette"></i></h1>
                    <?php
                        while ($obj = $resultArt -> fetch_object()) {
                            echo "<div class=\"courseItem\">";
                            echo "<h2>{$obj->CourseTitle}</h2>";
                            echo "<div class=\"courseContent\">";
                            echo "<h3>{$obj->CourseType}</h3>";
                            echo "<h3>{$obj->CourseAwardName}</h3>";
                            echo "<h3>{$obj->ModeOfAttendance}</h3>";
                            echo "</div>";
                            echo "<p>{$obj->CourseSummary}</p>";
                            echo "<div class=\"courseContent\">";
                            echo "<h4>Starting Year: {$obj->YearOfEntry}</h4>";
                            echo "<h4>Course Length: {$obj->StudyLength}</h4>";
                            echo "</div>";
                            echo "<div class=\"courseContent\">";
                            echo "<h5>UCAS Points: {$obj->UcasPoints}</h5>";
                            echo "<h5>UCAS Code: {$obj->UcasCode}</h5>";
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>
            </div>
        <div class="column">
            <h1><i class="fa-solid fa-computer"></i> Computing <i class="fa-solid fa-computer-mouse"></i></h1>
                <?php
                    while ($obj = $resultComp -> fetch_object()) {
                        echo "<div class=\"courseItem\">";
                        echo "<h2>{$obj->CourseTitle}</h2>";
                        echo "<div class=\"courseContent\">";
                        echo "<h3>{$obj->CourseType}</h4>";
                        echo "<h3>{$obj->CourseAwardName}</h3>";
                        echo "<h3>{$obj->ModeOfAttendance}</h3>";
                        echo "</div>";
                        echo "<p>{$obj->CourseSummary}</p>";
                        echo "<div class=\"courseContent\">";
                        echo "<h4>Starting Year: {$obj->YearOfEntry}</h4>";
                        echo "<h4>Course Length: {$obj->StudyLength}</h4>";
                        echo "</div>";
                        echo "<div class=\"courseContent\">";
                        echo "<h5>UCAS Points: {$obj->UcasPoints}</h5>";
                        echo "<h5>UCAS Code: {$obj->UcasCode}</h5>";
                        echo "</div>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </main>
    <?php
    include("includes/footer.php");
    ?>
</body>
</html>