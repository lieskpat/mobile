<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MobilContract
 *
 * @author Lieske
 * @Entity
 * @Table(name="tel_number")
 */
class TelNumber {

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
    protected $prefix;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $telephoneNumber;

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
    function getPrefix() {
        return $this->prefix;
    }

    /**
     * 
     * @return int
     */
    function getTelephoneNumber() {
        return $this->telephoneNumber;
    }

    /**
     * 
     * @param int $prefix
     */
    function setPrefix($prefix) {
        $this->prefix = $prefix;
    }

    /**
     * 
     * @param int $telephoneNumber
     */
    function setTelephoneNumber($telephoneNumber) {
        $this->telephoneNumber = $telephoneNumber;
    }

}
