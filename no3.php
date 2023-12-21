<!DOCTYPE html>
<html lang="en">
<?php include('header.html');?>
<body>
    <br><br><br>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8">
                <form method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">กรุณากรอกข้อมูล</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="array" placeholder="กรุณากรอกข้อมูล a">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">กรุณากรอกข้อมูล</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="text" placeholder="กรุณากรอกข้อมูล X">
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6">
                                
                            </div>
                            <div class="col-3">
                                <button type="submit" name="submit" class="btn btn-outline-success">ส่ง</button>
                            </div>
                            <div class="col-3">
                                
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <br><br><br>
            <div class="row align-items-center">
                <div class="col-8">
                    <table class="table">
                        <thead class="table-primary">
                            <td><center>input</td>
                            <td><center>output</td>
                        </thead>
                        <tbody>
                            <td><?php if (isset($_POST['submit'])) {
                                echo $_POST["array"]."<br>";
                                echo $_POST["text"]."<br>";
                            }
                            ?></td>
                            <td><?php
                                if (isset($_POST['submit'])) {
                                    $pizza  = $_POST['array'];
                                    $totle = explode(", ",$pizza);
                                    $count = count($totle);
                                    $num = 0;
                                    echo "[";
                                    for($i=0;$i < $count;$i++){
                                        $text = strripos($totle[$i],$_POST['text']);
                                        if($text == ""){
                                            
                                        }else{
                                            echo $totle[$i].",";
                                            $num = $num + 1;
                                        }
                                    
                                    }
                                    echo "]";
                                    echo "<br>";
                                    for($j=0;$j < $count;$j++){
                                        $text = strripos($totle[$j],$_POST['text']);
                                        if($text == ""){
                                            
                                        }else{
                                            echo $text.",";
                                            $num = $num + 1;
                                        }

                                    }
                                    if($num == 0 ){
                                        echo "No results found";
                                    }
                                }?>
                                </td>
                        </tbody>
                    </table
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-3">
                                
            </div>
            <div class="col-3">
                <button type="submit" name="submit" class="btn btn-outline-success"><a href='http://localhost/preinterview-test-Narawit/no3.php'>กลับไปข้อที่ 3 </a></button>
                <button type="submit" name="submit" class="btn btn-outline-success"><a href='http://localhost/preinterview-test-Narawit/no4.php'>ไปข้อที่ 4 </a></button>
            </div>
        </div>
    
</body>
</html>