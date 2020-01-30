<?php

namespace KITM;


class Pupil extends User
{
    protected $pupilId;
    protected $pupilClass;
    protected $gradeAvg;

    public function __construct($name, $lastName, $email, $phone, $pupilId = null, $pupilClass = null, $gradeAvg = null)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->pupilId = $pupilId;
        $this->pupilClass = $pupilClass;
        $this->gradeAvg = $gradeAvg;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return null
     */
    public function getPupilId()
    {
        return $this->pupilId;
    }

    /**
     * @param null $pupilId
     */
    public function setPupilId($pupilId)
    {
        $this->pupilId = $pupilId;
    }

    /**
     * @return null
     */
    public function getPupilClass()
    {
        return $this->pupilClass;
    }

    /**
     * @param null $pupilClass
     */
    public function setPupilClass($pupilClass)
    {
        $this->pupilClass = $pupilClass;
    }

    /**
     * @return null
     */
    public function getGradeAvg()
    {
        return $this->gradeAvg;
    }

    /**
     * @param null $gradeAvg
     */
    public function setGradeAvg($gradeAvg)
    {
        $this->gradeAvg = $gradeAvg;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }



    public function showAllData()
    {
        $result = [
            "Vardas" => $this->getName(),
            "Pavardė" => $this->getLastName(),
            "El. paštas" => $this->getEmail(),
            "Telefonas" => $this->getPhone(),
            "Komentaras" => $this->getComment(),
            "Mokinio ID" => $this->getPupilId(),
            "Pažymių vidurkis" => $this->getGradeAvg(),
            "Mokinio klasė" => $this->getPupilClass()
        ];

        return $result;
    }

}