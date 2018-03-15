<?php

    class UnholyFactory
    {
        private $_fighter = array();

        public function absorb($fighter)
        {
            if ($fighter instanceof Fighter)
            {
                $fighter_type = $fighter->getFighterType();

                if (isset($this->_fighter[$fighter_type]))
                {
                    print( '(Factory already absorbed a fighter of type ' . $fighter_type . ')' . PHP_EOL );
                }
                else
                {
                    $this->_fighter[$fighter_type] = $fighter;
                    print( '(Factory absorbed a fighter of type ' . $fighter_type . ')' . PHP_EOL );
                }
            }
            else
            {
                print( '(Factory can\'t absorb this, it\'s not a fighter)' . PHP_EOL );
            }
        }

        public function fabricate($requested_fighter_type)
        {
            if (isset($this->_fighter[$requested_fighter_type]))
            {
                print( '(Factory fabricates a fighter of type ' . $requested_fighter_type . ')' . PHP_EOL );
                return ($this->_fighter[$requested_fighter_type]);
            }
            else
            {
                print( '(Factory hasn\'t absorbed any fighter of type ' . $requested_fighter_type . ')' . PHP_EOL );
                return (null);
            }
        }
    }
