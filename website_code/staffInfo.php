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
    <title>Staff Information</title>
</head>
<body>
    <?php
        include("includes/header.php")
    ?>
    
    <section class="pageHeader">
        <h1>Information For Staff</h1>
        <div class="btn">
            <a class="yellow" href="learningResources.php">Learning Resources</a>
            <a class="orange" href="studentInfo.php">Student Information</a>
        </div>
    </section>
    <div class="breakLine"></div>

    <main class="main-infostaff">
        <div class="row">
            <div class="column staff-item">
                <h2><i class="fa-solid fa-newspaper"></i>News</h2>
                <p>Cantor College recently hosted the Software Engineering student of the year awards. 
                    <br>Shortlisted candidates from around the country attended the one day event.
                </p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-id-card"></i>Academic Registry</h2>
                <p>For academic regulations, assessment, awards, student records and course validation.</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-money-check-dollar"></i>Financial Services</h2>
                <p>The financial team based on the 2nd Floor are responsible for all areas of student finance as well as College budgeting.</p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-circle-info"></i>Information Systems Services</h2>
                <p>The ISS team delivers the College’s computing facilities including all hardware and software. They also run the staff helpdesk.</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-shop"></i>Marketing Services</h2>
                <p>The Marketing Team will help promote events and new courses. They will help with press release preparation.</p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-person"></i>Personnel Services</h2>
                <p>All staff pay and conditions enquiries should be directed to the Personnel Services team on the 3rd floor.</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><a href="facilities.php"><i class="fa-solid fa-building"></i>Facilities</a></h2>
                <p>The facilities are responsible for the general care and maintenance of the College. All enquiries via the main helpdesk.</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <img src="images/lectureStaff.jpg" alt="Staff_Lecture" class="col-img">
            </div>
            <div class="column">
                <img src="images/international.jpg" alt="International_Students" class="col-img">
            </div>
        </div>
    </main>
    <?php
        include("includes/footer.php")
    ?>
</body>
</html>