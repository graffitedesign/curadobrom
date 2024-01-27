<div class="bloco" id="contato">
                <div class="topo">
                    <span class="titulo">O INSS está demorando a responder o seu pedido?</span>
                    <span class="sub anime">Saiba como acabar com a demora do seu pedido no INSS falando com um de nossos especialistas.</span>
                    <div class="botao anime">
                        <a href="https://api.whatsapp.com/send?phone=5562981130399&text=Ol%C3%A1,%20quero%20saber%20como%20agilizar%20o%20INSS." target="_blank"><img src="recursos/imagens/whatsapp-icon.svg"/> Falar com um Especialista</a>
                    </div>
                </div><!-- topo -->
                <div id="form">
                    <span class="title">Formulário de contato</span>
                    <?php if (isset($_SESSION['mensagem']) && $_SESSION['mensagem'] != ""): ?>
                        <span class="mensagem"><?php echo $_SESSION['mensagem'];
                    unset($_SESSION['mensagem']);
                        ?></span>
<?php endif; ?>
                    <form method="post" action="./enviarEmail.php">
                        <div class="bloco-form">
                            <label for="nome"><span>Nome</span><input type="text" id="nome" name="nome" required /></label>
                            <label for="email"><span>Email</span><input type="email" id="email" name="email" required /></label>
                            <label for="telefone"><span>Telefone</span><input type="text" class="telefone" id="telefone" name="telefone" required /></label>
                        </div>
                        <div class="bloco-form">
                            <label for="mensagem"><span>Mensagem</span><textarea id="mensagem" name="mensagem" rows="7" required></textarea></label>
                        </div>
                        <div class="botao">
                            <input type="submit" name="enviar" class="btn" />
                        </div>
                    </form>
                </div>
            </div><!-- pergunta -->
            <div id="quemSomos" class="anima">
                <div class="titulo">Quem Somos</div>
                <div class="conteudo">
                    <img src="./recursos/imagens/escritorio.png"  />
                    <p>
                        Escritório de Advocacia estabelecido em Goiânia-Goiás, com atuação em todo o país há mais de 25 anos. 
                        Advogados especializados com vasta experiência nas áreas do Direito Previdenciário, 
                        Direito do Consumidor, Direito Imobiliário, Obrigações e Contratos.
                    </p>
                </div>
                <hr>
                <div class="conteudo">
                    <div class="left">
                        <img src="./recursos/imagens/logo-curado-brom.svg" /><br> 
                        <p>
                            <a href="tel:6232247000">62 3224-7000</a><br> 
                            Rua 15, nº 645, Setor Marista<br> 
                            Goiânia - GO<br> 
                            74150-020
                        </p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.696485196414!2d-49.27114802409255!3d-16.692064945700846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef1414dbcd6e9%3A0x77e3f4e35ad8d4b0!2sCurado%20Brom%20Advogados!5e0!3m2!1spt-PT!2sbr!4v1704999306446!5m2!1spt-PT!2sbr" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div><!-- quem somos -->
        </div><!-- conteudo -->
        <script src="recursos/anime.js" type="text/javascript"></script>
        <script src="./recursos/jquery.mask.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.telefone').mask('(00) 00000-0000')
            });
        </script>
    </body>
</html>