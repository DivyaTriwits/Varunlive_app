<style>
	/* Reset some default styling */


/* Style for full-screen image */
.section-1 {
  height: 100vh;
  background-image: url("<?=base_url('assets/image/sales.jpg'); ?>"); /* Replace with your full-screen image URL */
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
    <a href="<?php echo base_url();?>sales-targets"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- Section 1: Full-Screen Image -->
  <section class="section-1">
	
    <!-- Transparent red overlay below the diagonal division -->
    <div class="red-overlay"></div>
    <!-- Transparent gray overlay below the diagonal division -->
    <div class="gray-overlay"><h1>Sales Targeting</h1><p>Our partnership approach keeps your 
        sales funnel <br> consistently fuelled through innovative ideas to increase leads. <br> Our lead intelligence, 
        segmentation and quality focus <br> delivers qualifies leads for your program requirements.</p>
    <div class="not-overlay"><p>Our partnership approach keeps your 
        sales funnel <br> consistently fuelled through innovative ideas to increase leads. <br> Our lead intelligence, 
        segmentation and quality focus <br> delivers qualifies leads for your program requirements.</p></div></div>
	
   
  </section>

  <!-- Section 2 -->
  <section class="section-2" id="sales_targets">
    <div class="content">
      <div class="image">
        <!-- Insert your image for section 2 here -->
        <img src="<?=base_url('assets/image/marketing.jpg'); ?>" alt="Section 2 Image">
      </div>
      <div class="text-box">
        <h1>Sales Targeting</h1>
        <p>
           <h3>Refine Your Targeting</h3>
Enhance your marketing efforts with precise audience profiling. Understand your customers' needs and challenges better, as we develop a deep understanding of your target audience to engage them effectively. Our cutting-edge technology allows you to identify your clients' content preferences, ensuring relevant and engaging interactions.
Effectively define your target accounts by unifying and analyzing consumer buying behavior across multiple touchpoints. Our account intelligence approach empowers you to maximize your sales opportunities and drive better results.

        </p>
      </div>
    </div>
  </section>
  <!-- Section 3 -->
  

</body>

