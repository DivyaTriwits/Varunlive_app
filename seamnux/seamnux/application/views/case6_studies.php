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
    <img src="<?=base_url('assets/image/case6.png'); ?>" alt="Card Image" class="card-image">
    <h2 class="section-heading">ERP Firm Propped Up with ABM Strategies, Gained High-converting Leads</h2>
  </div>
  <div class="section" style="margin: 20px auto;">
    <!-- Second section -->
    <div class="icon-section">
      <div class="icon">
        <i class="fa fa-briefcase" aria-hidden="true"></i><span class="small-text"><br><b>Industry</b><br>IT/Software</span> <br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Location</b><br>Canada</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Headquarters</b><br>AB, Canada</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Campaign Type</b><br>Lead Generation, <br> Appointment Setting</span><br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Target Location</b><br>Canada (BC, AB,<br> SK, MB) USA <br> (TX, CA, FL,<br>  KY, TN, NC,<br>  OK, MO)</span><br>
        <br>
      </div>
      <div class="icon">
        
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Target Industries</b><br>(Canada) Architecture,<br> Engineering, IT Consulting,<br> Management Consulting,<br> Oil Field Consulting,<br> Professional Services (USA)<br> Manufacturing, Transportation <br>& Public Utilities, Wholesale <br>Trade, Retail Trade,<br> Finance, Insurance, <br>Real Estate</span><br>
        <i class="fa fa-user" aria-hidden="true"></i><span class="small-text"><br><b>Target Contacts</b><br>(Canada) President,<br> CEO, Controller<br>, CFO, Operations Manager<br> (USA) Vice President, C-level,<br> Directors/Managers in Marketing,<br> Sales, IT and <br>Operations</span><br>
        <br> 
      </div>
     
    </div>
    <div class="paragraph-section">
      <p><h3 style="color: #ba1c1d ;">The Client</h3><br>
        The Client is a full service ERP solutions provider that sold and supported Acumatica, MS Dynamics Suite and Deltek ERP solutions across North America. It merged with another software giant in 2018, and has been providing a range of IT and software services since then. <br><br>

Lines of Business<br><br>

Managed IT, Software Rescue, Cloud Solutions
        <br><br><h3 style="color: #ba1c1d ;"> Challenge</h3><br>
        The Client’s team is composed of ERP Specialists, Application Experts, and IT Experts that leverage technology-enabled solutions in solving every type of problem that businesses face. Supporting these groups of specialists is an in-house team of sales and marketing staff that does both prospecting and closing tasks.<br><br>

However, the rapidly increasing market competition and changes in customer buying behavior abated the Client’s lead conversion process as more time was spent on prospecting over nurturing and converting leads.<br><br>

The Client decided to address the challenge by augmenting their in-house efforts with more advanced outsourced strategies.</p>
    </div>
  </div>
  </div>

