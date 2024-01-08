<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokedex</title>
  <!-- Normalize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--CSS BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <!-- Link CSS -->
  <link rel="stylesheet" href="./assets/css/global.css">
  <link rel="stylesheet" href="./assets/css/pokedex.css">

  <!-- Icon Favicon -->
  <link rel="shortcut icon" href="./img/pokeball-icon.png" type="image/x-icon">

</head>

<body id="bodyPoke">
  <!-- Beginning Navbar -->
  <nav class="navbar navbar-expand-lg p-3 mb-2 bg-danger text-white" id="navbarPoke">
    <div class="container-fluid">
      <a class="navbar-brand">
        Pokedex</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house"
                viewBox="0 0 16 16">
                <path
                  d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
              </svg> Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/pokeball-icon.png" alt="pokebola" width="30" height="30">
              Pokemons Types
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="pokemon-normal.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-square-fill normal" viewBox="0 0 16 16">
                  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                </svg> Normal</a></li>
              <li><a class="dropdown-item" href="./pokemon-grass.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-square-fill grass" viewBox="0 0 16 16">
                  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                </svg> Grass</a>
            </li>
            <li><a class="dropdown-item" href="pokemon-fire.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-square-fill fire" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
              </svg> Fire</a>
            </li>
              <li><a class="dropdown-item" href="pokemon-water.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill water" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Water</a>
              </li>
              <li><a class="dropdown-item" href="pokemon-electric.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill electric" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Electric</a></li>
              <li><a class="dropdown-item" href="pokemon-ice.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill ice" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Ice</a></li>
              <li><a class="dropdown-item" href="pokemon-ground.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill ground" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Ground</a></li>
              <li><a class="dropdown-item" href="pokemon-flying.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill flying" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Flying</a></li>
              <li><a class="dropdown-item" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill poison" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Poison</a></li>
              <li><a class="dropdown-item" href="pokemon-fighting.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-square-fill fighting" viewBox="0 0 16 16">
                      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                    </svg> Fighting</a></li>    
              <li><a class="dropdown-item" href="pokemon-psychic.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill psychic" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Psychic</a></li>
              <li><a class="dropdown-item" href="pokemon-dark.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill dark" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Dark</a></li>
              <li><a class="dropdown-item" href="pokemon-bug.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill bug" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Bug</a></li>
              <li><a class="dropdown-item" href="pokemon-ghost.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill ghost" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Ghost</a></li>
              <li><a class="dropdown-item" href="pokemon-steel.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill steel" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Steel</a></li>
              <li><a class="dropdown-item" href="pokemon-dragon.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill dragon" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Dragon</a></li>
              <li><a class="dropdown-item" href="pokemon-fairy.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-square-fill fairy" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z" />
                  </svg> Fairy</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ol"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                <path
                  d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635z" />
              </svg> Generations
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="pokemons-1st.html">1st Generation</a></li>
              <li><a class="dropdown-item" id="2stGeneration" href="pokemons-2st.html">2st Generation</a></li>
              <li><a class="dropdown-item" href="#">3st Generation</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End NAVBAR -->
  <section class="content">
    <ol id="pokemonList" class="pokemons">
    </ol>

    <div class="pagination">
      <button type="button" id="loadMoreButton" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
          width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
          <path
            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
        </svg>
        Load more</button>
    </div>
  </section>
  <!--JavaScript BOOTSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- JavaScript -->
  <script src="./assets/js/pokemon-model.js"></script>
  <script src="./assets/js/poke-api.js"></script>
  <script src="./assets/js/main.js"></script>
</body>
</html>