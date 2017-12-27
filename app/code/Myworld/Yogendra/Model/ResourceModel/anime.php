<?php
namespace Myworld\Yogendra\Model\ResourceModel;
class anime extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('myworld_yogendra_anime','myworld_yogendra_anime_id');
    }
}
