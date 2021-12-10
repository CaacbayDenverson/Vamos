<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `inventory` WHERE CONCAT(`id`, `item`, `price`, `stock`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `inventory`";
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
    <title>Vamos | Inventory</title>
    <link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
</head>
<style>

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
input[type=submit], select, textarea {
    padding: 13px 25px;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 16px;
    resize: vertical;
    cursor: pointer;
  }
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
    <h3>Item Inventory</h3>
  </div>

<?php require_once 'inventory_database.php'; ?>
    <form action="inventory.php" method="post">
            <div class="sub-btn">
                <input type="text" name="valueToSearch" placeholder="Item to Search">
                <input class="btn" type="submit" name="search" value="Search">
                <a class="btn" href="create_form.php">Add New Item</a>
                <a class="btn" href="update_form.php">Update Item</a>
            </div>  

            <table>
                <tr>
                    <th>Id</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th colspan="1">Action</th>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <?php 
                    $mysqli = new mysqli('localhost', 'root', '', 'vamos_db');
                    $result = $mysqli->query("SELECT * FROM inventory")
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['item'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['stock'];?></td>
                    <td>

                        <a href="inventory.php?delete=<?php echo $row['id']; ?>"
                        class="btn">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
            
        </form>




</script>
</body>
</html>