   <?php 
    $userEmail = ""; //primeiro deixamos o campo de email em branco
    if(isset($_POST['subscribe'])){ //se o botão de subscrever for clicado
      $userEmail = $_POST['email']; //recebe o email digitado pelo utilizador
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //valida o email do utilizador
        $subject = "Obrigado por subscrever o newsletter da D1gitech";
        $message = "Obrigado por se inscrever no nosso newsletter. Agora irá receber todas as promoções e novidades da D1gitech.";
        $sender = "From: martimlescola16@gmail.com";
        //função php para enviar e-mail
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
           <!--mostre a mensagem de sucesso assim que o email for enviado com sucesso -->
          <div class="alert success-alert">
            <?php echo "Obrigado por te inscreveres nosso Newsletter" ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          <!-- mostre a mensagem de erro se de alguma forma o e-mail não puder ser enviado -->
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        <!-- mostrar mensagem de erro se o e-mail digitado pelo usuário não for válido -->
        <div class="alert error-alert">
          <?php echo "$userEmail inão é um email válido!" ?>
        </div>
        <?php
      }
    }
    ?>
<style>
    .success-alert{
  color: #155724;
  background: #d4edda;
  border: 1px solid #c3e6cb;
}
.error-alert{
  color: #721c24;
  background: #f8d7da;
  border: 1px solid #f5c6cb;
}
</style>
<div class="text-box">
    <a href="index.php" class="btn btn-white btn-				 animate">Páginal Inicial</a>
</div>
<style>
.text-box {
    margin-left: 20vw;
	 margin-top: 22vh;
}

.btn:link,
.btn:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 15px 40px;
    display: inline-block;
    border-radius: 100px;
    transition: all .2s;
    position: absolute;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
    background-color: #3d85c6;
    color: black;
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}

.btn-white::after {
    background-color: #fff;
}

</style>