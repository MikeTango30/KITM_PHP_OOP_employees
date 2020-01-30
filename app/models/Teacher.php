<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:37
 */

namespace KITM;


class Teacher extends User
{
    protected $classroom;
    protected $subject;
    protected $type;

    public function __construct($name, $lastName, $email, $phone, $classroom, $subject, $type)
    {
        parent::__construct($name, $lastName, $email, $phone);
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->classroom = $classroom;
        $this->subject = $subject;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getClassroom()
    {
        return $this->classroom;
    }

    /**
     * @param mixed $classroom
     */
    public function setClassroom($classroom)
    {
        $this->classroom = $classroom;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function show(){
        $result = [
            "Vardas" => $this->getName(),
            "Pavardė" => $this->getLastName(),
            "El. paštas" => $this->getEmail(),
            "Telefonas" => $this->getPhone(),
            "Komentaras" => $this->getComment(),
            "Dalykas" => $this->getSubject(),
            "Kabinetas" => $this->getClassroom(),
            "Tipas" => $this->getType()
        ];

        return $result;
    }


}