<?php
                  $username   = $_POST['username'];
                  $pass       = md5($_POST['password']);

                  include 'koneksi.php';

                  $user = mysqli_query($connect,"select * from tb_user where username='$username' and password='$pass'");
                  $chek = mysqli_num_rows($user);
                  if($chek > 0)

                  $data = mysqli_fetch_array($user);

                  if($data['level']=="admin"){
 
               
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "admin";
               
                    header("location:dashboard.php");
             
          
                }else if($data['level']=="customer"){
               
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "customer";
               
                    header("location:index.php");
                }else{
             
                    header("location:login.php?pesan=gagal");
                }	
             
            ?>