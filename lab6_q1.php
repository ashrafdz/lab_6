<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
</head>
<body>
  <?php
    $name = "Muhammad Ashraf Bin Dzulfahmi";
    $matric_number = "AI220254";
    $course = "Information Technology";
    $year_of_study = "Year 2";
    $address = "Lot 1232 Batu 40 1/2, Kampung Olak Lempit, 42700, Banting, Selangor";
  ?>
  <table border="1">
    <tr>
      <td>Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td>Year of Study</td>
      <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$address"; ?></td>
    </tr>
  </table>
</body>
</html>