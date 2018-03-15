<?php

    class Fighter
    {
        private $_fighter_type;

        public function __construct($fighter_type = null)
        {
            $this->_fighter_type = $fighter_type;
        }

        public function getFighterType()
        {
            return ($this->_fighter_type);
        }
    }
