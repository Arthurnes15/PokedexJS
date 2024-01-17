// pokemonList.addEventListener('click', (e) => {
//     function loadPokemonItens(offset, limit) {
//         pokeApi.getPokemons(offset, limit)
//         .then((pokemons = []) => {
//             const newModal = pokemons.map((pokemon) => `
//             <section class="bgModal ${pokemon.type}">
//          <h2 class="text-white titleModal">${pokemon.name}</h2>
//          <div class="divModal">
//              <ol class="numberModal">
//                  #${pokemon.number}
//              </ol>
//              <ol class="listTypesModal">
//                  ${pokemon.types.map((type) => `<li class="typeModal ${type}">${type}</li>`).join('')}
//              </ol>
//              <img src="${pokemon.photo}" class="imgModal" alt="${pokemon.name}">
//              <main class="informationsModal">
//                  <div class="nav">
//                      <p>About</p>
//                  </div>
        
//                  <section class="detailsPokemonsModal">
//                      <div class="divHeight">
//                          <p>Height</p>
//                          <p><strong>${pokemon.height}</strong></p>
//                      </div>
//                      <div class="divWeight">
//                          <p>Weight</p>
//                          <p><strong>${pokemon.weight}</strong></p>
//                      </div>
//                      <div class="divAbilities">
//                          <p>Abilities</p>
//                          <p><strong> ${pokemon.abilities.map((ability) => `<p>${ability}</p>`).join('')}</strong></p>
//                      </div>
//                  </section>
//              </main>
//          </div>
//      </section>`).join('')
//             pokemonList.innerHTML = newModal;
//         })
//     }
//     loadPokemonItens(offset, newLimitModal);
// })


