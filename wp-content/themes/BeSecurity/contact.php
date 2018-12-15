<?php 
/**
* Template Name: contact
**/

get_header(); ?>
<div id="contact-header-wrapper">
  <h1 class="contact-title">Contact</h1>
</div>
<div class="row contact-wrapper">
  <div class="form-wrapper">
    <h2>Proin risus erat</h2>
    <p>Fringilla vel purus sit amet, mattis porta enim. Duis fermentum faucibus est, sed vehicula velit sodales vitae. Mauris mollis lobortis turpis, eget accumsan ante aliquam quis.</p>
    <form action="">
      <input type="text" name="name" id="name" value="Your name">
      <input type="text" name="email" id="email" value="Your e-mail">
      <br>
      <input type="text" name="Subject" id="subject" value="Subject">
      <br>
      <textarea rows="4" cols="50" id="message" name="message">
    Enter text here...</textarea>
      <br>
      <input type="submit" id="send-a-message" value="Send a message">
    </form>
  </div><!-- end form-wrapper -->
  <div class="contact-info">
    <h2 class="contact-info-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
    <p class="contact-p">Nulla mauris dolor, gravida a varius blandit, auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet, eget scelerisque nunc cursus.</p>
    <hr style="background-color:#4982d0; height: 1px; border: 0;">
  </div>
</div><!-- end row -->

  <div class="row contact">
    <div class="phone-number">
      <img class="phone" src="<?php echo get_bloginfo('template_url');?>/images/phone.png" alt="phone">
      <h4 class="contact-heading">Lorem ipsum dolor adipiscing elit</h4> 
      <p class="phone-font"">+61 (0) 383 766 284</p>
    </div>
    <div class="contact-box">
      <h6 class="address-heading">ADDRESS</h6>
      <h4 style="color:rgb(49, 91, 167); padding-bottom: 20px;">BeSecurity</h4>
      <p>Level 13, 2 Elizabeth St, <br>
      Melbourne, Victoria 3000,<br>
      Australia</p>
      <img class="mail" src="<?php echo get_bloginfo('template_url');?>/images/mail.png" alt="envelope">
      <p>
        <a style="color: #8f8f8f;" href="#">noreply@envato.com</a>
      </p>
    </div>
    <div class="contact-box">
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Lorem ipsum</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Praesent pretium</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Pellentesque</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Aliquam</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Etiam dapibus</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Nunc sit</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>            
        <a class="blue" href="#">Etiam tempor</a>
      </p>
    </div> <!-- end contact-box -->
     <div class="contact-box">
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Aliquam</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Etiam dapibus</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Nunc sit</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Etiam tempor</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Lorem ipsum</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Praesent pretium</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>            
        <a class="blue" href="#">Pellentesque</a>
      </p>
    </div><!-- end content-box -->
    <div class="contact-box">
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Lorem ipsum</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Praesent pretium</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>            
        <a class="blue" href="#">Pellentesque</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Aliquam</a>
      </p>
      <p class="contact-items">
        <span class="pointer">→</span>
        <a class="blue" href="#">Etiam dapibus</a>
      </p>
    </div>
  </div><!-- end row contact -->
<?php get_footer(); ?>