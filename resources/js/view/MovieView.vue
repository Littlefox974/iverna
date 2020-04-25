<template>
    <div class="container-fluid p-0">
        <movie-details v-bind:id="movie.id"></movie-details>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>