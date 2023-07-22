<?php

echo $_GET['student-id'];

  // Create a connection object
$conn = mysqli_connect("localhost", "root", "root", "student_data");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare a SQL statement to select the subject name and attendance for a given student ID, month, and year
$sql = "SELECT s.name, a.attendance FROM attendance a JOIN subjects s ON a.subject_ID = s.ID WHERE a.student_ID = ? AND a.month = ? AND a.year = ?";
$stmt = $conn->prepare($sql);

// Bind the parameters with the values
// $stmt->bind_param("iii", $student_ID, $month, $year);
$stmt->bind_param("iii", $student_ID, $month, $year);

// Execute the statement
$stmt->execute();

// Get the result set
$result = $stmt->get_result();

// Start the table
echo "<table>";
echo "<tr>";
echo "<th>Subject name</th>";
echo "<th>Attendance</th>";
echo "</tr>";

// Loop through the results and generate the table rows
while ($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $row["name"] . "</td>";
  echo "<td>" . $row["attendance"] . "</td>";
  echo "</tr>";
}

// End the table
echo "</table>";

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
