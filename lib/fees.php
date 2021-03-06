<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class fees extends BaseResource {
  protected $resourceName = "fees";
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
   * The identifier of the Entity that will charge this Fee.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that this Fee applies for.
   */
  public $forentity;

  /**
   * @string
   * The identifier of the Org who should pay this Fee on behalf of the Entity identified in the value of the 'forentity' field. 
   * This field is optional. If it is set, then the Fee is charged to this Org instead.
   */
  public $org;

  /**
   * @integer
   * The type of the fee.  
   * Valid values are: 
   * '1': FEE - A regular Fee to be charged. 
   * '2': ASSESSMENT - A fee chaged by a third-party platform.
   */
  public $type;

  /**
   * @string
   * The name of this Fee. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Fee.  
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The schedule that determines when this Fee is triggered to be charged. 
   * Valid values are: 
   * '1': Daily - the Fee is charged every day. 
   * '2': Weekly - the Fee is charged every week. 
   * '3': Monthly - the Fee is charged every month. 
   * '4': Annually - the Fee is charged every year. 
   * '5': Single - the Fee is a one-off charge. 
   * '6': Auth - the Fee is triggered at the time of authorization of a transaction. 
   * '7': Capture - the Fee triggers at the capture time of a Transaction. 
   * '8': Refund - the Fee triggers when a refund transaction is processed. 
   * '9': Board - the Fee triggers when the Merchant is boarded. 
   * '10': Payout - the Fee triggers when a payout is processed. 
   * '11': Chargeback - the Fee triggers when a card chargeback occurs. 
   * '12': Overdraft - the Fee triggers when an overdraft usage charge from a bank is levied. 
   * '13': Interchange - the Fee triggers when interchange Fees are assessed for the Transactions of this Merchant. 
   * '14': Processor - the Fee triggers when the Transactions of this Merchant are processed by a payment processor. 
   * '15': ACH failure - the Fee triggers when an automated clearing house failure occurs. 
   * '16': Account - the Fee triggers when a bank account is verified. 
   * '17': Sift - the Fee triggers when a txn uses SIFT for fraud checking. 
   * '18': Adjustment - the Fee triggers when an adjustment is created. 
   * '19': Retrieval - the Fee triggers when a chargeback retrieval is processed. 
   * '20': Arbitration - the Fee triggers when a chargeback arbitration is processed. 
   * '21': eCheck Sale - the Fee triggers when an eCheck sale is processed. 
   * '22': eCheck Refund - the Fee triggers when an eCheck refund is processed. 
   * '23': eCheck Return - the Fee triggers when an eCheck txn is returned because of a failure while processing. 
   * '24': Settlement - the Fee triggers when a txn is settled. 
   * '25': Misuse - the Fee triggers when a txn authorization is misused.
   */
  public $schedule;

  /**
   * @integer
   * A multiplier that you can use to adjust the schedule set in the 'schedule' field, if it is set to a duration-based trigger, such as daily, weekly, monthly, or annually. 
   * This field is specified as an integer and its value determines how the interval is multiplied. 
   * For example, if 'schedule' is set to '1' (meaning 'daily'), then a 'scheduleFactor' value of '2' would cause the Fee to trigger every two days.
   */
  public $scheduleFactor;

  /**
   * @integer
   * The date on which charging of the Fee should start. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future, or the present date.
   */
  public $start;

  /**
   * @integer
   * The date on which charging of the Fee should end. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future.
   */
  public $finish;

  /**
   * @integer
   * Applies the fee based on the volume of a resource. 
   * Valid values are: 
   * '1': TXN - The total amount of all txns. 
   * '2': TXNTAXID - The total amount of all txns per entity ein/tax id. 
   * '3': TXNMERCHANT - The total amount of all txns per entity.
   */
  public $collection;

  /**
   * @integer
   * A multiplier that you can use to adjust the set of data to be used in the collection calculation. 
   * This field is specified as an integer and its value determines the period of time to be used. 
   * Valid values are: 
   * '1': DAYS. 
   * '2': WEEKS. 
   * '3': MONTHS. 
   * '4': YEARS.
   */
  public $collectionFactor;

  /**
   * @integer
   * The number of days, weeks, months or years to go back when selecting data for collection calculation.
   */
  public $collectionOffset;

  /**
   * @integer
   * The unit of measure for this Fee. 
   * Valid values are: 
   * '2': The Fee is a fixed amount, specified in the 'amount' field as an integer in cents. 
   * '1': The Fee is a percentage of the transaction amount, specified in the 'amount' field in basis points. Note that percentage measures only make sense where the Fee schedule is set to trigger the Fee when a transaction event happens, such as an authorization, capture, or refund.
   */
  public $um;

  /**
   * @string
   * The total amount of this Fee. 
   * This field is specified as an integer. 
   * The units used in this field are determined by the value of the 'um' field on the Fee. If the 'um' field is set to 'percentage', then this field specifies the Fee percentage to levy in basis points. If the 'um' field is set to 'amount', then this field specifies the Fee in cents.
   */
  public $amount;

  /**
   * @string
   * The currency of the amount. 
   * This field is only required when Um is set to 'ACTUAL'. 
   * Currently, this field only accepts the value 'USD'.
   */
  public $currency;

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

