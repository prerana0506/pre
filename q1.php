<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "IPL");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution 
$sql="SELECT player_id,runs,team_id,team_name
FROM (statistics JOIN team ON statistics.team_id=team.team_id
WHERE runs>5;

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>player_id</th>";
                echo "<th>runs</th>";
                //echo "<th>red cards</th>";
                echo "<th>team id</th>";
                echo "<th>team name</th>";              
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['player_id'] . "</td>";
                echo "<td>" . $row['runs'] . "</td>";
               // echo "<td>" . $row['red_cards'] . "</td>";
                echo "<td>" . $row['team_id'] . "</td>";
                echo "<td>" . $row['team_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>