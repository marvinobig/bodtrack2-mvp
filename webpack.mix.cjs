let mix = require("laravel-mix");

mix.sass("./resources/scss/main.scss", "css/main.css").setPublicPath(
    "./resources"
);

mix.js("./resources/js/main.js", "js/main.bundle.js").setPublicPath("./resources");