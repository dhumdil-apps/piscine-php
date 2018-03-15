<?php

    class NightsWatch
    {
        private $_recruits = array();

        public function recruit($fighter)
        {
            if (method_exists($fighter, 'fight'))
            {
                array_push($this->_recruits, $fighter);
            }
        }

        public function fight()
        {
            foreach ($this->_recruits as $fighter)
            {
                $fighter->fight();
            }
        }
    }
