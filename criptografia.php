<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCE</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/sandbox.css">

    <script src="JS/slide.js" defer></script>
</head>
<body>
    
    <div class="header" id="header">
        <a href="index.html"><img src="assets/logo.png" alt="Logo do site" class="logo"></a>
        <div class="navigation-header">
            <a href="index.html">Início</a>
            <a href="historia.html">Wiki</a>
            <a href="encrypt.php">Criptografar</a>
            <a href="sobre.html">Sobre nós</a>
        </div>
    </div>

    <div class="content" id="content">         
        <div class="select-algo">
            <h2>Algorítmos</h2>
            <div class="algo-var1" id="">
                <a href="">vari1</a>
                <a href="">vari1</a>
            </div>
            <div class="algo-box" id="">
                <a href="">AES</a>
            </div>
            <div class="algo-var1" id="">
                <a href="">vari1</a>
                <a href="">vari1</a>
            </div>
            <div class="algo-box" id="">
                <a href="">3DES</a>
            </div>
        </div>
        <div class="operations">

            <div class="tab">
                <a href="">Criptografar</a>
                <a href="">Descriptografar</a>
            </div>
            <div class="operation">
                <div class="cripto">
                    
                    <div class="entrada">
                        <div class="bt-op">
                            <a href="" id="text-mode"><img src="assets/icons/text.png" alt=""></a>
                            <a href="" id="file-mode"><img src="assets/icons/file.png" alt=""></a>
                        </div>
                        <input type="text" placeholder="Texto de entrada" class="caixa-texto">
                    </div>

                    <div class="saida">
                        <div class="bt-op">
                            <a href="" id="show-bytes"><img src="assets/icons/read.png" alt=""></a>
                            <a href="" id="save"><img src="assets/icons/save.png" alt=""></a>
                        </div>
                        <input type="text" placeholder="Texto de saida" class="caixa-texto">
                    </div>

                </div>
                <div class="op-botom">
                    <input type="text" placeholder="chave">
                    <a href="" id="rand"><img src="assets/icons/dice.png" alt="" class="dice"></a>
                    <a href="" class="start" id="start">Iniciar</a>
                </div>

            </div>
            <div class="operation">
                <div class="descripto">

                    <div class="entrada">
                        <div class="bt-op">
                            <a href="" id="text-mode"><img src="assets/icons/text.png" alt=""></a>
                            <a href="" id="file-mode"><img src="assets/icons/file.png" alt=""></a>
                        </div>
                        <input type="text" placeholder="Texto de entrada" class="caixa-texto">
                    </div>

                    <div class="saida">
                        <div class="bt-op">
                            <a href="" id="show-bytes"><img src="assets/icons/read.png" alt=""></a>
                            <a href="" id="save"><img src="assets/icons/file.png" alt=""></a>
                        </div>
                        <input type="text" placeholder="Texto de saida" class="caixa-texto">
                    </div>

                </div>

                <div class="op-botom">
                    <input type="text" placeholder="chave">
                    <a href="" id="rand"><img src="assets/icons/dice.png" alt="" ></a>
                    <a href="" class="start" id="start">Iniciar</a>
                </div>

            </div>

        </div>
    </div>
    <footer class="footer">
        
        <p>Encript Engine- Ence 2024</p>
        <p>Com iniciação estudantil avaliativa da Fundação de Encino de Contagem unidade Riacho- FUNEC Riacho</p>
        
    </footer>

         
</body>

</html>