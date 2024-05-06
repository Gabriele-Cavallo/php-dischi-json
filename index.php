<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- /Link Axios -->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <!-- Vue-JS HTML Container -->
    <div id="app">
        <header>
            <div class="header-wrapper d-flex algn-cntr jst-cntr anchor">
                <img class="logo" src="./img/logo.png" alt="logo">
                <h1>COLLEZIONE DISCHI</h1> 
            </div>
        </header>
        <main class="anchor d-flex jst-cntr algn-cntr">
            <section class="container">
                <div class="row flex-wrap d-flex jst-btwn ">
                    <div
                        @click="getSingleDiscsFromApi(index)" 
                        v-for="disc, index in discs" 
                        class="col d-flex flex-col gap-10"
                        :class="singleDisc ? 'single-disc' : '' ">
                            <img :src="disc.poster" alt="copertina disco">
                            <h2>{{ disc.title }}</h2>
                            <h4>{{ disc.author }}</h4>
                            <h3>{{ disc.year }}</h3>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <!-- /Vue-JS HTML Container -->
    <!-- Vue-JS Script -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- /Vue-JS Script -->
    <!-- MyJavascript -->
    <script type="text/javascript" src="./js/script.js"></script>
    <!-- /MyJavascript -->
</body>
</html>