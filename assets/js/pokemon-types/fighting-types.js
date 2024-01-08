const pokemonList = document.getElementById('pokemonList');
pokeApi.getPokemons()
    .then((pokemons = []) => {
        const newHtml = pokemons.map(function(pokemon) { 
            if (pokemon.type === "fighting") {
                return `
                    <li class="pokemon ${pokemon.type}">
                    <span class="name">${pokemon.name}</span>
    
                    <div class="detail">
                        <ol class="types">
                            ${pokemon.types.map(function(type) { 
                                if (type === "fighting") {
                                    return `
                                        <li class="type ${type}">${type}</li>
                                `}
                                }).join('')

                            }
                        </ol>
                        <img src="${pokemon.photo}" alt="${pokemon.name}"> 
                    </div>
        </li>
        `}}
        )
        .join('')
        pokemonList.innerHTML += newHtml;
    })