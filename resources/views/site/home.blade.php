<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Filmes</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Quem somos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="filmes-cadastrados">Lista de filmes cadastrados<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=images/rio2.jpg>
        <div class="container">
          <div class="carousel-caption text-left">
            <div class="fonte">  
            <h1>Filmes reunidos em um só lugar.</h1>
            <p>Cadastre um filme de sua preferência e curta os seus personagens favoritos.</p>
            <p><a class="btn btn-lg btn-primary" href="cadastro" role="button">Cadastrar agora</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/zootopia.jpg">
        <div class="container">
          <div class="carousel-caption">
            <div class="fonte">
            <h1>Grandes sucessos de cinema.</h1>
            <p>Veja quem está por trás dos bastidores.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Conheça agora</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/pets2.jpg">
        <div class="container">
          <div class="carousel-caption text-right">
            <div class="fonte">
            <h1>Processo de criação dos filmes.</h1>
            <p>Veja como os filmes de animação são produzidos.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Aprenda agora</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="images/netflix.jpg" height="150" weight="150">
        <h2>Se liga nos lançamentos dos exclusivos da Netflix</h2>
        <p>Aqui você fica por dentro de todos os lançamentos dos exclusivos da Netflix. São centenas de sucessos que com certeza você irá amar.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="images/amazon.png" height="150" weight="150">
        <h2>Fique de olho nos sucessos do Amazon Prime Vídeo</h2>
        <p>Filmes vencedores do oscar estão disponíveis no Amazon Prime Vídeo. Confira aqui os lançamentos do ano.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="images/hbo-go.png" height="150" weight="150">
        <h2>Game of Thrones e outros sucessos de bilheteria estão no HBO GO</h2>
        <p>Confira todos os lançamentos de sucessos que você só encontra na HBO. Conheça também o app de streaming de vídeos da HBO que com certeza você irá se encantar com os lançamentos do ano.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Conheça o filme Tá Dando Onda 2. <span class="text-muted">Filme dos pinguins surfistas.</span></h2>
        <p class="lead">Surf's Up (Brasil: Tá Dando Onda /Portugal: Dia de Surf) é uma animação computadorizada produzida pela Sony Pictures Animation. Foi lançada em 8 de junho de 2007 nos Estados Unidos, 2 de agosto de 2007 em Portugal e em 26 de outubro de 2007 no Brasil. O filme contou com a direção de Ash Brannon (codiretor de Toy Story 2) e Chris Buck (diretor de Tarzan). Em março de 2016 foi anunciado sua sequência Tá Dando Onda 2 prevista para 2017 nos cinemas..</p>
      </div>
      <div class="col-md-5">
      <img src="images/ta-dando-onda-2.jpg" height="350" weight="200">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Angry Birds 2. <span class="text-muted">O filme dos famosos pássaros furiosos.</span></h2>
        <p class="lead">The Angry Birds Movie 2 é um filme de comédia de animação digital baseado na série de videogames Angry Birds da Rovio Entertainment, produzido pela Columbia Pictures, Rovio Animation e Sony Pictures Animation, e distribuído pela Sony Pictures Releasing. A sequela de Angry Birds: O Filme (2016), o filme é dirigido por Thurop Van Orman e John Rice a partir de um roteiro de Peter Ackerman, e estrelado por as vozes de Jason Sudeikis, Josh Gad, Danny McBride, Bill Hader e Peter Dinklage nos papéis do primeiro filme. Juntando-se ao elenco de voz estão Leslie Jones, Rachel Bloom, Nicki Minaj, Awkwafina, Sterling K. Brown e Eugenio Derbez. O filme foi lançado em 14 de agosto de 2019.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="images/angry-birds-2.jpg" height="270" weight="120">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Minions 2. <span class="text-muted">Os famosos ET's amarelados estão na área novamente.</span></h2>
        <p class="lead">Minions: The Rise of Gru (bra: Minions 2: A Origem de Gru; prt: Mínimos 2: A Ascensão de Gru) é um futuro filme estadunidense de animação digital de comédia em 3D, dirigido por Kyle Balda e co-dirigido por Brad Ableson e Jonathan de Val, sendo um spin-off da principal série de filmes Meu Malvado Favorito, assim como uma continuação do filme Minions (2015).[3][4] O filme conta com o talento das vozes de Steve Carell, Pierre Coffin, Russell Brand e Julie Andrews, junto com os recém-chegados Taraji P. Henson, Michelle Yeoh, Jean-Claude Van Damme, Lucy Lawless, Dolph Lundgren, Danny Trejo, Alan Arkin, RZA, Brian Stepanek, Bill Hader, Maya Rudolph e John DiMaggio.</p>
      </div>
      <div class="col-md-5">
      <img src="images/minions.jpg" height="330" weight="180">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>