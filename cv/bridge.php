<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/JSON; charset=UTF-8");

$servername = "localhost";
$username = "root";
$password = "";
$database = "angtest";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("Connection failure: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM info");
$out = "";
while ($rs = $result->fetch_array(MYSQLI_ASSOC)) {

	if ($out != "") {
		$out .= ",";
	}
	$out .= '{"firstname":"' . $rs["firstname"] . '",' . '"lastname":"' . $rs["lastname"] . '",' . '"email":"' . $rs["email"] . '",' . '"phone":"' . $rs["phone"] . '",' . '"actualtitle":"' . $rs["actualtitle"] . '"
			,' . '"linkedin":"' . $rs["linkedin"] . '",' . '"github":"' . $rs["github"] . '",' . '"discord":"' . $rs["discord"] . '",' . '"street":"' . $rs["street"] . '",' . '"d1":"' . $rs["d1"] . '"
			,' . '"n1":"' . $rs["n1"] . '",' . '"c1":"' . $rs["c1"] . '",' . '"d2":"' . $rs["d2"] . '",' . '"n2":"' . $rs["n2"] . '",' . '"c2":"' . $rs["c2"] . '"
			,' . '"d3":"' . $rs["d3"] . '",' . '"n3":"' . $rs["n3"] . '",' . '"c3":"' . $rs["c3"] . '",' . '"romanian":"' . $rs["romanian"] . '",' . '"english":"' . $rs["english"] . '"
			,' . '"aboutme":"' . $rs["aboutme"] . '",' . '"d4":"' . $rs["d4"] . '",' . '"c4":"' . $rs["c4"] . '",' . '"title1":"' . $rs["title1"] . '",' . '"text1":"' . $rs["text1"] . '"
			,' . '"d5":"' . $rs["d5"] . '",' . '"c5":"' . $rs["c5"] . '",' . '"title2":"' . $rs["title2"] . '",' . '"text2":"' . $rs["text2"] . '",' . '"d6":"' . $rs["d6"] . '"
			,' . '"c6":"' . $rs["c6"] . '",' . '"title3":"' . $rs["title3"] . '",' . '"text3":"' . $rs["text3"] . '",' . '"hobbie1":"' . $rs["hobbie1"] . '",' . '"hobbie2":"' . $rs["hobbie2"] . '"
			,' . '"hobbie3":"' . $rs["hobbie3"] . '",' . '"hobbie4":"' . $rs["hobbie4"] . '",' . '"java":"' . $rs["java"] . '",' . '"html":"' . $rs["html"] . '",' . '"css":"' . $rs["css"] . '"
			,' . '"java1":"' . $rs["java1"] . '",' . '"java2":"' . $rs["java2"] . '",' . '"html1":"' . $rs["html1"] . '",' . '"html2":"' . $rs["html2"] . '"
			,' . '"css1":"' . $rs["css1"] . '",' . '"css2":"' . $rs["css2"] . '"}';
}
$out = '{"records":[' . $out . ']}';
$conn->close();

echo (trim($out));
?>