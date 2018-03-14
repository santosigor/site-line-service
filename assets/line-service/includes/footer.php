    <section class="ls-section" id="ls-contato">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="ls-title-1">Contato<i></i></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6">
            <ul>
              <li><span>Endereço:</span></li>
              <li>Avenida Professor José Barreto, 111 - Sala 17<br>CEP.: 06703-001 / Cotia - São Paulo</li>
              <li><br></li>
              <li><span>Telefones:</span></li>
              <li>(11) 4551-8176 / 4551-8175 / 4551-8174</li>
              <li><br></li>
              <li><span>Horários:</span></li>
              <li>Segunda à Sexta, 08h00 as 17h00</li>
            </ul>
          </div>
          <div class="col-12 col-lg-6">
            <form name="form1" id="form1" enctype="multipart/form-data" action="index.php" method="post">

              <div class="campo">              
                <input type="text" name="nomecontato" id="nomecontato" placeholder="Nome" maxlength="100">
              </div>
              <div class="campo">
                <input type="text" name="telefonecontato" id="telefonecontato" placeholder="Telefone/Celular" maxlength="13" onkeyup="mascaraTexto(event,'(99)99999999');BloquearLetras(this,'num');" onblur="VerificarTel(this);">
              </div>
              <div class="campo">
                <input type="text" name="emailcontato" id="emailcontato" placeholder="E-mail" onblur="VerificaEmail(this);" maxlength="35">
              </div>
              <div class="campo">
                <textarea name="mensagemcontato" id="mensagemcontato" placeholder="Mensagem" maxlength="400"></textarea>
              </div>
              <div class="campo">
                <a href="#" class="transition">Enviar</a>
              </div>
          
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="ls-section" id="ls-localizacao">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537.1454416179124!2d-46.9273306201806!3d-23.605459332626648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0766a69fa09b%3A0xe22ff2fe62b99a9f!2sAv.+Prof.+Jos%C3%A9+Barreto%2C+111+-+17+-+Centro%2C+Cotia+-+SP!5e0!3m2!1spt-BR!2sbr!4v1513736259012" width="100%" height="540" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <footer>
      &copy; <?php echo date('Y');?> GRUPO LINE SERVICE - TODOS OS DIREITOS RESERVADOS
    </footer>

    <!-- jQuery first, Bootstrap JS, Owl Carousel JS -->
    <script src="./assets/common/js/jquery.min.js"></script>
    <script src="./assets/common/js/bootstrap.min.js"></script>
    <script src="./assets/common/js/owl.carousel.min.js"></script>
    <!-- LineService JS -->
    <script src="./assets/line-service/js/main.js"></script>
    
  </body>
</html>