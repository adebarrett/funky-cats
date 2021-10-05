<?php

include('connect.php');

   // get records from database
if ($result = $conn->query("SELECT * FROM employees ORDER BY id"))
{
        // if records exists show them in a table
        if ($result->num_rows > 0)
        {
                echo "<table border='0' cellpadding='10'>";
                echo "<tr><th>First name:</th><th>Last name:</th><th>Date of birth:</th><th>Email address:</th></tr>";
                
                while ($row = $result->fetch_object())
                {
                        echo "<tr>";
                        echo "<td>" . $row->first_name . "</td>";
                        echo "<td>" . $row->last_name . "</td>";
                        echo "<td>" . $row->dob . "</td>";
                        echo "<td>" . $row->email . "</td>";
                        echo "</tr>";
                } 
                echo "</table>";
        }
        else {echo "ERROR: database is empty";}
}


// close database connection
$conn->close();

?>