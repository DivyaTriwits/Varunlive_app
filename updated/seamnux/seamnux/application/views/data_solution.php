<style>
	/* Reset some default styling */


/* Style for full-screen image */
.section-1 {
  height: 100vh;
  background-image: url("<?=base_url('assets/image/data_back.jpg'); ?>"); /* Replace with your full-screen image URL */
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
      background-image: linear-gradient(135deg,transparent 50%, rgba(186,28,29, 0.7) 50%);
      pointer-events: none;
    }

    /* Transparent gray overlay below the diagonal division */
    .gray-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(135deg,  rgba(128, 128, 128, 0.7) 50%,transparent 50%);
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
      margin-top: 15%;
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
    <a href="<?php echo base_url();?>data-solution"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- Section 1: Full-Screen Image -->
  <section class="section-1">
	
    <!-- Transparent red overlay below the diagonal division -->
    <div class="red-overlay"></div>
    <!-- Transparent gray overlay below the diagonal division -->
    <div class="gray-overlay"><h1>Data Solutions</h1><p>Industry professionals with years of relevant <br> expertise and skills,
         we research and deliver current,<br>
         validated B2B contacts, solving prospecting challenges faced by your sales teams.</p>
    <div class="not-overlay"><p>Industry professionals with years of relevant <br> expertise and skills,
        we research and deliver current,<br>
        validated B2B contacts, solving prospecting challenges faced by your sales teams.</p></div></div>
	
   
  </section>

  <!-- Section 2 -->
  <section class="section-2">
    <div class="content">
     
      <div class="text-box">
        <h1>Contact Discovery</h1>
        <p>
            With a team that has years of relevant expertise and skills, we research and deliver current, 
            validated B2B contacts, solving prospecting challenges faced by your sales teams.
             We further ensure that the data is precise, helping you reach the right decision makers from 
             the right company at the right time.Our advanced search tools help discover and 
             verify contacts based on your target segment requirements across geography, job title, 
             industry, revenue, and employee size.
        </p>
      </div>
      <div class="image">
        <!-- Insert your image for section 2 here -->
        <img src="<?=base_url('assets/image/data_section2.jpg'); ?>" alt="Section 2 Image">
      </div>
    </div>
  </section>


  <!-- Section 3 -->
  <section class="section-3">
    <div class="content">
        <div class="image">
            <!-- Insert your image for section 3 here -->
            <img src="<?=base_url('assets/image/data_section3.1.jpg'); ?>" alt="Section 3 Image">
          </div>
      <div class="text-box">
        <h1>Data Enrichment</h1>
        <p>
            Our B2B data cleansing & audience profiling solutions get you in front of the right audience
            with accurate and proper data. We gather data from multiple external and internal sources 
            and also refine your current contact list. We specialize in updating the missing and incorrect 
            prospect data while merging the duplicates. This cleansed and updated data, provides a better viewpoint 
            on consumer buying behavior that results in higher sales conversion rates.
        </p>
      </div>
      
    </div>
  </section>

 

</body>


