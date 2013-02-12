<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_User extends ORM 
{
    protected $_table_name = 'users';
    protected $_has_many = array(
        'metas' => array(
            'model'         => 'meta',
            'foreign_key'   => 'user_id',
        ),
    );

    public function rules()
    {
        return array(
            'firstname' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'surname' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
        );
    }
}
