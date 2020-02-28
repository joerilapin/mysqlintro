<?php


class HomePageController
{
    public function render($post){
    //er mag niet teveel in de render staan; waarom?
        //Connection wordt hier gemaakt
        $callConnection = new openConnection();
        $pdo = $callConnection->connection();
        //
        if ($pdo){
            echo 'Success';
        } else {
            echo 'Failed connection';
        }
        //als de waarde true is bij Post, dan voert hij alles uit daarachter
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //hier creatie van object van de klasse post
            $formInfo = new Post($post['first_name'], $post['last_name'], $post['username'], $post['linkedin'], $post['github'],
                $post['email'], $post['preferred_language'], $post['avatar'], $post['video'],
                $post['quote'], $post['quote_author']);
            $statement = new Statement();
            $sqlInsert = $statement->generateInsert();
            try {
                //prepare en execute zijn ingebouwde functies om met de database te 'praten'
                $gogogo = $pdo->prepare($sqlInsert);
                //associatieve array
                $isDone = $gogogo->execute(
                    [   'first_name' => $formInfo->getFirstName(),
                        'last_name' => $formInfo->getLastName(),
                        'username' => $formInfo->getUserName(),
                        'linkedin' => $formInfo->getLinkedin(),
                        'github' => $formInfo->getGithub(),
                        'email' => $formInfo->setEmail(),
                        'preferred_language' => $formInfo->setPreferredLang(),
                        'avatar' => $formInfo->setAvatar(),
                        'video' => $formInfo->setVideo(),
                        'quote' => $formInfo->setQuote(),
                        'quote_author' => $formInfo->setQuoteAuthor()
                    ]);

                echo $isDone;
            }
            catch (PDOException $e)
            {
                die($e);
            }
        }

//altijd in de controller!!
        require 'View/insert.php';
    }
}



