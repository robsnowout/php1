

 <?php
        $conn=mysqli_connect("localhost", "showcase", "showcase123", "na723_Showcase");
        // Check connection
        if ($conn-> connect_error) {
         die ("Connection failed:". $conn-> connect_error);
        }

        $sql = "Select Title, Fname, Lname,url from Showcase";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0) {
            While ($row = $result-> fetch_assoc())  {
                echo "<tr>";
//echo "<td>",'<a href=' . $row['url'] . '>$title </a>',"</td>";  
echo "<td>",'<a href=' . $row['url'] . '>'.$row['Title'].' </a>',"</td>";

            }
            Echo "</table>";
        }
        else {
            echo "0 result";
        }


$conn-> close();

?>