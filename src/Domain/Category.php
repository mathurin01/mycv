<?php

namespace Mycv\Domain;

class Category 
{
    /**
     * Category id.
     *
     * @var integer
     */
    private $id;

    /**
     * Category title.
     *
     * @var string
     */
    private $title;

    /**
     * Category logo.
     *
     * @var string
     */
    private $logo;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }
}
