<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
     <head>
     <meta charset="UTF-8">
     <title>Master Camp | Home</title>
     <link rel="stylesheet" type="text/css" href="style_home6.css">
     <meta name="viewport" content="width=device-width, initial-scale =1">

     <!-- Fonte Logo -->
     <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
     
     <!-- Fonte Dúvida -->
     <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Keania+One&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Link Font Icons -->

     <!-- Scroll -->
     <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>
     <!-- Background load -->
          <div class="center">
               <div class="ring"></div>
               <span>loading...</span>
          </div>

          <div class="load_display">

          <iframe width="0" height="0" src="https://www.youtube.com/embed/vOSrZCATho0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="0" height="0" src="https://www.youtube.com/embed/vOSrZCATho0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="0" height="0" src="https://www.youtube.com/embed/vOSrZCATho0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          </div>

     <!-- Background !-->
     <div class="hero">
          <!-- Navegação !-->
          <nav>
               <img src="images/logo.png" class="logo">
               <h3>MASTER CAMP</h3>
               <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#duvida">Duvidas</a></li>
               </ul>
               <img src="images/user3.png" class="user-pic" onclick="toggleMenu()">
               <!-- Sub - Menu !-->
               <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                         <div class="user-info">
                              <img src="images/user3.png">
                              <h4><?php echo $_SESSION['name']; ?></h4>
                         </div>
                         <hr>
                         <!--<a href="#" class="sub-menu-link">
                              <img src="images/profile.png">
                              <p>Editar Perfil</p>
                              <span>></span>
                         </a>-->
                         <a href="logout.php" class="sub-menu-link">
                         <img src="images/logout.png">
                              <p>Logout</p>
                              <span>></span>
                         </a>
                    </div>
               </div>
          </nav>
         
          <!-- Boas vindas ao usuario !-->
          <h2>Bem vindo ao Curso: <?php echo $_SESSION['nome_jogo']; ?></h2>
               <div class="linha"></div>

          <!-- Estrutura Valorant -->

          <?php if ($_SESSION['nome_jogo'] === 'Valorant' && $_SESSION['id_jogo'] === '1') { ?>
               
               <!-- Status do jogador  /// Primeiro Card!-->
               <div class="container">
               <div class="card">
                    <div class="percent" style="--clr:#04fc43;--num:<?php echo $_SESSION['mira']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['mira']; ?><span>%</span></h2>
                              <p>Mira</p>
                         </div>
                    </div>
               </div>
               <!-- Segundo Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#fb0094;--num:<?php echo $_SESSION['decisoes']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['decisoes']; ?><span>%</span></h2>
                              <p>Decisoes</p>
                         </div>
                    </div>
               </div>
               <!-- Terceiro Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#0000ff;--num:<?php echo $_SESSION['movimento']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['movimento']; ?><span>%</span></h2>
                              <p>Movimento</p>
                         </div>
                    </div>
               </div>
               <!-- Quarto Card !--> 
               <div class="card">
                    <div class="percent" style="--clr:#00FCF1;--num:<?php echo $_SESSION['calll']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['calll']; ?><span>%</span></h2>
                              <p>Call</p>
                         </div>
                    </div>
               </div>
               <!-- Quinto Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#FC0000;--num:<?php echo $_SESSION['pi']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['pi']; ?><span>%</span></h2>
                              <p>Solo Play</p>
                         </div>
                    </div>
               </div>
               <!-- Sexto Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#FCF400;--num:<?php echo $_SESSION['tp']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['tp']; ?><span>%</span></h2>
                              <p>Team Play</p>
                         </div>
                    </div>
               </div>
          </div>
          
          <!-- Estrutura League of Legends -->

          <?php } elseif ($_SESSION['nome_jogo'] === 'League of Legends' && $_SESSION['id_jogo'] === '2') { ?>

               <!-- Status do jogador  /// Primeiro Card!-->
               <div class="container">
               <div class="card">
                    <div class="percent" style="--clr:#04fc43;--num:<?php echo $_SESSION['farm']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['farm']; ?><span>%</span></h2>
                              <p>Farm</p>
                         </div>
                    </div>
               </div>
               <!-- Segundo Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#fb0094;--num:<?php echo $_SESSION['build']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['build']; ?><span>%</span></h2>
                              <p>Build</p>
                         </div>
                    </div>
               </div>
               <!-- Terceiro Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#0000ff;--num:<?php echo $_SESSION['skill']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['skill']; ?><span>%</span></h2>
                              <p>Skill</p>
                         </div>
                    </div>
               </div>
               <!-- Quarto Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#FC0000;--num:<?php echo $_SESSION['pi']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['pi']; ?><span>%</span></h2>
                              <p>Solo Play</p>
                         </div>
                    </div>
               </div>
               <!-- Quinto Card !-->
               <div class="card">
                    <div class="percent" style="--clr:#FCF400;--num:<?php echo $_SESSION['tp']; ?>";>
                         <div class="dot"></div>
                         <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                         </svg>
                         <div class="number">
                              <h2><?php echo $_SESSION['tp']; ?><span>%</span></h2>
                              <p>Team Play</p>
                         </div>
                    </div>
               </div>

          <?php }  ?>
          

     <!-- Formulario de duvidas -->
     <section id="duvida">
     <div class="title-text">
          <p>Dúvidas?</p>
          <h1>Nos envie uma mensagem!</h1>
     </div>
     <div class="form">
          <form onsubmit="sendEmail(); reset(); return false;">
               <h4>Formulário de Duvidas!</h4>
               <input type="text" id="name" placeholder="Seu nickname em jogo" required>
               <input type="email" id="email" placeholder="Seu email" required>
               <input type="text" id="phone" placeholder="Seu numero celular" required>
               <textarea id="message" rows="4" placeholder="Como podemos ajudar?"></textarea>
               <button type="submit">Enviar</button>
          </form>
     </div>

     <script src="https://smtpjs.com/v3/smtp.js"></script>
     <script>
          function sendEmail(){
               Email.send({
               Host : "smtp.elasticemail.com",
               Username : "renan.marzocca@gmail.com",
               Password : "5719B9FC4EC61C3A4A990297D9656B0FFFF3",
               To : 'profvalorant@mastercampesports.com.br',
               From : "renan.marzocca@gmail.com",
               Subject : "Dúvidas | Master Camp",
               Body : "Nickname: " + document.getElementById("name").value
                    + "<br> Email: " + document.getElementById("email").value
                    + "<br> Numero: " + document.getElementById("phone").value
                    + "<br> Mensagem: " + document.getElementById("message").value
          }).then(
          message => alert("Mensagem enviada com sucesso.")
          );
     }

     </script>


     <!-- Chamada Sub Menu -->
     <script>
          let subMenu = document.getElementById("subMenu");

          function toggleMenu(){
               subMenu.classList.toggle("open-menu");
          }

     </script>

     <script>

     var scroll = new SmoothScroll('a[href*="#"]', {
	    speed: 1000,
	    speedAsDuration: true
    });
    </script>

    <!-- Chamada Load -->

     <script>
          const loader = document.querySelector('.center'); // center the parent name as you see it in the tuto
          window.addEventListener('load', () =>{    // add the load event

          loader.classList.add('end-loader'); // create a class loader with css and add it
          loader.style.display = "none";
     })        
    </script> 


</body>
</html>

<?php 
          /* Chamada Logout */
}else{

     header("Location: index.php");

     exit();

}

 ?>