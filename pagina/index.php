<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pagina</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header class="header">
      <div class="menu container">
        <a href="#" class="logo">Logo</a>
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img src="imagen/menu.png" class="menu-icono" alt="menu" />
        </label>

        <nav class="navbar">
          <ul>
            <li><a href="#">inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="login.php">Iniciar sesión</a></li>
            <li><a href="registro.php">Crear Cuenta</a></li>

          </ul>
        </nav>
      </div>

      <div class="header-content container">
        <div class="header-txt">
          <h1>
            Compra tu Licor <samp> </samp> <br />
            favorito aca
          </h1>
          <p>
            En nuestra licorera, cada botella cuenta una historia. Descubre una
            selección exclusiva de licores para celebrar, compartir y disfrutar
            los mejores momentos. ¡Brindemos juntos
          </p>
          <div class="butons">
            <a href="#" class="btn-1">Informacion</a>
            <a href="#" class="btn-1">Licores</a>
            <a href="registro.php" class="btn-1">Crear Cuenta</a>

          </div>
        </div>
      </div>
    </header>

    <section class="popular container">
      <h2>Licores Populares</h2>

      <div class="popular-content">
        <img src="imagen/g1.jpg" alt="" />
        <img src="imagen/g2.jpg" alt="" />
        <img src="imagen/g3.jpg" alt="" />
        <img src="imagen/g4.jpg" alt="" />
        <img src="imagen/g5.jpg" alt="" />
        <img src="imagen/g6.jpg" alt="" />
        <img src="imagen/g7.jpg" alt="" />
        <img src="imagen/g8.jpg" alt="" />
      </div>
    </section>

    <main class="product container">
      <h2>Todos los Licores</h2>

      <div class="product-content">
        <div class="product-1">
          <img src="imagen/l1.jpg" alt="" />
          <div class="product-txt">
            <h3>Club Dorada</h3>
            <div class="price">
              <p>3.500</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l2.jpg" alt="" />
          <div class="product-txt">
            <h3>Poker</h3>
            <div class="price">
              <p>2.800</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l3.jpg" alt="" />
          <div class="product-txt">
            <h3>Corona</h3>
            <div class="price">
              <p>4.500</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l4.jpg" alt="" />
          <div class="product-txt">
            <h3>Heineken</h3>
            <div class="price">
              <p>4.000</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l5.jpg" alt="" />
          <div class="product-txt">
            <h3>Olmeca</h3>
            <div class="price">
              <p>68.000</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l6.jpg" alt="" />
          <div class="product-txt">
            <h3>Centenario</h3>
            <div class="price">
              <p>110.000</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l7.jpg" alt="" />
          <div class="product-txt">
            <h3>Jack Daniels</h3>
            <div class="price">
              <p>131.000</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l8.jpg" alt="" />
          <div class="product-txt">
            <h3>Old parr</h3>
            <div class="price">
              <p>158.000</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l9.jpg" alt="" />
          <div class="product-txt">
            <h3>Tanqueray</h3>
            <div class="price">
              <p>180.000</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>

        <div class="product-1">
          <img src="imagen/l10.jpg" alt="" />
          <div class="product-txt">
            <h3>Vodka Absolut</h3>
            <div class="price">
              <p>85.000</p>
              <a href="#" class="btn-2">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <section class="contact container">
      <div class="contact-content">
        <h3>Suscribete a Nuestra Pagina</h3>
        <form>
          <input type="email" placeholder="Escriba su correo" />
          <input type="submit" class="btn-3" value="Enviar" />
        </form>
      </div>
    </section>

    <footer class="footer container">
      <div class="link">
        <a href="#" class="logo">logo</a>
      </div>

      <div class="link">
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="#">Contactos</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
