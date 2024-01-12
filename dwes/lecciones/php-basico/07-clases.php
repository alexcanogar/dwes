<?php
    class Persona{
        private $DNI;
        private $name;
        private $surname;

        function __construct($DNI, $name, $surname)
        {
            $this->DNI = $DNI;
            $this->name = $name;
            $this->surname = $surname;
        }

        public function getName()
        {
            return $this->name;
        }
        public function getSurname()
        {
            return $this->surname;
        }
        public function setName($name)
        {
            $this -> name = $name;
        }
        public function setSurname($surname)
        {
            $this -> surname = $surname;
        }
        public function __toString()
        {
            return "Persona: $this->name $this->surname &nbsp&nbsp [DNI:$this->DNI]";
        }
    }

    $men = new Persona ("3412", "Alex", "Canovas");
    print("$men");
    