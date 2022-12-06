<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>PHP Dischi con axios</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
</head>

<body>
    <div id="app">

        <header>
            <div class="container" id="header-container">
                <div class="header-left">
                    <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div id="discs-container">


                    <div v-for="(disc, index) in discList" :key="index" 
                    @click="getDiscDetail(index)"
                    class="disc">
                        <img :src="disc.poster" :alt="disc.title" />
                        <h3>{{ disc.title }}</h3>
                        <small>{{ disc.author }}</small>
                    </div>

                </div>

                <!-- modal dettaglio disco -->
                 <div v-if="showDiscDetail"  id="disc-details-container">
                    <div class="disc single-disc">
                        <img :src="singleDisc.poster" :alt="singleDisc.title" />
                        <small>{{ singleDisc.author }}</small>
                        <small>{{ singleDisc.genre }}</small>
                        <strong>{{ singleDisc.year }}</strong>
                        <div class="close-button-container">
                            <button @click="showDiscDetail = false" class="button close-button">X</button>
                        </div>
                    </div>
                </div>


            </div>
        </main>

    </div>

    <script src="./js/script.js"></script>
</body>

</html>