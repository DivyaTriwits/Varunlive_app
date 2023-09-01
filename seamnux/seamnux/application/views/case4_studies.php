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
    <img src="<?=base_url('assets/image/case4.png'); ?>" alt="Card Image" class="card-image">
    <h2 class="section-heading">Seamnux & Software Development Company Reap Sustainable Gains</h2>
  </div>
  <div class="section" style="margin: 20px auto;">
    <!-- Second section -->
    <div class="icon-section">
      <div class="icon">
        <i class="fa fa-briefcase" aria-hidden="true"></i><span class="small-text"><br><b>Industry</b><br>Technology, <br> Healthcare, Education, Retail, <br> Manufacturing, Construction, <br> Financial Services, Hospitality, <br> Non-profit, <br> Professional Services</span> <br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Location</b><br>USA-Wide, Canada, <br> UK, France, Spain, <br> Portugal</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Headquarters</b><br>Kharkiv, Kharkiv <br> Oblast, Ukraine</span><br>
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Campaign Type</b><br>Lead Generation, <br> Appointment Setting</span><br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="small-text"><br><b>Target Location</b><br>USA-Wide, Canada, <br> UK, France, <br> Spain, Portugal</span><br>
        <br>
      </div>
      <div class="icon">
        
        <i class="fa fa-building" aria-hidden="true"></i><span class="small-text"><br><b>Target Industries</b><br>IT, Financial <br> Services, Manufacturing & <br>Production, Legal Services, Consulting, <br> Customer Service & Support, <br> Construction, Engineering, <br> Retail & E-Commerce, <br> Hospitality & Tourism,<br> Energy & Utilities, <br> Transportation & Logistics</span><br>
        <i class="fa fa-user" aria-hidden="true"></i><span class="small-text"><br><b>Target Contacts</b><br>C-Level, VP of Sales & Marketing,<br> HR Manager, IT Manager, <br> DevOps Engineer, Quality Assurance <br> Manager, Hospital Director, <br> Clinical Coordinator, <br> Department Head, <br>  Project Manager,<br>  Compliance Manager,<br>  Investment Manager,<br>  Financial Director,<br>  Financial Consultant,<br>  Operations Manager, Procurement Manager,<br>  Distribution Supervisor</span><br>
        <br> 
      </div>
     
    </div>
    <div class="paragraph-section">
      <p><h3 style="color: #ba1c1d ;">The Client</h3><br>
        The Client is a world-class company that empowers its customers to reach new heights through cutting-edge software solutions and technology services. With a team of experts who are driven by innovation and a passion for delivering results, the Client is dedicated to helping businesses achieve their objectives and stay ahead of the curve. <br><br>

The Client delivers software development and technology services that are second to none. Their experts work closely with organizations to identify their technology needs and create customized solutions that align with their unique business objectives. Whether it’s development operations, cloud computing, network security, or data management, the Client has the expertise to deliver the results that businesses need to succeed.<br><br>

Digital transformation is at the heart of what they do best. They help companies across various industries, including healthcare, finance, retail, and manufacturing, embrace the power of technology to modernize their processes and stay ahead of the competition. With them, businesses can streamline their operations, improve their bottom line, and stay ahead of the curve in an ever-changing business landscape.<br><br>

The Client also provides Managed IT Services that take the hassle out of technology management. They take over the day-to-day operations of a client’s technology systems, ensuring they run smoothly and efficiently at all times. With 24/7 support, clients can rest assured that any issues will be promptly resolved, allowing them to focus on what they do best – growing their business.
        <br><br><h3 style="color: #ba1c1d ;"> Challenge</h3><br>
        In the highly competitive technology industry, standing out and attracting customers is a top challenge for the Client. With an extensive array of offerings, including Product Design, Business Analysis, Project Management, and Cybersecurity, among others, effectively marketing these services can be a daunting task.<br><br>

To overcome these lead generation challenges, the Client recognizes the critical importance of establishing credibility. Furthermore, they understand the need to communicate their unique value proposition to potential customers by demonstrating how their services can help businesses achieve their goals cost-effectively, which is essential for revenue growth.   <br><br>

Despite facing resource constraints and an undermanned team, the Client remains determined to succeed. They see the need to create awareness about their services, build trust with potential customers, and free up their team to focus more on operations and delivering high-quality services, instead of lead acquisition and nurturing activities. <br><br>  

The Client needs a specialized team to help them achieve their marketing goals and consistently bring in highly qualified leads.</p>
    </div>
  </div>
  </div>

