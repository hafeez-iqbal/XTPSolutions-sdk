<?php 
namespace XTPSolutions;

use XTPSolutions\Exceptions\InvalidRequest;

class chargebackDocuments extends BaseResource {
  protected $resourceName = "chargebackDocuments";
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
   * The identifier of the Chargeback resource that this chargebackDocument relates to.
   */
  public $chargeback;

  /**
   * @string
   * The ref of this chargebackDocument. 
   * This field is stored as a text string and must be between 1 and 100 characters long. 
   *  The value is set when the file is properly integrated, otherwise will be null.
   */
  public $ref;

  /**
   * @string
   * The type of the file that holds this chargebackDocument.  
   * Valid values are: 
   * 'jpg', 'jpeg', 'gif', 'png', 'pdf', 'tif', 'tiff'. 
   *  The value is set when the file is properly integrated, otherwise will be null.
   */
  public $type;

  /**
   * @string
   * The name of this chargebackDocument. 
   * This field is stored as a text string and must be between 1 and 100 characters long. 
   *  The value is set when the file is created and properly integrated. Holds the real file name used by the user.
   */
  public $name;

  /**
   * @string
   * The description of this chargebackDocument. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The current status of the chargebackDocument. 
   * Valid values are: 
   * '0': Created. The ChargebackDocument has been created. 
   * '1': Processed. The ChargebackDocument integration has been successful. 
   * '2': Failed. The ChargebackDocument integration has failed.
   */
  public $status;

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

