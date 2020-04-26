<template>
    <div class="page-header">
        <label>
            <input type="text" v-model="keywords">
        </label>
        <ul v-if="results.length > 0">
            <li v-for="result in results" :key="result.id" v-text="result.title"></li>
        </ul>
        <table id="list-movies" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Title</th>
                <th>Year</th>
                <th>Quality</th>
                <th>Url</th>
            </tr>
            </thead>
            <tbody>
            <movie-line
                v-for="movie in movies"
                v-bind:key="movie.id"
                v-bind:id="movie.id"
                v-bind:title="movie.title"
                v-bind:year="movie.year"
                v-bind:quality="movie.quality"
                v-bind:url="movie.url"
                class="scroll-card"
            ></movie-line>
            </tbody>
            <tfoot>
            <tr>
                <th>Title</th>
                <th>Year</th>
                <th>Quality</th>
                <th>Url</th>
            </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
    import MovieLine from '../components/MovieLine.vue'
    import axios from 'axios'

    export default {
        components: {
            MovieLine
        },
        props: ['movieId'],
        data() {
            return {
                movies: {
                    id: NaN,
                    title: '',
                    year: '',
                    quality: '',
                    url: ''
                },
                keywords: null,
                results: []
            }
        },
        watch: {
            keywords(after, before) {
                this.fetch();
            }
        },

        methods: {
            fetch() {
                axios.get('/api/search', {params: {keywords: this.keywords}})
                    .then(response => this.results = response.data)
                    .catch(console.err);
            }
        },
        mounted() {
            axios.get('http://localhost:8000/api/movie')
                .then(response => {
                    this.movies = response.data
                })
        }
    }

</script>
