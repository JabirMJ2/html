<html>
<head>
<title>
CRUD Operations
</title>
</head>
<body>

<form method="post" action="#">
	<label>Roll No</label>
	<input type="text" name="roll"/>
	<br>
	<label>Name</label>
	<input type="text" name="name"/>
	<br>
	<label>Course</label>
	<input type="text" name="course"/>
	<br>
	<button type="submit" name="create">Create</button>
	<button type="submit" name="view">View</button>
	<button type="submit" name="update">Update</button>
	<button type="submit" name="delete">Delete</button>
</form>	

<?php
    $con = Mysqli_Connect("localhost","root","","lab");
    if(!$con){
        echo "Connection error !";
    }
    else{
	if(isset($_POST['create'])){
		$roll = $_POST['roll'];
		$name = $_POST['name'];
		$course = $_POST['course'];
		$query = "INSERT INTO `student`(`roll`, `name`, `course`) VALUES ('$roll','$name','$course')";
		if(mysqli_query($con, $query)){
			echo "Insertion successfull";
		}
		else{
			$con->error;
		}
	}

	if(isset($_POST['view'])){
		$roll = $_POST['roll'];
		$name = $_POST['name'];
		$course = $_POST['course'];
		$query = "SELECT * FROM `student`";
		$values = mysqli_query($con, $query);
		echo '<table border="1" style="margin-left:auto;margin-right:auto;margin-top:3em;border-collapse:collapse;"><th>Roll</th><th>Name</th><th>Course</th>';
        	
            		while($row=mysqli_fetch_assoc($values)){
                		echo '<tr>';
                    		echo '<td>';
                        	echo $row["roll"];
                    		echo '</td>';
                    		echo '<td>';
                        	echo $row["name"];
                    		echo '</td>';
                    		echo '<td>';
                        	echo $row["course"];
                    		echo '</td>';
               			echo '</tr>';
            		}
			echo "</table>";
        	
	}

	if(isset($_POST['update'])){
		$roll = $_POST['roll'];
		$name = $_POST['name'];
		$course = $_POST['course'];
		$query = "UPDATE `student` SET `name`='$name',`course`='$course' WHERE `roll`='$roll'";
		if(mysqli_query($con, $query)){
			echo "Updation successfull";
		}
	}

	if(isset($_POST['delete'])){
		$roll = $_POST['roll'];
		$name = $_POST['name'];
		$course = $_POST['course'];
		$query = "DELETE FROM `student` WHERE `roll`='$roll'";
		if(mysqli_query($con, $query)){
			echo "Deletion Successfull";
		}
	}
    }
?>
</body>
</html>
