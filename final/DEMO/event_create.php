<?php
            session_start();
            
            if(!(isset($_SESSION['email']) && $_SESSION['email'] != ''))
            {
                echo "<script>alert('Login Required'); window.location.href='login.php';</script>";

            }
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
				$title =( $_POST['Title']);
				$content =($_POST['Content']);
				$subtitle1 =($_POST['Subtitle1']);
				$subcontent1 =($_POST['Subcontent1']);
				$subtitle2 =($_POST['Subtitle2']);
				$subcontent2= ($_POST['Subcontent2']);
				$image = ($_POST['Image']);
				$sql1 = "SELECT * FROM events WHERE title = '$title'";
				$result =  mysqli_query($conn,$sql1);
				if (mysqli_num_rows($result)>0)
				 {
					echo '<script type="text/javascript">alert(" alreadyTitle exists!!!")</script> ';
				}
				else
				{
					$sql="INSERT INTO events(title,content,subTitle1,subContent1,subTitle2,subContent2,image,orgName) VALUES('$title','$content','$subtitle1',' $subcontent1','$subtitle2','$subcontent2','$image','$orgname')";
					$res = mysqli_query($conn,$sql);
					header("location: event_create2.html" );

				}
			}
?>