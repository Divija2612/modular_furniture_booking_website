<?php
$conn = new mysqli("localhost","root","","decorx");

$result = $conn->query("SELECT * FROM bookings");
?>

<html>
<head>
<title>All Bookings</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>All Bookings</h2>

<table border="1" width="100%">
<tr>
<th>Name</th>
<th>Furniture</th>
<th>Date</th>
<th>Phone</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['name']}</td>
    <td>{$row['furniture_type']}</td>
    <td>{$row['booking_date']}</td>
    <td>{$row['phone']}</td>
    </tr>";
}
?>

</table>

<br><a href="index.html">Back</a>
</div>

</body>
</html>