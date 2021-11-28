<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'vamos_db');

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $fname = $_POST['fname'];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'images/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
       echo '<script>
         window.location = "queentype.php";
         alert("Error : You file extension must be .zip, .pdf or .docx.");
                  </script>';
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo '<script>
         window.location = "queentype.php";
         alert("Error : File to Large.");
                  </script>';
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO tarpaulin_tbl (fname,email,contact,address,name, size, downloads) VALUES ('$fname','$email','$contact','$address','$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo '<script>
         window.location = "../home.php";
         alert("Application uploaded successfully.");
                  </script>';
            }
        } else {
            echo '<script>
         window.location = "queentype.php";
         alert("Failed to Send Form Please Enter Correct Details.");
                  </script>';
        }
    }
}
?>