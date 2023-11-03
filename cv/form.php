<?php
if (isset($_POST['update'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "angtest";
    $conn = new mysqli($servername, $username, $password, $database);
    $id = $_POST['id'];
    // id=1
    $query = "SELECT `firstname`, `lastname`, `email`, `phone`, `actualtitle`, `linkedin`, `github`, `discord`, `street`, `d1`, `n1`, `c1`, `d2`, `n2`, `c2`, `d3`, `n3`, `c3`, 
    `romanian`, `english`, `aboutme`, `d4`, `c4`, `title1`, `text1`, `d5`, `c5`, `title2`, `text2`, `d6`, `c6`, `title3`, `text3`, `hobbie1`, `hobbie2`, `hobbie3`, `hobbie4` FROM 
    `info` WHERE `id`=$id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $firstname = isset($_POST['firstname']) && $_POST['firstname'] !== '' ? $_POST['firstname'] : $row['firstname'];
        $lastname = isset($_POST['lastname']) && $_POST['lastname'] !== '' ? $_POST['lastname'] : $row['lastname'];
        $phone = isset($_POST['phone']) && $_POST['phone'] !== '' ? $_POST['phone'] : $row['phone'];
        $actualtitle = isset($_POST['actualtitle']) && $_POST['actualtitle'] !== '' ? $_POST['actualtitle'] : $row['actualtitle'];
        $linkedin = isset($_POST['linkedin']) && $_POST['linkedin'] !== '' ? $_POST['linkedin'] : $row['linkedin'];
        $github = isset($_POST['github']) && $_POST['github'] !== '' ? $_POST['github'] : $row['github'];
        $discord = isset($_POST['discord']) && $_POST['discord'] !== '' ? $_POST['discord'] : $row['discord'];
        $street = isset($_POST['street']) && $_POST['street'] !== '' ? $_POST['street'] : $row['street'];
        $d1 = isset($_POST['d1']) && $_POST['d1'] !== '' ? $_POST['d1'] : $row['d1'];
        $c1 = isset($_POST['c1']) && $_POST['c1'] !== '' ? $_POST['c1'] : $row['c1'];
        $n1 = isset($_POST['n1']) && $_POST['n1'] !== '' ? $_POST['n1'] : $row['n1'];
        $d2 = isset($_POST['d2']) && $_POST['d2'] !== '' ? $_POST['d2'] : $row['d2'];
        $c2 = isset($_POST['c2']) && $_POST['c2'] !== '' ? $_POST['c2'] : $row['c2'];
        $n2 = isset($_POST['n2']) && $_POST['n2'] !== '' ? $_POST['n2'] : $row['n2'];
        $d3 = isset($_POST['d3']) && $_POST['d3'] !== '' ? $_POST['d3'] : $row['d3'];
        $c3 = isset($_POST['c3']) && $_POST['c3'] !== '' ? $_POST['c3'] : $row['c3'];
        $n3 = isset($_POST['n3']) && $_POST['n3'] !== '' ? $_POST['n3'] : $row['n3'];
        $romanian = isset($_POST['romanian']) && $_POST['romanian'] !== '' ? $_POST['romanian'] : $row['romanian'];
        $english = isset($_POST['english']) && $_POST['english'] !== '' ? $_POST['english'] : $row['english'];
        $aboutme = isset($_POST['aboutme']) && $_POST['aboutme'] !== '' ? mysqli_real_escape_string($conn, $_POST['aboutme']) : $row['aboutme'];
        $d4 = isset($_POST['d4']) && $_POST['d4'] !== '' ? $_POST['d4'] : $row['d4'];
        $c4 = isset($_POST['c4']) && $_POST['c4'] !== '' ? $_POST['c4'] : $row['c4'];
        $title1 = isset($_POST['title1']) && $_POST['title1'] !== '' ? $_POST['title1'] : $row['title1'];
        $text1 = isset($_POST['text1']) && $_POST['text1'] !== '' ? $_POST['text1'] : $row['text1'];
        $d5 = isset($_POST['d5']) && $_POST['d5'] !== '' ? $_POST['d5'] : $row['d5'];
        $c5 = isset($_POST['c5']) && $_POST['c5'] !== '' ? $_POST['c5'] : $row['c5'];
        $title2 = isset($_POST['title2']) && $_POST['title2'] !== '' ? $_POST['title2'] : $row['title2'];
        $text2 = isset($_POST['text2']) && $_POST['text2'] !== '' ? $_POST['text2'] : $row['text2'];
        $d6 = isset($_POST['d6']) && $_POST['d6'] !== '' ? $_POST['d6'] : $row['d6'];
        $c6 = isset($_POST['c6']) && $_POST['c6'] !== '' ? $_POST['c6'] : $row['c6'];
        $title3 = isset($_POST['title3']) && $_POST['title3'] !== '' ? $_POST['title3'] : $row['title3'];
        $text3 = isset($_POST['text3']) && $_POST['text3'] !== '' ? $_POST['text3'] : $row['text3'];
        $hobbie1 = isset($_POST['hobbie1']) && $_POST['hobbie1'] !== '' ? $_POST['hobbie1'] : $row['hobbie1'];
        $hobbie2 = isset($_POST['hobbie2']) && $_POST['hobbie2'] !== '' ? $_POST['hobbie2'] : $row['hobbie2'];
        $hobbie3 = isset($_POST['hobbie3']) && $_POST['hobbie3'] !== '' ? $_POST['hobbie3'] : $row['hobbie3'];
        $hobbie4 = isset($_POST['hobbie4']) && $_POST['hobbie4'] !== '' ? $_POST['hobbie4'] : $row['hobbie4'];

        $query = "UPDATE `info` SET `firstname`='$firstname', `lastname`='$lastname', `phone`='$phone', `actualtitle`='$actualtitle',
         `linkedin`='$linkedin', `github`='$github', `discord`='$discord', `street`='$street', `d1`='$d1', `c1`='$c1', `n1`='$n1',
          `d2`='$d2', `c2`='$c2', `n2`='$n2', `d3`='$d3', `c3`='$c3', `n3`='$n3', `romanian`='$romanian', `english`='$english',
           `aboutme`='$aboutme', `d4`='$d4', `c4`='$c4', `title1`='$title1', `text1`='$text1', `d5`='$d5', `c5`='$c5', `title2`='$title2',
            `text2`='$text2', `d6`='$d6', `c6`='$c6', `title3`='$title3', `text3`='$text3', `hobbie1`='$hobbie1', `hobbie2`='$hobbie2',
             `hobbie3`='$hobbie3', `hobbie4`='$hobbie4' WHERE `id` = $id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo 'Data Updated';
        } else {
            echo 'Data Not Updated';
        }
    } else {
        echo 'Record Not Found';
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formular update</title>
    <link rel="stylesheet" type="text/css" href="styleform.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form id="form" action="form.php" method="post">
        <a href="/cv/indexcv.html" class="button">Back to CV</a>
        <br><br>
        <label>ID To Update ESTE 1:</label>
        <input type="text" name="id" required><br>
        <label>New First Name:</label>
        <input type="text" name="firstname"><br>
        <label>New Last Name:</label>
        <input type="text" name="lastname"><br>
        <label>New Phone:</label>
        <input type="text" name="phone"><br>
        <label>New Actual Title:</label>
        <input type="text" name="actualtitle"><br>
        <label>New LinkedIn:</label>
        <input type="text" name="linkedin"><br>
        <label>New GitHub:</label>
        <input type="text" name="github"><br>
        <label>New Discord:</label>
        <input type="text" name="discord"><br>
        <label>New Street:</label>
        <input type="text" name="street"><br>
        <label>New Duration1:</label>
        <input type="text" name="d1"><br>
        <label>New School1:</label>
        <input type="text" name="c1"><br>
        <label>New Name1:</label>
        <input type="text" name="n1"><br>
        <label>New Duration2:</label>
        <input type="text" name="d2"><br>
        <label>New School2:</label>
        <input type="text" name="c2"><br>
        <label>New Name2:</label>
        <input type="text" name="n2"><br>
        <label>New Duration3:</label>
        <input type="text" name="d3"><br>
        <label>New School3:</label>
        <input type="text" name="c3"><br>
        <label>New Name3:</label>
        <input type="text" name="n3"><br>
        <label>New Mother tongue:</label>
        <input type="text" name="romanian"><br>
        <label>New language:</label>
        <input type="text" name="english"><br>
        <label>New About Me:</label>
        <input type="text" name="aboutme"><br>
        <label>New D4:</label>
        <input type="text" name="d4"><br>
        <label>New C4:</label>
        <input type="text" name="c4"><br>
        <label>New Title1:</label>
        <input type="text" name="title1"><br>
        <label>New Text1:</label>
        <input type="text" name="text1"><br>
        <label>New D5:</label>
        <input type="text" name="d5"><br>
        <label>New C5:</label>
        <input type="text" name="c5"><br>
        <label>New Title2:</label>
        <input type="text" name="title2"><br>
        <label>New Text2:</label>
        <input type="text" name="text2"><br>
        <label>New D6:</label>
        <input type="text" name="d6"><br>
        <label>New C6:</label>
        <input type="text" name="c6"><br>
        <label>New Title3:</label>
        <input type="text" name="title3"><br>
        <label>New Text3:</label>
        <input type="text" name="text3"><br>
        <label>New Hobbie1:</label>
        <input type="text" name="hobbie1"><br>
        <label>New Hobbie2:</label>
        <input type="text" name="hobbie2"><br>
        <label>New Hobbie3:</label>
        <input type="text" name="hobbie3"><br>
        <label>New Hobbie4:</label>
        <input type="text" name="hobbie4"><br>
        <input type="submit" name="update" value="Update Data">
    </form>
</body>

</html>