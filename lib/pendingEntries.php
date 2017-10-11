<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class pendingEntries extends BaseResource {
  protected $resourceName = "pendingEntries";
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
   * The identifier of the Entity that owns this PendingEntry.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that this PendingEntry refers to. This is the owner of the record that triggered the charge.
   */
  public $onentity;

  /**
   * @string
   * If the activity that this PendingEntry refers to involves two parties in the system with one paying a charge of any kind, then this field stores the identifier of the Entity that the charge or other activity is for.
   */
  public $fromentity;

  /**
   * @string
   * The identifier of the Fund that this PendingEntry refers to.
   */
  public $fund;

  /**
   * @string
   */
  public $opposingPendingEntry;

  /**
   * @string
   */
  public $entry;

  /**
   * @string
   */
  public $adjustment;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a Chargeback, then this field stores the identifier of the corresponding Chargeback resource.
   */
  public $chargeback;

  /**
   * @string
   * If the activity that this PendingEntry refers to is the charging of a Disbursement, then this field stores the identifier of the corresponding Disbursement resource.
   */
  public $disbursement;

  /**
   * @string
   * If the activity that this PendingEntry refers to is the charging of a Fee, then this field stores the identifier of the corresponding Fee resource.
   */
  public $fee;

  /**
   * @string
   * If the activity that this PendingEntry refers to is the paying of a Refund, then this field stores the identifier of the corresponding Refund resource.
   */
  public $refund;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a Transaction, then this field stores the identifier of the corresponding Transaction resource.
   */
  public $txn;

  /**
   * @integer
   * The type of event that triggered this PendingEntry resource. 
   * Valid values are: 
   * '1': Daily - the PendingEntry triggers every day. 
   * '2': Weekly - the PendingEntry triggers every week. 
   * '3': Monthly - the PendingEntry triggers every month. 
   * '4': Annually - the PendingEntry triggers every year. 
   * '5': Single - the PendingEntry is a one-off event. 
   * '6': Auth - the PendingEntry triggers at the time of authorization of a transaction. 
   * '7': Capture - the PendingEntry triggers at the capture time of a Transaction. 
   * '8': Refund - the PendingEntry triggers when a refund transaction is processed. 
   * '9': Board - the PendingEntry triggers when the Merchant is boarded. 
   * '10': Payout - the PendingEntry triggers when a payout is processed. 
   * '11': Chargeback - the PendingEntry triggers when a card chargeback occurs. 
   * '12': Overdraft - the PendingEntry triggers when an overdraft usage charge from a bank is levied. 
   * '13': Interchange - the PendingEntry triggers when interchange Fees are assessed for the Transactions of this Merchant. 
   * '14': Processor - the PendingEntry triggers when the Transactions of this Merchant are processed by a payment processor. 
   * '15': ACH failure - the PendingEntry triggers when an automated clearing house failure occurs. 
   * '16': Account - the PendingEntry triggers when a bank account is verified.
   */
  public $event;

  /**
   * @string
   * The identifier of the record that is associated with this PendingEntry.
   */
  public $eventId;

  /**
   * @string
   * A description of this PendingEntry.
   */
  public $description;

  /**
   * @string
   * The amount involved in this PendingEntry. It refers to the amount charged, transferred, or disbursed. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @integer
   * Whether this resource is marked as pending. A value of '1' means pending and a value of '0' means not pending.
   */
  public $pending;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a ProfitShare, then this field stores the identifier of the corresponding ProfitShare resource.
   */
  public $profitShare;


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

