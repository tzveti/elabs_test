<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Meta extends ORM 
{
    protected $_table_name = 'users_meta';
    protected $_belongs_to = array (
        'meta' => array (
            'model'         => 'user',
            'foreign_key'   => 'user_id'
        )
    );

    public function rules()
    {
        return array(
            'key' => array(
                array('not_empty'),
                array('min_length', array(':value', 1)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'value' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 200)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'user_id' => array(
                array('not_empty'),
                array('min_length', array(':value', 1)),
                array('max_length', array(':value', 11)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
        );
    }
}