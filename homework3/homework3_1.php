<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["number"])) { //숫자를 입력했을때 출력합니다.
        $n = $_POST["number"];
        $sum = 0;
        $prod = 1;
        echo "1부터 $n 까지의 숫자: <br>";
        for ($i = 1; $i <= $n; $i++) {
            echo $i . " ";
            $sum += $i;
            $prod *= $i;

            if ($i % 10 == 0) { //숫자가 10개씩 출력될때 마다 줄바꿈 실행
                echo "<br>";
            }
        }

        echo "<br>";
        echo "전체 합: $sum <br>";
        echo "전체 곱: $prod";
    } else { //숫자를 입력하지 않았다면
        echo "숫자를 입력해주세요.";
    }
}