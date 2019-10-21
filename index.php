<!DOCTYPE html>
<html>
  <head>
    <title>What the Book</title>
    <link rel="stylesheet" href="assets/css/3-sections/header.css">
       <link rel="stylesheet" href="assets/css/3-sections/home-testimonials.css">
      <link rel="stylesheet" href="assets/css/3-sections/article_index.css">
     <link rel="stylesheet" href="assets/css/3-sections/home-about.css">
   
      <link rel="stylesheet" href="assets/css/3-sections/section_youtube.css">
    
      <link rel="stylesheet" href="assets/css/3-sections/section_books.css">
      <link rel="stylesheet" href="assets/css/3-sections/_home.css">
   
      <link rel="stylesheet" href="assets/css/3-sections/footer_css.css">
       <link rel="stylesheet" href="assets/css/3-sections/panel.css">
     
      
   
      <link rel="stylesheet" type="text/css" href="login.css" media="all" />
		
		<script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
      
  <div class="home-wrap">  
    <div class="mobile-nav">
  <ul>
    <li><a href="#about">About</a></li>
    <li><a href="#youtube">Video</a></li>
    <!--li: a(href="#mentoring") Mentoring-->
    <li><a href="#articles">Books</a></li>
    <li><a href="#mentoring">Testimonial</a></li>
    
    <li><a href="#contact">Contact</a></li>
  </ul>
</div>
     
<header>
  <div class="header-position">
    <h1 class="logo"></h1>
    <nav class="site-nav">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#youtube">Video</a></li>
        <!--li: a(href="#mentoring") Mentoring-->
        <li><a href="#articles">Books</a></li>
        <li><a href="#mentoring">Testimonial</a></li>
        
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav><a href="mailto:whatthebook@gmail.com" class="email-link">+email me</a>
    <div class="mobile-nav-toggle"><span></span></div>
  </div>
</header>
      <div class="home-sections">
         
         <!-- about section -->
        
         <section id="about" class="about"><div class="content"><video class="overlay covervideo" poster="logo.png" autoplay loop>
                 <source src="library.mp4" type="video/mp4">
                  <source src="" type="video/webm">
             </video></div><div class="flex flex--center">
                    
                    
                 <div class="col-1 push-right text">
                     <h2 class="text">What the Book</h2><p class="home-lead text">... Your Online Book Store ...</p>
		
		
		
		
		<div id="container"><div id="con1">
			<form  action="process_login.php" method="POST">
				
				<input type="text" name="usernm" placeholder="Username"/>
				<input type="password" name="pwd" placeholder="Password" />
				<label><input type="checkbox" name="ckbox" checked> Remember me </label>
				<br>
				<input type='submit' value=" Log In " id ="submit" style="background-color:#fff; color:#27a9e1" >
			</form>
            
            <a href="signup.php"><button class="submit" id="submit">Sign Up</button></a>
            
			
            </div></div></div>
             </div>
              </section>
         <!-- end -->
          <!--  youtube  -->
          <section id="youtube" class="youtube"><div class="flex flex--space-around"><div class="col-1"><div class="video-strip"></div><div class="flex-video"><video controls class="videonext" ><source src="newmovietest1.mp4" ></video></div></div><div class="col-1 order-first"><p class="home-lead outdented">...which is very easy to use...</p>Watch this Video to Know More</div></div></section>
          <!--  end -->
          <!--  Articles Books section -->
           <section id="articles" class="articles"><div class="flex flex--center"><div class="col-50"><div class="article-wrap">
                    <ul class="panels">
          <?php
                        
	include "connect.php";
	$sql = "SELECT * FROM book";
	$result = mysqli_query($connect, $sql);
        $count=0;
			
                       if($result) {
		if (mysqli_num_rows($result) > 0 && $count<12) {
		// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
			/*	echo "<tr><td>";
				echo $row["b_id"]. " </td><td> " . $row["b_nm"]. " </td><td> " . $row["b_desc"]. " </td><td> " . $row["b_publisher"]." </td><td> " . $row["b_edition"]. " </td><td> " . $row["b_price"]." </td><td> " . $row["b_page"]." </td><td> <img src='" . $row["b_img"]. " ' width='200px' height='200px'/>";
				echo "</td></tr>";  */
                $source= $row["b_img"];
                $name= $row['b_nm'];
                $count++;
                
                      echo " <li>
                            <div class='front' style='background: url(".$source.");background-size: 150px 150px;background-repeat: no-repeat;' >  </div>
                            <div class='back' style='background: #267df4'><form action='bookdetails.php' method='POST'> <input type=text name='name' id='name' value=".$name." style='display:none' ><input type='submit' style='color:black;border:none;width:100%' value=".$name."></form></div>  </li> ";
                       
                      /*       <li>
                            <div class="front" style="background: #267df4" >world</div>
                            <div class="back" style="background: #4c8fea" >world</div>
                        </li>
                             <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                             <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                             <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                             <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                             <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                             <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                             <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                         <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                         <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>
                         <li>
                            <div class="front" style="background: #267df4" > Hello </div>
                            <div class="back" style="background: #267df4" > Hello </div>
                        </li>   */
                       }
		}
	}       
                        ?>
                    </ul>
                     
                   
       
                </div></div><div class="col-50 flex flex--center"><!--.order-first--><div class="col-1"><div class="desc-wrap"><p class="home-lead outdented">...Buy Any Of the Available Books at affordable rates...</p><a href="/articles" class="home-cta">See All Articles</a></div></div></div></div></section>
     
     <!--  end -->
          <!-- Testimonials -->
            <section id="mentoring" class="mentoring"><div class="flex flex--center"><div class="col-1"><div id="testimonials">
		<h2>TESTIMONIALS</h2>
		<div id="test_container">
			<div class="testimonial">
				<div class="testimonial_text"><strong>What the Book.</strong><br>Is the best site<br>To.<br>Sell Used <br>Books ?</div>
				<h3 class="testimonial_name">-Grammar Nazi</h3>
				<div class="testimonial_designation">CEO, I Don't Care Inc.</div>
			</div>
			<div class="testimonial">
				<div class="testimonial_text">what the book is new but has really interesting thoughts, keep going bro!</div>
				<h3 class="testimonial_name">-Larry Page</h3>
				<div class="testimonial_designation">CEO, Google Inc.</div>
			</div>
			<div class="testimonial">
				<div class="testimonial_text">The makers are super cool, I wish I were like him :P</div>
				<h3 class="testimonial_name">-Bill Gates</h3>
				<div class="testimonial_designation">Founder, Microsoft</div>
			</div>
		</div>
		<div id="t_pagers"><a class="pager"></a><a class="pager"></a><a class="pager"></a></div>
</div></div><div class="col-1"><p class="home-lead outdented">...Here's what People Say About Us...</p></div></div></section>
          <script type="text/javascript">

              jQuery(document).ready(function($){
	var w,mHeight,tests=$("#testimonials");
	w=tests.outerWidth();
	mHeight=0;
	tests.find(".testimonial").each(function(index){
		$("#t_pagers").find(".pager:eq(0)").addClass("active");	//make the first pager active initially
		if(index==0)
			$(this).addClass("active");	//make the first slide active initially
		if($(this).height()>mHeight)	//just finding the max height of the slides
			mHeight=$(this).height();
		var l=index*w;				//find the left position of each slide
		$(this).css("left",l);			//set the left position
		tests.find("#test_container").height(mHeight);	//make the height of the slider equal to the max height of the slides
	});

             
$(".pager").click( function(e){	//clicking action for pagination
	e.preventDefault();
	next=$(this).index(".pager");
	clearInterval(t_int);	//clicking stops the autoplay we will define later
	moveIt(next);
}); 
                  setInterval(function(){ next=$(this).index(".pager");moveit(next); }, 3000);

                   });
function moveIt(next){	//the main sliding function
	var c=parseInt($(".testimonial.active").removeClass("active").css("left"));	//current position
	var n=parseInt($(".testimonial").eq(next).addClass("active").css("left"));	//new position
	$(".testimonial").each(function(){	//shift each slide
		if(n>c)
			$(this).animate({'left':'-='+(n-c)+'px'});
		else
			$(this).animate({'left':'+='+Math.abs(n-c)+'px'});
	});
	$(".pager.active").removeClass("active");	//very basic
	$("#t_pagers").find(".pager").eq(next).addClass("active");	//very basic
}
                 
          </script>
          <!--  end  -->
      <!-- Footer -->
          <footer id="contact" class="home-footer"><a href="mailto:whatthebook@gmail.com">whatthebook@gmail.com</a></footer>
          <!-- end  -->
      </div></div>          
                               
  </body>
</html>
