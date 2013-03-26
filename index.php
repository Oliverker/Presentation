
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



	<title>Client Mock Ups</title>


  <link rel="stylesheet" href="assets/style.css">	
	<style type="text/css">
	
		 
		
		.section { display: none; width: 100%; text-align: center; 
				
		/* ADD BACKGROUND HEX COLOUR HERE 
			===========================================*/
		
		 background: #EFEFEF;
		 
		/*===========================================*/	
			
		
		 }
		 		
					
		/* INDIVIDUAL BACKGROUND HEX COLOUR HERE 
			===========================================*/
		
    /* 		#mockup-1.section { background: #FFF; } */

		/* ADD MORE BELOW HERE */

		/*
    #mockup-2.section { background: #333; }
		#mockup-3.section { background: #333; } 
		*/

		 
		/*===========================================*/	
	
	</style>
	
	<!--[if lte IE 6]><style type="text/css"> #content { margin-top: 0px !important; }</style><![endif]-->
	
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/switcher.js"></script>
	
</head>

<body>
	
	<ul id="navigation-band" class="navigation">
		<li id="logo"><a href="http://olik.co.uk">Company Name</a></li>
		<li><a id="home" href="#home">Home</a></li>
		<li><a id="prev" href="#prev" class="disabled">&laquo; Previous</a></li>
		<li><a id="next" href="#next">Next &raquo;</a></li>
		<li id="indicator"><strong>Viewing:</strong> <span class="mockup-on">1</span> of <span class="total-mockups">1</span></li>
		
		
		
		<!--/#PROJECT TITLE-->
		<li id="title">Project Title</li>

		
		
		</ul> <!--/#navigation-band-->


	<div id="content">
	
	
			    <?php
$a=array();
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
       if(preg_match("/\.png$/", $file)) 
            $a[]=$file;
    else if(preg_match("/\.jpg$/", $file)) 
            $a[]=$file;
    else if(preg_match("/\.jpeg$/", $file)) 
            $a[]=$file;

    }
    closedir($handle);
}

$n=1;

sort($a);

foreach($a as $i){
    echo "<div id=mockup-". $n ." class=section><img src='".$i."' /></div></div> ";
    $n++; 
}
?>

	</div>

</body>
</html>