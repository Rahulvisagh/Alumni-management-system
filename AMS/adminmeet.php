
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
  
                      <!-- ***** Logo Start ***** -->
                    
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <?php include "adminmenu.php" ?>
                      <!-- ***** Menu End ***** -->
                  
                  
                  
  
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h2>ADD NEW MEETING</h2>
		<script  type='text/javascript'>
			function meetSave() {
				document.frm.submit();
				return false;
			}
		</script>
              <p>
		<form name="frm" method=post action=adminsavemeet.php><table>
			
			
			<tr><td><font color="white">Meeting Name &nbsp; </td><td> :</font> <input type="text" name="t1" id="t1"></td></tr>
			
            <tr><td><font color="white">Meeting Description &nbsp; </td><td>:</font> <input type="text" name="t2" id="t2"></td></tr>
          
            <tr><td><font color="white">Meeting Date &nbsp; </td><td>:</font> <input type="date" name="t3" id="t3"></td></tr>
            
            <tr><td><font color="white">Meeting Time &nbsp; </td><td> :</font> <input type="time" name="t4" id="t4"></td></tr>
            
            
            
            <tr><td><font color="white">Meeting Booking &nbsp; </td><td> :</font> <input type="text" name="t5" id="t5"></td></tr>
            
            <tr><td><font color="white">Meeting Cordinator &nbsp; </td><td> :</font> <input type="text" name="t6" id="t6"></td></tr>
            
            <tr><td><font color="white">Meeting Cordinator Mobile &nbsp; </td><td> :</font> <input type="text" name="t7" id="t7"></td></tr>
        </table>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="" onclick='return meetSave()'>Add</a></div>
              </div>
		</form>
	      </p>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>