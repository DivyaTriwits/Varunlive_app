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
    <a href="<?php echo base_url();?>lead-management"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- Section 1: Full-Screen Image -->
  <section class="section-1" id="main">
	
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
  <section class="section-2" id="content_syndication">
    <div class="content">
      <div class="image">
        <!-- Insert your image for section 2 here -->
        <img src="<?=base_url('assets/image/lead_section2.1.avif'); ?>" alt="Section 2 Image">
      </div>
      <div class="text-box">
        <h1>Content Syndication</h1>
        <p>
           <h3>Amplify Your Content To Reach The Perfect Audience</h3>
We offer reliable marketing solutions. We take your top-notch content and ensure it reaches a receptive audience actively seeking information about your offerings. Additionally, we assist you in maintaining a consistent flow of relevant, valuable content, while tracking every click and conversion to guarantee optimal outcomes from your efforts.

        </p>
      </div>
    </div>
  </section>


  <!-- Section 3 -->
  <section class="section-3" id="lead_nurturing">
    <div class="content">
      <div class="text-box">
        <h1>Lead Nurturing</h1>
        <p>
            <h3>Capture interested prospects</h3>
To achieve success, a well-planned and diverse lead nurturing strategy is essential. Our lead nurture solutions are designed to attract interested buyers and guide them through personalized programs until they are ready for sales engagement. We assist you in selecting the most effective outreach channels. Leveraging critical behavior insights, we ensure more target prospects progress through your opportunity funnel, leading to enhanced results. Lead Nurturing is the key to capturing engaged buyers

        </p>
      </div>
      <div class="image">
        <!-- Insert your image for section 3 here -->
        <img src="<?=base_url('assets/image/lead_section3.2.jpg'); ?>" alt="Section 3 Image">
      </div>
    </div>
  </section>

  <!-- Section 4 -->
  <section class="section-3" id="smart_lead">
    <div class="content">
        <div class="image">
            <!-- Insert your image for section 3 here -->
            <img src="<?=base_url('assets/image/lead_section4.jpg'); ?>" alt="Section 3 Image">
          </div>
      <div class="text-box">
        <h1>Smart Lead Qualification</h1>
        <p>
           <h3> Achieve Optimal Outcomes with Our Data-Driven Approach.</h3>
Unleash the potential of your team with our data-driven lead qualification strategy, delivering maximum results. Each lead goes through a meticulous quality assurance process before entering your funnel. Our lead preference mechanism allows you to gauge audience interest effectively. We map prospects meticulously based on their intent levels. With our marketing and sales-ready leads, you can strengthen the relationship initiated during prospecting and nurturing phases, ensuring greater success in converting leads. Lead Qualification - the smarter way to convert prospects into customers.

        </p>
      </div>
      
    </div>
  </section>
  

</body>

