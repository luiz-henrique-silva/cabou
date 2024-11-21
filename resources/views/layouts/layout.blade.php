<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Sistema')</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Nunito, sans-serif;
    }

    #header a {
        text-decoration: none;
        color: white;
    }

    #header {
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        width: 100%;
        background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
        
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1300px;
        margin: 0 auto;
        padding: 10px 20px;
    }

    .brand h1 {
        font-size: 1.8rem;
        color: white;
        margin: 0;
    }

    .nav-list ul {
        display: flex;
        gap: 25px;
        list-style: none;
    }

    .nav-list ul li a {
        font-size: 1rem;
        font-weight: bold;
        padding: 10px 15px;
    }

    .nav-list ul li a:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
    }

    .container {
        min-height: 490px;
        max-width: 1200px;
        margin: 100px auto 20px;
        padding: 20px;
        
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

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
	margin-bottom: 10px;
}
#footer .social-item {
	width: 10px;
	margin-bottom: 10px;
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
</style>

</head>
<body>
    <header id="header">
        <div class="header-container">
            <div class="brand">
                <h1>@yield('header_title', 'VaultRepos')</h1>
            </div>
            
            <nav class="nav-list">
                <ul>
                    <li><a href="{{ url('/') }}">Início</a></li>
                    <li><a href="{{ url('/projetos') }}">Projetos</a></li>
                    <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

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
   
</body>
</html>
