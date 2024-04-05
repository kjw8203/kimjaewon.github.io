<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>랜덤 숫자 생성 및 정렬</title>
</head>
<body>
    <h2>랜덤 숫자 생성 및 정렬</h2>
    <form action="" method="post">
        <label for="count">생성할 숫자 개수:</label>
        <input type="number" id="count" name="count" required="required">
        <button type="submit">생성</button>
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 사용자가 숫자를 입력한 경우
        if (isset($_POST["count"])) { // 값을 받았는지 확인
            $count = $_POST["count"]; // 앞페이지 에서 받은 값을 반영
            $data = array();

            // 1이상 100 이하의 정수 랜덤 넘버 생성
            for ($i = 0; $i < $count; $i++) {
                $data[$i] = rand(1,100);
            }

            // 생성된 숫자 출력
            echo "<p>생성된 숫자:<br>";
            for ($i = 0; $i < $count; $i++) { // 숫자를 1개씩 출력할때마다 i 값 증가.
                echo $data[$i] . " ";
                if (($i + 1) % 10 == 0) {     // i값이 10개(출력된 숫자가 10개)라면
                    echo "<br>";              // 줄바꿈
                }
            }

            // 숫자 정렬
            sort($data);

            // 정렬된 숫자 출력
            echo "<p>정렬된 숫자: <br>";
            for ($i = 0; $i < $count; $i++) {
                echo $data[$i] . " ";
                if (($i + 1) % 10 == 0) {
                    echo "<br>";
                }
            }
        } 
    }
    else { // 값을 못받은 경우
        echo "<p>숫자를 입력해주세요.</p>";
    }
    ?>
</body>
</html>