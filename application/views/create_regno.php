<?php
$con= mysqli_connect("localhost","root",'',"test")or die("not connected to server & database");
 $rno=date("m");
   $rno1=substr(date("Y"),2,2);

   $m_y = $rno.$rno1;

	 $r_qry="SELECT * FROM cer_admission_list ORDER BY ad_id DESC LIMIT 1";
		$r_res=mysqli_query($con,$r_qry);
		$r_arr=mysqli_fetch_array($r_res);
		$last_id=$r_arr['ad_id']+1;

		if(strlen($last_id)==1)
		{
			$no = "0000".$last_id;
		}
		else if(strlen($last_id)==2)
		{
			$no = "000".$last_id;
		}
		else if(strlen($last_id)==3)
		{
			$no = "00".$last_id;
		}
		else if(strlen($last_id)==4)
		{
			$no = "0".$last_id;
		}
		else if(strlen($last_id)==5)
		{
			$no = $last_id;
		}
		


$department_code = @$_POST['department_code'];

$reg_no="RNW".$department_code.$no.$m_y;
?>

<input name="regno" type="text" class="form-control" id="regno" value="<?php echo @$reg_no;?>" readonly="readonly" />