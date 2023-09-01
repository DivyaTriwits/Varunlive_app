<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MTNL and CSS Example</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
   .main {
    margin: 0px;
    background-image:linear-gradient(135deg, rgba(186,28,29, 0.7) 50%, transparent 50%); 

   }

    .section {
      width: 80%;
      max-width: 1000px;
      background-color: white;

      padding: 20px;
      padding-top: 80px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      border-radius: 20px;
      margin: auto;
      display: flex; /* Use flexbox for layout */
      align-items: center;
    }

    .card-image {
      flex: 1; /* Make the image take half of the section */
      max-width: 50%;
      margin-right: 20px; /* Adjust the space between the image and heading */
    }

    .section-heading {
      flex: 1; /* Make the heading take half of the section */
      font-size: 24px;
      color: #ba1c1d ;
    }

    @media (max-width: 768px) {
      .section {
        width: 90%;
        flex-direction: column; /* On smaller screens, stack the content vertically */
      }

      .card-image {
        margin-right: 0; /* Remove margin on smaller screens */
        max-width: 100%;
        margin-bottom: 10px; /* Add margin to separate the image and heading */
      }

      .section-heading {
        margin-top: 10px;
        color: #ba1c1d ; /* Add margin to separate the image and heading */
      }
      .section-heading h1 {
        
        color: #ba1c1d ; /* Add margin to separate the image and heading */
      }
    }
    .icon-section {
      flex: 1; /* Make the icon section take half of the section */
      display: flex;
     
    }

    .icon {
      margin-left: 150px;
      margin-right: 0px; /* Adjust the space between icons and text */
      font-size: 24px;
       align-items: center;
      text-align: center!important;
      
    }

    .paragraph-section {
      color: #58595b;
      flex: 1;
      text-align: left; /* Make the paragraph section take half of the section */
    }

    @media (max-width: 768px) {
      .section {
        width: 90%;
        flex-direction: column; /* On smaller screens, stack the content vertically */
      }

      .icon-section {
        flex-direction: column; /* Stack icons and text vertically on smaller screens */
        align-items: center; /* Align icons and text to the left on smaller screens */
      }

      .icon {
        margin-right: 0; /* Remove margin on smaller screens */
        margin-left: 0;
      
        margin-bottom: 5px; /* Add margin to separate icons and text on smaller screens */
      }
    }
    .small-text {
      font-size: 14px; /* Adjust the font size as needed */
    }
  </style>
</head>

  <div class="main">
  <div class="section">
    <!-- First section -->
    <img src="<?=base_url('assets/image/case3.png'); ?>" alt="Card Image" class="card-image">
    <h2 class="section-heading">Management Consulting Firm Gets Tailored Marketing Solutions With Seamnux</h2>
  </div>
  <div class="section" style="margin: 20px auto;">
    <!-- Second section -->
    <div class="icon-section">
      <div class="icon">
        <i class="fa fa-briefcase" aria-hidden="true"></i><span class="small-text"><br><b>Industry</b><br>Management  <br>Consulting</span> <br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Location</b><br>Singapore</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Headquarters</b><br>Boston, MA <br> USA</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Campaign Type</b><br>Lead Generation, <br> Appointment Setting</span><br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Target Location</b><br>Singapore</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Target Industries</b><br>
        Small and Medium <br> Enterprises (SMEs)</span><br>
        <i class="fa fa-user" aria-hidden="true"></i><span class="small-text"><br><b>Target contacts</b><br>
        Singapore Business <br> Professionals <br> SMEs</span><br>
      </div>
     
    </div>
    <div class="paragraph-section">
      <p><h3 style="color: #ba1c1d ;">The Client</h3><br>
        The Client is a leading management consulting firm that helps individuals and organizations across industries achieve their most ambitious goals. With a global presence and a rich history spanning over 50 years, they have earned a reputation for delivering results through innovative thinking and unparalleled expertise. <br><br>

The firm’s portfolio of clients includes Fortune 500 companies, public sector organizations, and startups. The Client serves a wide range of industries, including but not limited to technology, healthcare, financial services, consumer goods, and energy. <br><br>

Their approach is centered on helping clients solve complex business challenges, drive growth, and maximize their impact. Their teams of experts partner with clients to understand their unique business environment and provide tailored, data-driven recommendations to help them reach their goals. <br><br>

With a relentless focus on excellence and a commitment to creating sustainable value for their customers, the Client has become a trusted advisor to organizations worldwide.
        <br><br><h3 style="color: #ba1c1d ;"> Challenge</h3><br>
        The Client’s digital upskilling program aims to address the ever-evolving demand for digital skills in the job market, by providing job hunters and business workforces with the opportunity to enhance their employability and build digital proficiency. Despite its potential benefits, the program has faced challenges in attracting the attention of potential trainees. <br><br>

One of the primary challenges is a lack of awareness, as there are numerous initiatives and programs competing for the attention of busy workers. The cost of the program, although funded up to 90% by the Client, may also pose a hindrance for some. The flexibility of the program, delivered entirely virtually, does not necessarily solve the challenge of fitting it into busy schedules. <br><br>

The root of these challenges lies in the work culture in Singapore, which is slow to embrace lifelong learning. Many professionals are entrenched in their current jobs and are not used to the idea of taking time off to upskill. The Client faces the challenge of communicating the value of the program and its potential benefits to both individuals and businesses. <br><br>

Moreover, there is a prevalent perception that learning is only for young people or those starting out in their careers. However, this is not the reality in today’s fast-paced and constantly changing job market, where continuous learning and adaptation is essential for professionals to remain competitive. The digital upskilling program offers the ideal platform to achieve this, but breaking down cultural barriers and negative perceptions surrounding lifelong learning is critical to attracting more trainees.</p>
    </div>
  </div>
  </div>

