<?php
$link = mysqli_connect("localhost", 'root', '', 'ticket_price');
mysqli_autocommit($link, true);
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>ticket</title>
        <style>
            .input-wrap {
                width: 480px;
                margin: 0 auto;
            }
            h1 {
                text-align: center;
            }
            td,
            th {
                text-align: center;
            }
            table {
                border: 1px solid #000;
                margin: 0 auto;
            }
            td,
            th {
                border: 1px solid #ccc;
            }
            a {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="input-wrap">
            <form action="" method="POST">
                고객성명
                <input type="text" name="name" placeholder="이름">
                <input type="submit" name="submit" value="합계" style="float:right;">
                <br>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>구분</th>
                            <th colspan="2">어린이</th>
                            <th colspan="2">어른</th>
                            <th>비고</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>입장권</td>
                            <td>7,000</td>
                            <td>
                                <select name="admission_ch">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>10,000</td>
                            <td>
                                <select name="admission_ad">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>입장</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BIG3</td>
                            <td>12,000</td>
                            <td>
                                <select name="big3_ch">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>16,000</td>
                            <td>
                                <select name="big3_ad">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>입장+놀이3종</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>자유이용권</td>
                            <td>21,000</td>
                            <td>
                                <select name="free_ch">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>26,000</td>
                            <td>
                                <select name="free_ad">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>입장+놀이자유</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>연간이용권</td>
                            <td>70,000</td>
                            <td>
                                <select name="year_ch">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>90,000</td>
                            <td>
                                <select name="year_ad">
                                    <option value="0" selected="true">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option></select>
                            </td>
                            <td>입장+놀이자유</td>
                        </tr>
                        <br>
                    </tbody>
                </table>
            </form>
		</div>
	<?php
	if (isset($_POST['name']) && strlen($_POST['name']) > 0):
		$name = $_POST['name'];
		$admission_ch = isset($_POST['admission_ch']) ? $_POST['admission_ch'] : 0;
		$admission_ad = isset($_POST['admission_ad']) ? $_POST['admission_ad'] : 0;
		$big3_ch = isset($_POST['big3_ch']) ? $_POST['big3_ch'] : 0;
		$big3_ad = isset($_POST['big3_ad']) ? $_POST['big3_ad'] : 0;
		$free_ch = isset($_POST['free_ch']) ? $_POST['free_ch'] : 0;
		$free_ad = isset($_POST['free_ad']) ? $_POST['free_ad'] : 0;
		$year_ch = isset($_POST['year_ch']) ? $_POST['year_ch'] : 0;
		$year_ad = isset($_POST['year_ad']) ? $_POST['year_ad'] : 0;
		
		if (isset($_POST['submit']) && $_POST['submit'] == "합계"):
			$sql="
				INSERT INTO ticket 
					(name, admission_ch, admission_ad, big3_ch, big3_ad, free_ch, free_ad, year_ch, year_ad)
				VALUES('$name', '$admission_ch', '$admission_ad', '$big3_ch', '$big3_ad', '$free_ch', '$free_ad', '$year_ch', '$year_ad');";
			mysqli_query($link, $sql);
		endif;
		
		echo date("Y년 m월 d일 A h:i분");
		echo "<br>";
		echo $_POST["name"] . " 고객님 감사합니다. <br>";

		if ($admission_ch > 0 ) echo "어린이 입장권 " . $admission_ch . "매". "<br>";
		if ($admission_ad > 0) echo "어른 입장권 " . $admission_ad . "매 <br>";
		if ($big3_ch > 0) echo "어린이 BIG3 " . $big3_ch . "매 <br>";
		if ($big3_ad > 0) echo "어른 BIG3 " . $big3_ad . "매 <br>";
		if ($free_ch > 0) echo "어린이 자유이용권 " . $free_ch . "매 <br>";
		if ($free_ad > 0) echo "어른 자유이용권 " . $free_ad . "매 <br>";
		if ($year_ch > 0) echo "어린이 연간이용권 " . $year_ch . "매 <br>";
		if ($year_ad > 0) echo "어른 연간이용권 " . $year_ad . "매 <br>";

		$sum =  7000 * $admission_ch + 10000 * $admission_ad +  12000 * $big3_ch + 16000 * $big3_ad + 21000 * $free_ch + 26000 * $free_ad +  70000 * $year_ch + 90000 * $year_ad;
		echo "합계 " . $sum . "원 입니다";
	endif;
	?>

	</body>
</html>