<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> SEAMNUX | FORMERLY EQUIVENTAS </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style>
		/* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  scroll-behavior: smooth;
}
:root{
    --primary-color:#ba1c1d;
    --black-color:#0E2431;
    --white-color:#fff;
    --gray-color:#58595b;

}
body{
  font-family: 'Ubuntu', sans-serif;
}
/* Custom Scroll Bar CSS */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 12px;
    transition: all 0.3s ease;
}
::-webkit-scrollbar-thumb:hover {
    background: var(--primary-color);
}

/* navbar styling */
nav{
  position:fixed;
  width:100%;
  padding:20px 0;
  z-index: 999;
  transition: all 0.3s ease;
  background:var(--white-color);
}
nav.sticky{
  background:var(--white-color);
  padding:13px 0;
}
nav .navbar{
  width:90%;
  display:flex;
  justify-content: space-between;
  align-items: center;
  margin:auto;
}
nav .navbar .logo a{
  font-weight: 500;
  font-size: 35px;
  color:var(--white-color);
}

nav.sticky .navbar .logo a{
  color:var(--white-color);
}

nav .navbar .menu{
  display:flex;
  position:relative;
}
nav .navbar .menu li{
  list-style: none;
  margin:0 8px;
}
nav .navbar .menu a{
  font-size: 18px;
  font-weight: 500;
  color:var(--black-color);
  padding:6px 0;
  transition: all 0.4s ease;
}
.navbar .menu a:hover{
  color:var(--primary-color);
}
nav.sticky .menu a{
  color:var(--black-color);
}
nav.sticky .menu a:hover{
  color:var(--primary-color);
}
.navbar .media-icons a{
  color:var(--primary-color);
  font-size: 18px;
  margin:0 6px;
}
nav.sticky .media-icons a{
  color:var(--white-color);
}

/* side navigation Menu Button CSS */
nav .menu-btn,
.navbar .menu .cancel-btn{
  position:absolute;
  color:var(--white-color);
  right:30px;
  top:20px;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: none;
}
nav .menu-btn{
  color:var(--black-color);
}
nav.sticky .menu-btn{
  color:var(--black-color);
}
.navbar .menu .menu-btn{
  color:var(--black-color);
}

/* home section styling */
.home{
  height:100vh;
  width:100%;

}
.home .home-content{
  width:90%;
  height:100%;
  margin:auto;
  display:flex;
  flex-direction: column;
  justify-content: center;
}
.home .text-one{
  font-size:25px;
  color:var(--black-color);
}
.home .text-two{
  color:var(--black-color);
  font-size: 75px;
  font-weight: 600;
  margin-left: -3px;
}
.home .text-three{
  font-size: 40px;
  margin:5px 0;
  color:var(--primary-color);
}
.home .text-four{
  font-size: 23px;
  margin:5px 0;
  color:var(--black-color);
}
.home .button{
  margin:14px 0;
}
.home .button button{
  outline:none;
  padding:8px 16px;
  border-radius: 6px;
  font-size: 25px;
  font-weight: 400;
  background:var(--primary-color);
  color:var(--white-color);
  cursor:pointer;
  border:2px solid transparent;
  transition: all 0.4s ease;
}
.home .button button:hover{
  border-color:var(--primary-color);
  background-color: var(--white-color);
  color:var(--primary-color);
}

/* About Section Styling */
section{
  padding-top:40px;
}
section .content{
  width:80%;
  margin:40px auto;
  font-family: 'Poppins', sans-serif;
}
section .title{
  display:flex;
  justify-content: center;
  margin-bottom: 40px;
}
section .title span{
  color:var(--black-color);
  font-size: 30px;
  font-weight: 600;
  position:relative;
  padding-bottom:8px;
}
section .title span::before,
section .title span::after{
  content:'';
  position:absolute;
  height:3px;
  width:100%;
  background:var(--primary-color);
  left:0;
  bottom:0;
}
section .title span::after{
  bottom:-7px;
  width:70%;
  left:50%;
  transform:translateX(-50%);
}
.about .about-details{
  display:flex;
  justify-content:space-between;
  align-items: center;
}
.about .about-details .left{
  width:45%;
}
.about .left img{
  height:400px;
  width:400px;
  object-fit: cover;
  border-radius: 12px;
}
.about .about-details .right{
  width:55%;
}
section .topic{
  color:var(--black-color);
  font-size:25px;
  font-weight: 500;
  margin-bottom: 10px;
}
.about-details .right p{
  text-align: justify;
  color:var(--black-color);
}
section .button{
  margin:16px 0;
}
section .button button{
  outline:none;
  padding:8px 16px;
  border-radius: 4px;
  font-size: 25px;
  font-weight: 400;
  background: var(--primary-color);
  color:var(--white-color);
  border:2px solid transparent;
  cursor: pointer;
  transition: all 0.4s ease;
}
section .button button:hover{
  border-color:var(--primary-color);
  background-color: var(--white-color);
  color:var(--primary-color);
}

/* My Skills CSS */
.skills{
  background:#f0f8ff;
}
.skills .content{
  padding:40px 0;
}
.skills .skills-details{
  display:flex;
  justify-content: space-between;
  align-items: center;
}
.skills-details .text{
  width:50%;
}
.skills-details p{
  color:var(--black-color);
  text-align: justify;
}
.skills .skills-details .experience{
  display:flex;
  align-items: center;
  margin:0 10px;
}
.skills-details .experience .num{
  color:var(--black-color);
  font-size: 80px;
}
.skills-details .experience .exp{
  color:var(--black-color);
  margin-left: 20px;
  font-size: 18px;
  font-weight: 500;
  margin:0 6px;
}
.skills-details .boxes{
  width:45%;
  display:flex;
  flex-wrap: wrap;
  justify-content:space-between;
}
.skills-details .box{
  width:calc(100% / 2 - 20px);
  margin:20px 0;
}
.skills-details .boxes .topic{
  font-size: 20px;
  color:var(--primary-color);
}
.skills-details .boxes .per{
  font-size: 60px;
  color:var(--primary-color);
}

/* My Services CSS */
.services .boxes{
   display:flex; 
   flex-wrap: wrap;
   justify-content:space-between;
}
.services .boxes .box{
  margin:20px 0;
  width:calc(100% / 3 - 20px);
  text-align: center;
  border-radius: 12px;
  padding:30px 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.12);
  cursor:default;
  transition: all 0.4s ease;
}
.services .boxes .box:hover{
  background: var(--primary-color);
  color:var(--white-color);
}
.services .boxes .box .icon{
  height:50px;
  width:50px;
  background: var(--primary-color);
  border-radius: 50%;
  text-align: center;
  line-height: 50px;
  font-size: 18px;
  color:var(--white-color);
  margin:0 auto 10px auto;
  transition: all 0.4s ease;
}
.boxes .box:hover .icon{
  background:var(--white-color);
  color:var(--primary-color);
}
.services .boxes .box:hover .topic,
.services .boxes .box:hover p{
  color:var(--white-color);
  transition: all 0.4s ease;
}

/* Contact Me CSS */
.contact{
  background: #f0f8ff;
}
.contact .content{
  margin:0 auto;
  padding:30px 0;
}
.contact .text{
  width:80%;
  text-align: center;
  margin:auto;
}

/* Footer CSS */
footer{
  background:var(--primary-color);
  padding:15px 0;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}
footer .text span{
  font-size: 17px;
  font-weight: 400;
  color:var(--white-color);
}
footer .text span a{
  font-weight: 500;
  color:var(--white-color);
}
footer .text span a:hover{
  text-decoration: underline;
}
/* Scroll To Top Button CSS */
.scroll-button a{
  position:fixed;
  bottom:20px;
  right:20px;
  color:var(--white-color);
  background:var(--primary-color);
  padding:10px 12px;
  font-size: 18px;
  border-radius: 6px;
  box-shadow: rgba(0,0,0,0.15);
  display:none;
}

/* Responsive Media Queries */
@media (max-width:1190px){
  section .content{
    width:85%;
  }
}
@media (max-width:1000px){
  .about .about-details{
    justify-content: center;
    flex-direction: column;
  }
  .about .about-details .left{
    display: flex;
    justify-content:center;
    width:100%;
  }
  .about .about-details .right{
    width:90%;
    margin:40px 0;
  }
  .services .boxes .box{
    margin:20px 0;
    width:calc(100% / 2 - 20px);
  }
}
@media (max-width:900px){
  .about .left img{
    height:350px;
    width:350px;
  }
}
@media (max-width:750px){
   nav .navbar{
     width:90%;
   }
   nav .navbar .menu{
     position:fixed;
     left:-100%;
     top:0;
     background:var(--primary-color);
     height:100vh;
     max-width: 400px;
     width:100%;
     padding-top:60px;
     flex-direction: column;
     align-items:center;
     transition: all 0.5s ease;
   }
   .navbar.active .menu{
     left:0;
   }
   nav .navbar .menu a{
     font-size:23px;
     display:block;
     color:var(--white-color);
     margin:10px 0;
   }
   nav.sticky .menu a:hover{
     color:var(--primary-color);
   }
   nav .navbar .media-icons{
     display:none;
   }
   nav .menu-btn,
   .navbar .menu .cancel-btn{
     display:block;
   }

   .home .text-two{
     font-size: 65px;
   }
   .home .text-three{
    font-size: 35px;
  }

  .skills .skills-details{
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  .skills-details .text{
    width:100%;
    margin-bottom:50px;
  }
  .skills-details .boxes{
    justify-content:center;
    align-items: center;
    width:100%;
  }

  .services .boxes .box{
    margin:20px 0; 
    width:100%;
  }

  .contact .text{
    width:100%;
  }
}

@media (max-width:500px){
  .home .text-two{
    font-size: 55px;
  }
  .home .text-three{
    font-size: 33px;
  }

  .skills-details .boxes .per{
    font-size: 50px;
    color:var(--primary-color);
  }
}
nav .navbar .menu a {
  position: relative; /* Add this to make the pseudo-element relative to the link */
  font-size: 18px;
  font-weight: 500;
 
  padding: 6px 0;
  transition: all 0.4s ease;
}

/* Add the new CSS for the underline effect */
nav .navbar .menu a::before {
  content: '';
  position: absolute;
  width: 0; /* Initial width set to 0 */
  height: 2px;
  bottom: -3px; /* Position the underline below the text */
  left: 0;
  background-color: var(--primary-color);
  transition: width 0.4s ease; /* Animation duration for the underline */
}

/* On hover, increase the width of the pseudo-element to 100% */
nav .navbar .menu a:hover::before {
  width: 100%;
}

/* Additional CSS for sticky navigation state */
nav.sticky .navbar .menu a::before {
  background-color: var(--primary-color); /* Set the color to black for sticky state */
}

/* Additional CSS for sticky navigation state on hover */
nav.sticky .navbar .menu a:hover::before {
  width: 100%;
}
/* ... Existing CSS code ... */

/* Dropdown Menu Styles */
nav .menu li {
  position: relative;
}

nav .menu li .sub-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: var(--white-color);
  min-width: 200px;
  padding: 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  z-index: 1;
  margin-top: 10px; /* Add margin-top to create spacing */
}

nav .menu li:hover .sub-menu {
  display: block;
  
}

nav .menu li .sub-menu li {
  margin: 6px 0;
}

nav .menu li .sub-menu li a {
  color: var(--black-color);
  display: block;
  padding: 5px 0;
  text-decoration: none;
} 
 
/* ... Existing CSS code ... */

/* Home Section Styling */




.overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.content-box {
  width: 40%;
  height: 40%;
  background-color: rgba(186,28,29, 0.5); /* Red with transparency */
  margin: 20px;
}

.heading {
  text-align: center;
  color: #fff;
}

.heading h1 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 10px;
}

.heading p {
  font-size: 20px;
  font-weight: 500;
}
video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo img {
            max-width: 100px; /* Adjust the maximum width as needed */
            height: auto;
        }


/* Your existing styles */

.button-section {
  text-align: center;
  padding: 40px 0;
}

.button-box {
  display: flex;
  justify-content: center;
  background-color: #58595b;
  padding: 10px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  max-width: 600px; /* Adjust the maximum width as needed */
  margin: 0 auto; /* Center the button box horizontally */
}

 .button-box .button {
  padding: 10px 20px;
  background-color: transparent; /* Set the background to transparent */
  color: #ffffff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
  margin: 5px; /* Increase the gap between buttons to 5px */
}

.button-box .button:hover {
  background-color: #ba1c1d; /* Change to gray on hover */
}

.button-box .button:active {
  background-color: #58595b; /* Change to gray on click */
}

.content-container {
  display: none;
}

.content-container.active {
  display: block;
}

.section {
  text-align: center;
  margin: 20px 0;
}

.section img {
  max-width: 100%;
  height: auto;
}
/* Your existing styles */



/* Your existing styles */

/* Your existing styles */

.image-grid {
  display: flex;
  flex-wrap: wrap; /* Allow images to wrap to the next line */
  justify-content: center; /* Center the images horizontally */
  padding: 0 10px; /* Add 10px padding on the left and right */
  max-width: 100%; /* Set a maximum width to fit within the screen */
}

.image-grid img {
  max-width: 30%; /* Set a specific maximum width for the images */
  height: auto;
  margin: 5px; /* Adjust the spacing between images */
}

/* Media queries for adjusting layout based on screen size */
@media (max-width: 768px) {
  .image-grid {
    flex-direction: column; /* Display images in a column for mobile view */
    padding: 0; /* Remove padding in mobile view */
    overflow-x: hidden; /* Hide horizontal scroll in mobile view */
  }

  .image-grid img {
    max-width: 100%; /* Set the maximum width to 100% in mobile view */
  }
  .button-box {
    flex-direction: column; 
  }

  .button {
    margin: 5px 0; /* Add vertical spacing between buttons in mobi*/
  }
}
/* Your existing styles */

/* Your existing styles */

.button.active {
  /* Add your styles for the active button */
  background-color: #ba1c1d; /* Change the background color to highlight */
  color: #fff; /* Change the text color to white for better visibility */
}


.content-container .big-heading {
  font-size: 3em; /* Adjust the font size to make it big */
  text-align: center; /* Center the heading */
  color: #58595b; /* Set the color to gray (#888) */
  padding-top: 100px;
}
	 </style>
   </head>
<body>

  <!-- Move to up bottom -->
 <!--  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div> -->
  
  <!-- navigation menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="<?php echo base_url();?>main"><img src="<?=base_url('assets/image/logo_new2.png'); ?>" alt="MyWeb Logo"></a></div>
      <ul class="menu">
        <li><a href="<?php echo base_url();?>why-us">WHY US</a></li>
        <li><a href="<?php echo base_url();?>solutions">SOLUTIONS</a>
          <ul class="sub-menu">
            <li><a href="<?php echo base_url();?>condition-syndication">Content Syndication</a></li>
            <li><a href="<?php echo base_url();?>lead-nurturing">Lead Nuturing</a></li>
            <li><a href="<?php echo base_url();?>account-based">A.B.M</a></li>
            <li><a href="<?php echo base_url();?>data-enrichment">Data Enrichment</a></li>
            <li><a href="<?php echo base_url();?>contact-discovery">Contact Discovery</a></li>
            <li><a href="<?php echo base_url();?>sales-targets-page">Sales Targeting</a></li>
            <li><a href="<?php echo base_url();?>smart-lead">Lead Qualification</a></li>
            <!-- Add other service items here -->
          </ul></li>
        <li><a href="<?php echo base_url();?>case-studies">CASE STUDIES</a></li>
        <li><a href="<?php echo base_url();?>about-uspage">ABOUT</a></li>
        <li><a href="<?php echo base_url();?>careers">CAREERS</a></li>
       <!--  <li><a href="#contact">BLOG</a></li> -->
        <li><a href="<?php echo base_url();?>contact-us">CONTACT US</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
      <!-- <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div> -->
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>