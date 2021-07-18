<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game JH</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="script.js"></script>

    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Partie Joueur 1 -->
            <div class="col-6" id="player1">
                <div class="row">
                    <div class="player-text">
                        <h2 id="player1-title">PLAYER 1</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="global-score">
                      <p id="global-score-1">40</p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="red-box">
                        <p>CURRENT</p>
                        <p class="round-score" id="round-score-1">10</p>
                    </div>
                </div>

            </div>
            <!-- Partie Joueur 2 -->
            <div class="col-6" id="player2">
                <div class="row">
                    <div class="player-text">
                        <h2 id="player2-title">PLAYER 2</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="global-score">
                        <p id="global-score-2">40</p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="red-box">
                        <p>CURRENT</p>
                        <p class="round-score" id="round-score-2">10</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partie centrale -->
        <div class="container position-absolute">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <button id="new-game" class="mt-5">
                            <p><i class="icons bi bi-plus-circle"></i>&nbsp;NEW GAME</p>
                        </button>
                    </div>

                    <div class="row">
                        <div id="dice-img">
                            <img src="Images/dice-0.png" alt="Dé" />
                        </div>
                    </div>

                    <div class="row">
                        <button id="roll-dice">
                            <p><i class="icons bi bi-arrow-repeat"></i>&nbsp;ROLL DICE</p>
                        </button>
                    </div>

                    <div class="row">
                        <button id="hold">
                            <p><i class="icons bi bi-box-arrow-in-down"></i>&nbsp;HOLD</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>