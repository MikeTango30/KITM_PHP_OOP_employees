<?php

namespace KITM;


class Pupil extends User
{
    protected $pupilId;
    protected $pupilClass;
    protected $gradeAvg;

    public function __construct($name, $lastName, $email, $phone, $pupilId = null, $pupilClass = null, $gradeAvg = null)
    {
        parent::__construct($name, $lastName, $email, $phone);
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->pupilId = $pupilId;
        $this->pupilClass = $pupilClass;
        $this->gradeAvg = $gradeAvg;
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

    public function show()
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