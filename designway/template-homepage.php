<?php
/**
 * Template Name: Home
 */

get_header();
?>

<!-- hero section -->
<main>
<section class="heroSection">
<div class="heroCont">
  <div class="container heroDetails">
  <h1>THE<br> METAREVERSE <br>CAN CHANGE SOCIETY</h1>

<!-- card section 1 -->

  <div class="row">
    <div class="col-lg-12 cardContainer">
    <div class="heroCard card1 d-flex align-items-center" data-aos="fade-up" data-aos-easing="linear"
     data-aos-duration="1500">
      <img src="<?php echo get_template_directory_uri().'/assets/images/rocket.svg'?>">
      <div class="cardDetails d-flex flex-column">
        <h6>Running days</h6>
        <p>6113</p>
      </div>
  </div>
  <div class="heroCard card1 cardReverse d-flex align-items-center" data-aos="fade-up" data-aos-easing="linear"
     data-aos-duration="1500">
      <img src="<?php echo get_template_directory_uri().'/assets/images/rocket.svg'?>">
      <div class="cardDetails d-flex flex-column">
        <h6>Online visitors</h6>
        <p>94</p>
      </div>
  </div>
  </div>
  </div>

  <!-- card section 2 -->


  <div class="row">
    <div class="col-lg-12 cardContainer">
    <div class="heroCard card2 d-flex align-items-center" data-aos="fade-up" data-aos-easing="linear"
     data-aos-duration="1500">
      <img src="<?php echo get_template_directory_uri().'/assets/images/rocket.svg'?>">
      <div class="cardDetails d-flex flex-column">
        <h6>Total Investments</h6>
        <p>$0.00</p>
      </div>
  </div>
  <div class="heroCard card2 cardReverse d-flex align-items-center" data-aos="fade-up" data-aos-easing="linear"
     data-aos-duration="1500">
      <img src="<?php echo get_template_directory_uri().'/assets/images/rocket.svg'?>">
      <div class="cardDetails d-flex flex-column">
        <h6>Total Withdrawals</h6>
        <p>$0.00</p>
      </div>
  </div>
  </div>
  </div>

  <!-- card section 3 -->

  <div class="row">
    <div class="col-lg-12 cardContainer">
    <div class="heroCard card3 d-flex align-items-center" data-aos="fade-up" data-aos-easing="linear"
     data-aos-duration="1500">
      <img src="<?php echo get_template_directory_uri().'/assets/images/rocket.svg'?>">
      <div class="cardDetails d-flex flex-column">
        <h6>Project Started</h6>
        <p>Feb 21</p>
      </div>
  </div>
  <div class="heroCard card3 cardReverse d-flex align-items-center" data-aos="fade-up" data-aos-easing="linear"
     data-aos-duration="1500">
      <img src="<?php echo get_template_directory_uri().'/assets/images/rocket.svg'?>">
      <div class="cardDetails d-flex flex-column">
        <h6>Visitors online</h6>
        <p>2</p>
      </div>
  </div>
  </div>
  </div>

  </div>
</div>     
</section>

<!-- icons titles section -->

<section class="iconsTitles">
  <div class="container">
    <div class="icTitCont">
      <div class="row">
      <div class="col-lg-3 col-md-3 col-6">
        <div class="icTitDet">
          <img src="<?php echo get_template_directory_uri().'/assets/images/download.svg'?>">
          <div class="icTitHead">
            <h6>Best Server</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6">
        <div class="icTitDet">
          <img src="<?php echo get_template_directory_uri().'/assets/images/download.svg'?>">
          <div class="icTitHead">
            <h6>Low Commission</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6">
        <div class="icTitDet">
          <img src="<?php echo get_template_directory_uri().'/assets/images/download.svg'?>">
          <div class="icTitHead">
            <h6>100% Secure</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6">
        <div class="icTitDet">
          <img src="<?php echo get_template_directory_uri().'/assets/images/download.svg'?>">
          <div class="icTitHead">
            <h6>Real Time Monitoring</h6>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<!-- about section -->

<section class="aboutSection">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="aboutImage">
          <img src="<?php echo get_template_directory_uri().'/assets/images/generalLogo.jpg'?>">
          <div class="abtimg2">
            <img src="<?php echo get_template_directory_uri().'/assets/images/certificate.png'?>">
          </div>
          <div class="imgBox">
              <p>officially registered company</p>
              <p class="pLarge">#567324234</p>
              <a href="#">CLICK HERE FOR MORE INFO</a>
            </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="aboutDetails">
          <img src="<?php echo get_template_directory_uri().'/assets/images/about.png'?>">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a class="btn btn-secondary" href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
</main>


<?php
get_footer();