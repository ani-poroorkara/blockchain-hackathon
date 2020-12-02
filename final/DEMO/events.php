
 <?php
        session_start();

    if(!(isset($_SESSION['email']) && $_SESSION['email'] != ''))
	{
		echo "<script>alert('Login Required'); window.location.href='login.php';</script>";
		
	}
        ?>
<!DOCTYPE html>
<html>
<head>
	<title>Event name</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    #down
{
    float: left;
    width: 100%;
    text-align: center;
    margin-top: 5px;
}
    #down input
        {
            width:200px;
            
        }
    .take
        {
            margin:5px;
        }
    
    </style>
	<link rel="stylesheet" type="text/css" href="css/events.css">
</head>
<body>
	<div>
	<?php
	
        
        if(!(isset($_SESSION['email']) && $_SESSION['email'] != ''))
        {
            echo "<script>alert('Login Required'); window.location.href='login.php';</script>";

        }
			$host='localhost';
			$username='root';
			$password='';
			$servername='college';
            $title=$_GET['title'];
			$conn = mysqli_connect($host, $username, $password,$servername);

			$s = " select * from events where title='$title'";
			$result = $conn->query($s);

			if ($result->num_rows > 0)
				{
                    
                    while($row = $result->fetch_assoc())
                    {
                    ?>
	<h1 class="text-align header" style="background-color:#e9ecef"> <?php echo $row['title'] ?> </h1>
		<div class="container div1"  >
			<div class="float-left">
				<p class="text-align">
					<?php echo $row['content'] ?>

				<p>
			</div>
			<div class="float-right">
				<img src="images/<?php echo $row['image'] ?>">
			</div>
		</div>
        <div class="container" style="background-color:#e9ecef">
		<div class="float-left">
			<h2 class="text-align"> <?php echo $row['subTitle1'] ?></h2>

			<p class="text-align">
				<?php echo $row['subContent1'] ?>

			</p>

			<h2 class="text-align"> <?php echo $row['subTitle2'] ?> </h2>

			<p class="text-align">
				<?php echo $row['subContent2'] ?>
			</p>
		</div>
        </div>
		<?php
                    }
            }

                $conn->close();
        ?>
    </div>
    <div id="down">
            <a onclick="window.open('index.html')" class="btn btn-primary">Pay </a>

            

    </div>

               
	<script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</body>
</html>