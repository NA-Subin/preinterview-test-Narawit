<!DOCTYPE html>
<html lang="en">
<?php include('header.html');?>
<body>
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
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="calculate" placeholder="กรุณากรอกข้อมูล n i j">
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
                                echo $_POST["calculate"];
                            }
                            ?></td>
                            <td><?php
                                if (isset($_POST['submit'])) {
                                    $calculate1  = $_POST['calculate'];
                                    $totle1 = explode(" ", $calculate1);
                                for($i=0;$i<=$totle1[0];$i++){
                                    $totle2 = $totle1[0]-$i;
                                    $calculate2 = $totle1[0]- $totle2;
                                    if($calculate2 > 0){?>
                                        <?php 
                                            if( ($calculate2 % $totle1[1]) == 0 ) {
                                                if ( ($calculate2 % $totle1[2]) == 0 ){
                                                    echo $calculate2."\tPing Pong<br>";
                                                }
                                                else{
                                                    echo $calculate2."\tPing<br>";
                                                }
                                            } else if ( ($calculate2 % $totle1[2]) == 0 ){
                                                if ( ($calculate2 % $totle1[1]) == 0 ){
                                                    echo $calculate2."\tPing Pong<br>";
                                                }
                                                else{
                                                    echo $calculate2."\tPong<br>";
                                                }
                                            }
                                        
                                    } 
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
                <button type="submit" name="submit" class="btn btn-outline-success"><a href='http://localhost/preinterview-test-Narawit/no1.php'>กลับไปข้อที่ 1 </a></button>
                <button type="submit" name="submit" class="btn btn-outline-success"><a href='http://localhost/preinterview-test-Narawit/no3.php'>ไปข้อที่ 3 </a></button>
            </div>
        </div>
    
</body>
</html>