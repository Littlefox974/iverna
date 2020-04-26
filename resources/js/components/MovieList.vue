<template>
  <div>
    <div class="row">
      <div class="offset-md-1 col-md-10">
        <h2 class="col-sm-10">Discovers all movies</h2>
        <div class="row scrolling-wrapper pb-10">
          <movie-card
            class="scroll-card"
            v-for="movie in movies"
            v-bind:key="movie.id"
            v-bind:id="movie.id"
            v-bind:title="movie.title"
            v-bind:year="movie.year"
            v-bind:quality="movie.quality"
            v-bind:url="movie.url"
          ></movie-card>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import MovieCard from "./MovieCard.vue";
import axios from 'axios';
export default {
  components: {
    MovieCard
  },
  data() {
    return {
      movies: []
    };
  },
  mounted() {
    axios.get("http://localhost:8000/api/movie").then(response => {
      this.movies = response.data;
      console.log(response.data);
    });
  }
};
</script>
<style lang="scss" scoped>
@import "resources/sass/app.scss";
h2 {
  font-family: "SF Pro Display";
}
</style>

