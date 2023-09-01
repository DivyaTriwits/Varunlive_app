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