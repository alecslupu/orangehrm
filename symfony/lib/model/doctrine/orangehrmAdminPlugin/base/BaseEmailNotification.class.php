<?php

/**
 * BaseEmailNotification
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                                    $id                                          Type: integer, primary key
 * @property string                                 $name                                        Type: string(100)
 * @property int                                    $isEnable                                    Type: integer
 * @property Doctrine_Collection|EmailSubscriber[]  $EmailSubscriber                             
 *  
 * @method int                                      getId()                                      Type: integer, primary key
 * @method string                                   getName()                                    Type: string(100)
 * @method int                                      getIsenable()                                Type: integer
 * @method Doctrine_Collection|EmailSubscriber[]    getEmailSubscriber()                         
 *  
 * @method EmailNotification                        setId(int $val)                              Type: integer, primary key
 * @method EmailNotification                        setName(string $val)                         Type: string(100)
 * @method EmailNotification                        setIsenable(int $val)                        Type: integer
 * @method EmailNotification                        setEmailSubscriber(Doctrine_Collection $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmailNotification extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_email_notification');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('is_enable as isEnable', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmailSubscriber', array(
             'local' => 'id',
             'foreign' => 'notificationId'));
    }
}