<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="print.css" media="print">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="jQuery.print.js"></script> 
		<title>Certificate</title>
		<link href="https://fonts.googleapis.com/css?family=Lustria&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
		<link href="https://www.1001fonts.com/anglicantext-font.html" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Besley:ital,wght@0,600;1,700&display=swap" rel="stylesheet">

	</head>
	<style type="text/css">
		body{
			font-family: 'Lustria', serif;
			font-weight: 400;
			font-size: 18px;
		}
		.container {
	    		width: 1150px;
	    		height: 855px;
	    		background-size: cover;
	    		background-image:url(<?php echo base_url();?>images/old_cert.jpg);
	    		margin: 0 auto;		
	    }
		.img-position{
			position: relative;
		}
		
		.serial-key{
			position: absolute;
			width:250px;
			height:23px;
			background: none;
			top:42.5%;
			left:25%;
			/*border-bottom: 1px solid #000;*/
			text-align:center;
        }
		.gr-no{
			position: absolute;
			width:150px;
			height:30px;
			background: none;
			top:42.5%;
			left:63%;
			/*border-bottom: 1px solid #000;*/
			text-align:center;
		}
		.name-line{
			position: absolute;
			width:530px;
			height:30px;
			background: none;
			top:55.2%;
			left:39%;
			/*font-weight: bold;*/
			font-family: 'Besley', serif;
			padding-left: 20px;
			font-size: 22px;
		}
		
		.certificate-line{
			position: absolute;
			width:638px;
			height:30px;
			background: none;
			top:63.3%;
			left:21%;
			font-weight: bold;
			font-family: 'Besley', serif;
			/*font-family: 'Syncopate', sans-serif;*/
			font-weight: bold;
			/*font-size: 22px;*/
			text-align:center;
		}
		
		.year-line{
			position: absolute;
			width:100px;
			height:30px;
			background: none;
			top:68%;
			left:22%;
			font-weight: bold;
			/* border-bottom: 1px solid #000; */
			text-align:center;
		}
		.grade{
			position: absolute;
			top:67%;
			left:68%;
		}
		
		.from-line{
			position: absolute;
			width:130px;
			height:30px;
			background: none;
			top :68.5%;
			left:59.5%;
			/*border-bottom: 1px solid #000;*/
			text-align:center;
		}
		
		.to-line{
			position: absolute;
			width:130px;
			height:30px;
			background: none;
			top:68.5%;
			left:74.5%;
			/*border-bottom: 1px solid #000;		*/
			text-align:center;
		}
		.at{
			position: absolute;
			top:72.5%;
			left:77.5%;
		}
		
		.traning-line{
			position: absolute;
			width:492px;
			height:30px;
			background: none;
			top:73.3%;
			left:38%;
		}
		.date{
			position: absolute;
			top:85.5%;
			left:20%;
		}
		.place{
			position: absolute;
			top:88.5%;
			left:20%;
		}
		
		.height{
			height:23px;
		}
	</style>
	<body>
	<?php $sno = 1;
     foreach ($all_adms_by_id as $val) { ?>
<body>
<div class="clear"></div>
<!-- <button class="print-link avoid-this"  id="printbtn"> Print Page </button> -->
	</body>
		<div id="print-div2" >
		<div class="container">
			
			<div class="serial-key"><?php echo $val->regno; ?></div>			
			<div class="gr-no"><?php echo $val->gr_id; ?></div>			
			<div class="name-line"><?php echo $val->sname; ?></div>			
			<div class="certificate-line"><?php echo $val->course; ?></div><br>			
			<div class="year-line" ><?php echo $val->grade; ?></div><br>			
			<div class="from-line"><?php echo $val->start_date; ?></div><br>			
			<div class="to-line"><?php echo $val->end_date; ?></div><br>			
			<div class="traning-line">RED & WHITE MULTIMEDIA EDUCATION -<?php echo $val->branch; ?></div><br>
			<div class="date"><?php echo $val->issue_date; ?></div><br>
		    <div class="place">AK ROAD</div><br>
		
		</div>
	</div>
<?php }?>
		<div class="clear"></div>

	</body>
	<script>
	// 	function get_invoice()
	// {
	// 	var x = document.getElementById("printbtn");
	//     x.style.display = "none";
	// 	window.print();
	//     x.style.display = "block";
	// }


	$("#printbtn").click(function () {
		window.print();
    	$("#printbtn").css("display", "none");
});
	</script>
</html>
