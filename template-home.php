<?php 
/*
Template Name:  Home Page Template
*/
get_header(); ?>
<header class="header">
 <div class="container">
   <div class="row">
     <div class="col-sm-2">
       <div class="logo">
         <h1><a href="">unicorn</a></h1>

         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
          </button>
       </div>                         
    </div>
 </div>

 <div class="col-sm-10">


    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right text-uppercase">
        <li class="active"><a href="#slider">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#our-blog">articles</a></li>
        <li><a href="#our-clients">clients</a></li>
        <li><a href="#portfolios">portfolios</a></li>
        <li><a href="#team-members">team</a></li>
        <li><a href="#events">events</a></li>
        <li><a href="#footer">contact us</a></li>
     </ul>
  </div>                    
</div>
</div>
</div>
</header> <!-- End header -->

<section id="slider">

 <div data-velocity="-.2" class="overlay-bg slide-bg"></div>
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="slide-text-table">
         <div class="slide-text-table-cell">
           <div class="slide-text wow fadeIn">
             <h1>STORYTELLER</h1>

             <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. </p>   

             <a href="" class="learn-more">read the rest</a>                     
          </div>
       </div>
    </div>
 </div>
</div>
</div>

</section> <!-- End slider -->






<footer id="footer" class="section-padding">
 <div class="container">
   <div class="row">
     <div class="col-md-5">
       <div class="footer-contact">
         <h2>Unicorn</h2>
         <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his</p>

         <div class="footer-ct-form">
           <div class="row">
             <div class="col-md-6">
               <p><input type="text" placeholder="NAME"></p>
            </div>
            <div class="col-md-6">
               <p><input type="text" placeholder="EMAIL"></p>
            </div>
         </div>
         <p><input type="text" placeholder="SUBJECT"></p>
         <p><textarea name="message" placeholder="MESSAGE" id="message" cols="30" rows="10"></textarea></p>
         <p><input type="submit" value="Send"></p>
      </div>
   </div>
</div>

<div class="col-md-2 col-md-offset-1 col-sm-4">
 <div class="footer-widget">
   <h2>Links</h2>
   <ul>
     <li><a href="">Home</a></li>
     <li><a href="">About</a></li>
     <li><a href="">Services</a></li>
     <li><a href="">Menu</a></li>
     <li><a href="">Restaurants</a></li>
     <li><a href="">Work Hours</a></li>
     <li><a href="">Call Hours </a></li>                               
  </ul>
</div>
</div>

<div class="col-md-2 col-sm-4">
 <div class="footer-widget">
   <h2>friends</h2>
   <ul>
     <li><a href="">Home</a></li>
     <li><a href="">About</a></li>
     <li><a href="">Services</a></li>
     <li><a href="">Menu</a></li>
     <li><a href="">Restaurants</a></li>                              
  </ul>
</div>
</div>

<div class="col-md-2 col-sm-4">
 <div class="footer-widget">
   <h2>social</h2>
   <ul>
     <li><a href="">Facebook</a></li>
     <li><a href="">Twitter</a></li>
     <li><a href="">Github</a></li>
     <li><a href="">Pinterest</a></li>
     <li><a href="">Google Plus</a></li>
     <li><a href="">Dribble</a></li>
     <li><a href="">Flickr</a></li>                               
     <li><a href="">Others</a></li>                               
  </ul>
</div>
</div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="footer-sep"></div>
 </div>
 <div class="col-md-7">
    <div class="footer-copyright">
      <p>One morning, when Gregor Samsa woke from troubled dreams, he found.<br/> © 2015 Your Awesome Company <span class="seprator">|</span> Designed by <a href="http://hasin.wordpress.com">Hasin</a> <span class="seprator">|</span> Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a></p>
   </div>
</div>

<div class="col-md-5">
 <div class="footer-menu">
   <ul>
     <li><a href="">TERMS</a></li>
     <li><a href="">Privacy Policy</a></li>
     <li><a href="">Contact</a></li>
     <li><a href="">Job</a></li>
  </ul>
</div>
</div>
</div>
</div>
</footer> <!-- End footer -->
<?php get_footer(); ?>