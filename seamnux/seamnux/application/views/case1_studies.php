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
      align-items: center;
    }

    .icon {
      margin-right: 10px; /* Adjust the space between icons and text */
      font-size: 24px;
      margin-left: 50px;
      
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
    <img src="<?=base_url('assets/image/case1.png'); ?>" alt="Card Image" class="card-image">
    <h2 class="section-heading">5x More Leads for Construction Estimating Software | Seamnux</h2>
  </div>
  <div class="section" style="margin: 20px auto;">
    <!-- Second section -->
    <div class="icon-section">
      <div class="icon">
        <i class="fa fa-briefcase" aria-hidden="true"></i><span class="small-text"><br><b>Industry</b><br>IT / Software</span> <br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Location</b><br>Australia</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Headquarters</b><br>CA,USA</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Campaign Type</b><br>Lead Generation, <br> Appointment Setting</span><br>
      </div>
      <div class="icon">
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Target Location</b><br>Australia</span><br>
        <br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Target Industries</b><br>
        Real Estate,<br> Property Management Companies,<br> Community Associations,<br> HOA</span><br> 
      </div>
    </div>
    <div class="paragraph-section">
      <p><h3 style="color: #ba1c1d ;">The Client</h3><br>
        The Client is known as the #1 Cloud Construction Estimating Software, providing advanced features and functionality that help companies quickly create accurate, competitive bids for construction projects.
        
        <br><br><h3 style="color: #ba1c1d ;"> Challenge</h3><br>
        The Client is known to be one of the most reputable construction estimating software companies in Australia, the United States, and Canada. Its broad experience in working with thousands of construction firms for many years catalyzed one of the best and most in-demand products on the market, approbated by many consumers to be extensive, flexible, and provides top customer service support. <br>

However, some customers find it more costly and quite complex than other estimating softwares. <br>

The Client counters the challenge through campaign initiatives that help educate their target customers to understand how their product’s advanced features and powerful functionality can yield growth and scalability for their business. And, in their most recent campaign, they chose to work with Seamnux.</p>
    </div>
  </div>
  </div>

