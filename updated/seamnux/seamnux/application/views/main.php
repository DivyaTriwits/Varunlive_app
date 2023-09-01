<!-- Home Section Start -->
 <div class="scroll-button">
    <a href="<?php echo base_url();?>main"><i class="fas fa-arrow-up"></i></a>
  </div>
  <section class="home" id="home">
    <div class="home-content">
		<video autoplay muted loop>
            <source src="<?=base_url('assets/image/content.mp4'); ?>" type="video/mp4">
            <!-- Add fallback content if the video is not supported -->
        </video>
       
        <div class="overlay">
          <div class="text">
            <div class="text-one" style="color: #f0f8ff;">IN THE WORLD FULL OF</div>
            <div class="text-two" style="color: #58595b ;">ABUNDANCE,</div>
            <div class="text-three">WE DELIVER QUALITY</div>
          </div>
      <div class="content-box"><br>
      <div class="content-box" ></div>
      </div>
    </div>
    </div>
  </section>


  <!-- <section class="button-section">
    <div class="button-box">
      <button class="button" onclick="showImage(1)"> <h2>Global</h2> </button>
      <button class="button" onclick="showImage(2)"><h2>Emea</h2></button>
      <button class="button" onclick="showImage(3)"><h2>Latam</h2></button>
      <button class="button" onclick="showImage(4)"><h2>North America</h2></button>
    </div>
    <div class="image-container">
      <img src="global.png" alt="" id="image1">
      <img src="emea.png" alt="" id="image2">
      <img src="latam.png" alt="" id="image3">
      <img src="North_america.png" alt="" id="image4">
    </div>
  </section> -->
  
  
  <section class="button-section">
    <div class="button-box">
      <button class="button" onclick="showContent(1)"><h2>Global</h2></button>
      <button class="button" onclick="showContent(2)"><h2>Emea</h2></button>
      <button class="button" onclick="showContent(3)"><h2>Latam</h2></button>
      <button class="button" onclick="showContent(4)"><h2>North America</h2></button>
    </div>
  
    <div class="content-container" id="content1 active" style="display: block;">
      <h1 class="big-heading">Global B2B Audience: 35.6M</h1>
      <div class="section">
        <img src="<?=base_url('assets/image/global.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Job Functions</h1>
        <img src="<?=base_url('assets/image/global_section1.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Company Size</h1>
        <div class="image-grid">
          <img src="<?=base_url('assets/image/global_section3.1.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/global_section3.2.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/global_section3.3.png'); ?>" alt="">
        </div>
      </div>
      
      <div class="section">
        <h1 class="big-heading">Industry</h1>
        <img src="<?=base_url('assets/image/global_section4.jpg'); ?>" alt="">
      </div>
    </div>
  
    <div class="content-container" id="content2" style="display: none;">
      <h1 class="big-heading">EMEA B2B Audience: 9.9M</h1>
      <div class="section">
        <img src="<?=base_url('assets/image/emea.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Job Functions</h1>
        <img src="<?=base_url('assets/image/emea_section2.jpg'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Company Size</h1>
          <img src="<?=base_url('assets/image/emea_section3.1.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/emea_section3.2.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/emea_section3.3.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Industry</h1>
        <img src="<?=base_url('assets/image/emea_section4.jpg'); ?>" alt="">
      </div>
    </div>
    <div class="content-container" id="content3" style="display: none;">
      <h1 class="big-heading">LATAM B2B Audience: 821K</h1>
      <div class="section">
        <img src="<?=base_url('assets/image/latam.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Job Functions</h1>
        <img src="<?=base_url('assets/image/latam_section2.jpg'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Company Size</h1>
          <img src="<?=base_url('assets/image/latam_section3.1.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/latam_section3.2.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/latam_section3.3.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Industry</h1>
        <img src="<?=base_url('assets/image/latam_section4.jpg'); ?>" alt="">
      </div>
    </div>
    <div class="content-container" id="content4" style="display: none;">
      <h1 class="big-heading">NA B2B Audience: 18.6M</h1>
      <div class="section">
        <img src="<?=base_url('assets/image/North_america.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Job Functions</h1>
        <img src="<?=base_url('assets/image/north_section2.jpg'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Company Size</h1>
          <img src="<?=base_url('assets/image/north_section3.1.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/north_section3.2.png'); ?>" alt="">
          <img src="<?=base_url('assets/image/north_section3.3.png'); ?>" alt="">
      </div>
      <div class="section">
        <h1 class="big-heading">Industry</h1>
        <img src="<?=base_url('assets/image/north_section4.jpg'); ?>" alt="">
      </div>
    </div>
  
    <!-- Similar content containers for Button 3 and Button 4 -->
  </section>
  
  <!-- About Section Start -->
  <section class="about" id="about">
    <div class="content">
      <div class="title"><span>Why US</span></div>
      <div class="about-details">
        <div class="left">
          <img src="<?=base_url('assets/image/why_us.jpg'); ?>" alt="Portfolio">
        </div>
        <div class="right">
          <div class="topic">At Seamnux</div>
          <p>At Seamnux company, we bring a wealth of expertise and experience in delivering top-notch outsourcing solutions to clients across diverse industries. Our commitment to quality and accuracy drives every project, ensuring that we consistently exceed expectations. Equipped with cutting-edge technology and a dedicated team of skilled professionals, we offer customized solutions tailored to your specific needs. Partnering with us means accessing cost-effective services without compromising on excellence. We prioritize data security and confidentiality, maintaining the highest standards to safeguard your sensitive information. With 24/7 support and a global reach, we are ready to meet your requirements anytime, anywhere. Let our proven track record and satisfied client testimonials speak for our commitment to your success. Choose us as your trusted outsourcing partner, and experience the difference we can make for your business..</p>
        </div>
      </div>
    </div>
  </section>


  <!-- My Services Section Start -->
  <section class="services" id="services">
    <div class="content">
      <div class="title"><span>Solutions</span></div>
      <div class="boxes">
        <div class="box">
          <a href="<?php echo base_url();?>lead-management">
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
          <div class="topic">Lead Management</div></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
          
        </div>
        <div class="box">
          <a href="<?php echo base_url();?>data-solution">
          <div class="icon">
            <i class="fas fa-pen"></i>
          </div>
          <div class="topic">Data Solution</div></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
        </div>
        
        <div class="box">
          <div class="icon">
            <i class="fab fa-wordpress"></i>
          </div>
          <div class="topic">Sales Tracking</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="topic">Digital Marketing</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-quidditch"></i>
          </div>
          <div class="topic">Customer Even</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-tablet-alt"></i>
          </div>
          <div class="topic">Pragramatic Ads</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Me Section Start -->
  <section class="contact" id="contact">
    <div class="content">
      <div class="title"><span>Contact us</span></div>
      <div class="text">
        <div class="topic">Connect With Us</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque ipsum corrupti dolores, facere numquam voluptate aspernatur sit perferendis qui nisi modi! Recusandae deserunt consequatur voluptatibus alias repellendus nobis eligendi.</p>
        <div class="button">
          <button>Let's Connect</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section Start -->
 

   

  
</body>
</html>