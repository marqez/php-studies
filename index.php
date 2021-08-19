<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=Basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=aritmeticas">
                                Operações Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=desafio_precedencia">
                               Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=string">
                               Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=desafio_string">
                               Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=boolean">
                               Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=Tipos&file=conversoes">
                               Conversões PHP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=Variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>

</html>