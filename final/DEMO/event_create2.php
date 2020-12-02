<?php
            session_start();
			$servername="localhost";
			$username="root";
			$password='';
			$dbname="college";
            
                        $email = $_SESSION['email'] ;

			            $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $sql1 = "SELECT * FROM users WHERE email = '$email'";
                        $result = $conn->query($sql1);
                        $row = $result->fetch_assoc();
                        $orgname = $row['organisationName'];
    
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (isset($_POST['btn2'])) 
			{
				$aadhar =( $_POST['aadhar']);
				$aadhar_image=($_POST['aadhar-image']);
				$pan =($_POST['pan']);
				$pan_image=($_POST['pan-image']);
				$gst =($_POST['gst']);
				$gst_image =($_POST['gst-image']);
				$income =($_POST['income']);
				$income_image =($_POST['income-image']);
				$domicile= ($_POST['domicile']);
				$domicile_image= ($_POST['domicile-image']);
				$ration = ($_POST['ration']);
				$ration_image = ($_POST['ration-image']);

				/*$sql1 = "SELECT * FROM events WHERE title = '$title'";
				$result =  mysqli_query($conn,$sql1);
				if (mysqli_num_rows($result)>0)
				 {
					echo '<script type="text/javascript">alert(" alreadyTitle exists!!!")</script> ';
				}
				else
				{*/
				$sql="INSERT INTO documents (aadhar,aadhar_image, pan,pan_image,gst,gst_image,income,income_image,domicile,domicile_image, ration, ration_image) 
				VALUES('$aadhar','$aadhar_image','$pan',' $pan_image','$gst','$gst_image','$income','$income_image','$domicile','$domicile_image','$ration','$ration_image')";
					
				$res = mysqli_query($conn,$sql);
				if($res){
					#header("location: index.html" );

					echo '<script type="text/javascript">
							var txt;
							if (confirm("Press a button!")) 
							{
    							txt = "You pressed OK!";
  							}
  							else 
  							{
    							txt = "You pressed Cancel!";
  							}

  							if(txt =="You pressed OK!")
  							{
                            window.location.assign("login.php")
  							}
					</script> ';


				}

				}
			
?>