<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/carousel.css">
        <link rel="stylesheet" href="styles/search-result.css">
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="stylesheet" href="styles/modal.css">
        <link rel="shortcut icon"  href="imgs/casa.svg">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="page-result">
            <div class="content">
                <header>
                    <nav>
                        <ul>
                            <li class="align-left"><img src="imgs/logo.svg" alt="logotipo"></li>
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="about.php">SOBRE</a></li>
                            <li><a id="search" href="#">BUSCAR</a></li>
                            <li><a href="contact.php">CONTATO</a></li>
                            <li>
                                <label class="switch">
                                    <input id="color-checked" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                        </ul>
                    </nav>
                </header>

                <main>
                    <!-- Slideshow container -->
                    <div class="content">
                        <h1 class="section-title">Pousada Aurora</h1>
                        <div class="cards">
                            <div class="card">
                                <div class="mySlides fade">
                                    <img class="img-fix2" src="imgs/img1.jpeg" alt="imagem carousel">
                                </div>
                                <div class="mySlides fade">
                                    <img class="img-fix2" src="imgs/room1.jfif" alt="imagem carousel">
                                </div>
                                <div class="mySlides fade">
                                    <img class="img-fix2" src="imgs/room2.jfif" alt="imagem carousel">
                                </div>
                            </div>
        
                            <div class="card">
                                <h1>Apartamento 1</h1>
                                <p>Valor: R$ 300,00</p>
                                <div class="card-group">
                                    <p>Quartos:</p>
                                    <select name="quartos" id="quartos">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                
                                <p>Por outro lado, a contínua expansão de nossa atividade desafia a capacidade de equalização dos índices pretendidos.</p>

                                <div style="margin: 50px 0; text-align: center;">
                                    <a class="button" onclick="redireciona()">Alugar</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <footer>
                <div class="footer-div">   
                    <p>Developed with <span>♥</span> by Jhonatha and Viviane</p>
                    <div style="display: inline;">
                        <a href="https://github.com/jhonathadev/Projeto-SIN-143" target="_blank"><img src="imgs/git-logo.svg" alt="Facebook"></a>
                    </div>
                </div>
            </footer>
            <div id="modal" class="hide">
                <div class="content-modal">
                    <div class="header">
                        <h1>Buscar Vaga</h1>
                        <a href="#">Fechar</a>
                    </div>
                    <form action="search.php">
                        <label for="search">Cidade</label>
                        <div class="search field">
                            <input type="text" name="search" placeholder="Digite a cidade">
                            <button>
                                <img src="imgs/search.svg" alt="Buscar">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function redireciona () {
                showConfirmButton: false
                alert("Alugado com sucesso!" + "\n" + "Você será redirecionado para a página inicial.")
                setTimeout(() => {
                    window.location ="index.php"
                } , 2500)
            }
        </script>
        <script src="scripts/carousel.js"></script>
        <script src="scripts/modal.js"></script>
        <script src="scripts/switch-color.js"></script>
    </body>
</html>