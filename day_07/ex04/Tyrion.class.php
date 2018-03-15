<?php

    class Tyrion extends Lannister
    {
        public function sleepWith($person)
        {
            $className = get_class($person);

            if ($className)
            {
                switch ($className)
                {
                    case 'Jaime':
                        print( 'Not even if I\'m drunk !' . PHP_EOL );
                        break;

                    case 'Sansa':
                        print( 'Let\'s do this.' . PHP_EOL );
                        break;

                    case 'Cersei':
                        print( 'Not even if I\'m drunk !' . PHP_EOL );
                        break;

                    default:
                        break;
                }
            }
        }
    }
