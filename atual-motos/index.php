<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $placa = $_POST['placa'];
        $servico = $_POST['servico'];
        $data = $_POST['data'];
        $mensagem = $_POST['mensagem'];

        $result = mysqli_query($conexao, "INSERT INTO agendamentos(nome,telefone,placa,servico,data,mensagem)
        VALUES ('$nome', '$telefone', '$placa', '$servico', '$data', '$mensagem')");

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Atual Motos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho / Menu -->
     <header>
        <div class="container">
            <div class="logo">
                <span>Atual Motos - Oficina, Peças e Acessórios</span>
            </div>
            <nav>
                <a href="#inicio">Início</a>
                <a href="#servicos">Serviços</a>
                <a href="#sobre">Sobre</a>
                <a href="#contato">Contato</a>
            </nav>
        </div>
     </header>

     <!-- Seção hero (destaques) -->
     <section id="inicio" class="hero">
        <div class="container hero-content">
            <div>
                <h1>Cuide da sua moto com quem entende de estrada</h1>
                <p>Manutenção preventiva, corretiva e diagnósticos completos.
                    Atendimento rápido, transparente e justo.</p>
                    <div class="botoes-hero">
                        <a class="btn btn-principal" href="#contato">Agendar serviço</a>
                        <a class="btn btn-secundario" href="https://wa.me/552737567039" target="_blank">
                            Falar no WhatsApp
                        </a>
                    </div>
            </div>
            <div class="hero-info">
                <h2>Horário de atendimento</h2>
                <p>Segunda a Sexta: 08h às 18h</p>
                <p>Sábado: 08h às 12h</p>
                <p><strong>Endereço:</strong> Av. Jones dos Santos Neves, 959 - Irmãos Fernandes, Barra de São Francisco - ES, 29800-000</p>
                <p><strong>Telefone:</strong> (27) 3756-7039</p>
                <p><strong>Telefone Secundário:</strong> (27) 9 9765-7910</p>
            </div>
        </div>
     </section>
     <!-- Seção de serviços -->
     <section id="servicos" class="secao">
        <div class="container">
            <h2>Nossos serviços</h2>
            <p class="subtitulo">Tudo que a sua moto precisa em um só lugar.</p>

            <div class="grid-servicos">
                <div class="card-servico">
                    <h3>Revisão completa</h3>
                    <p>Checagem geral, troca de óleo, filtros, fluidos e mais.</p>
                </div>

                <div class="card-servico">
                    <h3>Freios</h3>
                    <p>Troca de pastilhas, discos, fluido e inspeção do sistema.</p>
                </div>

                <div class="card-servico">
                    <h3>Suspensão</h3>
                    <p>Amortecedores, molas, buchas e alinhamento de direção.</p>
                </div>

                <div class="card-servico">
                    <h3>Elétrica</h3>
                    <p>Bateria, faról e sistema elétrico em geral.</p>
                </div>
            </div>
        </div>
     </section>

     <!-- Seção sobre -->
    <section id="sobre" class="secao secao-alternada">
        <div class="container sobre-content">
            <div>
                <h2>Sobre a Atual Motos</h2>
                <p>Mais de 10 anos cuidando de motos como se fossem nossos.</p>
                <p>
                    Trabalhamos com profissionais especializados e equipamentos modernos 
                    para garantir segurança, desempenho e durabilidade para o seu veículo.
                </p>
                <p>
                    Nosso compromisso é com a transparência: você entende o que está 
                    sendo feito na sua moto e aprova tudo antes do serviço.
                </p>
            </div>
            <div class="sobre-destaque">
                <h3>Por que escolher a gente?</h3>
                <ul>
                    <li>✔ Orçamento claro e sem surpresas</li>
                    <li>✔ Peças de qualidade</li>
                    <li>✔ Garantia nos serviços</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Seção contato / agendamento -->
    <section id="contato" class="secao">
        <div class="container">
            <h2>Agende seu serviço</h2>
            <p class="subtitulo">Preencha os dados e retornaremos o mais rápido possível.</p>

            <div class="contato-grid">
                <form action="index.php" method="POST" class="form-contato">
                    <div class="campo-form">
                        <label for="nome">Nome*</label>
                        <input type="text" id="nome" required>
                    </div>

                    <div class="campo-form">
                        <label for="telefone">Telefone / WhatsApp*</label>
                        <input type="tel" id="telefone" required>
                    </div>

                    <div class="campo-form">
                        <label for="placa">Placa do veículo</label>
                        <input type="text" id="placa" placeholder="ABC-1234">
                    </div>

                    <div class="campo-form">
                        <label for="servico">Serviço desejado</label>
                        <select id="servico">
                            <option value="">Selecione...</option>
                            <option>Revisão completa</option>
                            <option>Freios</option>
                            <option>Suspensão</option>
                            <option>Injeção eletrônica</option>
                            <option>Ar-condicionado</option>
                            <option>Elétrica</option>
                            <option>Outro</option>
                        </select>
                    </div>

                    <div class="campo-form">
                        <label for="data">Data desejada</label>
                        <input type="date" id="data">
                    </div>

                    <div class="campo-form">
                        <label for="mensagem">Observações</label>
                        <textarea id="mensagem" rows="4" placeholder="Descreva o problema ou o que você precisa."></textarea>
                    </div>

                    <button type="submit" class="btn btn-principal">Enviar pedido</button>
                </form>

                <div class="contato-info">
                    <h3>Outros canais</h3>
                    <p><strong>WhatsApp:</strong> (27) 3756-7039</p>
                    <p><strong>WhatsApp secundário:</strong> (27) 9 9765-7910</p>
                    <p><strong>E-mail:</strong> adrianoatualmotos@hotmail.com</p>
                    <p><strong>Endereço:</strong> Av. Jones dos Santos Neves, 959 - Irmãos Fernandes, Barra de São Francisco - ES, 29800-000</p>
                    <p><strong>Google Maps:</strong> aqui depois dá pra embutir o mapa 😉</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>© 2025 Atual Motos - Todos os direitos reservados.</p>
            <p>Desenvolvido por Kennedy😎</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>