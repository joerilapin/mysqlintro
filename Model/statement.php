<?php


class Statement
{
    public function generateInsert() : string {
        return  'INSERT INTO student (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (:firstName, :lastName, :username,:linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)';
    }
}
