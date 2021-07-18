$(document).ready(() => {
    newGame();
    rollDice();
            
    //Fonction pour commencer une nouvelle partie
    $('#new-game').click(newGame);

    //Fonction pour recommencer une partie
    function newGame(){
      //On remet les scores à 0
      score = 0;
      globalScore = [0,0,0];
      player = 1;
      playing = true;
  
      $('#global-score-1').text('0');
      $('#global-score-2').text('0');
      $('#round-score-1').text('0');
      $('#round-score-2').text('0');
  
      $('#player1-title').text('PLAYER 1');
      $('#player2-title').text('PLAYER 2');
  
      $('#player2').removeClass('active');
      $('#player1').removeClass('active').addClass('active');
  
      $('#roll-dice').show();
      $('#hold').show();
    }
  
    //Fonction pour lancer le dé
    function rollDice() {
      $('#roll-dice').click(function() {    
        if(playing) {
            // On cherche un chiffre aléatoire
            let nbrDice = Math.floor(Math.random() * 6 + 1);
            // Association de l'image du dé en fonction du nombre
            let diceImg = $('#dice-img img');
            diceImg.attr('src', 'Images/dice-' + nbrDice + '.png');
  
            if(nbrDice !== 1) {
              // On ajoute le score du round au score précédent.
              score += nbrDice;
              $('#round-score-' + player).text(score);
            } else {
              nextPlayer();
            }
        }
      })
    }
    
    // Fonction pour le changement de joueur
    function nextPlayer() {
      // Si le joueur est égal à 0, passe a joueur suivant, sinon reste à 0.
      if(player === 1){
        player = 2;
        $('#player1').removeClass('active');
        $('#player2').addClass('active');
      }
      else{
        player = 1;
        $('#player2').removeClass('active');
        $('#player1').addClass('active');
      }
      // On remet à zéro le score "current"
      score = 0;
  
      $('#round-score-1').text(score);
      $('#round-score-2').text(score);
    }
  
    //Fonction pour sauvegarder son score
    $('#hold').click(function() {
      if(playing) {
        // On ajouter le score au score global
        globalScore[player] += score;
  
        //On acutalise le score à l'affichage
        $('#global-score-' + player).text(globalScore[player]);
        console.log('Joueur ' + player + globalScore[player]);
  
        // On vérifie si le joueur a gagné
        if (globalScore[player] >= 100) {
            $('#player' + player + '-title').text('Vous avez gagné !');
            playing = false;
  
            $('#roll-dice').hide();
            $('#hold').hide();
        }
        else {
            nextPlayer();
        }
      }
    })
  });