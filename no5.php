<?php
$conn = new PDO("mysql:host=localhost; dbname=website; charset=utf8", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

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
                                <span class="input-group-text" id="inputGroup-sizing-default">กรุณากรอกข้อมูล</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="website" placeholder="กรุณากรอกข้อมูลเว็บไซต์">
                            </div><br>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6">
                                
                            </div>
                            <div class="col-3">
                                <button type="submit" name="input" class="btn btn-outline-success">input</button>
                                <button type="submit" name="prev" class="btn btn-outline-success">prev</button>
                                <button type="submit" name="next" class="btn btn-outline-success">next</button>
                                <button type="submit" name="current" class="btn btn-outline-success">current</button>
                                <button type="submit" name="all" class="btn btn-outline-success">all</button>
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
                            <td><?php if (isset($_POST['input'])) {
                                echo "input ".$_POST['input']."<br>";
                            }
                            else if (isset($_POST['prev'])) {
                                echo "prev<br>";
                            }
                            else if (isset($_POST['next'])) {
                                echo "next<br>";
                            }
                            else if (isset($_POST['current'])) {
                                echo "current<br>";
                            }
                            else if (isset($_POST['all'])) {
                                echo "all<br>";
                            }
                            ?></td>
                            <td><?php
        
                                if (isset($_POST['input'])) {
                                    $stmt = $conn->prepare("INSERT INTO website VALUES ('', ?)");
                                    $stmt->bindParam(1, $_POST['website']);
                                    $stmt->execute();
                                }
                                $stmt = $conn->query("SELECT * FROM website ORDER BY website_id DESC");
                                $row1 = $stmt->fetch();
                                
                                echo "<br>";
                                if (isset($_POST['prev'])) {
                                    
                                        
                                        $n = $row1['website_id'] - 1;
                                        if(($n < 0) || ($row1['website_id'] != 1)){
                                            echo 'No website to previous';
                                        }
                                                    
                                }
                                echo "<br>";
                                if (isset($_POST['next'])) {
                                    
                                        
                                        $n = $row1['website_id'] + 1;

                                        if($n > $row1['website_id']){
                                            echo 'No website to go';
                                        }
                                        
                                }    
                                echo "<br>";
                            
                                if (isset($_POST['current'])) {
                                    
                                        $website_url = $row1['website_url'];
                                        echo "Now you on [".$website_url."]";
                                }    
                            
                                echo "<br>";
                                if (isset($_POST['all'])) {
                                    $stmt = $conn->query("SELECT * FROM website");
                                    while ($row = $stmt->fetch()) {
                                        $website_url = $row['website_url'];
                                        echo "[".$website_url."],";
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