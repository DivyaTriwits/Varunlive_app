<style>
    /* Reset some default styling */


/* Style for full-screen image */
.section-1 {
  height: 100vh;
  background-image: url("<?=base_url('assets/image/case_study_back.avif'); ?>"); /* Replace with your full-screen image URL */
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
    
     /* Add your custom styles here */


.grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(280px, 1fr));
  margin: 20px;
  margin-left: 100px;
  margin-right: 100px;
  grid-gap: 40px;
  align-items: stretch;
}

.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
  /*background-image: linear-gradient(135deg, transparent 40%, rgba(128, 128, 128, 0.7) 50%);;*/
  border-radius: 20px;
}

.grid > article img {
  max-width: 100%;
  border-radius: 20px;
}

.grid .text {
  padding: 20px;
  color: #58595b;
}
@media (max-width: 768px) {
      .grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  grid-gap: 40px;
  align-items: stretch;
}
    }

  </style>
</head>

<body>
  <div class="scroll-button">
    <a href="<?php echo base_url();?>case-studies"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- Section 1: Full-Screen Image -->
  <section class="section-1">
    
    <!-- Transparent red overlay below the diagonal division -->
    <div class="red-overlay"></div>
    <!-- Transparent gray overlay below the diagonal division -->
    <div class="gray-overlay"><h1>Case Studies </h1><p>Our partnership approach keeps your 
        sales funnel <br> consistently fuelled through innovative ideas to increase leads. <br> Our lead intelligence, 
        segmentation and quality focus <br> delivers qualifies leads for your program requirements.</p>
    <div class="not-overlay"><p>Our partnership approach keeps your 
        sales funnel <br> consistently fuelled through innovative ideas to increase leads. <br> Our lead intelligence, 
        segmentation and quality focus <br> delivers qualifies leads for your program requirements.</p></div></div>
    
   
  </section>



  <!-- Section 2 -->
  <section class="section-2">
   <div class="container">
  <main class="grid">
    <article>
      <img src="<?=base_url('assets/image/case1.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>5x More Leads for Construction Estimating Software | Seamnux</h3><br>
        <p>The Client is known as the #1 Cloud Construction Estimating Software, providing advanced features and functionality that help companies quickly create accurate...</p>
        <a href="<?php echo base_url();?>case1-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case2.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>Accelerating Growth with Seamnux: A Telecom Provider’s Success in Generating High-Quality Leads</h3><br>
        <p>The Client is a reputable telecom provider offering innovative payment and communication solutions to businesses across industries. Since its establishment in 2018.. </p>
        <a href="<?php echo base_url();?>case2-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case3.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>Management Consulting Firm Gets Tailored Marketing Solutions With Seamnux</h3><br>
        <p>The Client is a leading management consulting firm that helps individuals and organizations across industries achieve their most ambitious goals. With a global presence and a rich history ..</p>
        <a href="<?php echo base_url();?>case3-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case4.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>Seamnux & Software Development Company Reap Sustainable Gains</h3><br>
        <p>The Client is a world-class company that empowers its customers to reach new heights through cutting-edge software solutions and technology services. With a team of experts ...</p>
        <a href="<?php echo base_url();?>case4-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case5.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>What A Well-Crafted ABM Campaign for a Software Lead Looks Like</h3><br>
        <p>The Client is a one stop digital solution provider, with core competency on Software AG components like web Methods..</p>
        <a href="<?php echo base_url();?>case5-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case6.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>ERP Firm Propped Up with ABM Strategies, Gained High-converting Leads</h3><br>
        <p>The Client is a full service ERP solutions provider that sold and supported Acumatica, MS Dynamics Suite and Deltek ERP solutions across North America... </p>
        <a href="<?php echo base_url();?>case6-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case7.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>Endpoint Management Firm with Seamnux. No Selling Point Is Too Tough</h3><br>
        <p>The Client is a leading global provider of modern endpoint management and security solutions. Its products empower enterprise IT teams to manage and secure endpoints...</p>
        <a href="<?php echo base_url();?>case7-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case8.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>Seamnux Awareness ABM Opens Market Opportunity for Online Learning</h3><br>
        <p>The Client is a cloud-hosted, social online learning platform that enables educators to deliver effective, enjoyable, and transformative online courses to students... </p>
        <a href="<?php echo base_url();?>case8-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case9.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>Seamnux Built New Customer Base for Property Software Provider</h3><br>
        <p>The Client offers property management solutions and greatly invests in product and customer experience to make property management simpler and easy to control...</p>
        <a href="<?php echo base_url();?>case9-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
    <article>
      <img src="<?=base_url('assets/image/case10.png'); ?>" alt="Sample photo">
      <div class="text">
        <h3>Engineering & Industrial Software Lead Successfully Launched New Ops Portfolio with Seamnux</h3><br>
        <p>The Client is a Florida-based global leader in engineering and industrial software development that drives digital transformation across the whole asset and operations..</p>
        <a href="<?php echo base_url();?>case10-studies" class="btn btn-primary btn-block"><p style="color: #ba1c1d;">Read More</p></a>
      </div>
    </article>
  </main>
</div>
</section>
  
  

</body>

