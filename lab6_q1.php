<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
    $name = "Lee Jia Le";
    $matric = "AI230151";
    $course = "BIM";
    $year = "Year 2 Sem 2";
    $address = "21, Jalan Bina";
    ?>
    
    <table border="1">
        <tr>
            <td><strong>Name:</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric No:</strong></td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td><strong>Course:</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year:</strong></td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td><strong>Address:</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>