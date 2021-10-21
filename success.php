<?php
$s_acc=$_POST['sender_acc'];
$r_acc=$_POST['receiver_acc'];
$amt=$_POST['amount'];
/*echo $s_acc;
echo $r_acc;
echo $amt;*/
  echo"<br>";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bank";

  
  if($s_acc>=101 && $s_acc<=110)
  {
	if($r_acc>=101 && $r_acc<=110)
	{
	  // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) 
      {
          die("Connection failed: " . $conn->connect_error);
      }
      
	  //select query 
	  $query1 = "SELECT * FROM customer WHERE account_no = '$s_acc'";
	  $result1 = $conn->query($query1);
	  	
	  //displaying data sender details
	  if ($result1->num_rows > 0) 
	  {
		// output data of each row
		while($row = $result1->fetch_assoc()) 
		{
			//echo "id: " . $row["account_no"]. " - Name: " . $row["customer_nm"]. " " . $row["email"]. "<br>";
			$edit = "update customer set current_balance=current_balance - '$amt' where account_no='$s_acc'";
	
			if ($conn->query($edit) === TRUE) {
			//echo "Record updated successfully";
			}
			else {
					echo "Error updating record: " . $conn->error;
			}    	
		}
	  } 
	  else 
	  {
			echo "Customer not found";
	  }
	  
	  //displaying data receiver details
	  $query2 = "SELECT * FROM customer WHERE account_no = '$r_acc'";
	  $result2 = $conn->query($query2);
	  
	  if ($result2->num_rows > 0) 
	  {
		// output data of each row
		while($row2 = $result2->fetch_assoc()) 
		{
			$edit2 = "update customer set current_balance=current_balance + '$amt' where account_no='$r_acc'";
	
			if ($conn->query($edit2) === TRUE) {
			
			echo '<script language="javascript">';
			echo 'window.confirm("Transaction Done Successfully...")';
			echo '</script>';
			header('Refresh:0;URL=view_customer.php');
			}
			else {
					echo "Error updating record: " . $conn->error;
			}
		}
	  } 
	  else 
	  {
			echo "Customer not found";
	  }
	$conn->close();
	}
	else
	{
		echo "Invalid receiver account number";
	}
  }
else
{
	echo"Invalid Sender account number";
}
?>
