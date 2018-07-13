<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of MobileContract
 *
 * @author Lieske
 * 
 * @Entity
 * @Table(name="mobile_contract")
 */
class MobileContract {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @Column(type="integer")
     * @var int 
     */
    protected $pin;

    /**
     * @Column(type="integer")
     * @var int 
     */
    protected $pin2;

    /**
     * @Column(type="integer")
     * @var int 
     */
    protected $puk;

    /**
     * @Column(type="integer")
     * @var int 
     */
    protected $puk2;

    /**
     * @Column(type="string", options={"default" : "active"})
     * @var string 
     */
    protected $status;

    /**
     * @OneToOne(targetEntity="TelNumber")
     * @JoinColumn(nullable=false)
     * @var /TelNumber
     */
    protected $telNumber;

    /**
     * 
     * @OneToMany(targetEntity="SimCard", mappedBy="mobileContract")
     * @var ArrayCollection of SimCard
     */
    protected $simCards;
    
    /**
     * @OneToMany(targetEntity="MobileBill", mappedBy="mobileContract")
     * @var ArrayCollection of bills 
     */
    protected $mobileBills;

    /**
     * 
     */
    function __construct() {
        $this->simCards = new ArrayCollection();
    }

    /**
     * 
     * @return int
     */
    function getId() {
        return $this->id;
    }

    /**
     * 
     * @return int
     */
    function getPin() {
        return $this->pin;
    }

    /**
     * 
     * @return int
     */
    function getPin2() {
        return $this->pin2;
    }

    /**
     * 
     * @return int
     */
    function getPuk() {
        return $this->puk;
    }

    /**
     * 
     * @return int
     */
    function getPuk2() {
        return $this->puk2;
    }

    /**
     * 
     * @return \TelNumber
     */
    function getTelNumber(): TelNumber {
        return $this->telNumber;
    }

    /**
     * 
     * @param int $pin
     * @return $this
     */
    function setPin($pin) {
        $this->pin = $pin;
        return $this;
    }

    /**
     * 
     * @param int $pin2
     * @return $this
     */
    function setPin2($pin2) {
        $this->pin2 = $pin2;
        return $this;
    }

    /**
     * 
     * @param int $puk
     * @return $this
     */
    function setPuk($puk) {
        $this->puk = $puk;
        return $this;
    }

    /**
     * 
     * @param int $puk2
     * @return $this
     */
    function setPuk2($puk2) {
        $this->puk2 = $puk2;
        return $this;
    }

    /**
     * 
     * @param TelNumber $telNumber
     * @return $this
     */
    function setTelNumber(TelNumber $telNumber) {
        $this->telNumber = $telNumber;
        return $this;
    }
    
    /**
     * 
     * @param SimCard $simCard
     */
    function addSimCard(SimCard $simCard) {
        $this->simCards->add($simCard);
    }
    
    /**
     * 
     * @param SimCard $simCard
     */
    function removeSimCard(SimCard $simCard) {
        $this->simCards->removeElement($simCard);
    }

}
