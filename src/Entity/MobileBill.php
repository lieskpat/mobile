<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
 * Description of MobileBill
 *
 * @author Lieske
 * 
 * @Entity
 * @Table(name="mobile_bill")
 */
class MobileBill {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @Column(type="datetime")
     * @var DateTime 
     */
    protected $billDate;

    /**
     * @Column(type="float")
     * @var double 
     */
    protected $moneyAmount;

    /**
     * @ManyToOne(targetEntity="MobileContract", inversedBy="mobileBills")
     * @JoinColumn(nullable=false)
     * @var /MobileContract 
     */
    protected $mobileContract;

    /**
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @return \DateTime
     */
    public function getBillDate(): DateTime {
        return $this->billDate;
    }

    public function getMoneyAmount() {
        return $this->moneyAmount;
    }

    /**
     * 
     * @return \Mobile\src\Entity\MobileBill\MobileContract
     */
    public function getMobileContract(): MobileContract {
        return $this->mobileContract;
    }

    /**
     * 
     * @param \DateTime $billDate
     * @return $this
     */
    public function setBillDate(DateTime $billDate) {
        $this->billDate = $billDate;
        return $this;
    }

    /**
     * 
     * @param double $moneyAmount
     * @return $this
     */
    public function setMoneyAmount($moneyAmount) {
        $this->moneyAmount = $moneyAmount;
        return $this;
    }

    /**
     * 
     * @param \Mobile\src\Entity\MobileBill\MobileContract $mobileContract
     * @return $this
     */
    public function setMobileContract(MobileContract $mobileContract) {
        $this->mobileContract = $mobileContract;
        return $this;
    }

}
