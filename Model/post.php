<?php


class Post
{
    private $first_name;
    private $last_name;
    private $username;
    private $linkedin;
    private $github;
    private $email;
    private $preferredLang;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuthor;

    //constructor wordt gebruikt om geen ongeldige input te krijgen, zoals lege velden;
    // zodat alles ingevuld is
    //PHP 5 allows developers to declare constructor methods for classes. Classes which have a constructor method
    // call this method on each newly-created object, so it is suitable for any initialization that the object may
    // need before it is used.
    public function __construct(string $first_name, string $last_name,
                                string $username, string $linkedin,
                                string $github, string $email,
                                string $preferredLang, string $avatar,
                                string $video, string $quote,
                                string $quoteAuthor)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->linkedin = $linkedin;
        $this->github = $github;
        $this->email = $email;
        $this->preferredLang = $preferredLang;
        $this->avatar = $avatar;
        $this->video = $video;
        $this->quote = $quote;
        $this->quoteAuthor = $quoteAuthor;
    }

    //getters

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getUserName(): string
    {
        return $this->username;
    }

    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

    public function getGithub(): string
    {
        return $this->github;
    }

    public function setEmail(): string
    {
        return $this->email;
    }

    public function setPreferredLang(): string
    {
        return $this->preferredLang;
    }

    public function setAvatar(): string
    {
        return $this->avatar;
    }

    public function setVideo(): string
    {
        return $this->video;
    }

    public function setQuote(): string
    {
        return $this->quote;
    }

    public function setQuoteAuthor(): string
    {
        return $this->quoteAuthor;
    }
}