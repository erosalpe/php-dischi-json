<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>php/vue</title>
</head>
<body>
    <div id="app" class="web-app">
        <header>
            <div class="w-75 m-auto py-2">
                <img src="./assets/img/logo.png" alt="logo" id="logo">
            </div>
        </header>
        <div id="music-container" class="d-flex justify-content-center gap-5 flex-wrap">
            <div class="d-flex flex-column card-musica text-light align-items-center justify-content-center gap-3 rounded"
            v-for="(element, index) in musicList" :key="index">
                <img :src="element.poster" _alt="element.title" class="poster">
                <h5>
                    {{element.title}}
                </h5>
                <span>
                    {{element.author}}
                </span>
                <span>
                    {{element.year}}
                </span>
            </div>
        </div>
    </div>





    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.20/vue.global.js' integrity='sha512-pPXd5TKY+7vxrCO8KVHANw6Fhq7q3ibyhjQbQvFPRI+j+W3FKEc/jm0UfgefzfUGJnGrt1L29jOtIgVUY5KdSQ==' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js' integrity='sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==' crossorigin='anonymous'></script>
    <script src="./main.js"></script>
</body>
</html>