<style>
  /* Reset some default styling */


/* Style for full-screen image */
.section-1 {
  height: 100vh;
  background-image: url("<?=base_url('assets/image/logo_new2.png'); ?>"); /* Replace with your full-screen image URL */
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}



/* Style for headings */
h1 {
  font-size: 32px;
  margin-bottom: 10px;
}

/* Style for paragraphs */
p {
  font-size: 18px;
}
/* Transparent red overlay below the diagonal division */
.red-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(135deg, rgba(186,28,29, 0.7) 50%, transparent 50%);
      pointer-events: none;
    }

    /* Transparent gray overlay below the diagonal division */
    .gray-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(135deg, transparent 50%, rgba(128, 128, 128, 0.7) 50%);
      pointer-events: none;
    }
    /* Style for big headings */
    .gray-overlay h1 {
      font-size: 48px;
      color: rgb(255, 253, 253);
      text-align: left;
      margin-top: 18%;
      margin-left: 5%;
    }
    .gray-overlay p {
     
      color: rgb(255, 255, 255);
      text-align: left;
      margin-top: 0%;
      margin-left: 5%;
    }
      /* Style for big headings */
  
    .not-overlay p {
     
        color: rgb(255, 255, 255);
      text-align: right;
      margin-top: 8%;
      margin-right: 5%;
    }
    /* Style for Section 2 */
    .section-2 {
      background-color: #f1f1f1;
      padding: 40px 0;
    }

     .content {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
     
    }

    .image {
      flex: 1 ; /* 50% width on desktop and full width on mobile */
      text-align: center;
      padding: 10px;
    }

    .image img {
      width: 100%; /* Take full width on mobile */
      max-width: 100%; /* Limit image width on desktop */
      height: auto;
    }

    .text-box {
      flex: 1;
      background-color: #ba1c1d;
      padding: 20px;
      color: white;
      width: 100%; /* Full width on mobile */
      max-width: 100%; /* Limit text width on desktop */

    }

    /* Media query for mobile devices */
    @media (max-width: 768px) {
      .image, .text-box {
        flex: 1 0 100%; /* 100% width on mobile and flexible on larger screens */
        padding: 0; /* Remove padding on mobile */
      }
      .not-overlay p {
     
        color: rgb(255, 255, 255);
      text-align: right;
      margin-top: 15%;
      margin-right: 5%;
    }
    .text-box {
      padding: 20px;
    }
    }

  </style>
</head>

<body>
  <div class="scroll-button">
    <a href="<?php echo base_url();?>about-uspage"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- Section 1: Full-Screen Image -->
  <section class="section-1" id="main" >
	
    <!-- Transparent red overlay below the diagonal division -->
    <div class="red-overlay"></div>
    <!-- Transparent gray overlay below the diagonal division -->
    <div class="gray-overlay"><h1>About Us</h1><p>Maximize Your B2B Growth with Exponential ROI!<br> with our High-Quality Custom <br>Performance-Based Marketing Solutions.</p>
    <div class="not-overlay"><p>At SeamNux, we're not just another <br> B2B lead generation company – we're your<br> growth partners. What sets us apart is our<br> unwavering commitment to your success, driven by:</p></div></div>
	
   
  </section>

  <!-- Section 2 -->
  <!-- why us Section Start -->
  <section class="about" id="about">
    <div class="content">
      <div class="about-details">
        <div class="left">
          <img src="<?=base_url('assets/image/about_us.jpg'); ?>" alt="Portfolio">
        </div>
        <div class="right">
          <div class="topic">About Seamnux</div>
          <p><b>Founded in 2019</b> SeamNux (formerly Equiventas) is a leading company specializing in performance-based marketing services. Our comprehensive suite of services includes content syndication, data enrichment, intent data analysis, digital marketing, and AI integration. We help businesses increase their revenue and drive growth by reaching their target audience with engaging content through our content syndication services. 
From demand generation and content syndication to account-based marketing and data enrichment, our solutions cover all aspects of B2B marketing. We understand the ever-changing market dynamics and utilize cutting-edge technologies to stay ahead of the curve, ensuring that your business stays ahead too.Our expertise in digital marketing spans SEO, social media, email campaigns, and paid advertising, driving online visibility and engagement. With AI integration, we optimize campaigns, automate processes, and deliver personalized experiences.

</p>
        </div>
      </div>
    </div>
  </section>
  

</body>

