<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    // Function to calculate rectangle area
    function calculateArea($length, $width) {
        $area = $length * $width;
        return $area;
    }
    
    // Test values
    $length = 10;
    $width = 5;
    $result = calculateArea($length, $width);
    ?>
    <h2>The area of a rectangle with a width of <?php echo $length; ?> and <?php echo $width; ?> is <?php echo $result; ?> square units</h2>
</body>
</html>