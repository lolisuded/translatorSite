<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'telnumber', 'service_id', 'language_id', 'message'];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getAttribute('id');
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->getAttribute('firstname');
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->attributes['firstname'] = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->getAttribute('lastname');
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->attributes['lastname'] = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getAttribute('email');
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->attributes['email'] = $email;
    }

    /**
     * @return string
     */
    public function getTelnumber(): string
    {
        return $this->getAttribute('telnumber');
    }

    /**
     * @param string $telnumber
     */
    public function setTelnumber(string $telnumber): void
    {
        $this->attributes['telnumber'] = $telnumber;
    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->getAttribute('service_id');
    }

    /**
     * @param string $service
     */
    public function setService(string $service): void
    {
        $this->attributes['service_id'] = $service;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->getAttribute('language_id');
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->attributes['language_id'] = $language;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->getAttribute('message');
    }

    /**
     * @param string $msg
     */
    public function setMsg(string $msg): void
    {
        $this->attributes['message'] = $msg;
    }

}
