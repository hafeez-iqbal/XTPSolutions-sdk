<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class txnVerificationResults extends BaseResource {
  protected $resourceName = "txnVerificationResults";
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
   * The identifier of the txnVerification associated with this txnVerificationResults resource.
   */
  public $txnVerification;

  /**
   * @string
   * A message that describes the verification status.
   */
  public $message;


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

