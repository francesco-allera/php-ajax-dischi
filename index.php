<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-png">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <title>PHP Ajax Dischi - Milestone 2</title>
</head>
<body>

    <div id="app">
        <header>
            <div class="container">
                <img src="./img/logo.png" alt="logo">

                <label for="genres">
                    Filtra gli album per genere:
                </label>

                <select v-model="genre" id="genres" @change="filterGenre">
                    <option value="">
                        Tutti gli album
                    </option>
                    <option v-for="el in genres" :value="el">
                        {{ el }}
                    </option>
                    <option value="rotto">
                        rotto
                    </option>
                </select>
            </div>
        </header>

        <main>
            <div v-if="!error" class="container">
                <div v-for="el in disks" class="cd">
                    <img :src="el.poster" :alt="el.title + ' album photo'">

                    <h3>
                        {{ el.title }}
                    </h3>

                    <div class="bottom">
                        <div class="author">
                            {{ el.author }}
                        </div>

                        <div class="year">
                            {{ el.year }}
                        </div>
                    </div>
                </div>
            </div>

            <div v-else class="container error">
                <h1>
                    Richiesta sbagliata.
                    <br>
                    Prova a cambiare filtro o ricaricare la pagina.
                </h1>
            </div>
        </main>
    </div>

    <script src="./js/script.js" charset="utf-8"></script>
</body>
</html>