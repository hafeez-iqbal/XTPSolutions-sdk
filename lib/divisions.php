<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class divisions extends BaseResource {
  protected $resourceName = "divisions";
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
   */
  public $name;

  /**
   * @string
   */
  public $email;


  public function delete($params = array()) {
      throw new \XTPSolutions\Exceptions\InvalidRequest('Invalid Action');
  }

}

