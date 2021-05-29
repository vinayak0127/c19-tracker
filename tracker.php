<!DOCTYPE html>
<html>
<head>
	<title>tracker</title>
	<?php  include 'link/links.php'; ?>
	<?php  include 'css/style.php'; ?>
	
</head>
<body onload="fetch()" class="main_header pt-5 animate__animated animate__fadeIn">
<nav class="navbar fixed-top navbar-expand-lg p-1 nav_style  navbar-dark primary-nav" id="primary-nav">
  <a class="navbar-brand logo" href="#"><h1><span>C19</span>tracker</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize p-3">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">news updates <span class="sr-only">(current)</span></a>
        </li> -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#about">about </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#symptoms">symptoms </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prevention">prevention </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">contact </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="newsapi.php">News </a>
        </li> -->
      <!-- <button type="button" class="btn btn-warning p-0">
        <li class="nav-item ">
          <a class="nav-link" style="color: black;" href="tracker.php">Tracker</a>
        </li>
      </button> -->
      </ul>
    </div>
  </nav>
<br>
<br>
<br>
<br>
<!-- <?php

$data = file_get_contents('https://api.covid19api.com/summary');
$coronadata = json_decode($data);
echo"<pre>";
print_r($coronadata);

?> -->

<!--  **************** corona latest updates **************--> 

<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">c<img src="images/corona.png" style="width:50px; height:50px;">vid-19 live updates</h3>
    <h4 class="text-center text-capitalize">press <span style="color: #E74292;">ctrl + f </span>to search your country</h4>
    <h4 class="text-center text-capitalize"><a href="indiatrack.php" style="color: #E74292;">click here!!</a> to get live case count of <img src="images/india.png"></h4>
  </div>
<!--   <hr class="container">
  <table class=" container table table-stripped table-responsive text-center" style="margin-left: 250px;">
    <h2 class="container text-center">Global</h2>
    <th>NewConfirmed</th>
    <th>TotalConfirmed</th>
    <th>NewDeaths</th>
    <th>TotalDeaths</th>
    <th>NewRecovered</th>
    <th>TotalRecovered</th>
  </table> -->
 <!--  <div class="container " style="margin-left: 200px;">
 -->  <table class=" table table-stripped table-border text-center" id="tableval">
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
      <th>TotalDeaths</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
    </tr> 
  </table>
  <!-- </div> -->
</section>

<!-- ///////////// top cursor /////////// -->

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>

  <!-- /////////////////// footer ////////////// -->

<!-- Footer -->
<footer>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright: The CrypticsSRM
  </div>
  <!-- Copyright -->

</footer>
  <script type="text/javascript">

$('.count').counterUp({
  delay:10,
  time:3000
})

  
mybutton = document.getElementById("myBtn");
// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


   function fetch(){
         $.get("https://api.covid19api.com/summary",
        function (data){
          // console.log(data['Countries'].length);
          var tableval = document.getElementById('tableval');
          for (var i = 1; i<(data['Countries'].length); i++) {
            var x = tableval.insertRow();
            x.insertCell(0);

            tableval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tableval.rows[i].cells[0].style.background = '#BB2CD9';
            tableval.rows[i].cells[0].style.color = '#fff';

            x.insertCell(1);

            tableval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            tableval.rows[i].cells[1].style.background = '#01CBC6'; 

            x.insertCell(2);

            tableval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tableval.rows[i].cells[2].style.background = '#45CE30';
            
            x.insertCell(3);

            tableval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tableval.rows[i].cells[3].style.background = '#F3B431';
            

            x.insertCell(4);

            tableval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tableval.rows[i].cells[4].style.background = '#45CE30';
            

            x.insertCell(5);

            tableval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
            tableval.rows[i].cells[5].style.background = '#E44236';

            
          }
        }
      )
  }


  </script>
</body>
</html>