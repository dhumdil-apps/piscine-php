<?php

    class NightsWatch
    {
        private $_recruits = array();

        public function recruit($person)
        {
            if (method_exists($person, 'fight'))
            {
                array_push($this->_recruits, $person);
            }
        }

        public function fight()
        {
            foreach ($this->_recruits as $person)
            {
                $person->fight();
            }
        }
    }
