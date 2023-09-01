<style>
	/* Reset some default styling */


/* Style for full-screen image */
.section-1 {
  height: 100vh;
  background-image: url("<?=base_url('assets/image/lead_back3.jpg'); ?>"); /* Replace with your full-screen image URL */
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
      flex: 1 0 50%; /* 50% width on desktop and full width on mobile */
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
    }
	

  </style>
</head>

<body>
  <div class="scroll-button">
    <a href="<?php echo base_url();?>lead-management"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- Section 1: Full-Screen Image -->
  <section class="section-1">
	
    <!-- Transparent red overlay below the diagonal division -->
    <div class="red-overlay"></div>
    <!-- Transparent gray overlay below the diagonal division -->
    <div class="gray-overlay"><h1>Lead Management</h1><p>Our partnership approach keeps your 
        sales funnel <br> consistently fuelled through innovative ideas to increase leads. <br> Our lead intelligence, 
        segmentation and quality focus <br> delivers qualifies leads for your program requirements.</p>
    <div class="not-overlay"><p>Our partnership approach keeps your 
        sales funnel <br> consistently fuelled through innovative ideas to increase leads. <br> Our lead intelligence, 
        segmentation and quality focus <br> delivers qualifies leads for your program requirements.</p></div></div>
	
   
  </section>

  <!-- Section 2 -->
  <section class="section-2">
    <div class="content">
      <div class="image">
        <!-- Insert your image for section 2 here -->
        <img src="<?=base_url('assets/image/lead_section2.1.avif'); ?>" alt="Section 2 Image">
      </div>
      <div class="text-box">
        <h1>Content Syndication</h1>
        <p>
            We provide our B2B clients with proven marketing services. We take your 
            best material and deliver
             it directly to an engaged audience actively looking for information on your solutions. We also help you keep 
             up consistently with demands of creating relevant, insightful, useful content, enabling you to measure
             every click and conversion, ensuring that your efforts deliver the right results.
        </p>
      </div>
    </div>
  </section>


  <!-- Section 3 -->
  <section class="section-3">
    <div class="content">
      <div class="text-box">
        <h1>Lead Nurturing</h1>
        <p>
            A strategic multi-pronged lead nurturing approach is critical for your success.
             Our lead nurture solutions help you attract buyers and nurture them with personalized programs,
              so sales can step in when prospects are engaged and ready. We help you choose the right outreach channel.
             More target prospects get moved through your opportunity funnel with the help of our critical behavior insights.
        </p>
      </div>
      <div class="image">
        <!-- Insert your image for section 3 here -->
        <img src="<?=base_url('assets/image/lead_section3.2.jpg'); ?>" alt="Section 3 Image">
      </div>
    </div>
  </section>

  <!-- Section 4 -->
  <section class="section-3">
    <div class="content">
        <div class="image">
            <!-- Insert your image for section 3 here -->
            <img src="<?=base_url('assets/image/lead_section4.jpg'); ?>" alt="Section 3 Image">
          </div>
      <div class="text-box">
        <h1>Lead Qualification</h1>
        <p>
            Our lead qualification expertise, gives your team the intelligence, tools, and assistance required to convert leads. 
            All our leads are verified through a rigorous quality assurance process before they make it into your funnel. 
            Our lead preference mechanism helps you gauge audience interest. We rigorously map prospects based on intent levels.
             You can build on the relationship 
            you’ve already begun during prospecting and nurturing phases with our marketing and sales ready leads.
        </p>
      </div>
      
    </div>
  </section>
  

</body>

