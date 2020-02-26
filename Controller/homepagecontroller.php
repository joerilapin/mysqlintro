<?php


class HomePageController
{
    public function render($post){

        //Connection
        $pdo = openConnection();
        if ($pdo){
            echo 'Success';
        } else {
            echo 'Failed connection';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $formInfo = new Post($post['first_name'], $post['last_name'], $post['userName'], $post['linkedin'], $post['github'],
                $post['email'], $post['preferred_language'], $post['avatar'], $post['video'],
                $post['quote'], $post['quote_author'],$post['created_at']);
            $statement = new Statement();
            $sqlInsert = $statement->generateInsert();

            $pdo->prepare($sqlInsert)->execute([
                'first_name' => $formInfo->setFirstName(),
                'last_name' => $formInfo->setLastName(), 'username' => $formInfo->setUserName(), 'linkedin' => $formInfo->setLinkedin(), 'github' => $formInfo->setGithub(),
                'email' => $formInfo->setEmail(), 'preferred_language' => $formInfo->setPreferredLang(), 'avatar' => $formInfo->setAvatar(), 'video' => $formInfo->setVideo(),
                'quote' => $formInfo->setQuote(), 'quote_author' => $formInfo->setQuoteAuthor(),'created_at' => $formInfo->setCreatedAt()]);
        }


        require 'View/homepage.php';
    }
}

© 2020 GitHub, Inc.
Terms
    Privacy
    Security
    Status
    Help

    Contact GitHub
    Pricing
    API
    Training
    Blog
    About


