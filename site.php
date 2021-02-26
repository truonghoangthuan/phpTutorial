<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // Basic
        echo "<h1>Hello World</h1>";
        echo "<h1>Thuan's Site</h1>";
        echo "<hr>";
        echo "<p>This is my site</p>";

        // Variables
        echo "<h1>Variables</h1>";
        $characterName = "John";
        $characterAge = 35;

        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        echo "He really liked the name $characterName <br>";
        echo "But didn't like being $characterAge <br>";

        // Data type
        echo "<h1>Data type</h1>";
        // String
        $phrase = "To be or not to be";
        // Number
        $age = 30;
        // Decimal number
        $gpa = 3.7;
        // Boolean
        $flag = true;
        // Null
        $temp = null;

        // Working with Strings
        echo "<h1>Working with Strings</h1>";
        
        $phrase = "Truong Hoang Thuan";
        echo strtoupper($phrase);

        // Working with Numbers
        echo "<h1>Working with Numbers</h1>";

        $num = 10;
        $num++;
        echo $num;
    ?>
    <!-- Getting users input -->
    <h1>Getting users input</h1>

    <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
    <br>
    Your name: <?php echo $_GET["name"] ?>

    <!-- Building basic calculator -->
    <h1>Building basic calculator</h1>

    <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    <!-- Madlibs game -->
    <h1>Madlibs game</h1>

    <form action="site.php" method="get">
        Color: <input type="text" name="color">
        Noun: <input type="text" name="noun">
        Celebrity: <input type="text" name="celebrity">
        <input type="submit">
    </form>
    <?php 
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$noun are blue <br>";
        echo "I love $celebrity <br>";
    ?>

    <!-- GET vs POST -->
    <h1>GET vs POST</h1>

    <form action="site.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <br>
    Password: <?php echo $_POST["password"] ?>

    <!-- Array -->
    <h1>Array</h1>

    <?php 
        $friends = array("A", "B", "C", "D");
        $friends[2] = "Thuan";
        echo count($friends);
    ?>

    <!-- Using checkboxes -->
    <h1>Using checkboxes</h1>

    <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>
    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    ?>

    <!-- Associative Arrays -->
    <h1>Associative Arrays</h1>

    <form action="site.php" method="post">
        <input type="text" name="student" id="">
        <input type="submit">
    </form>
    <?php 
        $grades = array("A"=>"A", "B"=>"B+", "C"=>"B");
        echo $grades[$_POST["student"]];
    ?>

    <!-- Functions -->
    <h1>Functions</h1>
    <?php
        function cube($num) {
            return $num + $num;
        }
        $sum = cube(4);
        echo $sum;
    ?>

    <!-- If Statement -->
    <h1>If Statement</h1>
    
    <?php
        $isMale = false;
        $isTall = false;

        if ($isMale && $isTall) {
            echo "You are tall male";
        } elseif ($isMale && !$isTall) {
            echo "You are not tall male";
        } elseif (!$isMale && $isTall) {
            echo "You are tall but not male";
        } else {
            echo "You are not male and not tall";
        }
    ?>

    <!-- Switch Statement -->
    <h1>Switch Statement</h1>
    <form action="site.php" method="post">
        Insert grade: <input type="text" name="grade" id="">
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch ($grade) {
            case 'A':
                echo "You are good!";
                break;
            case 'B+':
                echo "You are pretty good!";
                break;
            case 'F':
                echo "You fail!";
                break;
            default:
                echo "Wrong grade!";
                break;
        }
    ?>

    <!-- While Loops -->
    <h1>While Loops</h1>
    <?php
        $index = 1;
        while ($index <= 5) {
            echo "$index <br>";
            $index++;
        }
    ?>

    <!-- For Loops -->
    <h1>For Loops</h1>

</body>
</html>