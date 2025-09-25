<?php

namespace App;

class numberConverter implements converterInterface{

use formatterTrait;

private $number;


  public function __construct(int $number){
      $this->number = $number;
  }
  public function toDecimal():int{
    return $this->number;
  }

  public function toBinary():string{
    return decbin($this->number);
  }
  public function toHexa():string{
    return strtoupper(dechex($this->number));
  }
  public function BitwiseAnd(int $other):int{
    return $this->number & $other;
  }
    public function BitwiseOr(int $other):int{
        return $this->number | $other;
  }
  public function BitwiseXor(int $other):int{
    return $this->number ^ $other;
  }
  public function BitwiseNot():int{
      return ~$this->number;
  }
  public function ShiftLeft(int $position):int{
    return $this->number << $position;
  }
  public function ShiftRight(int $position):int{
    return $this->number >> $position;
  }

}

