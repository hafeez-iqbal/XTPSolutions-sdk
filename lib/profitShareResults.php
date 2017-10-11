<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class profitShareResults extends BaseResource {
  protected $resourceName = "profitShareResults";
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
   * The identifier of the ProfitShare that this ProfitShareResult refers to.
   */
  public $profitShare;

  /**
   * @string
   * The identifier of the Entry that this ProfitShareResult refers to.
   */
  public $entry;

  /**
   * @string
   * The amount that could not be shared between entities.
   */
  public $amount;

  /**
   * @string
   * A message regarding the failure of the ProfitShare process. 
   * This field is stored as a text string and must be between 0 and 200 characters long.
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

