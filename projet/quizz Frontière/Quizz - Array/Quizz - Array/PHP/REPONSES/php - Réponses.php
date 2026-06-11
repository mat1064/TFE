<!DOCTYPE html>

    <html>

            <head>
            <title>Réponses</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            </head>
                <body>


                    <!--TITRE-->
                                
                <h1>Correction des questions</h1>

    <!-- ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ Questions ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ -->

    <?php
        /*BALISES*/
            $q1 = strtolower ($_POST['qa']);
            $q2 = strtolower ($_POST['qb']);
            $q3 = strtolower ($_POST['qc']);
            $q4 = strtolower ($_POST['qd']);
            $q5 = strtolower ($_POST['qe']);
            $q6 = strtolower ($_POST['qf']);
            $q7 = strtolower ($_POST['qg']);
            $q8 = strtolower ($_POST['qh']);
            $q9 = strtolower ($_POST['qi']);
            $q10 = strtolower ($_POST['qj']);

            $reponse = array('Dublin', 'Union Européenne', 'rouge', 'une croix', "l'Islande", "Nouvelle-Zélande", "France", "Canberra", "Danemark", "une botte");


        /*SI CONDITION*/

        if ( $q1 == strtolower($reponse[0]))
            {
                echo "Votre réponse est " .$q1. ", elle est correcte ! <br>";
            }
            else
            {
                echo "Votre réponse est " .$q1. ", elle est incorrecte ! La bonne réponse était " .$reponse[0]. "<br>";
            }

            /*QUESTION 2*/

                if ( $q2 == strtolower($reponse[1]))
                {
                    echo "Votre réponse est " .$q2. ", elle est correcte ! <br>";
                }
                else
                {
                    echo "Votre réponse est " .$q2. ", elle est incorrecte ! La bonne réponse était  " .$reponse[1]. " <br>";
                }

                    /*QUESTION 3*/

                        if ( $q3 == strtolower($reponse[2]))
                        {
                            echo "Votre réponse est " .$q3. ", elle est correcte ! <br>";
                        }
                        else
                        {
                            echo "Votre réponse est " .$q3. ", elle est incorrecte ! La bonne réponse était  " .$reponse[2]. "  <br>";
                        }

                            /*QUESTION 4*/

                                if ( $q4 == strtolower($reponse[3]))
                                {
                                    echo "Votre réponse est " .$q4. ", elle est correcte ! <br>";
                                }
                                else
                                {
                                    echo "Votre réponse est " .$q4. ", elle est incorrecte ! La bonne réponse était  " .$reponse[3]. "  <br>";
                                }

                                    /*QUESTION 5*/

                                        if ( $q5 == strtolower($reponse[4]))
                                        {
                                            echo "Votre réponse est " .$q5. ", elle est correcte ! <br>";
                                        }
                                        else
                                        {
                                            echo "Votre réponse est " .$q5. ", elle est incorrecte ! La bonne réponse était  " .$reponse[4]. "  <br>";
                                        }

                                            /*QUESTION 6*/

                                                if ( $q6 == strtolower($reponse[5]))
                                                {
                                                    echo "Votre réponse est " .$q6. ", elle est correcte ! <br>";
                                                }
                                                else
                                                {
                                                    echo "Votre réponse est " .$q6. ", elle est incorrecte ! La bonne réponse était  " .$reponse[5]. "  <br>";
                                                }

                                                    /*QUESTION 7*/

                                                        if ( $q7 == strtolower($reponse[6]))
                                                        {
                                                            echo "Votre réponse est " .$q7. ", elle est correcte ! <br>";
                                                        }
                                                        else
                                                        {
                                                            echo "Votre réponse est " .$q7. ", elle est incorrecte ! La bonne réponse était  " .$reponse[6]. "  <br>";
                                                        }

                                                            /*QUESTION 8*/

                                                                if ( $q8 == strtolower($reponse[7]))
                                                                {
                                                                    echo "Votre réponse est " .$q8. ", elle est correcte ! <br>";
                                                                }
                                                                else
                                                                {
                                                                    echo "Votre réponse est " .$q8. ", elle est incorrecte ! La bonne réponse était  " .$reponse[7]. "  <br>";
                                                                }

                                                                    /*QUESTION 9*/

                                                                        if ( $q9 == strtolower($reponse[8]))
                                                                        {
                                                                            echo "Votre réponse est " .$q9. ", elle est correcte ! <br>";
                                                                        }
                                                                        else
                                                                        {
                                                                            echo "Votre réponse est " .$q9. ", elle est incorrecte ! La bonne réponse était  " .$reponse[8]. "  <br>";
                                                                        }

                                                                            /*QUESTION 10*/

                                                                                if ( $q10 == strtolower($reponse[9]))
                                                                                {
                                                                                    echo "Votre réponse est " .$q10. ", elle est correcte ! <br>";
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "Votre réponse est " .$q10. ", elle est incorrecte ! La bonne réponse était  " .$reponse[9]. "  <br>";
                                                                                }
?>
         </body>
    </html>