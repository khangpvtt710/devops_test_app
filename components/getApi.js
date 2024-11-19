const PokemonContainer = document.getElementById("pokemon__containerID");
const SearchContainer = document.getElementById("search__containerID");
const SearchElement = document.getElementById("searchBox");

const PokemonNumber = 493; /* 493 pokemon cho tới gen4 */

const createPokemonCard = (pokemon) => {
    const PokemonElement = document.createElement("div");
    const PokemonName = pokemon.name[0].toUpperCase() + pokemon.name.slice(1);
    PokemonElement.setAttribute("id", PokemonName);
    const PokemonID = pokemon.id;
    const PokemonType = pokemon.types[0].type.name;
    const PokemonAbility = pokemon.abilities[0].ability.name; /** */
    const PokemonWeight = (pokemon.weight) / 10;
    //   const PokemonDef = pokemon.stats[2].base_stat;
    const PokemonHP = pokemon.stats[0].base_stat;
    const PokemonTypeColors = {
        fire: "#EE8130",
        grass: "#7AC74C",
        eletric: "#F7D02C",
        water: "#6390F0",
        ground: "#E2BF65",
        rock: "#B6A136",
        fairy: "#D685AD",
        poison: "#A33EA1",
        bug: "#A6B91A",
        dragon: "#6F35FC",
        psychic: "#F95587",
        flying: "#A98FF3",
        fighting: "#C22E28",
        normal: "#A8A77A",
        ice: "#96D9D6",
        ghost: "#735797",
        dark: "#705746",
        steel: "#B7B7CE",
    };

    function checkNum() {
        if (PokemonName < 10) {
            let text = "0";
            //const PokemonNameUnderTen = "0" + PokemonName;
            const PokemonNameUnderTen = text.concat(PokemonName);
            return PokemonNameUnderTen;

        } // changed
        else {
            return PokemonName
        }

    }


    const AddColors = PokemonTypeColors[PokemonType];
    PokemonElement.style.backgroundColor = AddColors;
    const PokemonInnerHTML = `
    <div class="pokemon__imageContainer" id="${PokemonName}">
      <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/${PokemonID}.png" />
    </div>
    <div class="pokemon__infomationContainer">
      <span class="pokemon__id">#${PokemonID.toString().padStart(3, "0")}</span>
      <h3 class="pokemon__name">${checkNum()}</h3> <!-- changed - PokemonName -->
      <small class="pokemon__type"><b>Hệ: </b><span>${PokemonType}</span></small><br>
      <small class="pokemon__ability"><b>Đặc tính: </b><span>${PokemonAbility}</span></small><br>

      <small class="pokemon_Speed"><b>Chỉ số HP: </b><span>${PokemonHP}</span></small><br>
      <small class="pokemon_Speed"><b>Cân nặng: </b><span>${PokemonWeight} kg</span></small><br><br>
      <input type="button" value="Add to Line-up">
    </div>`;
    PokemonElement.setAttribute("class", "pokemon__card");
    PokemonElement.innerHTML = PokemonInnerHTML;
    PokemonContainer.appendChild(PokemonElement);
};

const getPokemons = async (id) => {
    const api_url = `https://pokeapi.co/api/v2/pokemon/${id}`;
    const response = await fetch(api_url);
    const data = await response.json();
    createPokemonCard(data);
};

const receivePokemons = async () => {
    for (let item = 1; item <= PokemonNumber; item++) {
        await getPokemons(item);
    }
    createSearchFilter();
};

receivePokemons();

const createSearchFilter = (pokemonData) => {
    const cards = document.querySelectorAll(".pokemon__card");
    SearchElement.addEventListener("keyup", (event) => {
        const val = event.target.value.toLowerCase();
        cards.forEach((card) => {
            if (card.id.toLowerCase().includes(val)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
};

/* https://assets.pokemon.com/assets/cms2/img/pokedex/detail/${PokemonID}.png -- */