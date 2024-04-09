<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>피보나치 수열 출력</title>
    <style>
        table {
            border-collapse: collapse;
            width: 35%;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            border: 1px solid black;
            background-color: #f2f2f2;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>피보나치 수열 출력</h2>
    <form action="" method="post">
        <label for="n">정수 n 입력:</label>
        <input
            type="number"
            id="n"
            name="n"
            min="1"
            required="required"
            value="<?php echo isset($_POST["n"]) ? $_POST["n"] : ""; ?>">
        <button type="submit">출력</button>
    </form>
    <br>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = isset($_POST["n"]) ? intval($_POST["n"]) : 0;
        if ($n > 0) {
            function fibSeq($n) {
                $fib = [0, 1]; // 초기값 설정

                for ($i = 2; $i <= $n; $i++) { // i의 값이 1부터 시작하도록 수정
                    $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; // 피보나치 수열 생성
                }

                return $fib;
            }

            function printFib($n) {
                $seq = fibSeq($n);

                // 헤더 출력
                echo "<table>";
                echo "<tr><th>i</th><th>현재 항(fi)</th><th>다음 항(fi+1)</th><th>비율(fi+1/fi)</th></tr>";

                // 피보나치 수열과 각 항의 앞과 뒤항의 비례 출력
                for ($i = 1; $i <= $n; $i++) { // i의 값이 1부터 시작하도록 수정
                    $fi = $seq[$i];
                    $nextFi = isset($seq[$i + 1]) ? $seq[$i + 1] : '';
                    $ratio = ($nextFi != 0) ? ($nextFi / $fi) : ''; // 앞과 뒤항의 비례 계산

                    echo "<tr><td>$i</td><td class='fib'>$fi</td><td>$nextFi</td><td>$ratio</td></tr>";
                }

                echo "</table>";
            }

            // 피보나치 수열과 각 항의 앞과 뒤항의 비례 출력
            printFib($n);
        } else {
            echo "<p>올바른 정수 n을 입력하세요.</p>";
        }
    }
    ?>
</body>
</html>