<template>
    <div class="row justify-content-end footer">
        <div class="col-md-7 offset-sm-1">
            <!--<img class="logo" src="img/logo_black.svg" alt="logo"/>-->
        </div>
        <!-- <div class="col-md-2 offset-sm-1">
            <p>Sitemap</p>
            <ul class="list-unstyled">
                <li>Home</li>
                <li>Discover</li>
                <li>Discover</li>
            </ul>
        </div>
        <div class="col-md-2 offset-sm-1">
            <p> Contact</p>
            <ul class="list-unstyled">
                <li>123 rue bidon</li>
                <li>65000 Aulon</li>
                <li>contact@arbizon.fr</li>
                <li>+33 7 12 34 56 78</li>
            </ul>
        </div>-->
    </div>
</template>

<style lang="scss" scoped>
    @import "resources/sass/app.scss";
    p {
        
        font-weight: bold;
        line-height: 21px;
        color: black;
    }

    li {
        color:#9D9D9D;
        font-weight:normal;
    }
    
    .liste {
        float: right;
    }

    .contact {
        margin-left: 5%;
    }

    .SiteMap {
        margin-left: 20%;
    }

    .footer {
        margin: 5% 0 5% 0;
    }

    @media only screen and (max-width: 768px) {
        .footer {
            margin: 5% 0 3% 0;
        }
    }
</style>

