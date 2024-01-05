const pokemons2stGeneration = document.querySelector('#pokemonList2st');

const maxRecords2stGeneration = 251;
const limit2stGeneration = 12;
let offset = 151;

pokeApi.getPokemons2stGenerations = (offset = 151, limit = 12) => {
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
    pokeApi.getPokemons2stGenerations(offset, limit)
    .then((pokemons = []) => {
        const html2stGeneration = pokemons.map((pokemon) => `
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
        `).join('')
        pokemons2stGeneration.innerHTML += html2stGeneration
    })
}

loadPokemonItens(offset, limit2stGeneration);

loadMoreButton.addEventListener('click', () => {
    offset += limit2stGeneration;    
    debugger
    const qtdRecordNextPage = offset + limit2stGeneration;

    if (qtdRecordNextPage >= maxRecords2stGeneration) {
        const newLimit2st =  maxRecords2stGeneration - offset;
        loadPokemonItens(offset, newLimit2st);
        loadMoreButton.parentElement.removeChild(loadMoreButton);
    } else {
        loadPokemonItens(offset, limit2stGeneration);
    }
});