<?php
    namespace DB;

    include (SYSTEM_PATH . 'db/driver/IDriver.php');

    class DB
    {
        private $driver;

        private $builder;

        public function __construct()
        {
            $config =& loadClass('Config', 'Core');
            $cfg = $config->load('DB');

            if ($cfg !== false)
            {
                // Load driver
                $this->load('Driver', $cfg['driver']);

                // Load builder if available
                $this->load('Builder', $cfg['driver']);

                $this->connect($cfg['host'], $cfg['user'], $cfg['password']);
                $this->database($cfg['database'], false);
            }
        }

        private function load($type, $name)
        {
            $vendor =& loadClass('Vendor', 'Core');
            $list = $vendor->find('DB/'.$type, $name);

            if (!is_array($list))
            {
                include ($list . '/DB/'.$type.'/'.$name.'.php');
                $class = '\\DB\\'.$type.'\\'.$name;

                if (class_exists($class))
                {
                    $type = strtolower($type);
                    $this->$type = new $class();
                }
            }
        }

        /**
         * Connect to database host
         *
         * @param  string $host     Database host name
         * @param  string $user     Username for database host
         * @param  string $password Password for database host
         */
        public function connect($host, $user, $password='')
        {
            $this->driver->connect($host, $user, $password);
        }

        /**
         * Select database inside the database host
         *
         * @param  string $name   Database name
         */
        public function database($name)
        {
            $this->driver->database($name);
        }

        /**
         * Perform query syntax. Support data binding and should be used if passing
         * user inputed data to database.
         *
         * @param  string $sql  SQL syntax
         * @param  array  $data Data that need to be binded to performed SQL
         *
         * @return \DB\Result     Database result
         */
        public function query($sql, $data=[])
        {
            if (count($data) > 0)
            {
                return $this->driver->bind($sql, $data);
            }
            else
            {
                return $this->driver->query($sql);
            }
        }
    }

?>
