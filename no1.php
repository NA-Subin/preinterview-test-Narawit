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
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="calculate" placeholder="กรุณากรอกข้อมูล n">
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
                                for($i=0;$i<=$_POST["calculate"];$i++){
                                    $totle = $_POST["calculate"]-$i;
                                    $calculate = $_POST["calculate"]-$totle;
                                    if($calculate > 0){?>
                                    <!-- <table class="table">
                                        <thead class="table-primary">
                                            <td>input</td>
                                            <td>output</td>
                                        </thead>
                                        <tbody>
                                            ...
                                        </tbody>
                                    </table> -->
                                        <?php 
                                            if( ($calculate % 3) == 0 ) {
                                                if ( ($calculate % 5) == 0 ){
                                                    echo $calculate."\tPing Pong<br>";
                                                }
                                                else{
                                                    echo $calculate."\tPing<br>";
                                                }
                                            } else if ( ($calculate % 5) == 0 ){
                                                if ( ($calculate % 3) == 0 ){
                                                    echo $calculate."\tPing Pong<br>";
                                                }
                                                else{
                                                    echo $calculate."\tPong<br>";
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
                <button type="submit" name="submit" class="btn btn-outline-success"><a href='http://localhost/preinterview-test-Narawit/no2.php'>ไปข้อที่ 2 </a></button>
            </div>
        </div>
    
</body>
</html>