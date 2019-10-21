<!DOCTYPE html>
<html>
  <head>
    <title>What the Book</title>
    
       <link rel="stylesheet" href="assets/css/3-sections/home-testimonials.css">
      <link rel="stylesheet" href="assets/css/3-sections/article_index.css">
     <link rel="stylesheet" href="assets/css/3-sections/home-about.css">
      <link rel="stylesheet" href="assets/css/3-sections/section_youtube.css">
      <link rel="stylesheet" href="assets/css/3-sections/section_books.css">
      <link rel="stylesheet" href="assets/css/3-sections/_home.css">
      <link rel="stylesheet" href="assets/css/3-sections/footer_css.css">
       <link rel="stylesheet" href="assets/css/3-sections/panel.css">
      <link rel="stylesheet" href="extra.css">
    
      
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="jquery-2.2.3.min.js"></script>
     
     
     
		
		<script src="https://apis.google.com/js/platform.js" async defer></script>
      <link rel="stylesheet" href="assets/css/3-sections/header.css">
  </head>
  <body onload="myFucntion()">
      
  <div class="home-wrap">  
    <div class="mobile-nav">
  <ul>
    <li><a href="#about">Profile</a></li>
      <li><a href="#youtube">Video</a></li>
      <li><a href="#newrows">Search Book</a></li>
      <li><a href="#add_book">Sell Book</a></li>
      <li><a href="#articles">Books</a></li>
      
    
    <!--li: a(href="#mentoring") Mentoring-->
    
    <li><a href="#mentoring">Testimonial</a></li>
    
    <li><a href="#contact">Contact</a></li>
       <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
     
<header>
  <div class="header-position">
    <h1 class="logo"></h1>
    <nav class="site-nav">
      <ul>
        <li><a href="#about">Profile</a></li>
            <li><a href="#youtube">Video</a></li>
          <li><a href="#newrows">Search Book</a></li>
           <li><a href="#add_book">Sell Book</a></li>
          <li><a href="#articles">Books</a></li>
      
        <!--li: a(href="#mentoring") Mentoring-->
        
        <li><a href="#mentoring">Testimonial</a></li>
        
        <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
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
                     <h2 class="text">What the Book</h2><p class="home-lead text">... My Online Book Store ...</p>
		
                     
	
       
			<img class="img-circle" src="adu.jpg">
                     
                     <?php
	include "connect.php";
                     session_start();
                     $name=$_SESSION['name'];
                       $id= $_SESSION['id'];
                     echo "<p class='home-lead text'>".$name."</p>";
                     ?>
		
		</div>
             </div>
              </section>
         <!-- end -->
           <!--  youtube  -->
          <section id="youtube" class="youtube"><div class="flex flex--space-around"><div class="col-1"><div class="video-strip"></div><div class="flex-video"><video controls class="videonext" ><source src="newmovietest1.mp4" ></video></div></div><div class="col-1 order-first"><p class="home-lead outdented">...which is very easy to use...</p>Watch this Video to Know More</div></div></section>
          <!--  end -->
          <!-- new search books section -->
         
			
	
		

	
		<section id="newrows" style="background: #35404F"><div class="flex flex--space-around"><div class="col-1"><p>
		<h2>Categories</h2>
			<ul>
					
		
					<?php
										
			
						$query="select * from category ";
			
						$res=mysqli_query($connect,$query);
											
						while($row=mysqli_fetch_assoc($res))
							{
								echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
								//pass catid not catnm
								
							}
			
							mysqli_close($connect);
					?>
				</ul>
			
			
		</p></div><div class="col-1 order-first"><p> <div style="float:left"> <ul><li id="search">
		<h2>Search</h2>
			<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
			</form>
            </li></ul></div> </p></div></div></section>

	
          <!-- end  -->
      <!-- sell bookos  -->
      <section id="add_book" style="background: url(design-bg.png); background-color: #ccc; padding:20px"><div class="flex flex--space-around"><div class="col-1"><p>
			<h1 class="title" >Sell a book</h1>
			<div class="entry" >
				<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Book Name:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b>Category:</b><br>
						<select  name="cat" style="background:transparent">
								<?php
									
										
			     include "connect.php";
											$query="select * from category ";
			
											$res=mysqli_query($connect,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option >".$row['cat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysqli_query($connect,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
												
													
												}
												
											}
											
								?>
						</select>
						<br><br>
						
						<b>Description:</b><br>
						<textarea cols="25" rows="10" name='description' style="background: transparent" ></textarea>
						<br><br>
						
						<b>Publisher:</b><br>
						<input type='text' name='publisher' size='40'>
						<br><br>
						
						<b>Edition:</b><br>
						<input type='text' name='edition' size='40'>
						<br><br>
						
						<b>ISBN:</b><br>
						<input type='text' name='isbn' size='40'>
						<br><br>
						
						<b>PAGES:</b><br>
						<input type='text' name='pages' size='40'>
						<br><br>
						
						<b>PRICE:</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						<b>E-Book:</b><br>
						<input type='file' name='ebook'  size='35'>
						<br><br>
						
						<input  type='submit'  value='   OK   '  >
				</form>
			
			
		</div>
		
	</div><h2 style="text-align:center;padding: 200px">...Add a used Book which you want to sell...  Get back more than what a book vendor will pay you...</h2></div></section>
      <!--end -->
      <!--  Articles Books section -->
           <section id="articles" class="articles"><div class="flex flex--center"><div class="col-50"><div class="article-wrap">
                    <ul class="panels">
          <?php
	include "connect.php";
	$sql = "SELECT * FROM book";
	$result = mysqli_query($connect, $sql);
        $count=0;
			
                       if($result) {
		if (mysqli_num_rows($result) > 0 && $count< 12) {
		// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
			/*	echo "<tr><td>";
				echo $row["b_id"]. " </td><td> " . $row["b_nm"]. " </td><td> " . $row["b_desc"]. " </td><td> " . $row["b_publisher"]." </td><td> " . $row["b_edition"]. " </td><td> " . $row["b_price"]." </td><td> " . $row["b_page"]." </td><td> <img src='" . $row["b_img"]. " ' width='200px' height='200px'/>";
				echo "</td></tr>";  */
                $source= $row["b_img"];
                $name= $row['b_nm'];
                
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
                     
                   
       
                </div></div><div class="col-50 flex flex--center"><!--.order-first--><div class="col-1"><div class="desc-wrap"><p class="home-lead outdented">...Buy Any Of the Available Books at affordable rates...</p><a href="/articles" class="home-cta">See All Bookss</a></div></div></div></div></section>
     
     <!--  end -->
         
          
          <!-- Testimonials 
            <section id="mentoring" class="mentoring"><div class="flex flex--center"><div class="col-1"><div id="testimonials">
		<h2>TESTIMONIALS</h2>
		<div id="test_container">
			<div class="testimonial">
				<div class="testimonial_text" id="testimonial_text"><strong>What the Book.</strong><br>Is the best site<br>To.<br>Sell Used <br>Books ?</div>
				<h3 class="testimonial_name" id="testimonial_name">-Grammar Nazi</h3>
				<div class="testimonial_designation" id="testimonial_designation">CEO, I Don't Care Inc.</div>
			</div>
            <!-- 
			<div class="testimonial">
				<div class="testimonial_text">Code Affair is new but has really interesting thoughts, keep going bro!</div>
				<h3 class="testimonial_name">-Larry Page</h3>
				<div class="testimonial_designation">CEO, Google Inc.</div>
			</div>
			<div class="testimonial">
				<div class="testimonial_text">The guy is super cool, I wish I were like him :P</div>
				<h3 class="testimonial_name">-Bill Gates</h3>
				<div class="testimonial_designation">Founder, Microsoft</div>
			</div> 
		</div>  
		<div id="t_pagers"><a class="pager"></a><a class="pager"></a><a class="pager"></a></div>
</div></div><div class="col-1"><p class="home-lead outdented">...Here's what People Say About Us...</p></div></div></section>
          <script type="text/javascript">

              
                  
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

                function changeContent(i) {
                      
                      if(i==0)
                          {
                              document.getElementById("testimonial_text").innerHTML= "<strong>What the Book.</strong><br>Is the best site<br>To.<br>Sell Used <br>Books ?;
                               document.getElementById("testimonial_name").innerHTML= "-Grammar Nazi";   
                            document.getElementById("testimonial_designation").innerHTML= "CEO, I Don't Care Inc.";}
                      if(i==1)
                          {
                              document.getElementById("testimonial_text").innerHTML= "Code Affair is new but has really interesting thoughts, keep going bro!";
                               document.getElementById("testimonial_name").innerHTML= "-Larry Page ";   
                            document.getElementById("testimonial_designation").innerHTML= "CEO, Google Inc.";}
                       if(i==2)
                          {
                              document.getElementById("testimonial_text").innerHTML= "The makers are super cool, I wish I were like him :P";
                               document.getElementById("testimonial_name").innerHTML= "-Bill Gates ";   
                            document.getElementById("testimonial_designation").innerHTML= "Founder, Microsoft";}
                      
                  }
                function myFunction() {
                   // int i=Math.random[0,2];
                     alert("Hie");
                     changeContent(i); 
                }
                setTimeOut( function { myFunction() }, 3000);

            */       
                 
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
          </script>
          <!--  end  -->
      <!-- Footer  -->
          <footer id="contact" class="home-footer"><a href="mailto:whatthebook@gmail.com">whatthebook@gmail.com</a></footer>
          <!-- end  -->
      </div></div>          
                               
  </body>
</html>
