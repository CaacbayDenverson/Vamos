<!DOCTYPE html>
<html>
<head>
    <title>Vamos | Update Item</title>
    <link rel="stylesheet" type="text/css" href="reservations/style.css">
</head>

<body>
<div class="testing">
    <br>
    <a class="back" href="inventory.php">Back</a>
    <center><h3 class="logo" href="#">UPDATE PRODUCT</h3></center>
    </div>


    <div>
        <form action="update_form.php" method = "post" class="container">
			<input type="text" name="id" placeholder="Item ID Number" >
            <input type="text" name="update" placeholder="Update data" >

            <select name="choice">
                    <option value="">Select</option>
                    <option value="price">Price</option>
                    <option value="stock">Stock</option>
                </select><br><br>

            <input type="submit" value="Update Item">
        </form>
    </div>

            <?php 
                $id = "";
                $update = "";
                $choice = "";

                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $id = clean($_POST["id"]);
                    $update = clean($_POST["update"]);
                    $choice = clean($_POST["choice"]);
                    $errors = [];

                    if(empty($id)){
                        array_push($errors, "ID Empty.");
                    }
                    if(empty($update)){
                        array_push($errors, "Input Empty.");
                    }
                    
                    if(count($errors) == 0){
                        $conn = new mysqli("localhost","root", "", "vamos_db");

                        $sql = "UPDATE inventory SET $choice = '".$update."' WHERE id ='".$id."' ";

                        if($conn->query($sql)){
                            echo '<script>
                            window.location = "inventory.php";
                            alert("Updating successfully");
                            
                            </script>';
                            exit();
                        }
                        else{
                            echo "<p>".$conn->error."</p>";
                        }
                        
                        $conn->close();


                    }
                    else{
                        displayError($errors);
                    }

                    
                }


                //Functions
                //For ez Errors
                function displayError($errors){
                    foreach($errors  as $error){
                        echo "<p>".$error."</p>";
                    }
                }


                //for cleaning inputs
                function clean($input){
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);
                    return $input;
                }

            ?>
                
</body>
</html>