<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `reservation` WHERE CONCAT(`id`, `fullname`, `email`, `contactnumber`, `address`, `nights`, `room`, 'paid') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `reservation`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "vamos_db");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}





?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Reservation</title>
        <link rel="stylesheet" href="../css/adminstyle.css">
        

    </head>

<style>
	.btn{
    background-color: #1EA1A1;
    text-decoration:none;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.btn:hover{
    background-color: #333;
}

table, td, th {
	text-align: center;
    font-size:12px;
    padding:15px;
  }
 table th{
    background-color: #1EA1A1;
    color: white;
}
 
table {
    width: 93%;
    margin-top:20px;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    border: 3px #1EA1A1 solid;
  }
 table tr:nth-child(odd){
    background-color: #ffffff;
}
table tr:nth-child(even){
    background-color: #ffffff;
}
input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
.sub-btn{
    margin-top: 20px;
    margin-left: 3.5%;
    width:80%;

}
</style>

<body>
    <nav>
    <div class="logo">
        <img src="../main/logo.png">
    </div>
    <ul class="nav-links">
                <a class="nav-button" href="inventory.php">Inventory</a>
                <a class="nav-button" href="reservation.php">Reservations</a>
                <button class="btn" onclick="window.location.href= '../index.php'; alert('Logging out...');" style = "background: white; color: #1EA1A1;">
                 <strong>Log Out</strong>
                 </button>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
    </nav>

  <div class="na">
    <h3>List Of Check In</h3>
  </div>
  <form action="reservation.php" method="post">
  <div class="sub-btn">
                <input type="text" name="valueToSearch" placeholder="Search Rooom">
                <input class="btn" type="submit" name="search" value="Search">
            </div>

  <?php require_once 'reservation_database.php'; ?>
  <br>
<table>
  <tr>
    <th>ID</th>
    <th>Fullname</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Check In Date</th>
    <th>Nights</th>
    <th>Room</th>
    <th>Payment</th>
    <th colspan="1">Action</th>
  </tr>
  <?php while($row = mysqli_fetch_array($search_result)):?>
                <?php 
                    $mysqli = new mysqli('localhost', 'root', '', 'vamos_db');
                    $result = $mysqli->query("SELECT * FROM reservation")
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contactnumber'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['checkindate'];?></td>
                    <td><?php echo $row['nights'];?></td>
                    <td><?php echo $row['room'];?></td>
                    <td><?php echo $row['paid'];?></td>
                    <td>

                        <a href="reservation.php?delete=<?php echo $row['id']; ?>"
                        class="btn">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
</table>
</form>



    <script src="app.js"></script>

    <script src="loginpopup.js"></script>

</body>
</html>