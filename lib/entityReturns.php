<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class entityReturns extends BaseResource {
  protected $resourceName = "entityReturns";
  /**
   * @string
   * The ID of this resource.
   */
  public $id;

  /**
   * @string
   * The date and time at which this resource was created.
   */
  public $created;

  /**
   * @string
   * The date and time at which this resource was modified.
   */
  public $modified;

  /**
   * @string
   * The identifier of the Login that created this resource.
   */
  public $creator;

  /**
   * @string
   * The identifier of the Login that last modified this resource.
   */
  public $modifier;

  /**
   * @string
   * The Login that owns this resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Entity that this EntityReturns refers to.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Payment that this EntityReturns refers to.
   */
  public $payment;

  /**
   * @string
   * This field indicates that this EntityReturn was triggered from a Transaction. 
   * This field stores the identifier of the Transaction.
   */
  public $txn;

  /**
   * @string
   * This field indicates that this EntityReturn was triggered from a Disbursement. 
   * This field stores the identifier of the Disbursement.
   */
  public $disbursement;

  /**
   * @integer
   */
  public $actionCode;

  /**
   * @string
   * The code that is received from the platform.
   */
  public $code;

  /**
   * @string
   * The message that is received from the platform
   */
  public $message;

  /**
   * @integer
   * Whether this resource is marked as inactive. A value of '1' means inactive and a value of '0' means active.
   */
  public $inactive;

  /**
   * @integer
   * Whether this resource is marked as frozen. A value of '1' means frozen and a value of '0' means not frozen.
   */
  public $frozen;


  public function update($params = array()) {
      throw new \XTPSolutions\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \XTPSolutions\Exceptions\InvalidRequest('Invalid Action');
  }

  public function create($params = array()) {
      throw new \XTPSolutions\Exceptions\InvalidRequest('Invalid Action');
  }

}

