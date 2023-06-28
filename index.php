<?php
declare(strict_types=1);

namespace Flat;

class Flat
{
    public int $doorLockCode;
    public bool $closed=true;

    public function __construct(int $doorCode)
    {
        if(strlen ((string) $doorCode)<36) {
            echo "Your Code is too short. Try again with longer code ";
            echo "<br>";
        }   else {
            $this->doorLockCode= $doorCode;
        }
    }

    public function close():void
    {
        $this->closed = false;
        echo "Door is close";
        echo "<br>";
    }

    public function open(int $code):void
    {
        if ($code===$this->doorLockCode){
            $this->closed = true;
        } elseif($code===$this->doorLockCode){
            $this->open = false;
        }
    }

    public function isOpen(): bool
    {
        return !$this->closed;
    }
}

$newDoorCode = rand(10,100);
$flat1 = new Flat($newDoorCode);
$flat2 = new Flat($newDoorCode);
$flat3 = new Flat($newDoorCode);
$flat4 = new Flat($newDoorCode);

var_dump($flat1);
echo "<br>";
var_dump($flat2);
echo "<br>";
var_dump($flat3);
echo "<br>";
var_dump($flat4);