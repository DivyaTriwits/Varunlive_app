<style type="text/css">

  .contact-form {
            background-image: white;
            background-color: linear-gradient(180deg, rgba(186,28,29, 0.7) 25%, transparent 50%);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
           margin-left: 100px;
           margin-right: 100px;
           margin-bottom: 10px;
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form .form-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-form .form-group label {
            flex-basis: 100px;
            font-weight: bold;
            margin-bottom: 5px;
            margin-left: 15px;
        }

        .contact-form .form-group input[type="text"],
        .contact-form .form-group input[type="email"],
        .contact-form .form-group input[type="submit"],
        .contact-form .form-group textarea {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .contact-form .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        .contact-form input[type="submit"] {
            background-color: #ba1c1d; 
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #ba1c1d;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            .contact-form .form-group {
                flex-direction: column;
            }

            .contact-form .form-group label {
                flex-basis: 100%; /* Take full width in mobile view */
            }
        }
        /* Media query for mobile devices */
    @media (max-width: 768px) {
      .contact-form {
            
            background-color: #fff;
            padding: 20px;
            margin-right: 0;
            margin-left: 0;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
        }
    }
</style>
<section id="contact_us">
<div class="contact-form">
        <div class="title"><span>Contact us</span></div>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Your Email" required>

                <label for="company">Company Name:</label>
                <input type="text" name="company" id="company" placeholder="Your Company Name">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            </div>

            <input type="submit" value="Send Message">
        </form>
    </div>
    </section>

 <footer>
    <div class="text">
      <span><a href="#">Developed By Triwits</a> | © 2015-2023 All Rights Reserved.</span>
    </div>
  </footer>
  <script >// Sticky Navigation Menu Js

  let nav = document.querySelector("nav");
  let scrollBtn = document.querySelector(".scroll-button a");
  
  let val;
  
  window.onscroll = function() {
    if(document.documentElement.scrollTop > 20){
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
    }else{
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
    }
  }
  
  // Side Navigation Menu Js
  let body = document.querySelector("body");
  let navBar = document.querySelector(".navbar");
  let menuBtn = document.querySelector(".menu-btn");
  let cancelBtn = document.querySelector(".cancel-btn");
  
  menuBtn.onclick = function() {
    navBar.classList.add("active");
    menuBtn.style.opacity = "0";
    menuBtn.style.pointerEvents = "none";
    body.style.overflowX = "hidden";
    scrollBtn.style.pointerEvents = "none";
  }
  
  cancelBtn.onclick = function() {
    navBar.classList.remove("active");
    menuBtn.style.opacity = "1";
    menuBtn.style.pointerEvents = "auto";
    body.style.overflowX = "auto";
    scrollBtn.style.pointerEvents = "auto";
  }
  
  // Side Navigation Bar Close While We click On Navigation Links
  
  let navLinks = document.querySelectorAll(".menu li a");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click" , function() {
    navBar.classList.remove("active");
    menuBtn.style.opacity = "1";
    menuBtn.style.pointerEvents = "auto";
    });
  }
   function showContent(contentNumber) {
  const allButtons = document.querySelectorAll(".button");
  for (let i = 0; i < allButtons.length; i++) {
    if (i + 1 === contentNumber) {
      allButtons[i].classList.add("active");
    } else {
      allButtons[i].classList.remove("active");
    }
  }

  const allContentContainers = document.querySelectorAll(".content-container");
  for (let i = 0; i < allContentContainers.length; i++) {
    if (i + 1 === contentNumber) {
      allContentContainers[i].style.display = "block";
    } else {
      allContentContainers[i].style.display = "none";
    }
  }
}

// Add this line at the end of the script to set the first button as active by default
document.querySelector(".button").classList.add("active");



  
  </script>