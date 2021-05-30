<style type="text/css">

html{
	scroll-behavior: smooth;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Comfortaa', cursive;

  }
  .nav_style{
    background-color:  #364F6B; !important
  }
  .nav_style a{
    color: #F3EFE0;

  }
.logo{
  padding-left: 0px!important;
}
.navbar-toggler{
  margin-right: 15px!important;
}
  .nav_style span{
    font-family: 'Bungee', cursive;

  }

  .padding_{
    padding-top: 30px;
  }

.craouself{
  height: 300px!important;
}
.primary-nav {
    transition: all 0.4s ease-in-out !important;
    -webkit-transition: all 0.4s ease-in-out !important;
    -moz-transition: all 0.4s ease-in-out !important;
 }
 .shrink {
     padding-top: 0 !important;
     padding-bottom: 0 !important;
     min-height: 85px !important;
 }	

.shrink {
     padding-top: 0 !important;
     padding-bottom: 0 !important;
     min-height: 50px !important;
 }

/*///////parallax//////*/
#plx{
  background-image: url(https://images.unsplash.com/photo-1584463699037-d47fd412ce59?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 100px;
}
#plx1{
  background-image: url(https://images.unsplash.com/photo-1588611911587-7bc55b45d588?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 100px;
}
#plx2{
  background-image: url(https://images.unsplash.com/photo-1587814969489-e5df12e17391?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 50px;
}


/*////////////// main header \\\\\\\\\\\\\\*/

.main_header{
	height: 800px;
	width: 100%;
  background-color: #fff;
}

.rightside h1{
	font-size: 3rem;
}

.corona_rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{ animation: heartbeat 5s linear infinite; }

@keyframes heartbeat
{
  0%
  {
    transform: scale( .75 );
  }
  20%
  {
    transform: scale( 1 );
  }
  40%
  {
    transform: scale( .75 );
  }
  60%
  {
    transform: scale( 1 );
  }
  80%
  {
    transform: scale( .75 );
  }
  100%
  {
    transform: scale( .75 );
  }
}



/************** corona update *************/

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{ color: #ff7675; }

.corona_update h1{ font-size: 2rem; text-align: center; }


/*////////////// about section //////////////*/

.sub_section{
	background-color: #fbfafd;
  height:750px;
}

/***************** top scroll **************/
#myBtn {
  display: none; 
  position: fixed;
  bottom: 30px;
  right: 40px; 
  z-index: 99; 
  border: none;
  outline: none;
  background-color: #00A8FF; 
  color: white; 
  cursor: pointer; 
  padding: 10px; 
  border-radius: 10px; 
}

#myBtn:hover {
  background:  #606060 ; 
}
.whole_div_mobile{
  display: none!important;
}
  

/*//////////// responsive //////////////*/
@media(max-width: 1200px){

}
@media(max-width:768px){
	.main_header{ height: 700px; text-align: center;
  padding-top: 50px; }

	.main_header h1{     
	text-align: center;
    padding: 0;
    width: 100%;
    font-size: 30px; }


    .count_style{
    	display: inline!important;
    }

    .count_style p{ text-align: center; }

    .about_res{ margin-left: 0!important; }
    .carouself{
        display: block;
    }

   .div_ {
    margin-left: 0px;

   }
   .navbar-toggler{
    margin-right: 10px!important;
   }
   .whole_div_laptop{
    display: none!important;
   }
    .whole_div_mobile{
    display: block!important;
   }
   .info-news_mob h2{
    font-size: 2px!important;
   }
   .single-news{
    
    height: 350px!important;
   }
   .image_g img{
    width: 100px!important;
    height: auto;
   }
  
 
  .logo h1{
    font-size: 25px!important;
  }*/
}
/*//////////////// footer //////////*/
footer{
  height: 100px !important;
  background-color: #DAE0E2;
}

/*//////covid news//////*/

header{
  font-size: 10px;
  background-color: #364F6B;
  color: white;
}

/*/////////news api/////////*/

.container{
  margin-top: 20px;

}
.title{
   margin-top: 20px;
  margin-bottom: 20px;

}
.single-news{
  background-color: #DAE0E2;
  padding:30px;
  box-shadow: 3px 3px 8px grey;
 border-radius: 10px;
}

.img-hover-zoom {
  height: 300px;
}

.img-hover-zoom img {
  transition: transform .5s ease;
}


.img-hover-zoom:hover img {
  transform: scale(1.2);
}
/*///////////////////////////newsapi/////////////////
*/

.card-hover-zoom {
  height: 300px;

}


.card-hover-zoom .single-news {
  transition: transform .5s ease;
}

.card-hover-zoom:hover .single-news {
  transform: scale(1.2);
}
.animate__animated.animate__fadeIn {
  --animate-duration: 4s !important;
}



</style>
