( () => {
    // Navigation for Mobile
    const menu = document.querySelector(".nav");
    const toggleMenu = document.querySelector(".burger");
    
    toggleMenu.addEventListener("click", () => {
        menu.classList.toggle("navOpen");
        toggleMenu.classList.toggle("burgerOpen");
    });
    
    // Dropdown in Nav Bar
    const drop = document.querySelector(".dropList");
    const dropToggle = document.querySelector(".dropdown");
    
    dropToggle.addEventListener("click", () => {
        drop.classList.toggle("dropListOpen");
    });
    drop.addEventListener("click", () => {
        drop.classList.remove("dropListOpen");
    });
    
    // Image Slider
    let images = ["images/atrium1-2.jpg", "images/atrium2.jpg", "images/atrium1-3.jpg", "images/atrium3-2.jpg", "images/atrium4.png", "images/lectureHall2.JPG", "images/CompLab1.jpg", "images/Gallery.jpg"];
    let countImg = 0;
    setInterval(chgImg, 5000);

    function chgImg() {
        document.getElementById("facimgs").setAttribute("src", images[countImg]);
        countImg++;
        if (countImg == images.length) {
            countImg = 0;
        }
    }

    document.getElementById("prevImg").addEventListener("click", prevImgs);
    function prevImgs() {
        document.getElementById("facimgs").setAttribute("src", images[countImg--]);
        if (countImg == 0) {
            countImg = images.length;
        }
    }
    document.getElementById("nextImg").addEventListener("click", nextImgs);
    function nextImgs() {
        document.getElementById("facimgs").setAttribute("src", images[countImg++]);
        if (countImg = images.length) {
            countImg = 0;
        }
    }

    }) ();