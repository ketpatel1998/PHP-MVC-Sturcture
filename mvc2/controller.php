<?php
	require "model.php";
	require "dao.php";
	$m = new Model();
	$d = new Dao();
	if(isset($_POST) && !empty($_POST))
	{
		if(isset($_POST["nmbtnsubmit"]))
		{

			$m->set_data("txtname",$_POST["nmtxtname"]);
			$m->set_data("txtemail",$_POST["nmtxtemail"]);
			$m->set_data("txtphone",$_POST["nmtxtphone"]);
			$m->set_data("txtgender",$_POST["nmtxtgender"]);
			$m->set_data("txtaddress",$_POST["nmtxtaddress"]);
			$m->set_data("txtstate",$_POST["nmtxtstate"]);
			$hobby = implode(",", $_POST["hob"]);
			$m->set_data("txthobby",$hobby);
			$m->set_data("txtpass",$_POST["nmpassword"]);

			$ex1 = "/^[a-zA-Z]+[a-zA-Z0-9]{5}/";
			$var = $_POST["nmtxtname"];
			if((preg_match("/^[A-Za-z][A-Za-z0-9]{1,10}/", $var))!=true)
			{
					session_start();
					$_SESSION["invalidusername"]="set";
					header("Location:registrationform.php");
					
			}
			else{

					$a = array('name'=>$m->get_data(test_input('txtname')),
						'email'=>$m->get_data(test_input('txtemail')),
						'phone'=>$m->get_data(test_input('txtphone')),
						'gender'=>$m->get_data(test_input('txtgender')),
						'address'=>$m->get_data(test_input('txtaddress')),
						'state'=>$m->get_data(test_input('txtstate')),
						'interest'=>$m->get_data(test_input('txthobby')),
						'password'=>$m->get_data(test_input('txtpass'))
					);

					$h = $d->insert("regform2",$a);
					if($h > 0)
					{
						header("Location:View.php");
					}
					else
					{
						echo "Something went wrong.";
					}				
			}

		}
		if(isset($_POST["nmbtnupdate"]))
		{
			$m->set_data("txtname",$_POST["nmtxtname"]);
			$m->set_data("txtemail",$_POST["nmtxtemail"]);
			$m->set_data("txtphone",$_POST["nmtxtphone"]);
			$m->set_data("txtgender",$_POST["nmtxtgender"]);
			$m->set_data("txtaddress",$_POST["nmtxtaddress"]);
			$m->set_data("txtstate",$_POST["nmtxtstate"]);
			$hobby = implode(",", $_POST["hob"]);
			$m->set_data("txthobby",$hobby);
			$m->set_data("txtpass",$_POST["nmpassword"]);			
			$k = $_POST["nmtxtid"];
			$ki = "id = ".$k;

			$a = array('name'=>$m->get_data(test_input('txtname')),
				'email'=>$m->get_data(test_input('txtemail')),
				'phone'=>$m->get_data(test_input('txtphone')),
				'gender'=>$m->get_data(test_input('txtgender')),
				'address'=>$m->get_data(test_input('txtaddress')),
				'state'=>$m->get_data(test_input('txtstate')),
				'interest'=>$m->get_data(test_input('txthobby')),
				'password'=>$m->get_data(test_input('txtpass'))
			);
			$h = $d->update("regform2",$a,$ki);
			if($h>0)
			{
				header("Location:view.php");
			}
			else
			{

				echo "Something wrong in updation.";
			}
		}
	}
?>