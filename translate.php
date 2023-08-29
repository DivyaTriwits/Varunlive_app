<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your CodeIgniter Project</title>
  
    <style>
      /* Add this style to hide the tooltips */
.goog-tooltip {
    display: none !important;
}

.floating-logo {
    width: 50px;
    height: 50px;
    background-color: #6f1d1b;
    position: fixed;
    bottom: 80px;
    right: 20px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1000;
    /* Add your logo icon styles here */
}

/* Rest of your CSS */

.translate-widget {
    width: 50%;
    height: 0;
    background-color: #ffffff;
    position: fixed;
    bottom: 0;
    right: 0;
    z-index: 999;
    overflow: hidden;
    transition: height 0.3s;
    transform-origin: bottom;
    box-shadow: -2px 0px 5px rgba(0, 0, 0, 0.3);
}

.translate-widget.show {
    height: 100px; /* Adjust the height as needed */
}


#google_translate_element {
    height: 21px !important;
    overflow: hidden;
}
.translated-ltr 
                          {
                               margin-top: -20px;
                              
                            }
                            
                       .goog-te-gadget .goog-te-combo 
                       {
                        color: #6f1d1b !important;
                        }
                            
                        .goog-logo-link
                            {
                                 display: none;
                            }
                            
                         .goog-te-gadget-logo
                            {
                                color: transparent;
                             }
                             
                          .goog-te-gadget img
                            {
                                display: none !important;
                            }
                          .VIpgJd-ZVi9od-ORHb-OEVmcd
                               {
                                  display: none;
                               }
                          div.goog-te-gadget 
                              {
                                  color: transparent !important;
                              }


    </style>
</head>
<body>
    <div class="floating-logo" id="floatingLogo">
        <!-- Add your logo image or icon here -->
        <img src="https://www.triwits-workspace.p4kap4cfc5vhzrfud8lu.co.in/attach_files/31-311851_language-icon-svg-hd-png-download.png">
    </div>
    <div class="translate-widget" id="translateWidget">
        <center>
            
        
        <div id="google_translate_element"></div>
        </center>
    </div>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script >
        const floatingLogo = document.getElementById('floatingLogo');
const translateWidget = document.getElementById('translateWidget');

floatingLogo.addEventListener('click', () => {
    translateWidget.classList.toggle('show');
});

function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
}


    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>