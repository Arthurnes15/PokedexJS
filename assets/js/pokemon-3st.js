const pokemons3stGeneration = document.querySelector('#pokemonList3st');
const boxLoad = document.querySelector('.box-load');
const content = document.querySelector('.content');
const maxRecords3stGeneration = 386;
const limit3stGeneration = 12;
let offset = 251;

pokeApi.getPokemons3stGenerations = (offset = 251, limit = 12) => {
    const url = `https://pokeapi.co/api/v2/pokemon?offset=${offset}&limit=${limit}`;
    return fetch(url)
        .then((response) => response.json())
        .then((jsonBody) => jsonBody.results)
        .then((pokemons) => pokemons.map(pokeApi.getPokemonsDetails))
        .then((detailsRequests) => Promise.all(detailsRequests))
        .then((pokemonDetails) => pokemonDetails)
        .catch((error) => console.error(error)) 
}

function loadPokemonItens(offset, limit) {
    pokeApi.getPokemons3stGenerations(offset, limit)
    .then((pokemons = []) => {
        const html3stGeneration = pokemons.map((pokemon) => `
        <li class="pokemon ${pokemon.type}">
                    <span class="number">#${pokemon.number}</span>
                    <span class="name">${pokemon.name}</span>
    
                    <div class="detail">
                        <ol class="types">
                            ${pokemon.types.map((type) => `<li class="type ${type}">${type}</li>`).join('')}
                        </ol>
                        <img src="${pokemon.photo}" alt="${pokemon.name}"> 
                    </div>
        </li>
        `).join('');
        boxLoad.style.display = "none";
        content.style.display = "block";
        pokemons3stGeneration.innerHTML += html3stGeneration
    })
}

loadPokemonItens(offset, limit3stGeneration);

loadMoreButton.addEventListener('click', () => {
    offset += limit3stGeneration;    
    const qtdRecordNextPage = offset + limit3stGeneration;

    if (qtdRecordNextPage >= maxRecords3stGeneration) {
        const newLimit3st =  maxRecords3stGeneration - offset;
        loadPokemonItens(offset, newLimit3st);
        loadMoreButton.parentElement.removeChild(loadMoreButton);
    } else {
        loadPokemonItens(offset, limit3stGeneration);
    }
});