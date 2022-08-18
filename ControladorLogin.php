    <?php
        $email = $_POST["email"];
        $senha = $_POST["senha"];
                       
					   $ligax = mysqli_connect('localhost','id18418381_login1234','7E|>EEC9ccVxDU3v');
                       // $ligax = mysqli_connect('localhost','root','');
                        if(!$ligax){
                        echo "<p> Falha na ligação";
                        exit;
                        }else{

							mysqli_select_db($ligax,'id18418381_d1gitech_login');
                       
							$query = mysqli_query($ligax,  "SELECT * FROM users WHERE email = '$email' AND senha = '$senha';");  
				
						

							//Aqui obtememos a linha. 
							$row = mysqli_fetch_assoc($query);
							
							
							if($row > 0){
								//Aqui consultamos o campo admin (Nota o campo por default é false para tu poder mudar isso tens de ir a bd)
								session_start(); 
								$_SESSION['id_utilizador'] = $row['id']; 
								$_SESSION['nome_utilizador'] = $row['nome']; 
							//	echo $_SESSION['id_utilizador'];
								$admin = $row['admin']; 
							



								//Aqui é onde vai ir a admin view e depois com a funcao header damos redirect. 
								
								if($admin == 'false'){
									?><meta http-equiv="refresh" content="0; url=index.php"><?php

								}else{
									?><meta http-equiv="refresh" content="0; url=paineladmin.php"><?php

								}

							}else{
							
								?> <meta http-equiv="refresh" content="0; url=login.php"> <?php
								echo "Utilzador nao registado";
							}
							 

				
						}
					
    ?>


