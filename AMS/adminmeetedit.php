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
                  <h2>meetings</h2>
		           
                  <table border=1>
    <tr>
      <td><font color=white>MEETING ID </font></td>
      <td><font color=white>MEETING HEAD</font></td>
        <td><font color=white>MEETING DESCRIPTION</font></td>
        <td><font color=white>MEETING DATE </font></td>
        <td><font color=white>MEETING TIME</font></td>
        <td><font color=white>MEETING IMAGE</font></td>
        <td><font color=white>MEETING BOOKING</font></td>
        <td><font color=white>MEETING CORDINATOR NAME </font></td>
        <td><font color=white>MEETING CORDINATOR MOBILE </font></td>
      <td><font color=white>DELETE</font></td>
      <td><font color=white>EDIT</font></td>
    </tr>
    <?php
	$mid=$_REQUEST["mid"];
	$con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'amsdb');
	$query = 'SELECT * FROM meetings';
$result = mysqli_query($con, $query);
$row=mysqli_fetch_row($result);
while($row)
{
	if($mid!=$row[0])
	{
		print("<tr><td><font color=white>$row[0]</font></td><td><font color=white>$row[1]</font></td><td><font color=white>$row[2]</font></td><td><font color=white>$row[3]</font></td><td><font color=white>$row[4]</font></td><td><font color=white>$row[5]</font></td><td><font color=white>$row[6]</font></td><td><font color=white>$row[7]</font></td><td><font color=white>$row[8]</font></td>");
		print("<td><a href=adminmeetdel.php?mid=$row[0]>delete</a></td>");
		print("<td><a href=adminmeetedit.php?mid=$row[0]>edit</a></td>");
		print("</tr>");
	}
	else
	{
		print("<tr>");
		print("<form method=POST action=adminmeetupdate.php>");
		print("<td><input type=hidden name=t1 value=$row[0]>$row[0]</td>");
		print("<td><input type=text name=t2 value=$row[1]></td>");
		print("<td><input type=text name=t2 value=$row[2]></td>");
		print("<td><input type=text name=t2 value=$row[3]></td>");
		print("<td><input type=text name=t2 value=$row[4]></td>");
		print("<td><input type=text name=t2 value=$row[5]></td>");
		print("<td><input type=file name=t2 value=$row[6]></td>");
		print("<td><input type=text name=t2 value=$row[7]></td>");
		print("<td><input type=text name=t2 value=$row[8]></td>");


		
		print("<td><input type=submit value=UPDATE></td>");
		print("<td><a href=adminmeetall.php>CANCEL</a>");
		print("</form>");
		print("</tr>");
	}
	$row=mysqli_fetch_row($result);
}

?>
</table>


             
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