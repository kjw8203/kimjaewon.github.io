<!DOCTYPE html>
<html>
    <head>
        <title>도형 면적과 체적 계산기</title>
    </head>
    <body>
        <h1>도형 면적과 체적 계산기</h1>
        <h2>삼각형 면적</h2>
        <form method="post" action="">
            <label for="tri-width">밑변:</label>
            <!-- 삼각형의 밑변 크기를 입력 받음-->
            <input type="number" name="tri-width" id="tri-width" required="required">
            <br>
            <label for="tri-height">높이:</label>
            <!-- 삼각형의 높이 크기를 입력 받음-->
            <input type="number" name="tri-height" id="tri-height" required="required">
            <br>
            <!-- 밑변과 높이를 입력으로 받아서 -->
            <input type="submit" value="계산">
        </form>
        <?php
        if(isset($_POST['tri-width']) && isset($_POST['tri-height'])) 
        // tri-width 변수와 tri-height 변수에 값이 있는지 확인
        {
            $width = $_POST['tri-width'];
            $height = $_POST['tri-height'];
            $area = $width * $height / 2;
            // 계산후 면적 출력
            echo "<p>삼각형의 면적은 $area 입니다.</p>";
        }
        ?>

        <h2>직사각형 면적</h2>
        <form method="post" action="">
            <label for="rect-width">가로:</label>
            <input type="number" name="rect-width" id="rect-width" required="required">
            <br>
            <label for="rect-height">세로:</label>
            <input type="number" name="rect-height" id="rect-height" required="required">
            <br>
            <input type="submit" value="계산">
        </form>
        <?php
        if(isset($_POST['rect-width']) && isset($_POST['rect-height'])) 
        {
            $width = $_POST['rect-width'];
            $height = $_POST['rect-height'];
            $area = $width * $height;
            echo "<p>직사각형의 면적은 $area 입니다.</p>";
        }
        ?>

        <h2>원 면적</h2>
        <form method="post" action="">
            <label for="cir-radius">반지름:</label>
            <input type="number" name="cir-radius" id="cir-radius" required="required">
            <br>
            <input type="submit" value="계산">
        </form>
        <?php
        if(isset($_POST['cir-radius']))    
        {
            $radius = $_POST['cir-radius'];
            $area = pi() * pow($radius, 2); //pi* 반지름^2
            echo "<p>원의 면적은 $area 입니다.</p>";
        }
    ?>

        <h2>직육면체 체적</h2>
        <form method="post" action="">
            <label for="rectp-width">가로:</label>
            <input type="number" name="rectp-width" id="rectp-width" required="required">
            <br>
            <label for="rectp-length">세로:</label>
            <input type="number" name="rectp-length" id="rectp-length" required="required">
            <br>
            <label for="rectp-height">높이:</label>
            <input type="number" name="rectp-height" id="rectp-height" required="required">
            <br>
            <input type="submit" value="계산">
        </form>
        <?php
        if(isset($_POST['rectp-width']) && isset($_POST['rectp-length']) && isset($_POST['rectp-height'])) 
        {
            $width = $_POST['rectp-width'];
            $length = $_POST['rectp-length'];
            $height = $_POST['rectp-height'];
            $volume = $width * $length * $height;
            echo "<p>직육면체의 체적은 $volume 입니다.</p>";
        }
        ?>

        <h2>원통 체적</h2>
        <form method="post" action="">
            <label for="cyl-radius">반지름:</label>
            <input type="number" name="cyl-radius" id="cyl-radius" required="required">
            <br>
            <label for="cyl-height">높이:</label>
            <input type="number" name="cyl-height" id="cyl-height" required="required">
            <br>
            <input type="submit" value="계산">
        </form>
        <?php
        if(isset($_POST['cyl-radius']) && isset($_POST['cyl-height'])) 
        {
        $radius = $_POST['cyl-radius'];
        $height = $_POST['cyl-height'];
        $volume = pi() * pow($radius, 2) * $height;
        echo "<p>원통의 체적은 $volume 입니다.</p>";
        }
        ?>

        <h2>구 체적</h2>
        <form method="post" action="">
            <label for="sph-radius">반지름:</label>
            <input type="number" name="sph-radius" id="sph-radius" required="required">
            <br>
            <input type="submit" value="계산">
        </form>
        <?php
    if(isset($_POST['sph-radius'])) 
    {
        $radius = $_POST['sph-radius'];
        $volume = 4/3 * pi() * pow($radius, 3);
        echo "<p>구의 체적은 $volume 입니다.</p>";
    }
    ?>
    </body>
</html>