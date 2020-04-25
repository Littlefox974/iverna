<template>
  <div class="row">
    <hero></hero>
    <div class="container-fluid p-0">
      <movie-list></movie-list>
    </div>
  </div>
</template>

<script>
import MovieList from "../components/MovieList.vue";
import Hero from '../components/Hero.vue';
export default {
  components: {
    Hero,
    MovieList
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>