<template>
  <div>
    <br><br>
    <h1>Hola Soy Home</h1>
  </div>
</template>

<script>
  const $pokemon = document.querySelector('#pokemon')
  function renderPokemon(image) {
    $pokemon.setAttribute('src', image)
  }

  fetch('https://pokeapi.co/api/v2/pokemon/6', {
    // method: 'GET',
    // headers: {
    //   'Content-Type': 'application/json',

    // },
    // body: JSON.stringify({

    // })
  })
  .then((response) => response.json())
  .then((data) => {
  debugger
  })
</script>