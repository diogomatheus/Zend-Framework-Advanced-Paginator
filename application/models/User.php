<?php
class User extends Zend_Db_Table_Abstract
{
    /**
    * The default table name
    */
    protected $_name = 'user';

    /**
     * getAll function
     *
     * @desc basic query to retrieve all the data
     * @param boolean $paginate
     */
    public function getAll($paginate = false) {
        $select = $this->select()
                       ->from($this->_name);

        return ($paginate) ? $select : $this->fetchAll($select);
    }
}

