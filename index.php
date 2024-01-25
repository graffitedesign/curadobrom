<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Curado Brom Advogados</title>
        <link href="recursos/estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="recursos/imagens/curado-logo-icon.svg">
        <meta name="description" content="" />
        <link rel="canonical" href="https://curadobrom.adv.br" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;600;800&display=swap" rel="stylesheet">

        <script type="text/javascript" language="javascript" src="recursos/jquery-3.7.1.min.js"></script>

    </head>
    <body>
        <div id="conteudo">
            <div id="topo">
                <img src="./recursos/imagens/logo-curado-brom.svg" alt="" title=""  />
            </div><!-- topo -->
            <div id="inicio" class="bloco" item>
                <p class="titulo">Demora no INSS?</p>
                <p class="sub">Conte com um especialista em Direito Previdenciário!</p>
                <p>Você não precisa ficar a mercê da burocracia.</p>
                <a href="https://api.whatsapp.com/send?phone=5562981130399&text=Ol%C3%A1,%20quero%20saber%20como%20agilizar%20o%20INSS." target="_blank" class="anime"><img src="recursos/imagens/whatsapp-icon.svg"/> Falar com um Especialista</a>
            </div><!-- inicio -->
            <div id="opcoes" class="bloco ">
                <label>Conte conosco para agilizar:</label>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/planejamento.svg" alt="" title="" />
                    <p>Planejamento Previdenciário</p>
                </div>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/revisao-beneficios.svg" alt="" title="" />
                    <p>Revisão de Benefícios</p>
                </div>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/loas.svg" alt="" title="" />
                    <p>BCP / LOAS</p>
                </div>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/aposentadoria.svg" alt="" title="" />
                    <p>Aposentadoria</p>
                </div>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/auxilio-acidente.svg" alt="" title="" />
                    <p>Auxílio Acidente</p>
                </div>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/maternidade.svg" alt="" title="" />
                    <p>Salário Maternidade</p>
                </div>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/pensao-morte.svg" alt="" title="" />
                    <p>Pensão por Morte</p>
                </div>
                <div class="opcao anime">
                    <img src="recursos/imagens/icones/acidente-trabalho.svg" alt="" title="" />
                    <p>Acidente de Trabalho</p>
                </div>
                <div class="botao anime">
                    <a href="https://api.whatsapp.com/send?phone=5562981130399&text=Ol%C3%A1,%20quero%20saber%20como%20agilizar%20o%20INSS." target="_blank"><img src="recursos/imagens/whatsapp-icon.svg"/> Falar com um Especialista</a>
                </div>
            </div><!-- opcoes -->

            <div id="calendario" class="bloco">
                <div class="titulo">
                    <img src="recursos/imagens/calendario.svg" />
                    <p>Provavelmente você não sabe, mas existe um prazo legal para o INSS resolver o seu caso!</p>
                </div>
                <div class="prazos">
                    <div class="prazo anime">
                        <div class="tempo"><span class="dias">45</span><span>DIAS</span></div>
                        <div class="info"><span>Prazo Obrigatório p/</span><span class="tema">Auxílio Doença</span></div>
                    </div>
                    <div class="prazo anime">
                        <div class="tempo"><span class="dias">60</span><span>DIAS</span></div>
                        <div class="info"><span>Prazo Obrigatório p/</span><span class="tema">Pensão por Morte</span></div>
                    </div>
                    <div class="prazo anime">
                        <div class="tempo"><span class="dias">45</span><span>DIAS</span></div>
                        <div class="info"><span>Prazo Obrigatório p/</span><span class="tema">Aposentadoria</span></div>
                    </div>
                    <div class="prazo anime">
                        <div class="tempo"><span class="dias">90</span><span>DIAS</span></div>
                        <div class="info"><span>Prazo Obrigatório p/</span><span class="tema">BCP / LOAS</span></div>
                    </div>
                </div><!-- prazos -->
            </div><!-- tempo -->
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