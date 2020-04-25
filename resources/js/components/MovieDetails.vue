<template>
    <div class="page-header">
        <!--<img class="background" src="img/desktop_hero_background.jpg" alt="background" height="885" width="1440"/>
        <img class="logo" src="img/logo_white.svg" alt="logo"/>-->
        <div class="title">
            <h2>{{movie.title}}</h2><br />
            <!--<h1>{{movie.description}}</h1><br /> ccccc-->
        </div>
        
    </div>
</template>

<script>
export default {
    props: ['movieId'],
    data() { 
        return {
            movie: {
                id: NaN,
                title: '',
                year: '',
                quality: '',
                url: ''
            }
        }
    },
    mounted() {
        axios.get('http://localhost:8000/api/movie/' + (this.movieId))
            .then(response => {
                const movie = response.data[Object.keys(response.data)[0]]
                if(!movie) window.location = '/'
                this.movie = movie
            })
    }
}
</script>

