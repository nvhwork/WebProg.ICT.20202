<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;

        }

        table,
        td,
        th {
            border: 1px solid lightseagreen;
            ;
            padding: 5px;

        }

        th {
            text-align: left;
            background-color: lightseagreen;
            color: white;

        }
    </style>
</head>

<body>

    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost:3306', 'root', '', 'peter');
    if (!$con) {
        echo ("Error description: ");
    }


    $sql = "SELECT * FROM user WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
<tr>


<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {

        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>