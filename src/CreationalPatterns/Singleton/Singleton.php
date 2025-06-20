<?php

declare(strict_types=1);

class Singleton
{
    // Hold the single instance of the class
    private static $instance = null;
    
    // Store some example data
    private $data;
    
    /**
     * Private constructor to prevent direct instantiatio 
     */
    private function __construct() {
        $this->data = [];
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance == null) {
            return self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone() {
    }

    public function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
    * Example method to set data
    * 
    * @param string $key
    * @param mixed $value
    */
    public function setData(string $key, $value): void {
        $this->data[$key] = $value;
    }
    
    /**
    * Example method to get data
    * 
    * @param string $key
    * @return mixed|null
    */
    public function getData(string $key) {
        return $this->data[$key] ?? null;
    }
}


// Usage Example
try {
    // Using the basic Singleton
    $singleton1 = Singleton::getInstance();
    $singleton1->setData('user', 'John Doe');
    
    $singleton2 = Singleton::getInstance();
    echo $singleton2->getData('user') . PHP_EOL; // Outputs: John Doe
    var_dump($singleton1 === $singleton2); // bool(true)
    
    // Using the DatabaseConnection Singleton
    // $db1 = DatabaseConnection::getInstance();
    // echo $db1->getConnection() . "\n";
    // echo $db1->query("SELECT * FROM users") . "\n";
    
    // $db2 = DatabaseConnection::getInstance();
    // var_dump($db1 === $db2); // bool(true)
    
    // This will fail
    // $invalid = new Singleton(); // Error: Call to private constructor
    
    // This will fail
    // $cloned = clone $singleton1; // Error: Call to private __clone
    
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}


// $singleton1 = Singleton::getInstance();
// $singleton2 = clone $singleton1; // Creates a new instance, breaking Singleton
// var_dump($singleton1 === $singleton2); // false (two different instances)

// $singleton1 = Singleton::getInstance();
// $serialized = serialize($singleton1);
// $singleton2 = unserialize($serialized); // Creates a new instance
// var_dump($singleton1 === $singleton2); // false (two different instances)