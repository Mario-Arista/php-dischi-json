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

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

    <div id="app">

        <!-- CONTENITORE NASCOSTO DA MOSTRARE AL CLICK -->
        <div 
            class="hidden-infos"
            v-if="showDetails"
        >
            <i class="fa fa-arrow-circle-left"
                @click="hideDiskDetails()"
            
            >

            </i>
            <div>

                <img :src="selecteDisk.poster" :alt="selecteDisk.title">

                <div class="title-disk">
                    {{selecteDisk.title}}
                </div>
                <div class="author-disk">
                    {{selecteDisk.author}}
                </div>
                <div class="genre-disk">
                    {{selecteDisk.genre}}
                </div>
                <div class="year-disk">
                    {{selecteDisk.year}}
                </div>

            </div>
        </div>

        <div class="container py-5">

            <!-- HEADER -->
            <header>

                <div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="logo">
                </div>

            </header>

            <!-- CONTENITORE VISIBILE -->
            <div class="disks">
                
                <div 
                    class="disk-show"
                    v-for="(disk, discIndex) in disks"
                    @click="showDiskDetails(discIndex)"
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