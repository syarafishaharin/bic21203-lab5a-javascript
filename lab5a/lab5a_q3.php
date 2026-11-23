
<!DOCTYPE html>
<html>
<head>
    <title>Area of Rectangle</title>
</head>
<body>

    <h2>Calculate Area of Rectangle</h2>

    <form method="post">
        Enter Length:
        <input type="number" name="length"
               min="0" step="any" required>
        <br><br>

        Enter Width:
        <input type="number" name="width"
               min="0" step="any" required>
        <br><br>

        <input type="submit" name="calculate"
               value="Calculate Area">
    </form>

    <?php
    function calculateArea($length, $width) {
        $area = $length * $width;
        return $area;
    }

    if (isset($_POST['calculate'])) {

        $length = (float) $_POST['length'];
        $width = (float) $_POST['width'];

        $result = calculateArea($length, $width);

        echo "<h3>Area of Rectangle = $result</h3>";
    }
    ?>

</body>
</html>
