<html>

<head>
    <title>Conditional test</title>
</head>

<body>

    <?php
    $first = $_GET["firstName"];
    $middle = $_GET["middleName"];
    $last = $_GET["lastName"];
    print("Hi $first! Your full name is $last $middle $first.<br></br>");
    if ($first == $last) {
        print("$first and $last are equal");
    }
    if ($first > $last) {
        print("$first is greater than $last");
    }
    if ($first < $last) {
        print("$first is less than $last");
    }
    print("<br></br>");
    $grade1 = $_GET["grade1"];
    $grade2 = $_GET["grade2"];
    $final = (2 * $grade1 + 3 * $grade2) / 5;
    $rate;
    if ($final > 89) {
        printf("Your final grade is $final. You got an A. Congratulation!");
        $rate = "A";
    } elseif ($final > 79) {
        printf("Your final grade is $final. You got a B");
        $rate = "B";
    } elseif ($final > 69) {
        printf("Your final grade is $final. You got a C");
        $rate = "C";
    } elseif ($final > 59) {
        printf("Your final grade is $final. You got a D");
        $rate = "D";
    } elseif ($final >= 0) {
        printf("Your final grade is $final. You got a F");
        $rate = "F";
    } else {
        printf("Illegal grade less than 0. Final grade = $final");
        $rate = "Illegal";
    }
    print "<br><br>";
    switch ($rate) {
        case "A":
            print "Excellent!";
            break;
        case "B":
            print "Good!";
            break;
        case "C":
            print "Not bad!";
            break;
        case "D":
            print "Normal!";
            break;
        case "F":
            print "You have to try again!";
            break;
        default:
            print "Illegal grade";
    }
    ?>


</body>

</html>