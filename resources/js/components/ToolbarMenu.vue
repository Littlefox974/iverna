<template>
  <nav>
    <navbar>
      <slide class="slide">
        <router-link :to="{ name: 'search' }">Search</router-link>
        <router-link :to="{ name: 'home' }">Home</router-link>
      </slide>
    </navbar>
  </nav>
</template>

<script>
import Navbar from "./Navbar";

export default {
  components: {
    Navbar
  }
};
</script>

<style lang="scss">
@import "resources/sass/app.scss";

.fa,
.far,
.fas {
  font-family: "Font Awesome 5 Free";
}
.fa-1x {
  font-size: 1.5rem;
}
</style>

