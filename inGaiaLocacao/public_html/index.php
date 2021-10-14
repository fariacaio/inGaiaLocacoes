<?
$h1         = 'InGaiaLocacao';
$title      = 'Home';
$desc       = '';
$key        = 'InGaia, locações imoveis, venda imoveis';
$var        = 'Home';
include('inc/head.php');
?>
</head>
<body>
  <section id="sectionHome">
    <div id="bannerTopo">
        <div class="container">
            <div class="logo">
              <a href="index.php"><img src="imagens/logo.png" alt="Logo InGaiaLocacao" title="Logo InGaiaLocacao"></a>
            </div>
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-5">Dê um fim às suas planilhas de Excel</h1>
                    <p>Redução da inadimplência,<br /> controle de finanças, gestão de<br /> contratos, vistorias online e <br /> na venda de seguro <br />residencial em um só lugar.</p>
                    <p class="bold">Preencha nosso formulário e receba o contato <br />de um de nossos consultores por telefone!</p>
                </div>
                <div class="col-4">
                  <? include('inc/formulario.php');?>
                </div>
            </div>
            
            
        </div>
    </div>
  </section>
  <? include('section-plataforma.php');?>
  <? include('section-dashbord.php');?>
  <? include('section-final.php');?>
</body>
</html>