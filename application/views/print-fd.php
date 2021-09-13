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
	</head>
	<style type="text/css">
		body{
			font-family: 'Lustria', serif;
			font-weight: 400;
			font-size: 18px;
		}
		.container {
	    		width: 1150px;
	    		height: 821px;
	    		background-size: cover;
	    		background-image:url(<?php echo base_url();?>images/certificate.jpg);
	    		margin: 0 auto;		
	    }
		.img-position{
			position: relative;
		}
		.serial-no{
			position: absolute;
			top:36.5%;
			left:35%;
		}
		.serial-key{
			position: absolute;
			width:250px;
			height:23px;
			background: none;
			top:36%;
			left:42%;
			border-bottom: 1px solid #000;
			text-align:center;
		}
		.gr-id{
			position: absolute;
			top:36.5%;
			left:70%;
		}
		.gr-no{
			position: absolute;
			width:150px;
			height:30px;
			background: none;
			top:36%;
			left:75%;
			border-bottom: 1px solid #000;
			text-align:center;
		}
		.academic{
			position: absolute;
			top:42%;
			left:42%;			
		}
		.cerified{
			position: absolute;
			top:45.5%;
			left:44%;			
		}
		.name{
			position: absolute;
			top:51.5%;
			left:39%;
			font-weight: 400;
			font-size: 18px;
		}
		.name-line{
			position: absolute;
			width:530px;
			height:30px;
			background: none;
			top:49%;
			left:51%;
			font-family: 'Niconne', cursive;
			padding-left: 20px;
			font-size: 45px;
		}
		.examined{
			position: absolute;
			top:56.5%;
			left:48%;
		}
		.certificate-line{
			position: absolute;
			width:638px;
			height:30px;
			background: none;
			top:61.5%;
			left:37%;
			font-family: 'Syncopate', sans-serif;
			font-weight: bold;
			font-size: 22px;
			text-align:center;
		}
		.pass-year{
			position: absolute;
			top:67%;
			left:38%;
			
		}
		.year-line{
			position: absolute;
			width:100px;
			height:30px;
			background: none;
			top:67%;
			left:60.5%;
			font-weight: bold;
			/* border-bottom: 1px solid #000; */
			text-align:center;
		}
		.grade{
			position: absolute;
			top:67%;
			left:68%;
		}
		.from{
			position: absolute;
			top:72.5%;
			left:47%;
		}
		.from-line{
			position: absolute;
			width:130px;
			height:30px;
			background: none;
			top :72%;
			left:51.5%;
			border-bottom: 1px solid #000;
			text-align:center;
		}
		.to{
			position: absolute;
			top:72.5%;
			left:63.5%;
		}
		.to-line{
			position: absolute;
			width:130px;
			height:30px;
			background: none;
			top:72%;
			left:65.5%;
			border-bottom: 1px solid #000;		
			text-align:center;
		}
		.at{
			position: absolute;
			top:72.5%;
			left:77.5%;
		}
		.traning{
			position: absolute;
			top:78%;
			left:39%;
		}
		.traning-line{
			position: absolute;
			width:492px;
			height:30px;
			background: none;
			font-weight: bold;
			top:78.3%;
			left:51%;
		}
		.date{
			position: absolute;
			top:88%;
			left:36%;
		}
		.place{
			position: absolute;
			top:91%;
			left:36%;
		}
		.manager-sign{
			position: absolute;
			width:200px;
			height:30px;
			background: none;					
			top:87%;
			left:54%;
			border-bottom: 1px solid #000;
		}
		.manager-name{
			position: absolute;
			top:91%;
			left:55%;
		}
		.director-sign{
			position: absolute;
			top:87%;
			left:76%;
			width:200px;
			height:30px;
			background: none;			
			border-bottom: 1px solid #000;
		}
		.director-name{
			position: absolute;
			top:91%;
			left:80%;
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
<button class="print-link avoid-this" onClick="get_invoice()" id="printbtn"> Print Page </button>
	</body>
		<div id="print-div2" >
		<div class="container">
			<div class="serial-no">Serial No:</div>
			<div class="serial-key"><?php echo $val->regno; ?></div>
			<div class="gr-id">GR ID:</div>
			<div class="gr-no"><?php echo $val->gr_id; ?></div>
			<div class="academic">The Academic Council of R & W Multimedia Has Duly Examined.</div>
			<div class="cerified">This Institute of Designing Literacy Training certify that</div>
			<div class="name">Mr. /Mrs. /Miss.</div>
			<div class="name-line"><?php echo $val->sname; ?></div>
			<div class="examined">has been Examined for the Diploma/Certificate in</div>
			<div class="certificate-line"><?php echo $val->course; ?></div><br>
			<div class="pass-year">and Adjusted to have Pass with</div><br>
			<div class="year-line" ><?php echo $val->grade; ?></div><br>
			<div class="grade">Grade during Training Period</div><br><br>
			<div class="from">from</div><br>
			<div class="from-line"><?php echo $val->start_date; ?></div><br>
			<div class="to">to</div><br> 
			<div class="to-line"><?php echo $val->end_date; ?></div><br>
			<div class="at">at</div><br>
		    <div class="traning">Training Center</div><br>
			<div class="traning-line">RED & WHITE MULTIMEDIA EDUCATION -<?php echo $val->branch; ?></div><br>
			<div class="date">Date: <?php echo $val->issue_date; ?></div><br>
		    <div class="place">Place: AK ROAD</div><br>
			<div class="manager-sign"></div><br>
			<div class="manager-name">BRANCH MANAGER</div>			
			<div class="director-sign"></div>
			<div class="director-name">DIRECTOR</div>
		</div>
	</div>
<?php }?>
		<div class="clear"></div>

	</body>
	<script>
		function get_invoice()
	{
		var printButton = document.getElementById("printbtn");
	    printButton.style.display = "none";
		window.print();
	    printButton.style.display = "block";
		
	}
	</script>
</html>
