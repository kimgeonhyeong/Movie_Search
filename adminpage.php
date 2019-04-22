
<?php
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="adminpage.css">
            <title>admin</title>
        </head>
        <body>
        <section class="sec1 trans">
            <div class="wrap">
            <img src="main_log.png" alt="main_logo" style="width: 105px; height: 20px;margin: 10px 10px; cursor: pointer;" onclick="location.href='index.php'">
              <p class="pagetitle">ADMIN-PAGE</p>
              <div class="bgc_white trans">
                <div style="display : flex">
                  <p style='font-size:20px; text-align:center;flex:1'>일반 회원</p><br>
                </div>
                <table>
                  <thead>
                    <tr>
                      <th>고유번호</td>
                      <th>아이디</td>
                      <th>비밀번호</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $conn = mysqli_connect('localhost','root','apmsetup','problem');
                    $sql = mysqli_query($conn,"select * from users;") or die ("sql 구문 오류");
                    while ($array=mysqli_fetch_array($sql)) {
                      echo "
                      <tr>
                        <td>".$array["id"]."</td>
                        <td>".$array["username"]."</td>
                        <td>".$array["password"]."</td>
                      </tr>";
                      $num++;
                    }
                        mysqli_close($conn);
                    ?>
                  </tbody>
                </table>

        </body>
        </html>    