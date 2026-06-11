<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../../CSS/style.css" />
<style>
    body {
        background-image: url(../../IMAGES/img_quizz.jpg);
    }
    /* La balise audio invisible */
    #audio-invisible {
        display: none;
    }
    /* Optionnel : bouton discret en haut à droite, si tu veux en garder un */
    #start-music-btn {
        position: fixed;
        top: 10px;
        right: 10px;
        padding: 6px 10px;
        font-size: 14px;
        cursor: pointer;
        background-color: rgba(255,255,255,0.7);
        border-radius: 4px;
        border: none;
        z-index: 999;
    }
</style>
<script>
    // Fonction pour lancer la musique
    function lancerMusique() {
        var audio = document.getElementById('audio-invisible');
        if (audio) {
            var promise = audio.play();
            if (promise !== undefined) {
                promise.then(() => {
                    // La musique démarre, on peut cacher le bouton
                    document.getElementById('start-music-btn').style.display = 'none';
                }).catch(() => {
                    alert("Cliquez pour lancer la musique");
                });
            }
        }
    }

    // Au chargement du DOM, essayer de lancer la musique automatiquement
    document.addEventListener('DOMContentLoaded', function() {
        var audio = document.getElementById('audio-invisible');
        if (audio) {
            // Tentative automatique
            var promise = audio.play();
            if (promise !== undefined) {
                promise.then(() => {
                    // Si ça marche, cacher le bouton si il est là
                    document.getElementById('start-music-btn').style.display = 'none';
                }).catch(() => {
                    // Si ça ne marche pas, laisser le bouton apparaître
                    console.log("Lecture automatique bloquée, l'utilisateur doit cliquer pour démarrer.");
                });
            }
        }
    });
</script>
</head>
<body>
    <!-- Bouton discret pour démarrer la musique manuellement -->
    <button id="start-music-btn" onclick="lancerMusique()">🎵 Démarrer la musique</button>

    <!-- La balise audio invisible -->
    <audio id="audio-invisible" loop>
        <source src="../../../audio/Peace_and_Order_by_Force.mp3" type="audio/mpeg" />
        Votre navigateur ne supporte pas la balise audio.
    </audio>

    <form method="post" action="../../PHP/REPONSES/php - Réponses.php">
        <div class="conteneur_quizz">
            <!-- Titre du quiz -->
            <h1>QUESTIONNAIRE SUR LA FRONTIÈRE</h1>
                        
            <!-- Question 1 -->
            <div class="question">
                <p>Question 1 : Quelle est la mégacorporation présente dans la Frontière ?</p>
                <div class="choix">
                    <p>✦ la Milice</p>
                    <p>✦ L'IMC</p>
                    <p>✦ Les précurseurs</p>
                </div>
                <label for="qa">Votre réponse :</label>
                <input type="text" id="qa" name="qa" size="20">
            </div>
            <br><br><br>

            <!-- Question 2 -->
            <div class="question">
                <p>Question 2 : Comment la Frontière est-elle placée par rapport à la Terre ?</p>
                <div class="choix">
                    <p>✦ juste à côté</p>
                    <p>✦ facile d'accès</p>
                    <p>✦ limite de l'espace connu</p>
                </div>
                <label for="qb">Votre réponse :</label>
                <input type="text" id="qb" name="qb" size="20">
            </div>
            <br><br><br>

            <!-- Question 3 -->
            <div class="question">
                <p>Question 3 : Quel est le symbole de la Milice ?</p>
                <div class="choix">
                    <p>✦ un crâne armé</p>
                    <p>✦ une fusée vers l'avenir</p>
                    <p>✦ une arme chargée</p>
                </div>
                <label for="qc">Votre réponse :</label>
                <input type="text" id="qc" name="qc" size="20">
            </div>
            <br><br><br>

            <!-- Question 4 -->
            <div class="question">
                <p>Question 4 : Quelle est la capacité majeure de tous les pilotes ?</p>
                <div class="choix">
                    <p>✦ Wallrun</p>
                    <p>✦ Surcharge</p>
                    <p>✦ Invincibilité</p>
                </div>
                <label for="qd">Votre réponse :</label>
                <input type="text" id="qd" name="qd" size="20">
            </div>
            <br><br><br>

            <!-- Question 5 -->
            <div class="question">
                <p>Question 5 : Quelle est la planète principale de la Milice ?</p>
                <div class="choix">
                    <p>✦ Harmony</p>
                    <p>✦ Titan</p>
                    <p>✦ Centauri</p>
                </div>
                <label for="qe">Votre réponse :</label>
                <input type="text" id="qe" name="qe" size="20">
            </div>
            <br><br><br>

            <!-- Question 6 -->
            <div class="question">
                <p>Question 6 : Quels sont les 3 protocoles ?</p>
                <div class="choix">
                    <p>✦ Liberté, égalité, fraternité</p>
                    <p>✦ Lien au pilote, poursuite de la mission, protection du pilote</p>
                    <p>✦ Sus à l'ennemi, pour la Frontière, Résistance</p>
                </div>
                <label for="qf">Votre réponse :</label>
                <input type="text" id="qf" name="qf" size="20">
            </div>
            <br><br><br>

            <!-- Question 7 -->
            <div class="question">
                <p>Question 7 : Quelle est la planète sur laquelle se passe l'opé Broadsword ?</p>
                <div class="choix">
                    <p>✦ l'Amérique</p>
                    <p>✦ Freeport</p>
                    <p>✦ Typhon</p>
                </div>
                <label for="qg">Votre réponse :</label>
                <input type="text" id="qg" name="qg" size="20">
            </div>
            <br><br><br>

            <!-- Question 8 -->
            <div class="question">
                <p>Question 8 : Quelle est la puissance de frappe principale de la Frontière ?</p>
                <div class="choix">
                    <p>✦ les Titans</p>
                    <p>✦ les Supersoldats</p>
                    <p>✦ les gros canons</p>
                </div>
                <label for="qh">Votre réponse :</label>
                <input type="text" id="qh" name="qh" size="20">
            </div>
            <br><br><br>

            <!-- Question 9 -->
            <div class="question">
                <p>Question 9 : Quelle est la ville la plus connue de la Frontière ?</p>
                <div class="choix">
                    <p>✦ Export</p>
                    <p>✦ Mons</p>
                    <p>✦ Angel City</p>
                </div>
                <label for="qi">Votre réponse :</label>
                <input type="text" id="qi" name="qi" size="20">
            </div>
            <br><br><br>

            <!-- Question 10 -->
            <div class="question">
                <p>Question 10 : Grâce à quoi la découverte de la Frontière a pu être possible ?</p>
                <div class="choix">
                    <p>✦ La Dechvaut</p>
                    <p>✦ Le voyage interstellaire</p>
                    <p>✦ Un bon coup de pied au cul</p>
                </div>
                <label for="qj">Votre réponse :</label>
                <input type="text" id="qj" name="qj" size="20">
            </div>
            <br><br><br>

            <input type="submit" formaction="../../PHP/REPONSES/php - Réponses.php" value="ENVOYER">
        </div>
    </form>
</body>
</html>