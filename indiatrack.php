<!DOCTYPE html>
<html>
<head>
	<title>india live cases</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php  include 'css/style.php'; ?>
	<?php  include 'link/links.php'; ?>
	 <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500;600;700&display=swap" rel="stylesheet">

    
            
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
			<button type="button" class="btn btn-warning p-0">
				<li class="nav-item ">
					<a class="nav-link" style="color: black;" href="tracker.php">Tracker</a>
				</li>
			</button>
			</ul>
		</div>
	</nav>
<br>
<br>
<br>
<br>
<!--  **************** corona latest updates **************--> 

<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">c<img src="images/corona.png" style="width:50px; height:50px;">vid-19 live updates</h3>
    <h4 class="text-center text-capitalize">press <span style="color: #E74292;">ctrl + f </span>to search your state <img src="images/map.png" style="width: 59px;height: 75px;"></h4>
   <!--  <h4 class="text-center text-capitalize"><a href="indiatrack.php" style="color: #E74292;">click here!!</a> to get live case count of <img src="images/india.png"></h4> -->
  </div>

<div class="table-responsive">
  <table class=" table table-striped table- text-center" id="tableval">
    <tr>
      <th>State</th>
      <th>Active</th>
      <th>Confirmed</th>
      <th>Deaths</th>
      <th>Recovered</th>
      
    </tr> 
 <!--    <?php 
    

    $data  = file_get_contents('https://api.covid19india.org/data.json');
    $coronalive = json_decode($data,true);

    // echo"<pre>";
    // print_r($coronalive);
    // echo"</pre>";

    ?> -->
  </table>
</div>
</section>

<!-- ///////////// top cursor /////////// -->

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>

  <!-- /////////////////// footer ////////////// -->

<!-- Footer -->
<footer>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: vinayak raj
  </div>
  <!-- Copyright -->

</footer>
<script type="text/javascript">

 function fetch(){
         $.get("https://api.covid19india.org/data.json",
        function (data){
          // console.log(data['Countries'].length);
          var tableval = document.getElementById('tableval');
          for (var i = 1; i<(data['statewise'].length); i++) {
            var x = tableval.insertRow();
            x.insertCell(0);

            tableval.rows[i].cells[0].innerHTML = data['statewise'][i-1]['state'];
            tableval.rows[i].cells[0].style.background = '#BB2CD9';
            tableval.rows[i].cells[0].style.color = '#fff';

            x.insertCell(1);

            tableval.rows[i].cells[1].innerHTML = data['statewise'][i-1]['active'];
            tableval.rows[i].cells[1].style.background = '#01CBC6'; 

            x.insertCell(2);

            tableval.rows[i].cells[2].innerHTML = data['statewise'][i-1]['confirmed'];
            tableval.rows[i].cells[2].style.background = '#45CE30';
            
            x.insertCell(3);

            tableval.rows[i].cells[3].innerHTML = data['statewise'][i-1]['deaths'];
            tableval.rows[i].cells[3].style.background = '#F3B431';
            

            x.insertCell(4);

            tableval.rows[i].cells[4].innerHTML = data['statewise'][i-1]['recovered'];
            tableval.rows[i].cells[4].style.background = '#45CE30';
            

            
            
          }
        }
      )
  }




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

</script>

</body>
</html>


