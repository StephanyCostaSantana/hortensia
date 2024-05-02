<?php
    include('filtrarorganizacoes.php');

    $row = [
      'estado' => 'Selecione um estado'
  ]; 

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../paginadosmapas/index.js"></script>
    <title>Mapas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    <link rel="stylesheet" href="../pg alimentação (opinioes)/styles2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/darkmodebutto.css">
    <link rel="stylesheet" href="../paginadosmapas/outro.css">
    <link rel="stylesheet" href="../paginadosmapas/funcionarmapa.css">
  </head>

  <body>
  
      <?php 
          
          include_once('header-padrao.php');

      ?>

    <button class="dark-mode-button" id="dark-mode-button"></button>
  
  <section class="asidemain">
    <aside>
      
      <button class="open-acre">Acre</button>
      <dialog class="modal-acre">
      <h1>Mapa do Acre</h1>
      <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zran2pD9XdfIP-5Emzns0U6DAq6h0jk&amp;ehbc=2E312F&amp;noprof=1" width="400" height="300"></iframe></p>
      <button class="close-acre fechar">fechar</button>
      </dialog>

      
      <!-- Alagoas -->
      <button class="open-alagoas">Alagoas</button>
      <dialog class="modal-alagoas">
        <h1>Mapa de Alagoas</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=1d42a-pLBGAwY9Syb49KkPnGbkL0g1xc&amp;ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-alagoas fechar">fechar</button>
      </dialog>

      
      <!-- Amapá -->
      <button class="open-amapa">Amapá</button>
      <dialog class="modal-amapa">
        <h1>Mapa do Amapá</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1H977lkkyra-v-5_tKUG3yEp5Se8RkOg&amp;ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-amapa fechar">fechar</button>
      </dialog>

      
      <!-- Amazonas -->
      <button class="open-amazonas">Amazonas</button>
      <dialog class="modal-amazonas">
        <h1>Mapa do Amazonas</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1BhIlzDYDoT7MFDWFPI1AgxUwyMYp3tE&amp;ehbc=2E312F&amp;noprof=1" width="400" height="300"></iframe></p>
        <button class="close-amazonas fechar">fechar</button>
      </dialog>

      
      <!-- Bahia -->
      <button class="open-bahia">Bahia</button>
      <dialog class="modal-bahia">
        <h1>Mapa da Bahia</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=1ir-vyFaX1XSqwDxNT7sIroSnizLycTg&amp;ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-bahia fechar">fechar</button>
      </dialog>

      
      <!-- Ceará -->
      <button class="open-ceara">Ceará</button>
      <dialog class="modal-ceara">
        <h1>Mapa do Ceará</h1>
        <p> <iframe src="https://www.google.com/maps/d/embed?mid=1cyEf9KPPjwYtz3_kgWs67wMDqDvEtO8&amp;ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-ceara fechar">fechar</button>
      </dialog>

    
      <!-- Distrito Federal -->
      <button class="open-df">D. Federal</button>
      <dialog class="modal-df">
        <h1>Mapa do Distrito Federal</h1>
        <p> <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1tn33xtOkCUXO7Yz5mXZEwejJ2xiMusk&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
        <button class="close-df fechar">fechar</button>
      </dialog>

    
      <!-- Espírito Santo -->
      <button class="open-es">Espírito Santo</button>
      <dialog class="modal-es">
        <h1>Mapa do Espírito Santo</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=1G-d-O_53NxLeYzFN99FO65Z4SrzLhfs&ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-es fechar">fechar</button>
      </dialog>

    
      <!-- Goias -->
      <button class="open-goias">Goiás</button>
      <dialog class="modal-goias">
        <h1>Mapa do Goiás</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1T1rz_K82xrr6deCxK0zwIcCAGTMVW7E&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
        <button class="close-goias fechar">fechar</button>
      </dialog>

    
      <!-- Maranhão -->
      <button class="open-maranhao">Maranhão</button>
      <dialog class="modal-maranhao">
        <h1>Mapa do Maranhão</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=1_OLpp_YPWElbQo7DW0dzGw1Q3MtKKEM&amp;ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-maranhao fechar">fechar</button>
      </dialog>

    
      <!-- Mato Grosso -->
      <button class="open-matogrosso">Mato Grosso</button>
      <dialog class="modal-matogrosso">
        <h1>Mapa do Mato Grosso</h1>
        <p> <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1NoVraeDdGMn3qANF8lB48lUyN01ygb4&ehbc=2E312F&noprof=1" width="400" height="300"></iframe>
          </p>
        <button class="close-matogrosso fechar">fechar</button>
      </dialog>

    
      <!-- Mato Grosso do Sul -->
      <button class="open-mgs">Mato G. do Sul</button>
      <dialog class="modal-mgs">
        <h1>Mapa do Mato Grosso do Sul</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZNiGUAZkDScU0gkaxbBSbHjl5G1Ni7E&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
        <button class="close-mgs fechar">fechar</button>
      </dialog>

    
      <!-- Minas Gerais -->
      <button class="open-minas">Minas Gerais</button>
      <dialog class="modal-minas">
      <h1>Mapa de Minas Gerais</h1>
        <p> <iframe src="https://www.google.com/maps/d/embed?mid=1HTS1TpVFEaI1Zas-_6x458xFqdNzREM&ehbc=2E312F" width="400" height="300"></iframe></p>
      <button class="close-minas fechar">fechar</button>
      </dialog>

      <!-- Pará -->
      <button class="open-para">Pará</button>
      <dialog class="modal-para">
        <h1>Mapa do Pará</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1uLcburhRPMk5MMgJ1N4OZsXC2qL1gDQ&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
        <button class="close-para fechar">fechar</button>
      </dialog>
      
    
      <!-- Paraná -->
      <button class="open-parana">Paraná</button>
      <dialog class="modal-parana">
        <h1>Mapa do Paraná</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1IqwUGIXZB0A_kKx-gC7dA8a0JV7anEE&amp;ehbc=2E312F&amp;noprof=1" width="400" height="300"></iframe></p>
        <button class="close-parana fechar">fechar</button>
      </dialog>

    
      <!-- Pernambuco -->
      <button class="open-pernambuco">Pernambuco</button>
      <dialog class="modal-pernambuco">
        <h1>Mapa de Pernambuco</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=15JQh7uP6l65M7cQf1t2dE-XUlaMCIhU&amp;ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-pernambuco fechar">fechar</button>
      </dialog>

    
      <!-- Paraíba -->
      <button class="open-paraiba">Paraíba</button>
      <dialog class="modal-paraiba">
      <h1>Mapa da Paraíba</h1>
        <p> <iframe src="https://www.google.com/maps/d/embed?mid=1t4Hz__oEl05wbCP7xk9OCZBBClbrq5M&ehbc=2E312F" width="400" height="300"></iframe></p>
      <button class="close-paraiba fechar">fechar</button>
      </dialog>


    
      <!-- Piauí -->
      <button class="open-piaui">Piauí</button>
      <dialog class="modal-piaui">
        <h1>Mapa do Piauí</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=1CyjLa_7rWKQe5a2iR-1E-L5bIqt_NTQ&ehbc=2E312F" width="400" height="300"></iframe></p>
      <button class="close-piaui fechar">fechar</button>
      </dialog>

    
      <!-- RJ -->
      <button class="open-rj">Rio de Janeiro</button>
      <dialog class="modal-rj">
        <h1>Mapa do Rio de Janeiro</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=1feeWYdYQ5r20fsI76iugoms5Q2tHdYY&ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-rj fechar">fechar</button>
      </dialog>
      
      <!-- Rio Grande do Norte -->
        <button class="open-rgn">Rio G. do Norte</button>
        <dialog class="modal-rgn">
          <h1>Mapa do Rio Grande do Norte</h1>
          <p><iframe src="https://www.google.com/maps/d/embed?mid=13S-a7LVvEgGW49XdQAryV4_RMXjYcqE&amp;ehbc=2E312F" width="400" height="300"></iframe></p>
          <button class="close-rgn fechar">fechar</button>
        </dialog>
    
      <!-- Rio Grande do Sul -->
      <button class="open-rs">Rio G. do Sul</button>
      <dialog class="modal-rs">
        <h1>Mapa do Rio Grande do Sul</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1D326hlkXqXsKadzmB6NqHlbILV-U2_k&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
        <button class="close-rs fechar">fechar</button>
      </dialog>

      <!-- Rondônia -->
      <button class="open-rd">Rondônia</button>
      <dialog class="modal-rd">
        <h1>Mapa de Rondônia</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Z59AgzpgVlnkjslANoDi5XmLk1fF_Eo&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
      <button class="close-rd fechar">fechar</button>
      </dialog>

      <!-- Roraima -->
      <button class="open-rm">Roraima</button>
      <dialog class="modal-rm">
        <h1>Mapa de Roraima</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=18yels0ugftTSHKc-oHjq9E4YiSEVTFg&ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-rm fechar">fecha</button>
      </dialog>

      <!-- Santa Catarina -->
      <button class="open-sc">Santa Catarina</button>
      <dialog class="modal-sc">
        <h1>Mapa de Santa Catarina</h1>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zmV1KL6RxJarPBlzm6Y-RWp2LwlLq_0&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
        <button class="close-sc fechar">fechar</button>
      </dialog>
    
      <!-- SP -->
      <button class="open-sp">São Paulo</button>
      <dialog class="modal-sp">
        <h1>Mapa de São Paulo</h1>
        <p> <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Pm06bgdxUFyfKgTgy8U6Os2_PPOs3sc&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
      <button class="close-sp fechar">fechar</button>
      </dialog>


      <!-- Sergipe -->
      <button class="open-sergipe">Sergipe</button>
      <dialog class="modal-sergipe">
        <h1>Mapa de Sergipe</h1>
        <p><iframe src="https://www.google.com/maps/d/embed?mid=1_eYrJGGteg3CbL1KZ4qWVgrPWkI2cvk&ehbc=2E312F" width="400" height="300"></iframe></p>
        <button class="close-sergipe fechar">fechar</button>
      </dialog>
      
      <!-- Tocantins -->
      <button class="open-to">Tocantins</button>
      <dialog class="modal-to">
        <h2>Mapa de Tocantins</h2>
        <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1DtvGRWEJKL3g7Y5RMTDN5_vlmO4Fmww&ehbc=2E312F&noprof=1" width="400" height="300"></iframe></p>
        <button class="close-to fechar">fechar</button>
      </dialog>

    </aside>

    <main>
      <div class="mapa-completo"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1iy6AOtDHCmUthOt3m-9qcfSkLNzYRb4&ehbc=2E312F&noprof=1" width="200" height="400" ></iframe></div>
    </main>
    </section>


  <section class="filtro">

    <div class="top">
      <div class="texto-filtro">
        <h1>Não encontrou nenhuma?</h1>
        <p>Encontre perfis de comunidades no Instagram!</p>
      </div>

      <div class="paraFiltro">
        <h1>Informe seu estado</h1>
        <form action="" method="POST">
          <select name="estado" required>
              <option value="">Selecione um estado</option>
              <?php foreach (['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'] as $estado): ?>
                  <option value="<?= htmlspecialchars($estado) ?>" <?php if ($row['estado'] == $estado): ?>selected<?php endif; ?>><?= htmlspecialchars(ucfirst($estado)) ?></option>
              <?php endforeach; ?>
          </select>
          <button type="submit">Pesquisar</button>
      </form>

      </div>
    
    </div>

    <div class="contain-hortas-filtro">

        <div class="hortas-filtro">

                <?php foreach ($organizacoes as $organizacao): ?>
                      <div class="swiper-slide">
                          <div class="horta-item">
                              <img src="../pghome/assets/icon-perfil.png" alt="Ícone de perfil cinza" class="icon-perfil">
                              <h2><?php echo $organizacao['nome']; ?></h2>
                              <h3 class="h-op">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</h3>
                              <h4><?php echo $organizacao['userInstagram']; ?></h4>
                          </div>
                      </div>
                <?php endforeach; ?>

        </div>

      </div>


  </section>


  </div>

    <footer>
        <h3>HORTENSIA</h3>
        <h4>hortensia@gmail.com</h4>
    </footer>
    
  </body>

  <script src="../js/darkcontrastmode.js"></script>
</html>