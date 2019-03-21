<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Apprehende By</th>
        <th>Enslaver</th>
        <th>City</th>
        <th>State</th>
        <th>Crime</th>
        <th>Free or Slave</th>
        <th>Date</th>
        <th>Apprehend Fee</th>
        <th>Support Fee</th>
        <th>Release Fee</th>
        <th>Total Fee</th>
        <th>Discharged, Hired out, Returned, or Sold</th>
        <th>Discharged Date</th>
      </tr>

    <?php
    require "mysqli_connect.php";
    $lastName = $_POST["last_name"];
    $query = "select * from id where last_name = '$lastName'";
    $result = $dbc->query($query);



    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>". $row['id']. "</td>";
      echo "<td>". $row['last_name']. "</td>";
      echo "<td>". $row['first_name']. "</td>";
      echo "<td>". $row['apprehended_by']. "</td>"
      echo "<td>". $row['enslaver']. "</td>";
      echo "<td>". $row['city']. "</td>";
      echo "<td>". $row['state']. "</td>";
      echo "<td>". $row['crime']. "</td>";
      echo "<td>". $row['free_slave']. "</td>";
      echo "<td>". $row['slave_date']. "</td>";
      echo "<td>". $row['support_days']. "</td>";
      echo "<td>". $row['apprehend_fee']. "</td>";
      echo "<td>". $row['support_fee']. "</td>";
      echo "<td>". $row['release_fee']. "</td>";
      echo "<td>". $row['total_fee']. "</td>";
      echo "<td>". $row['statu']. "</td>";
      echo "<td>". $row['discharged_date']. "</td>";
      echo "</tr>";
    }
    ?>

    </table>
  </body>
</html>
