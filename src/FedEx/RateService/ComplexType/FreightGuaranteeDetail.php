<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightGuaranteeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightGuaranteeDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightGuaranteeDetail';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\FreightGuaranteeType|string $type
     * return FreightGuaranteeDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date for all Freight guarantee types.
     *
     * @param date $date
     * return FreightGuaranteeDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    

    
}