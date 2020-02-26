<?php


class Post
{
    private $firstName;
    private $lastName;
    private $username;
    private $linkedin;
    private $github;
    private $email;
    private $preferredLang;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuthor;

    public function __construct(string $first_name, string $last_name, string $username, string $linkedin,
                                string $github, string $email, string $preferredLang, string $avatar, string $video,
                                string $quote, string $quoteAuthor)
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

    //setters

    public function setFirstName(): string
    {
        return $this->first_name;
    }

    public function setLastName(): string
    {
        return $this->last_name;
    }

    public function setUserName(): string
    {
        return $this->username;
    }

    public function setLinkedin(): string
    {
        return $this->linkedin;
    }

    public function setGithub(): string
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
    public function setCreatedAt(): string
    {
        return $this->quoteCreatedAt;
    }
}