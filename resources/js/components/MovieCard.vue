<template>
     <div class="col-md-3 offset1 movie-card" v-on:click="goToMovie()">
        <!--<img v-bind:src="imageLink" v-on:click="goToMovie" alt="Landscape photo" class="movie-background">-->
        <h4>Title: {{ title }}</h4>
        <img src="/img/film_placeholder.png" alt="palcehoder" />
        <p>Released in: {{ year }}</p>
        <p>Quality: {{ quality }}</p>
        <a v-bind:href ="url">Aller à la page</a>
    </div>
</template>

<script>
export default {
    props: ['id', 'title', 'year', 'quality', 'url'],
    methods: {
        goToMovie() {
            console.log(this)
            console.log('clicked')
            window.location = '/movie/' + this.id
        }
    }
}
</script>

<style lang="scss" scoped>
    @import "resources/sass/app.scss";
    a{
        color:black;
    }
    .movie-card img{
        width:100%;
    }
</style>
