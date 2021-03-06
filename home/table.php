<?php
if($result->rowCount() > 0){
    echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
            echo "<tr>";
                echo "<th>#</th>";
                echo "<th>Name</th>";
                echo "<th>Address</th>";
                echo "<th>Salary</th>";
                echo "<th>Action</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
                echo "<td>";
                    echo '<a href="../crud/read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                    echo '<a href="../crud/update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                    echo '<a href="../crud/delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";                            
    echo "</table>";
    // Free result set
    unset($result);
     } else{
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
?>