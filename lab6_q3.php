<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 4; // Example value
        $width = 2; // Example value
        $area = calculateArea($length, $width);
    ?>
    <p>The area of the rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is <?php echo $area; ?>.</p>
</body>
</html>
