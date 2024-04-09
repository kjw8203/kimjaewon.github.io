<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>달력 출력</title>
    <style>
        table {
            width: 300px;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #fff;
        }
        /* 일요일을 빨간색으로 출력 */
        th:nth-child(1), td:nth-child(1) {
            color: red;
        }
        /* 토요일을 파란색으로 출력 */
        th:nth-child(7), td:nth-child(7) {
            color: blue;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            margin-right: 10px;
        }
        input[type="text"] {
            width: 50px;
            padding: 5px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>달력 출력</h1>
    <form method="GET">
        <label for="year">년(年)을 입력하세요 :</label>
        <input
            type="text"
            id="year"
            name="year"
            value="<?php echo isset($_GET['year']) ? htmlspecialchars($_GET['year']) : date('Y'); ?>">
            <br>
            <label for="month">월(月)을 입력하세요 :</label>
        <input
            type="text"
            id="month"
            name="month"
            value="<?php echo isset($_GET['month']) ? htmlspecialchars($_GET['month']) : date('m'); ?>">
            <br>
        <button type="submit">달력 보기</button>
    </form>

    <?php
    function print_calendar($year, $month) {
        // 해당 월의 첫 날과 마지막 날 계산
        $first_day_time = mktime(0, 0, 0, $month, 1, $year);
        $last_day_time = mktime(0, 0, 0, $month + 1, 0, $year);
        
        // 첫 날의 요일 계산
        $first_day_of_week = date('w', $first_day_time);
        
        // 해당 월의 전체 일수 구하기
        $total_days = date('t', $first_day_time);
        
        // 달력 출력
        echo "<h2>{$year}년 {$month}월</h2>";
        echo "<table>";
        echo "<tr><th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th></tr>";
        
        echo "<tr>";
        // 첫 번째 날 이전의 빈 칸 출력
        for ($i = 0; $i < $first_day_of_week; $i++) {
            echo "<td></td>";
        }
        
        // 날짜 출력
        for ($day = 1; $day <= $total_days; $day++) {
            $current_day_time = mktime(0, 0, 0, $month, $day, $year);
            $current_day_of_week = date('w', $current_day_time);
            
            // 새로운 주의 시작
            if ($current_day_of_week == 0) {
                echo "</tr><tr>";
            }
            
            // 빨간색으로 일요일 표시
            if ($current_day_of_week == 0) {
                echo "<td style='color: red;'>{$day}</td>";
            }
            // 파란색으로 토요일 표시
            elseif ($current_day_of_week == 6) {
                echo "<td style='color: blue;'>{$day}</td>";
            } else {
                echo "<td>{$day}</td>";
            }
        }
        
        // 마지막 날 이후의 빈 칸 출력
        $last_day_of_week = date('w', $last_day_time);
        for ($i = $last_day_of_week + 1; $i < 7; $i++) {
            echo "<td></td>";
        }
        
        echo "</tr>";
        echo "</table>";
    }

    // 연도와 달 입력받기
    $year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');
    $month = isset($_GET['month']) ? intval($_GET['month']) : date('m');

    // 달력 출력
    print_calendar($year, $month);
    ?>
</body>
</html>
