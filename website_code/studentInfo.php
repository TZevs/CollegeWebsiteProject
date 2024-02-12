<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <title>Student Information</title>
</head>
<body>
    <?php
        include("includes/header.php")
    ?>
     <section class="pageHeader">
        <h1>Information For Students</h1>
        <div class="btn">
            <a class="yellow" href="courses.php">Visit Courses</a>
            <a class="orange" href="staffInfo.php">Staff Information</a>
        </div>
    </section>

    <div class="breakLine"></div>

    <main class="main-infostudents">
        <div class="h2infostu">
            <h2>Academic Information</h2>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-person-chalkboard"></i>Faculty</h2>
                <p><a href="https://www.shu.ac.uk/about-us/our-people/staff-profiles" aria-label="Search Staff Profiles"><u>Search Staff Profiles</u></a></p>
                <p><a href="courses.php" aria-label="Visit Courses"><u>Visit Courses</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-building"></i>Departments</h2>
                <p><a href="https://www.shu.ac.uk/about-us/academic-departments" aria-label="Departments in the University Structure"><u>Departments in the University Structure</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/subject-areas" aria-label="A-Z Subject Areas"><u>A-Z Subject Areas</u></a></p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-book"></i>Libraries</h2>
                <p><a href="https://www.shu.ac.uk/myhallam/it-and-library" aria-label="IT and Library"><u>IT and Library</u></a></p>
                <p><a href="https://libguides.shu.ac.uk/pages/library" aria-label="Search the Libraries"><u>Search the Libraries</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-laptop"></i>Learning Resources Services</h2>
                <p><a href="https://www.shu.ac.uk/study-here/international/academic-support-for-international-students/online-academic-skills-resources" aria-label="Online Academic Skills Resources"><u>Online Academic Skills Resources</u></a></p>
                <p><a href="learningResources.php" aria-label="Learning Resources Page"><u>Learning Resources Page</u></a></p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-earth-europe"></i></i>Academic Partners</h2>
                <p><a href="https://www.shu.ac.uk/study-here/international/global-partnerships" aria-label="Global Partnerships"><u>Global Partnerships</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/international/exchanges-and-study-abroad-programmes/exchange-partners" aria-label="Study Abroad Institutions"><u>Study Abroad Institutions</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-book-bookmark"></i>Research</h2>
                <p><a href="https://www.shu.ac.uk/research" aria-label="Overview"><u>Overview</u></a></p>
                <p><a href="https://www.shu.ac.uk/research/specialisms" aria-label="Research Areas"><u>Research Areas</u></a></p>
                <p><a href="https://www.shu.ac.uk/research/in-action" aria-label="Example Projects"><u>Example Projects</u></a></p>
            </div>
        </div>

        <div class="h2infostu">
            <h2>Administrative Support</h2>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-id-card"></i>Academic Registry</h2>
                <p><a href="https://www.shu.ac.uk/myhallam/key-dates" aria-label="Academic Calendar Key Dates"><u>Academic Calendar Key Dates</u></a></p>
                <p><a href="https://www.shu.ac.uk/myhallam/study/module-selection/module-selection-guide" aria-label="Module Selection Guide"><u>Module Selection Guide</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/international/fees-scholarships-and-discounts/tuition-fees" aria-label="Tuition Fees"></a><u>Tuition Fees</u></p>
                <p><a href="https://www.shu.ac.uk/jobs/what-we-do/student-and-academic-support" aria-label="Student and Academic Support"><u>Student and Academic Support</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-diamond-turn-right"></i>Student Guide to Regulations</h2>
                <p><a href="https://www.shu.ac.uk/myhallam/university-life/university-rules-and-regulations" aria-label="Rules and Regulations"><u>Rules and Regulations</u></a></p>
                <p><a href="#" aria-label="WWW Code of Practice"><u>WWW Code of Practice</u></a></p>
                <p><a href="https://www.shu.ac.uk/about-this-website/freedom-of-information/our-policies-and-procedures" aria-label="Policies and Procedures"><u>Policies and Procedures</u></a></p>
            </div>
        </div>

        <div class="h2infostu">
            <h2>Student Services</h2>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-question"></i>Advisory and Counselling</h2>
                <p><a href="https://www.shu.ac.uk/myhallam/support-at-hallam/su-student-advice-centre" aria-label="Advice Centre"><u>Advice Centre</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/international/international-experience-team" aria-label="International Experience Team"><u>International Experience Team</u></a></p>
                <p><a href="https://www.shu.ac.uk/careers" aria-label="Career Guidance"><u>Career Guidance</u></a></p>
                <p><a href="https://www.shu.ac.uk/wellbeing/appointments/counselling" aria-label="Counselling"><u>Counselling</u></a></p>
                <p><a href="https://www.shu.ac.uk/funding" aria-label="Student Funding Help"><u>Student Funding Help</u></a></p>
                <p><a href="https://www.shu.ac.uk/myhallam/support-at-hallam/disabled-student-support" aria-label="Disability Student Support"><u>Disability Student Support</u></a></p>
            </div>
            <div class="column">
                <h2>Campus Centres</h2>
                <p><a href="https://www.shu.ac.uk/study-here/international/international-experience-team/on-your-arrival/register-for-the-medical-centre" aria-label="Register for Medical Centre"><u><i class="fa-solid fa-kit-medical"></i>Register for Medical Centre</u></a></p>
                <p><a href="https://www.shu.ac.uk/myhallam/support-at-hallam/multifaith-chaplaincy/somewhere-to-pray" aria-label="Multi-Faith Centre"><u><i class="fa-solid fa-place-of-worship"></i>Multi-Faith Centre</u></a></p>
                <p><a href="https://www.shu.ac.uk/nursery" aria-label="Pre-School / Nurseries"><u><i class="fa-solid fa-school"></i>Pre-School / Nurseries</u></a></p>
                <p><a href="https://www.shu.ac.uk/sport/sports-facilities" aria-label="Sports Facilities"><u><i class="fa-solid fa-dumbbell"></i>Sports</u></a></p>
            </div>
        </div>

        <div class="h2infostu">
            <h2>University Services</h2>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-utensils"></i>Catering Services</h2>
                <p><a href="https://www.shu.ac.uk/eating-on-campus" aria-label="Eating on Campus"><u>Eating on Campus</u></a></p>
                <p><a href="https://www.shu.ac.uk/business/event-services/conferences/catering" aria-label="Catering"><u>Catering</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-print"></i>Printing Services</h2>
                <p><a href="https://www.shu.ac.uk/the-print-shop" aria-label="The Print Shop"><u>The Print Shop</u></a></p>
                <p><a href="https://shu.myprintdesk.net/DSF/SmartStore.aspx?6xni2of2cF03r7xmhqb8hqI8Cby1oVgKJdnzux2EJich4u37yVDbIT9thz6kBmCi#!/Storefront" aria-label="Want to Print"><u>Want to Print?</u></a></p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-house"></i>Student Accommodation</h2>
                <p><a href="https://www.shu.ac.uk/study-here/accommodation" aria-label="Accommodation Overview"><u>Accommodation </u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/accommodation/how-and-when-to-apply" aria-label="How To Apply"><u>How To Apply</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/accommodation/private-sector" aria-label="Private Sector Accommodation"><u>Private Sector Accommodation</u></a></p>
            </div>
        </div>

        <div class="h2infostu">
            <h2>Life At University</h2>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-palette"></i>The Arts</h2>
                <p><a href="https://www.shu.ac.uk/research/specialisms/culture-creativity-research-institute/research-centres/art-and-design-research-centre" aria-label="Arts Research Centre"><u>Arts Research Centre</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/sheffield/arts-and-culture" aria-label="Arts and Culture in Sheffield"><u>Arts and Culture in Sheffield</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-handshake"></i>Students' Union</h2>
                <p><a href="https://www.hallamstudentsunion.com/" aria-label="Student Union Website"><u>Student Union Website</u></a></p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-diamond-turn-right"></i></i>University Guide</h2>
                <p><a href="https://www.shu.ac.uk/myhallam/university-life" aria-label="University Life"><u>University Life</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/student-life" aria-label="Student Life"><u>Student Life</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-regular fa-compass"></i>Campus Navigator</h2>
                <p><a href="location.php" aria-label="Map of the Campus and Building Directions"><u>Map of the Campus and Building Directions</u></a></p>
            </div>
        </div>

        <div class="h2infostu">
            <h2>Communications</h2>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-regular fa-clipboard"></i>Noticeboards</h2>
                <p><a href="https://www.hallamstudentsunion.com/ents/eventlist/" aria-label="Upcoming Events"><u>Upcoming Events</u></a></p>
                <p><a href="https://www.shu.ac.uk/study-here/sheffield/arts-and-culture" aria-label="Arts and Culture in Sheffield"><u>Arts and Culture in Sheffield</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-magnifying-glass"></i>Student Email Search</h2>
                <p><a href="https://outlook.office.com/mail/" aria-label="Outlook"><u>Outlook</u></a></p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h2><i class="fa-solid fa-magnifying-glass"></i>Staff Search</h2>
                <p><a href="https://www.shu.ac.uk/about-us/our-people/staff-profiles" aria-label="Search Staff Profiles"><u>Search Staff Profiles</u></a></p>
            </div>
            <div class="column">
                <h2><i class="fa-solid fa-list"></i>Services</h2>
                <p><a href="https://www.shu.ac.uk/about-this-website/freedom-of-information/the-services-we-offer" aria-label="List of Services we Offer"><u>List of Services we Offer</u></a></p>
            </div>
        </div>
    </main>
    <?php
        include("includes/footer.php")
    ?>
</body>
</html>