<?php
header ("Content-Type:text/css");
$color = "#ea0117"; // Change your Color Here

function checkhexcolor($color) {
  return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
  $color = "#" . $_GET[ 'color' ];
}

if( !$color OR !checkhexcolor( $color ) ) {
  $color = "#ea0117";
}

?>

.section-header h3{
    font-size: 20px;
    color:<?php echo $color; ?>;

}
.section-header p:before{
    background-color: <?php echo $color; ?>;
}
.section-header p:after{
    background-color: <?php echo $color; ?>;
}
.back-to-top {
    background: <?php echo $color; ?>;
}
.support-bar-top {
    border-bottom: 3px solid <?php echo $color; ?>;
}
.support-bar-top a:hover {
    color: <?php echo $color; ?>;
}
.main-menu ul  li a::before {
    background: <?php echo $color; ?>;
}
.main-menu ul li a:hover{
    color: <?php echo $color; ?>;
}
.main-menu ul li   .mega-menu .mega-banner .mega-menu-banner{
   background: <?php echo $color; ?>;
}
.main-menu ul li   .mega-menu .mega-banner .mega-menu-banner a{
    color: <?php echo $color; ?>;
}
#header-menu>.menu-active>a, .main-menu-active>.menu-active>a:focus, .main-menu-active>.menu-active>a:hover {
    color: <?php echo $color; ?>;
}
.carousel .carousel-control1 {
    background-color: <?php echo $color; ?>;
}
.carousel-indicators .active {
    background-color: <?php echo $color; ?>;
}
.header-overlay:before {
  background-color:  <?php echo $color; ?>;
}
.domain-search-from input[type=text] {
    border-right: 2px solid <?php echo $color; ?>;
}
.domain-search-from input[type=submit] {
    background: <?php echo $color; ?>;
}
.admin-section{
    border-top:8px solid <?php echo $color; ?>;
}
.admin-content .admin-user button{
    border:2px solid <?php echo $color; ?>;
}
.admin-content .admin-user button:hover{
   background-color: <?php echo $color; ?>;
}
.service-content .service-list ul li.active:before {
    background-color: <?php echo $color; ?>;
}
.service-content .service-list ul li.active:after {
    background-color: <?php echo $color; ?>;
}
 .service-content .service-list ul li.active .service-thumb{
    border:1px solid <?php echo $color; ?>;
 }
 .service-content .service-list ul li.active a  i{
    border: 1px solid <?php echo $color; ?>;
    background-color: <?php echo $color; ?>;
}
  .service-content .service-list ul li.active a span i{
    background-color: <?php echo $color; ?>;
 }
  .service-content .service-list ul li.active a p{
    color:<?php echo $color; ?>;

 }
 .service-content .service-list ul li.active p {
    color: <?php echo $color; ?>;
}
.service-content .service-item .service-text a:hover{
    background-color: <?php echo $color; ?>;
}
.pricing-list .pricing-item{
    background-color: <?php echo $color; ?>;
}
.pricing-list .pricing-item:hover .pricing-header {
    background-color: <?php echo $color; ?>;
}
.pricing-list .pricing-item:hover .pricing-info{
    background-color: <?php echo $color; ?>;
}
.pricing-list .pricing-item .pricing-info ul {
    background-color: <?php echo $color; ?>;
}
  .other-service .other-service-list {
    border-top: 3px  dotted <?php echo $color; ?>;
}
.other-service .other-service-list ul li.active .other-select-border {
        border: 2px dotted <?php echo $color; ?>;
    }
.other-service .other-service-list ul li.active .other-select-border a i {
        background-color: <?php echo $color; ?>;
    }    
.other-service .other-service-content .other-service-content1 .other-service-text ul li p i {
        color: <?php echo $color; ?>;
    }
.other-service .other-service-content .other-service-content1 .other-service-text a {
 background-color: <?php echo $color; ?>;
}
.newsletter-section{
    background-color: <?php echo $color; ?>;
}
.online-content ul li .online-item2 .online-text button:hover{
    background-color: <?php echo $color; ?>;

}
.sale-header{
    border-bottom: 1px solid <?php echo $color; ?>;
}
.sale-header h2{
    border-bottom: 1px solid <?php echo $color; ?>;
}
.sale-header h2 span{
    color:<?php echo $color; ?>;
}
.sale-content p span{
    color:<?php echo $color; ?>;
}
.sale-content button {
    background-color: <?php echo $color; ?>;
}
.sale-content button:hover {
    color: <?php echo $color; ?>;
}
.team-item .team-overlay ul li a i {
    color: <?php echo $color; ?>;
}
.support-content a{
    background-color: <?php echo $color; ?>;
}
.support-bar-top a span:hover,
.support-bar-top a:hover span {
    color: <?php echo $color; ?>;
}
.counter-list .counter-thumb{
    background-color: <?php echo $color; ?>;
    border:5px solid <?php echo $color; ?>;
}
.blog-list .blog-thumb .blog-text2 {
    background-color: <?php echo $color; ?>;
}
.blog-list .blog-content:hover  a{
    background-color: <?php echo $color; ?>;
}
.testimonial-overlay{
    background-color: rgba(233,62,33,.9);
}
.footer-support-list{
 border-bottom: 8px solid <?php echo $color; ?>;
}
.widget-read-more {
    color: <?php echo $color; ?>;
}
.widget-one-footer i {
    color: <?php echo $color; ?>;
}
.widget-two-body ul li a:hover {
    color: <?php echo $color; ?>;
}
.footer-contact-form input[type=text]:focus,
.footer-contact-form input[type=email]:focus {
    border: 1px solid <?php echo $color; ?>;
}
.footer-contact-form input[type=submit] {
    background: <?php echo $color; ?>;
}
.footer-menu ul li a:hover {
    color: <?php echo $color; ?>;
}
.live-chat-btn {
    background: <?php echo $color; ?>;
}
.live-chat-btn i {
    background: <?php echo $color; ?>;
}
.footer-social-links a i {
    color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}
.pricing-list1 {
    border-bottom: 8px solid <?php echo $color; ?>;
}
.pricing-list1:hover{
    background-color: <?php echo $color; ?>;
}
.pricing-list1 .pricing-header1:after {
    background-color: <?php echo $color; ?>;
}
.pricing-list1 a {
    background-color: <?php echo $color; ?>;
}
.pricing-list2 .pricing-thumb i{
    color:  <?php echo $color; ?>;
}
#pricing-2 .slider-bg {
  background-color: rgba(233,62,33, 0.4);
}
#pricing-2 #pricing-slider .ui-slider-range {
  background-color: <?php echo $color; ?>; }

#pricing-2 #pricing-slider .ui-slider-handle {
  background-color: <?php echo $color; ?>;
}

#pricing-2 .info-item {
  background-color: <?php echo $color; ?>;
}
#pricing-2 .order-button a {
  border: 1px solid <?php echo $color; ?>;
}
#pricing-2 .order-button a:hover .right {
  background-color: <?php echo $color; ?>;
}
#pricing-2 .order-button .right {
  color: <?php echo $color; ?>;
}
.hosting-content table tbody tr td a:hover {
    background-color: <?php echo $color; ?>; 
}
.feature-list .feature-thumb i{
    color: <?php echo $color; ?>; 
    border:1px solid <?php echo $color; ?>; 
}
.feature-list .feature-content h6{
    color: <?php echo $color; ?>;
}
.feature-list1:hover .feature-thumb i{
    color:  <?php echo $color; ?>;
    border:1px solid <?php echo $color; ?>;

}
.feature-list1:hover .feature-content h6{
    color: <?php echo $color; ?>;
}
.hostpress-content h6{
    color: <?php echo $color; ?>;
}
.hostingspeed-content .hostingspeed-text h6{
    color:<?php echo $color; ?>;
}
  .service-list1 i {
    color: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
 }
.service-list1 .service-text a {
      background-color: <?php echo $color; ?>;
      border: 1px solid <?php echo $color; ?>;
 }
.service-list1 .service-text a:hover {
  border: 1px solid <?php echo $color; ?>;
  color: <?php echo $color; ?>;
}
.vps-feature .feature-header h1 {
    color: <?php echo $color; ?>; }
.vps-feature .feature-list li i {
      color: <?php echo $color; ?>;
 }
.vps-feature a {
  border: 1px solid <?php echo $color; ?>;
  background-color: <?php echo $color; ?>;
 }
.parallax-content a {
    background-color: <?php echo $color; ?>;
}
.parallax-content a:hover {
  color: <?php echo $color; ?>; 
}
.widget-list h4{
  color: <?php echo $color; ?>;
}
.widget-search button{
  background-color: <?php echo $color; ?>;
}
.widget-search button {
  background-color: <?php echo $color; ?>;
}
.widget-search button:hover{
  color: <?php echo $color; ?>;
}
.widget-list ul li a{
  color: #443a44;
}
.widget-list ul li:hover a{
  color: <?php echo $color; ?>;
}
.widget-list ul li:hover span{
    color: <?php echo $color; ?>;
    border:1px solid <?php echo $color; ?>;
}
.widget-tags ul li:hover {
   border: 1px solid  <?php echo $color; ?>;
}
.widget-tags ul li a{
  color: <?php echo $color; ?>;
}
.widget-tags ul li:hover a{
   background-color: <?php echo $color; ?>;
}
.blog-latest .sidebar-posts .text-box-right h6 a {
  color: <?php echo $color; ?>;
}
.blog-single-content .blog-thumb p {
  background-color: <?php echo $color; ?>;
}
.blog-single-content .blog-content h4 {
  color:<?php echo $color; ?>;
}
.blog-single-content .blog-content .blog-text h4 a {
    color:<?php echo $color; ?>;
}
.blog-single-content .blog-content .blog-text .iconlist li i {
  color: <?php echo $color; ?>;
}
.blog-single-content .blog-content .blog-text .social-icons-2 li a i {
  background-color: <?php echo $color; ?>;
}
.blog-single-content .blog-content .blog-author .blog-list .blog-text a {
  border: 1px solid <?php echo $color; ?>; 
}
.blog-single-content .blog-content .blog-author .blog-list .blog-text a:hover {
  background-color: <?php echo $color; ?>;
  border: 1px solid <?php echo $color; ?>; 
}
.blog-single-content .blog-content .other-blog h4 a {
  color: <?php echo $color; ?>;
}
.blog-single-content .blog-content .other-blog h5 a {
    color: <?php echo $color; ?>;
}
.blog-single-content .blog-comment ul li .blog-list .blog-text a {
  border: 1px solid <?php echo $color; ?>; 
  }
.blog-single-content .blog-comment ul li .blog-list .blog-text a:hover {
  background-color: <?php echo $color; ?>;
  border: 1px solid <?php echo $color; ?>; 
  }
.blog-single-content .blog-comment a.loadmore-but {
    background-color: <?php echo $color; ?>;
}
.add-review-list button {
    background-color: <?php echo $color; ?>;
}
.selected-domain-thumb i{
    color: <?php echo $color; ?>;
}
.selected-domain-text p a{
    color: <?php echo $color; ?>;
}
.selected-domain-submit span{
    color: <?php echo $color; ?>;
}
.selected-domain-submit button{
    background-color: <?php echo $color; ?>;
}
.selected-list{
    border-left:1px solid rgba(233,62,33,.9);
    border-right:1px solid rgba(233,62,33,.9);
    border-bottom:1px solid rgba(233,62,33,.9);
    background-color: rgba(233,62,33,.5);
}
.selected-list .selected-list-cart button:hover{
  background-color: <?php echo $color; ?>;
}
.contact-info .contact-content .contact-list ul li .contact-thumb i{
  color:<?php echo $color; ?>;
}
.contact-form h2:after{
    background-color:<?php echo $color; ?>;
}
.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus{
    border-color:<?php echo $color; ?>;
}
.contact-form button{
    background: <?php echo $color; ?>;
    border: 2px solid <?php echo $color; ?>;
}
#isotopemenu ul li.active p{
    color: <?php echo $color; ?>;
}
.layer{
    background: rgba(233,62,33,.7);
}
.isotope-social a i {
  color: <?php echo $color; ?>;
}
.isotope-social a i:hover{
    background-color: <?php echo $color; ?>;
}
.all-image a {
  background-color: <?php echo $color; ?>;
}
.login-admin .login-form input[type="submit"]{
    background-color: <?php echo $color; ?>;
}
.login-admin .social-login ul li a {
    background-color: <?php echo $color; ?>;
}
.cooming-content input[type="email"]:focus{
    background-color: <?php echo $color; ?>;
}
.cooming-content input[type="submit"]{
    background-color: <?php echo $color; ?>;
}
.cart-content table tbody tr:hover td a {
    color:<?php echo $color; ?>;
}
.cart-content table tfoot {
    background-color: <?php echo $color; ?>;
}
.cart-price .cart-coupon input[type="submit"]{
  background: <?php echo $color; ?>;
}
.cart-price .cart-total ul li p.cart-color {
    color:<?php echo $color; ?>;
}
.cart-price .cart-total ul li button {
    background: <?php echo $color; ?>;
}
.error-thumb p {
    color: <?php echo $color; ?>;
}
.error-content h1{
    color: <?php echo $color; ?>;
}
.error-content a{
  background-color: <?php echo $color; ?>;
}
.affiliate-item .affiliate-content h4 span{
    color: <?php echo $color; ?>;
}
.referral-amount{
    border-top:5px solid <?php echo $color; ?>;
}
.referral-amount:before{
    background-color: <?php echo $color; ?>;
}
.referral-amount p{
    border-bottom: 1px solid <?php echo $color; ?>;
}
.referral-amount h5{
    background-color: <?php echo $color; ?>;
}
.signup-affiliate a{
    background-color: <?php echo $color; ?>;
}
.about-info.about-light {
    background-color: <?php echo $color; ?>;
}
.about-info.about-light .btn.modern:hover {
    color: <?php echo $color; ?>;
}
.accordion .panel-heading a, .faq-categories ul li a:hover, .faq-categories ul li.active a {
    background-color: <?php echo $color; ?>;
}
.popular-plan-content h3 span{
    color: <?php echo $color; ?>;
}
.popular-plan-content ul li i{
    color: <?php echo $color; ?>;
}
.popular-plan-content ul li p{
    color: <?php echo $color; ?>;
}
.popular-plan-content ul li span{
    color: <?php echo $color; ?>;
}
.popular-plan-thumb {
    background-color: <?php echo $color; ?>;
}
.popular-plan-thumb button:hover{
    border: solid 2px <?php echo $color; ?>;
}
.popular-plan-thumb1 button{
    background-color: <?php echo $color; ?>;
    border: solid 2px <?php echo $color; ?>;
}
.popular-plan-thumb1 .popular-ribbon .ribbon{
    background-color: <?php echo $color; ?>;
}
.testimonial-area .sin-testiImage img {
    border: 1px solid  <?php echo $color; ?>;
}
.testimonial-area .sin-testiImage.slick-current img {
  border: 3px solid <?php echo $color; ?>;
 }
.datacenter-content h4 {
  color: <?php echo $color; ?>;
}
.client-list .client-container .our-client:hover {
  border: 1px solid <?php echo $color; ?>;
}
.cooming-content a {
    background-color: <?php echo $color; ?>;
}

.footer-social-links a:hover i {
    background-color: <?php echo $color; ?>;
    color: #fff;
    border: 1px solid #2c3e50;
}

.service-wrapper {
    background: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}

.service-wrapper:hover {
    background: #ffffff;
    border: 1px solid <?php echo $color; ?>;
}

.service-wrapper:hover i{
    color: <?php echo $color; ?>;
}

.service-wrapper:hover p{
    color: <?php echo $color; ?>;
}

.discunt-middel-text {
    background:<?php echo $color; ?>;
}

#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
    background-color: #fff;
    z-index: 99999999
}

[data-loader=circle-side] {
    position: absolute;
    width: 50px;
    height: 50px;
    top: 50%;
    left: 50%;
    margin-left: -25px;
    margin-top: -25px;
    -webkit-animation: circle infinite .95s linear;
    -moz-animation: circle infinite .95s linear;
    -o-animation: circle infinite .95s linear;
    animation: circle infinite .95s linear;
    border: 2px solid <?php echo $color; ?>;
    border-top-color: rgba(0, 0, 0, .2);
    border-right-color: rgba(0, 0, 0, .2);
    border-bottom-color: rgba(0, 0, 0, .2);
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    border-radius: 100%
}

.panel-green {
    border-color: <?php echo $color; ?>!important;
}

.panel-green > .panel-heading {
    border-color: <?php echo $color; ?>!important;
    color: white;
    background-color: <?php echo $color; ?>!important;
}

.btn-primary {
    color: #fff;
    background-color: <?php echo $color; ?>!important;
    border-color:<?php echo $color; ?>!important;
}

.panel-default {
    border-color: <?php echo $color; ?>!important;
}

.panel-default> .panel-heading {
     border-color: <?php echo $color; ?>!important;
    color: white;
    background-color: <?php echo $color; ?>!important;
}

.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: <?php echo $color; ?>!important;
    border-color:<?php echo $color; ?>!important;
}

.new-btn-submit {
    background-color: <?php echo $color; ?>;
}

.admin-header-button.support-btn {
    background: #2c3e50;
}
.open-support-btn h5 {
    background-color: #2c3e50;
}

.input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group {
    z-index: 2;
    margin-left: -1px;
    background-color: <?php echo $color; ?>;
    border: 1px solid transparent;
}

 h2 span {
    color: <?php echo $color; ?>;
}

.section-background{
background:#eee;
}
.sale-section p{
color:#fff;
}
