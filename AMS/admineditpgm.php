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
              <h2>programms</h2>
		           
              <table border=2>
<tr>
	<td><font color=white>PROGRAM CODE &nbsp;</font></td>
	<td><font color=white>PROGRAM NAME &nbsp;</font></td>
  <td><font color=white>PROGRAM TYPE &nbsp;</font></td>
  <td><font color=white>DEPARTMENT NAME &nbsp;</font></td>
  <td><font color=white>DELETE &nbsp; </font></td>
  <td><font color=white>EDIT &nbsp;</font></td>

</tr>
<?php
$en=$_REQUEST["pcode"];
		$con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'amsdb');
	$query = 'SELECT programs.pcode,programs.pname,programs.ptype,admindept.dname,admindept.dcode FROM programs,admindept WHERE programs.dcode=admindept.dcode';
$result = mysqli_query($con, $query);
$row=mysqli_fetch_row($result);
while($row)
{
	if($en!=$row[0])
	{
		print("<tr><td><font color=white>$row[0]</font></td><td><font color=white>$row[1]</font></td><td><font color=white>$row[2]</font></td><td><font color=white>$row[3]</font></td>");
		print("<td><a href=admindelpgm.php?pcode=$row[0]>delete</a></td>");
		print("<td><a href=admineditpgm.php?pcode=$row[0]>edit</a></td>");
		print("</tr>");
	}
	else
	{
		print("<tr>");
		print("<form method=POST action=adminupdatepgm.php>");
		print("<td><font color=white><input type=hidden name=t1 value=$row[0]>$row[0]</font></td>");
		print("<td><input type=text name=t2 value=$row[1]></td>");
    if($row[2] == "UG"){
      print("<td><input type=radio name=r1 value=UG checked=true><font color=white>UG</font>");
    print("<input type=radio name=r1 value=PG><font color=white>PG</font></td>");
    }
    else {
      print("<td><input type=radio name=r1 value=UG><font color=white>UG</font>");
      print("<input type=radio name=r1 value=PG checked=true><font color=white>PG</font></td>");
    }
    
    print("<td><select name=s1 id=s1>");	
$query1 = 'SELECT * FROM admindept';
$result1 = mysqli_query($con, $query1);
$row1=mysqli_fetch_row($result1);
	
while($row1)

{
	if($row[4]== $row1[0])
  {
    print("<option value=$row1[0] selected=true>$row1[1]</option>");

  }
  else{
  print("<option value=$row1[0]>$row1[1]</option>");
  }
	$row1=mysqli_fetch_row($result1);


}

		print("</select>");
    
		
		print("<td><input type=submit value=UPDATE></td>");
		print("<td><a href=adminpgmall.php>CANCEL</a>");
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