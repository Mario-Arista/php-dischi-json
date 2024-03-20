<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- barlow condensed font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <div id="app">

        <div class="container py-5">

            <!-- HEADER -->
            <header>

            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="logo">
            </div>

            </header>

            <!-- CONTENITORE NASCOSTO DA MOSTRARE AL CLICK -->
            <div 
                class="hidden"
                v-for="disk in disks"
            >
                <img :src="disk.poster" :alt="disk.title">
                <div>
                    {{disk.title}}
                </div>
                <div>
                    {{disk.author}}
                </div>
                <div>
                    {{disk.genre}}
                </div>
                <div>
                    {{disk.Pop}}
                </div>

            </div>

            <!-- CONTENITORE VISIBILE -->
            <div class="disks">
                
                <div 
                    class="disk-show"
                    v-for="disk in disks"
                >   
                    <div class="img-container">
                        <img :src="disk.poster" :alt="disk.title">
                    </div>
                    
                    <div class="title-disk">
                        {{disk.title}}
                    </div>

                    <div class="author-disk">
                        {{disk.author}}
                    </div>

                    <div class="year-disk">
                        {{disk.year}}
                    </div>

                </div>
            </div>

            
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>