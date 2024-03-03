<?php
class Contact
{
    private int $id;
    private string $h2, $h3, $imageUrl;

    //SETTERS//
    public function setId($id)
    {
        $this->id = $id;
    }
    public function seth3($h3)
    {
        $this->h3 = $h3;
    }
    public function setH2($h2)
    {
        $this->h2 = $h2;
    }
    public function setPhotoUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    //GETTERS//
    public function id()
    {
        return $this->id;
    }
    public function h3()
    {
        return $this->h3;
    }
    public function h2()
    {
        return $this->h2;
    }
    public function imageUrl()
    {
        return $this->imageUrl;
    }


    // HYDRATATION //
    public function hydrate($data)
    {
        foreach ($data as $attribute => $value) {
            $method = 'set' . ucfirst($attribute);
            if (is_callable(array($this, $method))) {
                $this->$method($value);
            }
        }
    }
    // CONSTRUCTEUR //
    public function __construct($values = array())
    {
        if (!empty($values)) {
            $this->hydrate($values);
        }
    }
}
