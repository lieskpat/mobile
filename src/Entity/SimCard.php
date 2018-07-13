<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of SimCard
 *
 * @author Lieske
 * 
 * @Entity
 * @Table(name="sim_card")
 */
class SimCard {

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
    protected $cardNumber;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $cardType;
    
    /**
     * @ManyToOne(targetEntity="MobileContract", inversedBy="simCards")
     * @var /MobileContract
     */
    protected $mobileContract;

    /**
     * 
     * @return int
     */
    function getCardNumber() {
        return $this->cardNumber;
    }

    /**
     * 
     * @param int $cardNumber
     */
    function setCardNumber($cardNumber) {
        $this->cardNumber = $cardNumber;
    }
    
    /**
     * 
     * @return string
     */
    function getCardType() {
        return $this->cardType;
    }

    /**
     * 
     * @param string $cardType
     */
    function setCardType($cardType) {
        $this->cardType = $cardType;
    }



}
