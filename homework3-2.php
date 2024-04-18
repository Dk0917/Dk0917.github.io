<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
</head>
<body>
    <h1>정렬 결과</h1>
    <form method="post">
        <label for="n">n 값 입력:</label>
        <input type="text" id="n" name="n">
        <button type="submit">Submit</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = ($_POST['n'] && is_numeric($_POST['n'])) ? $_POST['n'] : 30;
        
        $data = array();
        for ($i = 0; $i < $n; $i++) {
            $data[$i] = rand(10, 100);
        }

        echo "<p>생성된 숫자: ";
        foreach ($data as $num) {
            echo $num . " ";
        }
        echo "</p>";

        sort($data);

        echo "<p>오름차순 정렬 결과: ";
        foreach ($data as $num) {
            echo $num . " ";
        }
        echo "</p>";
    }
    ?>
</body>
</html>

