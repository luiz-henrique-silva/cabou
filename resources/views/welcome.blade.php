<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
html {
	font-size: 10px;
	font-family: 'Montserrat', sans-serif;
	scroll-behavior: smooth;
}
a {
	text-decoration: none;
}
.container {
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}
img {
	height: 100%;
	width: 100%;
	object-fit: cover;
}
p {
	color: black;
	font-size: 1.4rem;
	margin-top: 5px;
	line-height: 2.5rem;
	font-weight: 300;
	letter-spacing: 0.05rem;
}
.section-title {
	font-size: 4rem;
	font-weight: 300;
	color: black;
	margin-bottom: 10px;
	text-transform: uppercase;
	letter-spacing: 0.2rem;
	text-align: center;
}
.section-title span {
	color: crimson;
}

.cta {
	display: inline-block;
	padding: 10px 30px;
	color: black;
	
	/* border: 2px solid crimson; */
	background-color: #485563;
	font-size: 2rem;
	text-transform: uppercase;
	letter-spacing: 0.1rem;
	margin-top: 30px;
	transition: 0.3s ease;
	transition-property: background-color, color;
}
.cta:hover {
	color: white;
	background-color: crimson;
}
.brand h1 {
	font-size: 3rem;
	text-transform: uppercase;
	color: white;
}
.brand h1 span {
	color: linear-gradient(60deg, #30B1BF 0%, #55D9C1 100%);
}

/* Header section */
#header {
	position: fixed;
	z-index: 1000;
	left: 0;
	top: 0;
	width: 100vw;
	height: auto;
}
#header .header {
	min-height: 8vh;
	background-color: rgba(31, 30, 30, 0.24);
	transition: 0.3s ease background-color;
}
#header .nav-bar {
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	height: 100%;
	max-width: 1300px;
	padding: 0 10px;
}
#header .nav-list ul {
	list-style: none;
	position: absolute;
	background-color: rgb(31, 30, 30);
	width: 100vw;
	height: 100vh;
	left: 100%;
	top: 0;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	z-index: 1;
	overflow-x: hidden;
	transition: 0.5s ease left;
}
#header .nav-list ul.active {
	left: 0%;
}
#header .nav-list ul a {
	font-size: 2.5rem;
	font-weight: 500;
	letter-spacing: 0.2rem;
	text-decoration: none;
	color: white;
	text-transform: uppercase;
	padding: 20px;
	display: block;
}
#header .nav-list ul a::after {
	content: attr(data-after);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%) scale(0);
	color: rgba(240, 248, 255, 0.021);
	font-size: 13rem;
	letter-spacing: 50px;
	z-index: -1;
	transition: 0.3s ease letter-spacing;
}
#header .nav-list ul li:hover a::after {
	transform: translate(-50%, -50%) scale(1);
	letter-spacing: initial;
}
#header .nav-list ul li:hover a {
	background-image: linear-gradient(60deg, #30B1BF 0%, #55D9C1 100%);
}
#header .hamburger {
	height: 60px;
	width: 60px;
	display: inline-block;
	border: 3px solid white;
	border-radius: 50%;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 100;
	cursor: pointer;
	transform: scale(0.8);
	margin-right: 20px;
}
#header .hamburger:after {
	position: absolute;
	content: '';
	height: 100%;
	width: 100%;
	border-radius: 50%;
	border: 3px solid white;
	animation: hamburger_puls 1s ease infinite;
}
#header .hamburger .bar {
	height: 2px;
	width: 30px;
	position: relative;
	background-color: white;
	z-index: -1;
}
#header .hamburger .bar::after,
#header .hamburger .bar::before {
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	left: 0;
	background-color: white;
	transition: 0.3s ease;
	transition-property: top, bottom;
}
#header .hamburger .bar::after {
	top: 8px;
}
#header .hamburger .bar::before {
	bottom: 8px;
}
#header .hamburger.active .bar::before {
	bottom: 0;
}
#header .hamburger.active .bar::after {
	top: 0;
}
/* End Header section */

/* Hero Section */
#hero {
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
}
#hero::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: black;
	opacity: 0.7;
	z-index: -1;
}
#hero .hero {
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 50px;
	justify-content: flex-start;
}
#hero h1 {
	display: block;
	width: fit-content;
	font-size: 4rem;
	position: relative;
	color: transparent;
	animation: text_reveal 0.5s ease forwards;
	animation-delay: 1s;
}
#hero h1:nth-child(1) {
	animation-delay: 1s;
}
#hero h1:nth-child(2) {
	animation-delay: 2s;
}
#hero h1:nth-child(3) {
	animation: text_reveal_name 0.5s ease forwards;
	animation-delay: 3s;
}

.texto-com-gradiente {
  font-size: 3rem; /* Ajuste o tamanho da fonte conforme necessário */
  font-weight: bold; /* Se quiser o texto em negrito */
  background-image: linear-gradient(60deg, #30B1BF 0%, #55D9C1 100%);
  -webkit-background-clip: text; /* Necessário para o gradiente funcionar no texto */
  background-clip: text; /* Para navegadores que não suportam o -webkit prefixo */
  color: transparent; /* Torna a cor original do texto transparente, permitindo o gradiente visível */
}
#hero h1 span {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 0;
	background-image: linear-gradient(60deg, #30B1BF 0%, #55D9C1 100%);
	animation: text_reveal_box 1s ease;
	animation-delay: 0.5s;
}
#hero h1:nth-child(1) span {
	animation-delay: 0.5s;
}
#hero h1:nth-child(2) span {
	animation-delay: 1.5s;
}
#hero h1:nth-child(3) span {
	animation-delay: 2.5s;
}

/* End Hero Section */

/* Services Section */
#services .services {
	flex-direction: column;
	text-align: center;
	max-width: 1500px;
	margin: 0 auto;
	padding: 100px 0;
}
#services .service-top {
	max-width: 500px;
	margin: 0 auto;
}
#services .service-bottom {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
	margin-top: 50px;
}
#services .service-item {
	flex-basis: 80%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	padding: 30px;
	border-radius: 10px;
	background-image: url(./img/img-1.png);
	background-size: cover;
	margin: 10px 5%;
	position: relative;
	z-index: 1;
	overflow: hidden;
}
#services .service-item::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: 0.9;
	z-index: -1;
}
#services .service-bottom .icon {
	height: 80px;
	width: 80px;
	margin-bottom: 20px;
}
#services .service-item h2 {
	font-size: 2rem;
	color: white;
	margin-bottom: 10px;
	text-transform: uppercase;
}
#services .service-item p {
	color: white;
	text-align: left;
}
/* End Services Section */

/* Projects section */
#projects .projects {
	flex-direction: column;
	max-width: 1200px;
	margin: 0 auto;
	padding: 100px 0;
}
#projects .projects-header h1 {
	margin-bottom: 50px;
}
#projects .all-projects {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
#projects .project-item {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	width: 80%;
	margin: 20px auto;
	overflow: hidden;
	border-radius: 10px;
}
#projects .project-info {
	padding: 30px;
	flex-basis: 50%;
	height: 100%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	color: white;
}
#projects .project-info h1 {
	font-size: 4rem;
	font-weight: 500;
}
#projects .project-info h2 {
	font-size: 1.8rem;
	font-weight: 500;
	margin-top: 10px;
}
#projects .project-info p {
	color: white;
}
#projects .project-img {
	flex-basis: 50%;
	height: 300px;
	overflow: hidden;
	position: relative;
}
#projects .project-img:after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: 0.7;
}
#projects .project-img img {
	transition: 0.3s ease transform;
}
#projects .project-item:hover .project-img img {
	transform: scale(1.1);
}
/* End Projects section */

/* About Section */
#about {
  background-color: #f9f9f9;
  padding: 80px 0;
}

/* Container da seção */
.about.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  gap: 30px;
  flex-wrap: wrap;
}

/* Estilo para a coluna esquerda */
.col-left {
  flex: 1;
  max-width: 500px;
}

.about-img img {
  width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Estilo para a coluna direita */
.col-right {
  flex: 1;
  max-width: 600px;
}

/* Título da seção */
.section-title {
  font-size: 3rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 20px;
}

.section-title span {
  color: #1e90ff; /* Azul para destaque */
}

/* Subtítulo (profissão) */
.col-right h2 {
  font-size: 2rem;
  font-weight: 500;
  color: #555;
  margin-bottom: 20px;
}

/* Parágrafo (descrição) */
.col-right p {
  font-size: 1.1rem;
  color: #666;
  line-height: 1.6;
  margin-bottom: 30px;
}
/* End About Section */

/* contact Section */
#contact .contact {
	flex-direction: column;
	max-width: 1200px;
	margin: 0 auto;
	width: 90%;
}
#contact .contact-items {
	/* max-width: 400px; */
	width: 100%;
}
#contact .contact-item {
	width: 80%;
	padding: 20px;
	text-align: center;
	border-radius: 10px;
	padding: 30px;
	margin: 30px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	box-shadow: 0px 0px 18px 0 #0000002c;
	transition: 0.3s ease box-shadow;
}
#contact .contact-item:hover {
	box-shadow: 0px 0px 5px 0 #0000002c;
}
#contact .icon {
	width: 70px;
	margin: 0 auto;
	margin-bottom: 10px;
}
#contact .contact-info h1 {
	font-size: 2.5rem;
	font-weight: 500;
	margin-bottom: 5px;
}
#contact .contact-info h2 {
	font-size: 1.3rem;
	line-height: 2rem;
	font-weight: 500;
}
/*End contact Section */

/* Footer */
#footer {
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
}
#footer .footer {
	min-height: 200px;
	flex-direction: column;
	padding-top: 50px;
	padding-bottom: 10px;
}
#footer h2 {
	color: white;
	font-weight: 500;
	font-size: 1.8rem;
	letter-spacing: 0.1rem;
	margin-top: 10px;
	margin-bottom: 10px;
}
#footer .social-icon {
	display: flex;
	margin-bottom: 30px;
}
#footer .social-item {
	height: 50px;
	width: 50px;
	margin: 0 5px;
}
#footer .social-item img {
	filter: grayscale(1);
	transition: 0.3s ease filter;
}
#footer .social-item:hover img {
	filter: grayscale(0);
}
#footer p {
	color: white;
	font-size: 1.3rem;
}
/* End Footer */
.hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem;
}

.hero .content {
    max-width: 50%;
    margin-left: 200px;
}

.hero h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #333;
}

.hero p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.hero .cta {
    text-decoration: none;
    padding: 0.8rem 1.5rem;
    
    color: #fff;
    border-radius: 5px;
}

.hero .illustration img {
    max-width: 100%;
    height: auto;
    
}

.cards-container {
      display: flex;
	  flex-direction: row;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
	.cards-container h2{
		text-align: center;
	}
    .card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-content h2 {
      font-size: 2rem;
      color: #007bff;
      margin-bottom: 10px;
    }

    .card-content p {
      font-size: 1.4rem;
      color: #555;
      margin-bottom: 10px;
    }

    .card-content strong {
      color: black;
    }

/* Keyframes */
@keyframes hamburger_puls {
	0% {
		opacity: 1;
		transform: scale(1);
	}
	100% {
		opacity: 0;
		transform: scale(1.4);
	}
}
@keyframes text_reveal_box {
	50% {
		width: 100%;
		left: 0;
	}
	100% {
		width: 0;
		left: 100%;
	}
}
@keyframes text_reveal {
	100% {
		color: white;
	}
}
@keyframes text_reveal_name {
	100% {
		
		font-weight: 500;
	}
}
/* End Keyframes */

/* Media Query For Tablet */
@media only screen and (min-width: 768px) {
	.cta {
		font-size: 2.5rem;
		padding: 20px 60px;
	}
	h1.section-title {
		font-size: 6rem;
	}

	/* Hero */
	#hero h1 {
		font-size: 7rem;
	}
	/* End Hero */

	/* Services Section */
	#services .service-bottom .service-item {
		flex-basis: 45%;
		margin: 2.5%;
	}
	/* End Services Section */

	/* Project */
	#projects .project-item {
		flex-direction: row;
	}
	#projects .project-item:nth-child(even) {
		flex-direction: row-reverse;
	}
	#projects .project-item {
		height: 400px;
		margin: 0;
		width: 100%;
		border-radius: 0;
	}
	#projects .all-projects .project-info {
		height: 100%;
	}
	#projects .all-projects .project-img {
		height: 100%;
	}
	/* End Project */

	/* About */
	#about {
  background-color: #f9f9f9;
  padding: 80px 0;
}

/* Container da seção */
.about.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  gap: 30px;
  flex-wrap: wrap;
}

/* Estilo para a coluna esquerda */
.col-left {
  flex: 1;
  max-width: 500px;
}

.about-img img {
  width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Estilo para a coluna direita */
.col-right {
  flex: 1;
  max-width: 600px;
}

/* Título da seção */
.section-title {
  font-size: 3rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 20px;
}

.section-title span {
  color: #1e90ff; /* Azul para destaque */
}

/* Subtítulo (profissão) */
.col-right h2 {
  font-size: 2rem;
  font-weight: 500;
  color: #555;
  margin-bottom: 20px;
}

/* Parágrafo (descrição) */
.col-right p {
  font-size: 1.1rem;
  color: #666;
  line-height: 1.6;
  margin-bottom: 30px;
}
	/* End About */

	/* contact  */
	#contact .contact {
		flex-direction: column;
		padding: 100px 0;
		align-items: center;
		justify-content: center;
		min-width: 20vh;
	}
	#contact .contact-items {
		width: 100%;
		display: flex;
		flex-direction: row;
		justify-content: space-evenly;
		margin: 0;
	}
	#contact .contact-item {
		width: 30%;
		margin: 0;
		flex-direction: row;
	}
	#contact .contact-item .icon {
		height: 100px;
		width: 100px;
	}
	#contact .contact-item .icon img {
		object-fit: contain;
	}
	#contact .contact-item .contact-info {
		width: 100%;
		text-align: left;
		padding-left: 20px;
	}
	/* End contact  */
}
/* End Media Query For Tablet */

/* Media Query For Desktop */
@media only screen and (min-width: 1200px) {
	/* header */
	#header .hamburger {
		display: none;
	}
	#header .nav-list ul {
		position: initial;
		display: block;
		height: auto;
		width: fit-content;
		background-color: transparent;
	}
	#header .nav-list ul li {
		display: inline-block;
	}
	#header .nav-list ul li a {
		font-size: 1.8rem;
	}
	#header .nav-list ul a:after {
		display: none;
	}
	/* End header */

	#services .service-bottom .service-item {
		flex-basis: 22%;
		margin: 1.5%;
	}
}
/* End  Media Query For Desktop */
    </style>
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>Vault</span>R<span>E</span>Pos</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>

            @auth
              <li><a href="{{ route('dashboard') }}" >Perfil</a></li>
            @else
              <li><a href="/login">Login</a></li>
            @endauth
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Bem vindo <span></span></h1>
        <h1>ao <span></span></h1>
        <h1 class="texto-com-gradiente">Vault Repos <span></span></h1>
        <a href="#projects" type="button" class="cta">Projetos</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->


  <section class="hero">
        <div class="content">
            
            @auth
			<h2>Entre no perfil e comece</h2>
        <p>Uma plataforma inovadora para transformar suas ideias em realidade.</p>
        <a href="{{ route('dashboard') }}" class = "cta">Perfil</a>
      @else
	  	<h2>Faça login para começar</h2>
        <p>Uma plataforma inovadora para transformar suas ideias em realidade.</p>
        <a href="/login" class = "cta">Login</a>
      @endauth
        </div>
        <div class="illustration">
        <img src="{{ asset('storage/ilustracao.png') }}" alt="Ilustração representativa">
        </div>
    </section>



  <!-- Service Section -->
  <section id="services">
    <div class="services container">
        <div class="service-top">
            <h1 class="section-title">Serv<span>i</span>ços</h1>
            <p>O nosso site oferece uma plataforma para que alunos da ETEC possam compartilhar, explorar e se inspirar com projetos de TCC. Aqui, você encontra uma variedade de projetos, além de dicas práticas para facilitar o desenvolvimento e a apresentação do seu trabalho de conclusão de curso.</p>
        </div>
        <div class="service-bottom">
            <div class="service-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="Icone de compartilhamento de projetos"/></div>
                <h2>Repositório de TCCs</h2>
                <p>Encontre uma coleção organizada de projetos de TCC de diferentes cursos da ETEC. Cada projeto inclui detalhes como descrição, metodologia e resultados, que podem servir como referência para seu próprio trabalho.</p>
            </div>
            <div class="service-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="Icone de orientação"/></div>
                <h2>Orientações e Dicas</h2>
                <p>Além dos projetos, o site oferece orientações sobre como estruturar seu TCC, dicas de pesquisa, formatação e até como apresentar seu trabalho de forma eficaz perante a banca examinadora.</p>
            </div>
            <div class="service-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="Icone de feedback"/></div>
                <h2>Feedback e Colaboração</h2>
                <p>Colabore com outros alunos, professores e ex-alunos. Compartilhe suas experiências e receba feedback sobre o seu projeto, promovendo um ambiente colaborativo de aprendizado e melhoria contínua.</p>
            </div>
            <div class="service-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="Icone de acesso fácil"/></div>
                <h2>Acesso Simples e Rápido</h2>
                <p>A plataforma é intuitiva e de fácil navegação, permitindo que você encontre rapidamente os projetos e materiais que precisa. Tudo está organizado de forma clara e acessível, para otimizar seu tempo e esforço.</p>
            </div>
        </div>
    </div>
</section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
	  <div class="cards-container">
      <!-- Exemplos de cards -->
      @foreach($projects as $project)
      <div class="card">
        @if ($project->image)
        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
        @endif
        <div class="card-content">
          <h2>{{ $project->title }}</h2>
          <p><strong>Descrição: </strong>{{ $project->description }}</p>
          <p><strong>Integrantes:</strong> {{ $project->integrantes }}</p>
		  <h2><a href="{{ route('projects.show', $project->id) }}">Ver Detalhes</a></h2>
        </div>
      </div>
      @endforeach
    </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
        <div class="col-left">
            <div class="about-img">
                <img src="{{ asset('storage/vault-logo.png') }}" alt="Imagem representativa">
            </div>
        </div>
        <div class="col-right">
            <h1 class="section-title">Sobre <span>nós</span></h1>
            <h2>Repositório de Projetos TCC - ETEC</h2>
            <p>
                Bem-vindo ao nosso repositório de Projetos TCC! Somos uma plataforma dedicada a reunir e compartilhar
                projetos de Trabalho de Conclusão de Curso (TCC) desenvolvidos por alunos da ETEC, com o objetivo de
                apoiar e inspirar estudantes que estão prestes a concluir sua jornada acadêmica.
            </p>
            <p>
                Nosso projeto surge da necessidade de proporcionar uma fonte de referência para aqueles que buscam
                ideias, soluções práticas e orientações sobre como desenvolver um TCC de qualidade. Aqui, você encontrará
                uma variedade de projetos, desde os mais simples até os mais complexos, cobrindo diversas áreas do
                conhecimento, sempre com foco na realidade e nos desafios enfrentados pelos alunos da ETEC.
            </p>
            <p>
                Nosso compromisso é ser uma ferramenta útil para a comunidade acadêmica da ETEC, estimulando o aprendizado
                colaborativo e o compartilhamento de conhecimento. Juntos, podemos tornar a jornada do TCC mais rica e
                menos desafiadora.
            </p>
            <p>
                Seja você aluno, orientador ou ex-aluno, esperamos que nosso repositório ajude a transformar seu TCC em uma
                experiência de aprendizado única e enriquecedora.
            </p>
            
        </div>
    </div>
</section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contato</h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>*+55 11 949277917</h2>
            <h2>+55 11 2303024</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>vault@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Endereço</h1>
            <h2>Rua vault, 830, jardim Repos</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>V</span>ault <span>R</span>repos</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
      </div>
      <p>Copyright © 2024. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>