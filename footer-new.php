
<style type="text/css">
  .parsley-custom-error-message{
    color: white;
  }
</style>

<footer>

  <div class="d-flex justify-content-center">

    <div class="footer-newletter">

      <h2>Get Updates With <br />

        Latest News and offers</h2>

      <p>Promotions, new products and sales. Directly to your inbox.</p>

        <form method="post" action="get_updates_nexa.php" data-parsley-validate="true" >
      <div class="newsletter-form input-group pl-5">
        <input type="text" placeholder="Enter Email Address" name="email_id" class="col-10" data-parsley-error-message="Please enter valid email." data-parsley-pattern="^([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,4}))$" required="true" data-parsley-errors-container="#element">

        <div class="input-group-append">

          <button name="submit"><i class="mdi mdi-chevron-right"></i></button>
        </div>
        <div id="element"></div>
      </div>
      </form>

    </div>

  </div>

  <div class="footer-links container-fluid">

    <div class="row">

      <div class="col-lg-3">

        <div class="mainlinks">

          <ul>

            <li><a href="index.php">Home</a></li>

            <li><a href="about-us.php">About Us</a></li>

            <li><a href="our-team.php">Our Team</a></li>

            <li><a href="our-nexa-showrooms.php">Our Presence</a></li>            

            <li><a href="feedback.php">Feedback</a></li>

          </ul>

        </div>

      </div>

      

      <div class="col-lg-3">

            <div class="mainlinks">

              <ul>

                <li><a href="#"> NEXA Cars</a>

                  <ul>

                    <li><a href="ciaz.php">Ciaz</a></li>

                    <li><a href="#">S-Cross</a></li>

                    <li><a href="baleno.php">Baleno</a></li>

                    <li><a href="ignis.php">Ignis</a></li>

                    <li><a href="xl6.php">XL6</a></li>

                  </ul>

                </li>

              </ul>

            </div>

          </div>

      

      <div class="col-lg-3 col-md-3 col-sm-3">

        <div class="mainlinks">

          <h4>Workshop  </h4>

          <ul>

            <li><a href="schedule-services.php">Schedule Service / Accident Repair</a></li>

            <li><a href="our-nexa-workshops.php">NEXA Workshop</a></li>

             <li><a href="enquiry.php">Enquire Now</a></li>

            <li><a href="test-drive.php" style=" background:#2e3094; padding:5px 10px"><i class="mdi mdi-steering"></i> Request a Test Drive</a>
			</li>

          </ul>

        </div>

      </div>

      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="mainlinks">
          <h4>Allied Services </h4>
          <ul>
            <li><a href="nexa-insurance.php">Nexa Insurance</a></li>
            <li><a href="nexa-finance.php">Nexa Finance</a></li>
          </ul>
        </div>
      </div>

      
<div class="col-lg-3 col-md-3 col-sm-12">
        <div class="mainlinks">
		    	<!--<ul><li><a href="http://truevalue.marutiseva.com">True Value</a></li></ul>-->
              <ul><li><a href="http://marutiseva.com"> Maruti Suzuki Arena</a></li></ul>
			  <ul><li><a href="https://commercial.marutiseva.com"> Commercial Vehicles </a></li></ul>
        </div>
      </div>
    

    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="head-office">
          <h4>Head Office</h4>
          <ul>
            <li style="color:#FFF">
            <p>Address</p>
            X-46, MIDC,Ambad, Nashik, Maharashtra  422010 Nashik</li>
            <li><p>Phone Number</p><a href="tel:8390446644">+91 83904 46644 </a></li>
            <li>
             <p>Email Id</p>
            <a href="mailto:enquiry@marutiseva.com">enquiry@marutiseva.com</a></li>
          </ul>
        </div>
      </div>

       <div class="col-lg-3 col-md-3 col-sm-12">

      <div class="social-media">

          <h4>Follow Us on</h4>

          <ul>

            <li><a href="https://www.facebook.com/sevamaruti/?fref=ts" target="_blank"><i class="mdi mdi-facebook"></i></a></li>

            <li><a href="https://twitter.com/sevaauto" target="_blank"><i class="mdi mdi-twitter"></i></a></li>

            <li><a href="https://www.instagram.com/seva_automotive/" target="_blank"><i class="mdi mdi-instagram"></i></a></li>

          </ul>

        </div>  

        </div>    

          </div>

    

  </div>

  <div class="footer-bottom">

    <div class="container-fluid">

      <div class="clearfix">

        <div class=" text-center"> © 2020 Nexa | Design & Developed by <a href="http://hohtechlabs.com/" target="_blank">HOH Tech Labs Pvt. Ltd.</a></div>

      </div>

    </div>

  </div>

</footer>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
<script src="assets/js/popper.min.js"></script>
<script src="assets/lib/js/bootstrap.min.js"></script> 
<script src="assets/lib/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<script src="assets/js/car-carousel.js" type="text/javascript"></script> 
<script src="assets/js/megamenu.js"></script> 
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/parsley.js"></script>
<script defer>

$(document).ready(function() {	

		var id = '#dialog';

		//Get the screen height and width

		var maskHeight = $(document).height();

		var maskWidth = $(window).width();

		//Set heigth and width to mask to fill up the whole screen

		$('#mask').css({'width':maskWidth,'height':maskHeight});

		//transition effect		

		$('#mask').fadeIn(500);	

		$('#mask').fadeTo("slow",0.9);	

		//Get the window height and width

		var winH = $(window).height();

		var winW = $(window).width();

		//Set the popup window to center

		$(id).css('top',  winH/2-$(id).height()/2);

		$(id).css('left', winW/2-$(id).width()/2);

		//transition effect

		$(id).fadeIn(2000); 	

	//if close button is clicked

	$('.window .close').click(function (e) {

		//Cancel the link behavior

		e.preventDefault();

		$('#mask').hide();

		$('.window').hide();

	});		

	//if mask is clicked

	$('#mask').click(function () {

		$(this).hide();

		$('.window').hide();

	});		

});

</script>

<script type="text/javascript" defer>

			$(function() {

        $("#datepicker").datepicker({ format: "dd/mm/yyyy",autoclose: true}).val();

				$("#timepicker").timepicker({ autoclose: true}).val();

				var cssSmall = {

					width: 100,

					height: 175,

					marginTop:195

				};

				var cssMedium = {

					width: 150,

					height: 215,

					marginTop: 165

				};

				var cssLarge = {

					width:500,

					height:345,

					marginTop: 0

				};

				var aniConf = {

					queue: false,

					duration: 1000

				};



				$('#carousel')

					.children().css(cssSmall)

					.eq(1).css(cssMedium)

					.next().css(cssLarge)

					.next().css(cssMedium);

					

				$('#carousel').carouFredSel({

					width: '100%',

					height: 290,

					items: 5,

					scroll: {

						items: 1,

						duration: aniConf.duration,

						onBefore: function( data ) {								

							

							//	0 [ 1 ] 2  3  4

							data.items.old.eq(1).animate(cssSmall, aniConf);

							

							//	0  1 [ 2 ] 3  4

							data.items.old.eq(2).animate(cssMedium, aniConf);

							

							// 0  1  2  [ 3 ] 4

							data.items.old.eq(3).animate(cssLarge, aniConf);

							

							//	0  1  2  3 [ 4 ]

							data.items.old.eq(4).animate(cssMedium, aniConf);

						}

					}

				});



			});

      function color_function(id,total)

      {

        for (var i = 1; i <= total; i++) 

        {

          if(i!=id)

          {

            $('#image_'+i).hide();

          }

          else

          {

            $('#image_'+i).show();

          }

        }

      }

		</script>

        <script defer>

  jQuery(window).on('load', function() {

  jQuery('#preloader__status').fadeOut();

  jQuery('#preloader').delay(350).fadeOut('slow'); 

  jQuery('body').delay(350).css({'overflow':'visible'});

})

$(document).ready(function() {  

    document.addEventListener('contextmenu', event => event.preventDefault());
    $(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
    return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
    return false;
    }
    });
    console.clear();

  });


jQuery(document).ready(function() {
  if ($('.cd-stretchy-nav').length > 0) {
    var stretchyNavs = $('.cd-stretchy-nav');

    stretchyNavs.each(function() {
      var stretchyNav = $(this),
        stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger');

      stretchyNavTrigger.on('click', function(event) {
        event.preventDefault();
        stretchyNav.toggleClass('nav-is-visible');
      });
    });

    $(document).on('click', function(event) {
      (!$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span')) && stretchyNavs.removeClass('nav-is-visible');
    });
  }
});
$(document).ready(function() {
$(window).scroll(function() {
if ($(this).scrollTop() > 20) {
$('#toTopBtn').fadeIn();
} else {
$('#toTopBtn').fadeOut();
}
});

$('#toTopBtn').click(function() {
$("html, body").animate({
scrollTop: 0
}, 1000);
return false;
});
});
</script>
</body></html>