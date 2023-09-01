<style>
  /* Reset some default styling */


/* Style for full-screen image */
.section-1 {
  height: 100vh;
  background-image: url("<?=base_url('assets/image/why_us_page.jpg'); ?>"); /* Replace with your full-screen image URL */
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
    <a href="<?php echo base_url();?>why-us-page"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- Section 1: Full-Screen Image -->
  <section class="section-1" id="main" >
	
    <!-- Transparent red overlay below the diagonal division -->
    <div class="red-overlay"></div>
    <!-- Transparent gray overlay below the diagonal division -->
    <div class="gray-overlay"><h1>Why Us</h1><p>Maximize Your B2B Growth with Exponential ROI!<br> with our High-Quality Custom <br>Performance-Based Marketing Solutions.</p>
    <div class="not-overlay"><p>At SeamNux, we're not just another <br> B2B lead generation company – we're your<br> growth partners. What sets us apart is our<br> unwavering commitment to your success, driven by:</p></div></div>
	
   
  </section>

  <!-- Section 2 -->
  <!-- why us Section Start -->
  <section class="about" id="about">
    <div class="content">
      <div class="about-details">
        <div class="left">
          <img src="<?=base_url('assets/image/why_us.jpg'); ?>" alt="Portfolio">
        </div>
        <div class="right">
          <div class="topic">why Seamnux</div>
          <p><b>1. Tailored Strategies:</b> No cookie-cutter solutions here. We craft lead generation strategies as unique as your business, ensuring your message resonates with the right prospects. <br>

<b>2. Smart Data Insights:</b> We don't guess, we know. Our data-driven approach means we target leads with precision, so your efforts hit the bullseye every time.<br>

<b>3. Multi-Channel Magic:</b> From content syndication to email campaigns and account-based marketing, we've got the playbook for reaching your audience wherever they are, driving engagement and conversions.<br>

<b>4. Tech-Forward:</b> Embracing the latest tech trends keeps us ahead. AI, automation – we harness these tools to give you a competitive edge.<br>

<b>5. Clear Results:</b> Transparency isn't just a word; it's how we work. You'll always see how our strategies translate into real-world results.<br>

<b>6. Expert Guides:</b> Our team is a squad of seasoned experts, always ready to guide you through the ever-evolving landscape.<br>

<b>7. Full-Spectrum Services:</b> We're with you at every step – from nurturing leads to enriching data. Our holistic approach ensures no opportunity slips through the cracks.<br>

<b>8. Success Stories:</b> Our track record speaks for itself. We have consistently delivered exceptional results for a diverse range of clients, driving increased sales, revenue growth, and market expansion.<br>

Embrace SeamNux and align with an empowering partnership dedicated to supercharging your lead generation, fueling exponential business growth, and maximizing ROI.
<br><br>
</p>
        </div>
      </div>
    </div>
  </section>
  

</body>

