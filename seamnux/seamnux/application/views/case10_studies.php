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
      margin-left: 60px;
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
    <img src="<?=base_url('assets/image/case10.png'); ?>" alt="Card Image" class="card-image">
    <h2 class="section-heading">Engineering & Industrial Software Lead Successfully Launched New Ops Portfolio with Seamnux</h2>
  </div>
  <div class="section" style="margin: 20px auto;">
    <!-- Second section -->
    <div class="icon-section">
      <div class="icon">
        <i class="fa fa-briefcase" aria-hidden="true"></i><span class="small-text"><br><b>Industry</b><br>Technology, IT,<br> Software Development,<br> Engineering, <br>Industrial, Digital<br> Transformation</span> <br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Location</b><br>USA</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Headquarters</b><br>UK</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Campaign Type</b><br>Lead Generation, <br> Appointment Setting</span><br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Target Location</b><br>US-wide</span><br>
        <br>
      </div>
      <div class="icon">
        
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Target Industries</b><br>Manufacturing, Chemicals,<br> Food & Beverage,<br> Infrastructure, Life Sciences,<br> Marine, Mining,<br> Oil & Gas, <br>Power & Utilities,<br> Pulp & Paper, <br>Steel Fabrication, <br>Water & Wastewater</span><br>
        <i class="fa fa-user" aria-hidden="true"></i><span class="small-text"><br><b>Target Contacts</b><br>CIO, It Manager, <br>SR Development<br> Manager, PIC of <br>the Software<br> Development in <br>the company</span><br>
        <br> 
      </div>
     
    </div>
    <div class="paragraph-section">
      <p><h3 style="color: #ba1c1d ;">The Client</h3><br>
       The Client is a Florida-based global leader in engineering and industrial software development that drives digital transformation across the whole asset and operations life cycle of capital-intensive industries, serving more than 16,000 customers around the globe with its engineering, planning and operations, asset performance and monitoring and control solutions.
        <br><br><h3 style="color: #ba1c1d ;"> Challenge</h3><br>
        As part of its digital transportation journey, the Client recently released a full supervisory control and data acquisition portfolio designed to deliver a new cloud and mobile experience driving collaboration and frictionless workflow. The project will address the increasing demand from their customers for flexibility and agility to collaborate seamlessly with their technology deployments. <br><br>

To augment the project launch, the Client opted to outsource lead generation and appointment setting services from Seamnux which helped them focus on other important tasks that paved the way to the successful launch of their new offerings.</p>
    </div>
  </div>
  </div>

