    <?php
                        $nome = $_POST["nome"];
                        $email = $_POST["email"];
                        $senha = $_POST["senha"];
                       
                        $ligax = mysqli_connect('localhost','id18418381_login1234','7E|>EEC9ccVxDU3v');
                        if(!$ligax){
                        echo "<p> Falha na ligação";
                        exit;
                        }
                        mysqli_select_db($ligax,'id18418381_d1gitech_login');
                       
                $x = 0;  
                        $query = mysqli_query($ligax, "SELECT * FROM users WHERE email = '$email';");
                        while($row = mysqli_fetch_assoc($query)){
                            $x++;
                        }
                       
                        if($x != 0){
                            echo "<script>
                                alert('email already exists');
                            </script>";
                        }
                        else if($x == 0){  
                            $result = mysqli_query($ligax,"INSERT INTO users(nome, email, senha) VALUES('$nome','$email','$senha');");
                           
                            echo "<script>
                                alert('loged in');
                            </script>";
                        } 

?>

<meta http-equiv="refresh" content="0; url=login.php">