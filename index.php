<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/86514da8a0.js"
      crossorigin="anonymous"
    ></script>
    <title>Apeperia</title>
  </head>
  <body>

  <!-- Cabeçalho da pagina  -->
    <header class="cabecalho">
      <div class="cabecalho-logo">
        <img src="img/logo-apeperia.svg" alt="logo-apeperia" />
      </div>
      <div class="cabecalho-telefone">
        <a
          class="cabecalho-whatsapp"
          target="_blank"
          href="https://wa.me/5511960311958"
        >
          <p class="whatsapp">
            <i class="fa-brands fa-square-whatsapp icone"></i>
          </p>
          <p class="whatsapp-texto">Whatsapp</p>
        </a>
      </div>

    
  <!-- primeira seção apresentação  -->

    </header>
    <section class="apresentacao">
      <div class="apresentacao-titulo-paragrafo">
        <h1 class="apresentacao-titulo">Apeperia: Aplicativos Na Medida</h1>
        <p class="apresentacao-paragrafo">
          Apeperia tem um jeito inovador de comparar e montar aplicativos para
          pequenas e médias empresas,conheça nossos planos cadastre agora e
          tenha 10% de desconto.
          <br />
          A Apeperia é uma startup com um jeito inovador de comprar e montar
          aplicativos mobile e web. Funciona assim: desenvolvemos e publicamos
          seu app multiplataforma de forma acelerada e o melhor: se o app não
          ficar bom,devolvemos seu dinheiro.
        </p>
      </div>


  
  <!-- Formulario -->    
      <div class="formulario">
        <h3 class="formulario-titulo">Mensagem</h3>

        <form action="formulario.php" method="post">
          <div>
            <label for="nome"> </label>
            <input
              type="text"
              name="nome"
              id="nome"
              required
              placeholder="Nome:"
            />
          </div>
          <div>
            <label for="email"> </label>
            <input
              type="email"
              name="email"
              id="email"
              required
              placeholder="E-mail:"
            />
          </div>
          <div>
            <label for="telefone"></label>
            <input
              type="tel"
              name="telefone"
              id="telefone"
              required
              placeholder="DDD + Telefone"
            />
          </div>
          <div>
            <label for="msg"></label>
            <input
              id="msg"
              name="mensagem"
              id="mensagem"
              required
              placeholder="Como podemos te ajudar?"
            />
          </div>
          <div class="fundo-botao3">
            <button class="botao" type="enviar" name="enviar" id="enviar">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </section>

    <!--  Quem somos -->

    <section class="sobre">
      <div class="sobre-conteudo">
        <img
          class="sobre-imagem"
          src="img/comecando-criar-logotipo.png"
          alt="Foto de notbook e lapis"
        />
        <div class="sobre-titulo-paragrafo">
          <h2 class="sobre-titulo">Sobre nós</h2>
          <p class="sobre-paragrafo">
            Criamos aplicativos personalizados para todas as pessoas . A
            manutenção de um aplicativo não pode ser um custo extra para o
            cliente. Na Apeperia você assina nosso serviço e a manutenção já
            está inclusa. Assim, você não se preocupa com manutenção, é tudo por
            nossa conta.
          </p>
        </div>
      </div>
    </section>

    <!-- Vantagens -->

    <div>
      <h2 class="vantagens-titulo">Vantagens</h2>
    </div>
    <section class="vantagens">
      <div class="vantagens-box">
        <i class="fa-regular fa-clock icons"></i>
        <div class="vantages-info">
          <h2 class="vantagens-box-titulo">Tempo</h2>
          <p class="vantagens-box-subtitulo">
            Tempo é importante! Trabalhamos em ritmo acelerado, atendendo
            rigorosamente aos prazos.
          </p>
        </div>
      </div>

      <div class="vantagens-box">
        <i class="fa-solid fa-hand-holding-dollar icons"></i>
        <div class="vantages-info">
          <h2 class="vantagens-box-titulo">Foco</h2>
          <p class="vantagens-box-subtitulo">
            Focamos no empreendimento! Oferecemos serviços de qualidade com
            preços acessíveis.
          </p>
        </div>
      </div>

      <div class="vantagens-box">
        <i class="fa-solid fa-users-gear icons"></i>
        <div class="vantages-info">
          <h2 class="vantagens-box-titulo">Especialistas</h2>
          <p class="vantagens-box-subtitulo">
            Equipe experiente e especializada! Testamos todos os produtos antes
            do lançamento.
          </p>
        </div>
      </div>

      <div class="vantagens-box">
        <i class="fa-solid fa-laptop-code icons"></i>
        <div class="vantages-info">
          <h2 class="vantagens-box-titulo">Customize</h2>
          <p class="vantagens-box-subtitulo">
            Customize a plataforma do seu jeito Personalize cores, logos,
            imagens e texto. Somos invisíveis para que as pessoas tenham todas
            as vantagens oferecidas com a sua marca.
          </p>
        </div>
      </div>

      <div class="vantagens-box">
        <i class="fa-solid fa-mobile-screen-button icons"></i>
        <div class="vantages-info">
          <h2 class="vantagens-box-titulo">Site Responsivo</h2>
          <p class="vantagens-box-subtitulo">
            Um site adaptável para computador, tablet e celular melhora a
            experiência do usuário, aumentando as interações.
          </p>
        </div>
      </div>

      <div class="vantagens-box">
        <i class="fa-brands fa-google icons"></i>
        <div class="vantages-info">
          <h2 class="vantagens-box-titulo">Encontrado pelo Google</h2>
          <p class="vantagens-box-subtitulo">
            Através de SEO, você alcançará mais clientes com uma boa
            classificação nos resultados das buscas do Google e Bing.
          </p>
        </div>
      </div>
    </section>
    <div class="fundo-botao">
      <button class="botao-vantagens" type="submit">Enviar sua mensagem</button>
    </div>


  
  <!-- Perguntas frequentes  -->  
    <section class="perguntas">
      <div class="detalhes">
        <div>
          <h2 class="title-perguntas-frequentes">Perguntas Frequentes</h2>
        </div>
        <details>
          <summary>Quanto tempo para a entrega do projeto finalizado?</summary>
          <p>Tempo estimado entre 5 a 7 dias.</p>
        </details>

        <details>
          <summary>Como funciona a própria customização do projeto?</summary>
          <p>
            A customização é feita de acordo com as preferências e perfil do
            cliente.
          </p>
        </details>

        <details>
          <summary>Para utilizar o do SEO o valor será pago à parte?</summary>
          <p>>Não, o valor já está previsto na contratação.</p>
        </details>

        <details>
          <summary>Qualquer pessoa poderá fazer vendas com o site ?</summary>
          <p>Haverá abertura para parceiros de venda.</p>
        </details>

        <details>
          <summary>Quando vou começar a ver o resultado?</summary>
          <p>Nossa experiência demonstra retorno a partir de 30 dias.</p>
        </details>
      </div>
    </section>

    
  <!-- Primeira versão em até 5 dias  -->

    <section class="chamada-final">
      <div class="chamada-titulo-paragrafo">
        <h2 class="chamada-titulo">
          Primeira versão <br />
          em até 5 dias úteis
        </h2>
        <p class="chamada-paragrafo">
          Vamos usar de nossa expertise em marketing, design e programação,
          alinhadas às suas necessidades, e lhe entregaremos a primeira versão
          em até 5 dias úteis.
        </p>
      </div>

      
  <!-- segunda parte  da Primeira versão em até 5 dias - agendar  -->
      <section class="enviar-agendar">
        <div class="enviar">
          <p class="tenha-acesso">
            <span class="text-color">
              Sua empresa ainda não possui nossa Apeperia?</span
            ><br /><span class="text-color-subtitulo">
              Tenha acesso a todos os parceiros e desfrute a qualidade de nossos
              produtos.</span
            >
          </p>
        </div>
        <div class="fundo-botao-agendar">
          <button class="botao" type="submit">AGENDAR</button>
        </div>
        <p class="paragrafo">
          Nossos especialistas vão entrar em contato com você ainda hoje.
        </p>
      </section>
    </section>

  <!-- Rodapé - footer --> 
    <footer class="footer-text">
      <p class="paragrafo-footer">
        Apeperia <i class="fa-solid fa-copyright"></i> Todos os direitos
        reservados -2023
      </p>
      <p class="paragrafo-footer">CNPJ 52.999.676-0009 - TERMOS DE USO</p>
    </footer>
  </body>
</html>
