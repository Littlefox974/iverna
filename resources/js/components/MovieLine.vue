<template>
    <tr>
        <td>{{ title }}</td>
        <td>{{ year }}</td>
        <td>{{ quality }}</td>
        <td><a v-bind:href ="url">Aller à la page</a></td>  
    </tr>
</template>

<script>
export default {
    props: ['id', 'title', 'year', 'quality', 'url'],
    methods: {
    }
}
</script>

<style lang="scss" scoped>
    @import "resources/sass/app.scss";
    a{
        color:black;
    }
</style>
