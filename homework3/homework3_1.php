<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>합과 곱 계산하기</title>
</head>
<body>
    <h2>숫자 입력 후 합과 곱 계산하기</h2>
    <form action="" method="post">
        <label for="number">숫자 입력:</label>
        <input type="number" id="number" name="number" required="required">
        <button type="submit">계산하기</button>
        <br>
        <br>
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["number"])) { //숫자를 입력했을때 출력합니다.
                $n = $_POST["number"]; // 앞에서 받아온 number 를 $n에 반영
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
            }
        echo "<br>";
        echo "전체 합: $sum <br>";
        echo "전체 곱: $prod";
    } else { //숫자를 입력하지 않았다면
        echo "숫자를 입력해주세요.";
    }
    ?>
    </form>
</body>
</html>