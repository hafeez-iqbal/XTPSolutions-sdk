<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class profitShares extends BaseResource {
  protected $resourceName = "profitShares";
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
   * The identifier of the Login that owns this ProfitShare.
   */
  public $login;

  /**
   * @string
   * The identifier of the Entity that this ProfitShare refers to. This is the entity that will receive the split income/expense.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that will have it's earnings/expenses shared.
   */
  public $forentity;

  /**
   * @string
   * The identifier of the Org in which entities will have their earnings/expenses shares.
   */
  public $org;

  /**
   * @string
   * The identifier of the Division in which entities will have their earnings/expenses shares.
   */
  public $division;

  /**
   * @string
   * The identifier of the Partition in which entities will have their earnings/expenses shares.
   */
  public $partition;

  /**
   * @integer
   * Indicates if the profitShare should be processed when there is an income, expense or both. 
   * Valid values are: 
   * '1': Income - earnings will be shared between entities. 
   * '2': Expense - loses will be shared between entities. 
   * '3': Both - earnings and loses will be shared between entities.
   */
  public $type;

  /**
   * @string
   * The name of this ProfitShare. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this ProfitShare. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The percentage to be shared. 
   * This field is specified as an integer between 1 and 10000. 
   *  Percentages are calculated over the income/expense amount.
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

