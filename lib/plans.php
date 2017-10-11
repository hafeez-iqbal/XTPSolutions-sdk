<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class plans extends BaseResource {
  protected $resourceName = "plans";
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
   * The identifier of the Merchant associated with this Plan.
   */
  public $merchant;

  /**
   * @string
   * The name of this Plan. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Plan.  
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The schedule that determines when the subscription related to this Plan is triggered.
   *  Valid values are '1' (Daily), '2' (Weekly), '3' (Monthly) and '4' (Annually).
   */
  public $schedule;

  /**
   * @integer
   * A multiplier that you can use to adjust the schedule set in the 'schedule' field, such as daily, weekly, monthly, or annually. 
   * This field is specified as an integer and its value determines how the interval is multiplied. 
   * For example, if 'schedule' is set to '1' (meaning 'daily'), then a 'scheduleFactor' value of '2' would cause the Subscription to trigger every two days.
   */
  public $scheduleFactor;

  /**
   * @integer
   * The amount to charge with each payment under this Plan. 
   * This field is specified as an integer in cents.
   */
  public $amount;

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


}

