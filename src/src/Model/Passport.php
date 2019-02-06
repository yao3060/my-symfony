<?php
// src/Passport.php
namespace App\Model;

/**
 * @Entity 
 * @Table(name="passports")
 **/
class Passport
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /** @Column(type="string") **/
    protected $name;
    
    /** @Column(type="string") */
    protected $name_cn;

    /** @Column(type="string", unique=true, length=36) */
    protected $passport_no;

    /** @Column(type="date", nullable=true) */
    protected $birth_date;

    /** @Column(type="date", nullable=true) */
    protected $expiry_date;
    

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setNameCn($name_cn)
    {
        $this->name_cn = $name_cn;
    }

    public function setPassportNO($passport_no)
    {
        $this->passport_no = $passport_no;
    }
}