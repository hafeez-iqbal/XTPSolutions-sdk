<?php 
namespace XTPSolutions\Exceptions;

class Base extends \Exception {
  public function __construct($error) {
    parent::__construct($error);
  }
}
