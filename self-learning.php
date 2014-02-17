<?php session_start();   ?>
<?php include("includes/header.php"); ?>

<div id="page-wrapper" class="wrapper">
	<div  id="page" class="container">
		<div id="navigator-bar">

			<div class="nav-subjects">
				<ul><li class="nav-mainsubjects"><a href="" class="titles">Physics</a>
					<ul><li class="nav-units" > <a href="">Mechanics</a>
						<ul><li class="nav-unitblocks" ><a href="">graphs	</a></li>
							<li class="nav-unitblocks" ><a href="">work,energy,power </a></li></ul>
					</li></ul>
					<ul><li class="nav-units" > <a href="">Thermo physics</a>
						<ul><li class="nav-unitblocks" ><a href="">Temperaturemetry </a></li>
							<li class="nav-unitblocks" ><a href="">getting BIG</a></li>
							<li class="nav-unitblocks" ><a href="">gases</a></li>
							<li class="nav-unitblocks" ><a href="">Thermometry</a></li>
							<li class="nav-unitblocks" ><a href="">Thermodynamics</a></li>
							<li class="nav-unitblocks" ><a href="">Thermoflowing</a></li>
							<li class="nav-unitblocks" ><a href="">Humidity and gases</a></li>
						</ul>
					</li></ul>
					<ul><li class="nav-units" > <a href="">Current Electricity</a>
						<ul><li class="nav-unitblocks" ><a href="">Voltage</a></li>
							<li class="nav-unitblocks" ><a href="">Ohms law  </a></li></ul>
					</li></ul>

				</li></ul>
			</div>

			<div class="nav-subjects">
				<ul><li class="nav-mainsubjects"><a href="">Chemistry</a>
					<ul><li class="nav-units" > <a href="">mesurments</a>
						<ul><li class="nav-unitblocks" ><a href="">titrations	</a></li>
							<li class="nav-unitblocks" ><a href="">precipitations </a></li></ul>
					</li></ul>
				</li></ul>
			</div>

			<div class="nav-subjects">
				<ul><li class="nav-mainsubjects"><a href="">Biology</a>
					<ul><li class="nav-units" > <a href="">Bio diversity</a>
						<ul><li class="nav-unitblocks" ><a href="">Animalia	</a></li>
							<li class="nav-unitblocks" ><a href="">Protista </a></li></ul>
					</li></ul>
				</li></ul>
			</div>

			<div class="nav-subjects">
				<ul><li class="nav-mainsubjects"><a href="">Combine Maths</a>
					<ul><li class="nav-units" > <a href="">Statics</a>
						<ul><li class="nav-unitblocks" ><a href="">part 1	</a></li>
							<li class="nav-unitblocks" ><a href="">part 2 </a></li></ul>
					</li></ul>
				</li></ul>
			</div>

		</div><!-- end navigator bar-->

<div id="content" >
<?php
					if(($_SESSION['username'] != null)){
								echo "hello , {$_SESSION['username']}";
						}

					?>

<h1>මගේ නම එරංග ගයාෂාන්.</h1>
<p><h4>වායු පිළිබඳ චාලක වාදය</h4><br/>
මුලික උපකල්පන හතරක් මත පදනම් වෙයි.
<ul><li>වායු අණු පූර්ණ වශයෙන් ප්‍රත්‍යස්ථ ගෝල ලෙස හැසිරේ.</li>
<li>බඳුනේ පරිමාව සමඟ ‍සසඳන විට වායු අණු වල පරිමාව නොසැලකිය හැකි තරම් කුඩාය.</li>
<li>වායු අණු අතර ඇති අන්‍යෝන්‍ය ආකර්ෂණ බලය නොසැලකිය හැකි තරම් කුඩාය.</li>
<li>වායු අණු සංඝට්ටනයට ගතවන කාලය සංඝට්ටන දෙකක් අතර කාලය සමඟ සසඳන විට නොසැලකිය හැකි තරම් කුඩාය. </li>
</ul>
උපකල්පන මෙසේ වන විට  , <b>චාලක වාදය පහත සමීකරණයෙන් දැක්වෙයි . </b><br/><br/>
<b>pv = 1/3 mNc2- </b>
<p>වායු අණුවක ශක්තිය යනු එහි චාලක ශක්තියයි.  <br/>එනම් , වායු අණුවක චාලක ශක්තිය = E නම්,<br/>
E = 3/2 kT <br/>
E = 1/2 mc2-  <br/>
E = 3RT/2NA <br/>  
R/Na = k (බෝල්ට්ස්මාන් නියතය)
</p>
<h2>උෂ්ණත්වමිතික භෞතික ගුණ</h2>
<p>උෂ්ණත්වමිතික භෞතික ගුණයක් යනු පදාර්ථයේ ( ඝණ , ද්‍රව ,වායු වල ) උෂ්ණත්වය සමඟ වෙනස් වන ගුණයකි. <br/>අපි එම ගුණය උෂ්ණත්වය මැනීමට යොදා ගනිමු.
<br/>උදා :
<ul>
<li>ද්‍රවයක <strong>පරිමා </strong> ප්‍රසාරණය .</li>
<li>නියත පීඩනයේ ඇති වායුවක පරිමා ප්‍රසාරණය .</li>
<li>නියත පරිමාවේ ඇති වායුවක<strong> පීඩන </strong>ප්‍රසාරණය .</li>
<li>කම්බි දඟරයක<strong> ප්‍රතිරෝධය</strong> වෙනස් වීම .</li>
<li>තාප විද්‍යුත් යුග්මයක<strong> විද්‍යුත්ගාමක බලය </strong>.</li>
<li><strong>සංතෘප්ත වාෂ්පයක පීඩනය</strong> වෙනස් වීම .</li>
<li><strong>සාපේක්ෂ ආර්ද්‍රතාවය</strong> වෙනස් වීම .</li>
</ul>
<h3>සෙල්සියස් / සෙන්ටිග්‍රේඩ් පරිමාණය (  <em>o</em>C) </h3>
<!--celcius table -->
<h3>ෆැරන්හයිඩ්  පරිමාණය (  <em>o</em>F) </h3>
<!--faranhide table -->
<h3>සෙල්සියස්  සහ ෆැරන්හයිඩ් අතර ඇති සම්බන්ධය   (  <em>o</em>F) </h3>
<!--Equations -->
<h3>ජලයේ ත්‍රික ලක්ෂ්‍යය   (  Tripple point of water) </h3>
දිය වන අයිස් , සංශුද්ධ ජලය , සංතෘප්ත ජල වාෂ්ප එකිනෙක සමඟ තාපජ සමතුලිතතාවයේ තිබෙන උෂ්ණත්වය වේ.  <br/> ජලයේ ත්‍රික ලක්ෂ්‍යය =  273.16 K = 0.01<em>  o</em>C
<h2>උෂ්ණත්වමාන</h2>
<h3>නියත පරිමා වායු උෂ්ණත්වමානය</h3>
<ul>
<li>නිවැරදි බව ඉතා ඉහල වේ.</li>
<li>සංවේදීතාවය ඉතා ඉහල වේ. </li>
<li>-270<em>o</em>C සිට 1500<em>o</em>C දක්වා පමණ උෂ්ණත්ව මැනිය හැකිය .</li>
</ul>
<h3>තාප විද්‍යුත් යුග්ම උෂ්ණත්වමානය</h3>
<ul>
<li>ලක්ෂීය උෂ්ණත්ව මැනිය හැකිය.</li>
<li>සංවේදීතාවය ඉතා ඉහල වේ. </li>
</ul>

<h2>ප්‍රසාරණය</h2>
<h3>ඝණ වල ප්‍රසාරණය</h3>
<h4>රේඛීය ප්‍රසාරණය</h4>
<h4>ක්ෂේත්‍රඵල ප්‍රසාරණය</h4>
<h4>පරිමා ප්‍රසාරණය</h4>
<h3>උෂ්ණත්වය සමඟ ඝණත්වයේ වෙනස් වීම</h3>
<h3>ද්‍රව වල ප්‍රසාරණය</h3>
ද්‍රවයේ සත්‍ය ප්‍රසාරණය = ද්‍රවයේ දෘෂ්‍ය ප්‍රසාරණය + භාජනයේ ප්‍රසාරණය
<h3>ජලයේ අනියම් ප්‍රසාරණය</h3>
අනියම් ප්‍රසාරණය => ජලය 0<em>o</em>C 4<em>o</em>C අතර උෂ්. වැඩි වන විට පරිමාව අඩු වේ,  උෂ්. අඩු වන විට පරිමාව වැඩි වේ

<h3>වායු ප්‍රසාරණය</h3>
<h2>බොයිල් නියමය<h2>
 pv = k<br/>lg|pv| = lg|k|<br/>lg|p| + lg|v| = lg|k|  ==> y = mx + c
<h4>පරීක්ෂණ :</h4>
<h4>01. බොයිල් උපකරණය</h4>
<h4>02. කෙළවරක් වැසූ කේෂික නලයක් මඟින්</h4>
 <h2>චාල්ස් නියමය</h2>
 අචල වියලි වායු ස්කන්ධයක පීඩනය නිරපේක්ෂ උෂ්ණත්වයට අනුලෝමව සමානුපාතික වේ.
</p>
</div><!-- end content--> 

	</div><!-- end page--> 

</div><!-- end page wrapper--> 

<?php include("includes/footer.php"); ?>