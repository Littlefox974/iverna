<template>
    <div class="hero">
        <div class="title">
            <h1>Search your movie with Iverna.</h1>
            <span class="underlined-link" id="headerLink">Interested? Let's go</span>
        </div>   
</div>
</template>
<style lang="scss" scoped>

    @import "resources/sass/app.scss";

    .hero {
        /*background-image: url('/img/desktop_hero_background.jpg');*/
        background-color: black;
        background-size: cover;
        background-position: center;
        height: 75vh;
        width: 100%;
    }

    span {
        display:inline-block;
    }

    .title {
        color:white;
        text-align: center;
    }

    .background {
        height: 100%;
        z-index: -1;
    }

    h2 {
        color: #FFFFFF;
        font-size: medium;
        font-weight: 300;
        line-height: 20px
    }

    h1 {
        font-size: 98px;
        font-weight: 900;
        line-height: 94px;
        margin: 12% 0 12% 0
    }
    .underlined-link
    {
        text-decoration: underline $rouge_kagiso;
    }
    #headerLink{
        font-size:2em;
    }

</style>
