<?php
    include 'connectdb.php';

    $sql = "SELECT * FROM Restaurants";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            echo $row['RestoID'], $row['RestoName'], $row['RestoAddress'],$row['RestoContactno'],$row['RestoOwner'];
                                
        }
    } else {
    echo "0 results";
    }
    $conn->close();

?>