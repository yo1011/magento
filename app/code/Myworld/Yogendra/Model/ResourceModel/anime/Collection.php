<?php
namespace Myworld\Yogendra\Model\ResourceModel\anime;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Myworld\Yogendra\Model\anime','Myworld\Yogendra\Model\ResourceModel\anime');
    }
}
