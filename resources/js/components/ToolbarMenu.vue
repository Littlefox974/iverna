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
import { Slide } from "vue-burger-menu"; // import the CSS transitions you wish to use, in this case we are using `Slide`
import Navbar from "./Navbar";

export default {
  components: {
    Slide, // Register your component
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

.bm-menu {
  background-color: #d7d7d7;
}
.bm-burger-bars {
  background-color: white;
}
</style>

