<?php
	//connect to db
	$con = mysqli_connect("localhost", "root", "", "tag");
   

	   if($_POST['action'] == 'insert'){

		$persons  = $_POST['persons'];
		$date_time = $_POST['date_time'];
        
        $sql   = "select sum(persons), date_time from mytable where date_time = '$date_time'";
		//"select count(persons) from mytable";
		$query = mysqli_query($con, $sql);
		 while($row = mysqli_fetch_assoc($query)){
          // echo "Total sum". $row['sum(persons)'];

            $Remaining = $row['sum(persons)'];

            $count = $Remaining + $persons;
        }
       if (!is_numeric($persons))
         {

        	echo "Please only Use Numbers";
        }
        else{
         if($persons >= 100)
         {
            echo "Please Insert Value less than equal to 100";
         }
        
         elseif($count > 100)
         {
            echo "Please Delete Record First";
         }
         else
         {
         $sql   = "insert into mytable (persons, date_time, time) values ('$persons', '$date_time', CURTIME())";
		 $query = mysqli_query($con, $sql);
		 if($query){echo "";}else {echo "Something Wrong!";}
         } 

         $sql   = "select * from mytable";
		$query = mysqli_query($con, $sql);
		
		echo "<table>";
		echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>ID</td><td style='border: 1px solid #c8c8c8;'>Persons</td><td style='border: 1px solid #c8c8c8;'>Date Time</td></tr>";
		while($row = mysqli_fetch_assoc($query)){
			echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>$row[id]</td><td style='border: 1px solid #c8c8c8;'>$row[persons]</td><td style='border: 1px solid #c8c8c8;'>$row[date_time]</td></tr>";
		}
		echo "</table>";  

		
     }
     $sql   = "select sum(persons), date_time from mytable where date_time = '$date_time'";
        $query = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($query)){
          // echo "Total sum". $row['sum(persons)'];

            $Remaining = 100 - $row['sum(persons)'];
            $booked =  100 - $Remaining; 
        }
        echo "</br>";
        echo "<div style=\"font-size:25px; font-weight: bold; font-family: 'Orbitron', sans-serif;\">Available Slots</div>";
        echo "<div style=\"font-size:75px; color:#E43B17; font-weight: bold; font-family: 'Orbitron', sans-serif;\">".$Remaining . "</div>";
         echo "</br>";
        echo "<div style=\"font-size:25px; font-weight: bold; font-family: 'Orbitron', sans-serif;\">Booked Slots </div>";
        echo "<div style=\"font-size:75px; font-weight: bold; font-family: 'Orbitron', sans-serif;\">".$booked . "</div>";
       /*$sql   = "select id, persons, mytable.date_time from mytable inner join(select date_time from mytable group by date_time HAVING count(id) > 1) temp ON mytable.date_time = temp.date_time";
        $query = mysqli_query($con, $sql);
        echo "<table>";
		echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>Date Time</td></tr>";
        while($row = mysqli_fetch_array($query)){
     
        	echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>$row[date_time]</td></tr>";

        }
        	echo "</table>";  */
        
	}

	//if show key is pressed show records
	if($_POST['action'] == 'show'){
		//$sql   = "select * from mytable order by id desc limit 10";
		$sql   = "select * from mytable";
		//"select count(persons) from mytable";
		$query = mysqli_query($con, $sql);
		
		echo "<table>";
		echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>Persons</td><td style='border: 1px solid #c8c8c8;'>Date Time</td></tr>";
		while($row = mysqli_fetch_assoc($query)){
			echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>$row[persons]</td><td style='border: 1px solid #c8c8c8;'>$row[date_time]</td></tr>";
		}
		echo "</table>";
	}



	if($_POST['action'] == 'show4'){
		$persons  = $_POST['persons'];
		$date_time = $_POST['date_time'];

		$sql   = "select * from mytable where date_time = '$date_time'";
		//"select count(persons) from mytable";
		$query = mysqli_query($con, $sql);
		
		echo "<table>";
		echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>ID</td><td style='border: 1px solid #c8c8c8;'>Persons</td><td style='border: 1px solid #c8c8c8;'>Date Time</td></tr>";
		while($row = mysqli_fetch_assoc($query)){
			echo "<tr style='border: 1px solid #c8c8c8;'><td style='border: 1px solid #c8c8c8;'>$row[id]</td><td style='border: 1px solid #c8c8c8;'>$row[persons]</td><td style='border: 1px solid #c8c8c8;'>$row[date_time]</td></tr>";
		}
		echo "</table>";
	}

	if($_POST['action'] == 'show2'){
		$persons  = $_POST['persons'];
		$date_time = $_POST['date_time'];
		//$sql   = "select * from mytable order by id desc limit 10";
		$sql   = "select sum(persons), date_time from mytable where date_time = '$date_time'";
		//$result = $sql->fetch_field_direct(1);
		//"select count(persons) from mytable";
        $query = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($query)){
          // echo "Total sum". $row['sum(persons)'];

            $Remaining = 100 - $row['sum(persons)'];
            $booked =  100 - $Remaining; 
        }
      
        echo "</br>";
        echo "<div style=\"font-size:25px; font-weight: bold; font-family: 'Orbitron', sans-serif;\">Available Slots</div>";
        echo "<div style=\"font-size:75px; color:#E43B17; font-weight: bold; font-family: 'Orbitron', sans-serif;\">".$Remaining . "</div>";
         echo "</br>";
        echo "<div style=\"font-size:25px; font-weight: bold; font-family: 'Orbitron', sans-serif;\">Booked Slots </div>";
        echo "<div style=\"font-size:75px; font-weight: bold; font-family: 'Orbitron', sans-serif;\">".$booked . "</div>";
 
	}

	if($_POST['action'] == 'show3'){
		//$sql   = "select * from mytable order by id desc limit 10";
		$sql   = "delete from mytable";

		//$result = $sql->fetch_field_direct(1);
		//"select count(persons) from mytable";
        $query = mysqli_query($con, $sql);
       echo 'Tables Record Deleted ' . PHP_EOL;
        
	}
?>