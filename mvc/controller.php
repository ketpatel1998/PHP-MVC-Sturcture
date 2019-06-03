<?php
	require "dao.php";
	require "model.php";
	$d = new dao();
	$m = new model();
	extract($_POST);

	if(isset($_POST) &&  !empty($_POST))
	{
		if(isset($_POST['nmbtnsubmit']))
		{
			$m->set_data("txtname",$nmtxtname);
			$m->set_data("txtemail",$nmtxtemail);
			$m->set_data("txtph",$nmtxtphone);
			$m->set_data("gen",$nmtxtgender);
			$m->set_data("txtaddress",$nmtxtaddress);
			$m->set_data("txtcountry",$nmtxtstate);
			$hobby= implode(',', $_POST["hob"]);
			$m->set_data("hobby",$hobby);

			
			$a = array('name'=>$m->get_data(test_input('txtname')),
				'email'=>$m->get_data(test_input('txtemail')),
				'phone'=>$m->get_data(test_input('txtph')),
				'gender'=>$m->get_data(test_input('gen')),
				'address'=>$m->get_data(test_input('txtaddress')),
				'country'=>$m->get_data(test_input('txtcountry')),
				'interest'=>$m->get_data(test_input('hobby'))

			);

			$q = $d->insert("registerform",$a);
			if($q > 0)
			{
				header("Location:view.php");
			}
			else
			{
				echo "Something is Wrong";
			}

		}
	}
?>