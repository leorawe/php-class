<?php

//php -S localhost:8000

/**
 * Publication class
 *
 * This is the long description for this class,
 * which can span as many lines as needed. It is
 * not required, whereas the short description is
 * necessary.
 * 
 */

class Publication {
    private $_typePub;

//constructor
public function __construct()
{
    echo 'The class "', __CLASS__, '" was initiated!<br />';
}

public function __destruct()
{
    echo 'The class "', __CLASS__, '" was destroyed.<br />';
}

//getter
    public function getPubType(){
        return $this->typePub . "<br />";
}

//setter
    public function setPubType($newType){
        $this->typePub = $newType;
    }

    public function __toString()
    {
        echo "Using the toString method: ";
        return $this->getProperty();
    } 

}

$myPub = new Publication();

var_dump(myPub);

//echo "<p>".$myPub->typePub."</p>";

$myPub->setPubType("article");
echo $myPub->getPubType();

// Destroy the object
unset($myPub);