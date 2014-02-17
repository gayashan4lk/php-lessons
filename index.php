<?php session_start();  ?>
<?php include("includes/header.php"); ?>
<!--*********	page ********-->
<div id="page-wrapper" class="wrapper">
<div  id="page" class="container">
	<!--*********	quote ********-->

	<div id="abdul-kalam-quote">
	<!--**************************** start	php script ********-->
					<?php
					if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
						echo "hello ,".$_SESSION['username'] ;
					}else{
						echo "<a href='login.php'><span id='login'>Login</span></a>";
					}

					?>
<!--****************************  end	php script ********-->

		<div id="abdul-kalam-quote-inner" >
			<div id="quote-container">
				<p id="quote"  >Learning uses Creativity<br/>Creativity leads to Think<br/>Think provides Knowledge<br/>Knowledge makes you Great<br/></p>
				<h5 id="quote-name" class="quote-name">Dr.Abdul kalam</h5>
				<h6 id="quote-name" class="quote-name" >former president of India</h6>
			</div>
		</div>
	</div>
	
	<!--*********	page continue ********-->
	<div id="link-box" class="container" >


		<table>
			<tr><td id="new-topics" class="box-links">
				<a href=""><h4 id="new-topics-title" class="titles">New Topics</h4></a>
				<p id="new-topics-para" ></p>
				<a href="" id="new-topics-link" >read more</a>
			</td>
			
			<td id="featured" class="box-links">
				<a href=""><h4 id="featured-title" class="titles" >Featured</h4></a>
				<p id="featured-para" ></p>
				<a href="" id="featured-link" >read more</a>
			</td>

			<td id="download" class="box-links">
				<a href=""><h4 id="download-title" class="titles" >Featured</h4></a>
				<p id="download-para" ></p>
				<a href="" id="download-link" >view more</a>
			</td></tr>
			
		</table>
	</div>
	
	</div>
</div>
</div>

<?php include("includes/footer.php"); ?>