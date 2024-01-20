const pokemonList = document.getElementById('pokemonList');
const loadMoreButton = document.getElementById('loadMoreButton');
const modal = document.querySelector('#modal');


const maxRecords = 1302;
const limit = 12;
let offset = 0;

function loadPokemonItens(offset, limit) {
    pokeApi.getPokemons(offset, limit)
    .then((pokemons = []) => {
        const newHtml = pokemons.map((pokemon) => `
        <li class="pokemon ${pokemon.type}" onclick="return getPokemonIdModal('${JSON.stringify(pokemon).replace(/"/g, "&quot;")}')">
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
        pokemonList.innerHTML += newHtml;
    })
}

loadPokemonItens(offset, limit);

loadMoreButton.addEventListener('click', () => {
    offset += limit;    
    const qtdRecordNextPage = offset + limit;

    if (qtdRecordNextPage >= maxRecords) {
        const newLimit =  maxRecords - offset;
        loadPokemonItens(offset, newLimit);
        loadMoreButton.parentElement.removeChild(loadMoreButton);
    } else {
        loadPokemonItens(offset, limit);
    }
});

function getPokemonIdModal(pokemon) {
    pokemon = JSON.parse(pokemon);
    const newModal = `
    <section class="bgModal ${pokemon.type}">
    <div class="divModal">
        <div class="titleAndClose">
            <h2 class="text-white titleModal">${pokemon.name}</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" onclick="return closeModal()" class="bi bi-x-lg text-white" id="iconClose" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
        </div>
            <ol class="numberModal">
                #${pokemon.number}
            </ol>
            <ol class="listTypesModal">
                ${pokemon.types.map((type) => `<li class="typeModal ${type}">${type}</li>`).join('')}
            </ol>

            <img src="${pokemon.photo}" class="imgModal" alt="${pokemon.name}">

            <main class="informationsModal">
                <div class="nav">
                    <p>About</p>
                </div>
        
                <section class="detailsPokemonsModal">
                    <div class="divHeight">
                        <p>Height</p>
                        <p><strong>${pokemon.height}</strong></p>
                    </div>
                    <div class="divWeight">
                        <p>Weight</p>
                        <p><strong>${pokemon.weight}</strong></p>
                    </div>
                    <div class="divAbilities">
                        <p>Abilities</p>
                        <p><strong> ${pokemon.abilities.map((ability) => `<p>${ability}</p>`).join('')}</strong></p>
                    </div>
                </section>
            </main>
        </div>
    </section>`
    modal.innerHTML = newModal;
    modal.style.display = "block";
}

function closeModal() {
    modal.style.display = "none"
}