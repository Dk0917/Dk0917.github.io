![3-2 result](https://github.com/Dk0917/Dk0917.github.io/assets/156882898/7fe8d94f-2370-4558-9a00-f610e71cf976)

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>합과 곱 계산기</title>
</head>
<body>
    <h2>숫자 입력하여 합과 곱 계산하기</h2>
    <form method="post">
        숫자 입력: <input type="number" name="number" required>
        <input type="submit" value="계산">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $n = $_POST['number'];

        $sum = 0;
        $prod = 1;

        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
            $prod *= $i;
        }

        // 결과 출력
        echo "1부터 " . $n . "까지의 합: " . $sum . "<br>";
        echo "1부터 " . $n . "까지의 곱: " . $prod;
    }
    ?>
</body>
</html>
