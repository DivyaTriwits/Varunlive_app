<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your CodeIgniter Project</title>
  
    <style>
      /* Add this style to hide the tooltips */


.floating-logo {
    width: 50px;
    height: 50px;
    background-color: #6f1d1b;
    position: fixed;
    bottom: 75%;
    /*right: 20px;*/
    left: 20px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1000;
    overflow: hidden;
    /* Add your logo icon styles here */
}
.floating-logo img {
            max-width: 100%;
            max-height: 100%;
        }

/* Rest of your CSS */

.translate-widget {
    width: 25%;
    height: 0;
    border-radius: 30px;
    background-color: #ffffff;
    position: fixed;
    /*bottom: 13%;*/
    /*right: 3%;*/
    top: 17.5%;
    left : 3%;
    z-index: 999;
    overflow: hidden;
    transition: height 0.3s;
    transform-origin: bottom;
    box-shadow: -2px 0px 5px rgba(0, 0, 0, 0.3);
}

.translate-widget.show {
    height: 50px; /* Adjust the height as needed */
}

@media (max-width: 768px) {
.translate-widget {
/* Mobile styles for translate-widget... */
left : 14%;
width: 50%;
/* Add more mobile-specific styles here */
}
}


#google_translate_element {
    margin-top: 2%;
    height: 18px !important;
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
                                   z-index: 9724790009779!important;
                               top:0;
                               left:unset;
                               right:-15px;
                               display:none!important;
                               border-radius:50%;
                               border:2px solid gold;
                              }
                              
                              /*.VIpgJd-ZVi9od-aZ2wEe-OiiCO{
                                width:40px;
                                height:40px;
                              }*/
                        /*  #google_translate_element select{
                         background:#f6edfd;
                         color:#383ffa;
                         border: none;
                         border-radius:3px;
                         padding:6px 8px
                         }
                           */    
                           }
                          div.goog-te-gadget 
                              {
                                  color: transparent !important;
                              }
                           #goog-gt-tt, .goog-te-balloon-frame
                            {
                                display: none !important;
                            }
                            .goog-text-highlight 
                                { 
                                    background: none !important;
                                    box-shadow: none !important;
                                }


    </style>
</head>
<body>
    <div class="floating-logo" id="floatingLogo">
        <!-- Add your logo image or icon here -->
        <img src="<?php echo base_url()?>assets/img/brand/Lng.png" >
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

