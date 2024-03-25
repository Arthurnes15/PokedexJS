const pokeApi = {}

function convertPokeApiDetailToPokemon(pokeDetail) {
    const pokemon = new Pokemon()
    pokemon.number = pokeDetail.id
    pokemon.name = pokeDetail.name
    const types = pokeDetail.types.map((typeSlot) => typeSlot.type.name)
    const [ type ] = types
    pokemon.types = types
    pokemon.type = type

    const abilities = pokeDetail.abilities.map((typeAbility) => typeAbility.ability.name)
    const [ability] = abilities
    pokemon.abilities = abilities
    pokemon.ability = ability


    pokemon.photo = pokeDetail.sprites.other["official-artwork"]
    .front_default
    pokemon.height = pokeDetail.height
    pokemon.weight = pokeDetail.weight

    return pokemon;
}

pokeApi.getPokemonsDetails = (pokemon) => {
    return fetch(pokemon.url)
    .then((response) => response.json())
    .then(convertPokeApiDetailToPokemon);
}

pokeApi.getPokemons = (offset, limit = 1302) => {
    const url = `https://pokeapi.co/api/v2/pokemon?offset=${offset}&limit=${limit}`;
    return fetch(url)
        .then((response) => response.json())
        .then((jsonBody) => jsonBody.results)
        .then((pokemons) => pokemons.map(pokeApi.getPokemonsDetails))
        .then((detailsRequests) => Promise.all(detailsRequests))
        .then((pokemonDetails) => pokemonDetails)
        .catch((error) => console.error(error)) 
}
    