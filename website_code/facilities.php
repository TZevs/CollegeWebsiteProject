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
    <title>Facilities</title>
</head>
<body>
    <?php
        include("includes/header.php")
    ?>
    
    <section class="pageHeader">
        <h1>Facilities</h1>
        <p>Within the college building the following are available.</p>
    </section>
    <div class="breakLine"></div>

    <main class="main-fac">
        <div class="slider">
            <div class="arrows">
                <i class="fa-solid fa-arrow-left" id="prevImg"></i>
                <i class="fa-solid fa-arrow-right nextImg" id="nextImg"></i>
            </div>
            <img src="" alt="Facility_Images" id="facimgs" class="sliderimg" loading="lazy">
        </div>

        <div class="breakLine"></div>

        <div class="fac-text">
            <p>The College is located in the attractive and pleasantly refurbished Building.</p>
            <p>The building houses computing laboratories, and lecture/tutorial rooms. It has its own catering facilities and student work areas.</p>
            <p>There is also a car park to the back of the building.</p>
            <p>Our building has space of 9500m², houses over 240 staff and provides teaching space for more than 1600 students.</p>
            <h2><u>Our Buildings Include:</u></h2>
        </div>

        <div class="row">
            <div class="fac-item column">
            <i class="fa-solid fa-wifi"></i>
                <h3>Wifi Technology</h3>
                <p>Accessible throughout the building using student login details.</p>
            </div>
            <div class="fac-item column">
            <i class="fa-solid fa-desktop"></i>
                <h3>Specialist Faculty Facilities</h3>
                <p>Areas and equipment for specialist faculty to help students with.</p>
            </div>
        </div>

        <div class="row">
            <div class="fac-item column">
            <i class="fa-solid fa-robot"></i>
                <h3>Specialist IT Facilities</h3>
                <p>Equipment for specific projects such as; AR headset, robots.</p>
            </div>
            <div class="fac-item column">
            <i class="fa-solid fa-masks-theater"></i>
                <h3>Lecture Theatre</h3>
                <p>A double height lecture theatre at first and second floor level.</p>
            </div>
        </div>

        <div class="row">
            <div class="fac-item column">
            <i class="fa-brands fa-windows"></i>
                <h3>Open Atrium</h3>
                <p>A dramatic three-storey glass open atrium.</p>
            </div>
            <div class="fac-item column">
            <i class="fa-solid fa-handshake"></i>
                <h3>Meeting Rooms</h3>
                <p>Open to staff and students for acdemic advisor project meetings.</p>
            </div>
        </div>

        <div class="row">
            <div class="fac-item column">
            <i class="fa-solid fa-door-open"></i>
                <h3>Office Accommodation</h3>
                <p>Staff offices that students can access to ask for help or advice on any topic.</p>
            </div>
            <div class="fac-item column">
            <i class="fa-solid fa-circle-info"></i>
                <h3>Reception Desk Area</h3>
                <p>A help desk near the entrance of the building, staff available to help students.</p>
            </div>
        </div>

        <div class="row">
            <div class="fac-item column">
            <i class="fa-solid fa-utensils"></i>
                <h3>Cafe</h3>
                <p>Catering outlet that offers hot and cold food & drink for a snack or meal.</p>
            </div>
            <div class="fac-item column">
            <i class="fa-solid fa-wheelchair"></i>
                <h3>Disabled Access</h3>
                <p>Parking for disabled badge holders.</p>
            </div>
        </div>

        <div class="row">
            <div class="fac-item column">
            <i class="fa-solid fa-bicycle"></i>
                <h3>Cycle Racks</h3>
                <p>A secure area to store your bike; requires your university ID badge to enter.</p>
            </div>
            <div class="fac-item column">
            <i class="fa-regular fa-image"></i>
                <h3>Gallery</h3>
                <p>A large disply to show off the students work for the public or parents that come to visit.</p>
            </div>
        </div>
    </main>

    <?php
        include("includes/footer.php")
    ?>
</body>
</html>