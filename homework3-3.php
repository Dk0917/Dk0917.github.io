<!DOCTYPE html>
<html>
<head>
    <title>피보나치 수열과 비례</title>
</head>
<body>
    <form method="post" action="">
        <label for="num" >몇번째 관계까지 출력할지 입력하세요:</label>
        <input type="number" name="num" id="num" required>
        <input type="submit" value="ok">
    </form>
    <?php

        if(isset($_POST['num'])) {
            $num = $_POST['num'];
            
            $flist[0] = 1;
            $flist[1] = 1;
            for ($i = 2 ;$i <= $num+1; $i++) {
                $flist[$i] = $flist[$i-2] + $flist[$i-1];  
            }
            

            for ($i = 0; $i < $num; $i++) {
                $flist2 = $flist[$i+1];
                $flist3 = $flist2 / $flist[$i];

                echo "$flist[$i] ". "$flist2 " . "$flist3"."<br>";
            }
            

         
            
        }
    
    ?>


</body>
</html>