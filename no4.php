<!DOCTYPE html>
<html lang="en">
<?php include('header.html');?>
<body>
    <br><br><br>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8">
                <form method="post">
                        <div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">กรุณาเลือกวันที่ X</span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="X"><br>
                            </div><br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">กรุณาเลือกวันที่ Y</span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Y"><br>
                            </div><br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">กรุณาเลือกวันที่ M</span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="M"><br>
                            </div><br>
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
                                echo "Date X = ".$_POST["X"]."<br>";
                                echo "Date Y = ".$_POST["Y"]."<br>";
                                echo "Date M = ".$_POST["M"]."<br>";
                            }
                            ?></td>
                            <td><?php
                                if (isset($_POST['submit'])) {
                                    $date_X = strtotime($_POST['X']);
                                    $date_Y = strtotime($_POST['Y']);
                                    $date_M = strtotime($_POST['M']);
                                    if(($date_M > $date_X) && ($date_M < $date_Y)){
                                        $date = $date_M - $date_X;
                                        $ndays = round($date / 86400);
                                        echo "true\t,".$ndays."\tDays";
                                    }
                                    else {
                                        $date = $date_M - $date_X;
                                        $ndays = round($date / 86400);
                                        echo "false\t,".$ndays."\tDays";
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
                <button type="submit" name="submit" class="btn btn-outline-success"><a href='http://localhost/preinterview-test-Narawit/no4.php'>กลับไปข้อที่ 4 </a></button>
                <button type="submit" name="submit" class="btn btn-outline-success"><a href='http://localhost/preinterview-test-Narawit/no5.php'>ไปข้อที่ 5 </a></button>
            </div>
        </div>
    
</body>
</html>