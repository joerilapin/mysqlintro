<?php


class Statement
{
    public function generateInsert() : string {
        //alle kolommen van student geeft die de waarden first_name; ':'wijst op de kolom
       return  'INSERT INTO 
            student 
                (first_name,
                 last_name,
                 username,
                 linkedin,
                 github,
                 email,
                 preferred_language, 
                 avatar,
                 video,
                 quote,
                 quote_author) 
            VALUES 
                (:first_name,
                 :last_name,
                 :username,
                 :linkedin,
                 :github,
                 :email,
                 :preferred_language,
                 :avatar,
                 :video,
                 :quote,
                 :quote_author)';
    }
}
