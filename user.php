
<?php
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="user.css">
            <title>Search</title>
        </head>
        <body>
        <form action="user.php" method="POST" class="main_borad">
        <section class="sec1 trans">
            <div class="wrap">
                <img src="main_log.png" alt="main_logo" style="width: 105px; height: 20px;margin: 10px 10px; cursor: pointer;" onclick="location.href='index.php'">
                     <p class="pagetitle">영화 정보검색</p>
                            <div class="bgc_white trans">
                                <div style="display : flex">
                                     <p style='font-size:20px; text-align:center;flex:1'></p><br>
            </div>
            <div class="inputbox">
                <div class="textbox">
                    <input type="text" name="moviename" type="moviename" class="inputtext">
                </div>
                <input type="submit" name="movieinsert" value="입력"  class="button">
            </div> 

                <table>
                  <thead>
                    <tr>
                      <th>영화 이름</td>
                      <th>영화 개봉일</td>
                      <th>영화 감독</td>
                      <th>장르</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    if(isset($_POST['movieinsert'])){
                        $moviename = $_POST['moviename'];
                        $con = mysqli_connect("localhost","root","apmsetup","problem");
                        mysqli_set_charset($con,"uft8");
                        mysqli_select_db($con,'problem') or die("Error");
                        $sql="SELECT * FROM movie WHERE moviename='$moviename'";
                        $result=mysqli_query($con,$sql) or die("Error");
                        $count=mysqli_num_rows($result);
                        if($count =0){
                                echo "
                                <tr>
                                    <td>NOT found</td>

                                </tr>";
                          }
                           else{
                                    while ($array = mysqli_fetch_array($result)) {
                                        
                                        echo "
                                             <tr>
                                                   <td>".$array["moviename"]."</td>
                                                   <td>".$array["moviebr"]."</td>
                                                   <td>".$array["movieman"]."</td>
                                                   <td>".$array["moviejr"]."</td>
                                            </tr>";
                  
                              }
                          
                    }
                
                    mysqli_close($con);
                }
                else{}

                    ?>
                  </tbody>
                </table>
                </form>

        </body>
        </html>    
    <?php


?>
<script>
    // alert("잘못된 접근입니다");
    // location.href = "index.php";
</script>
<?php

?>