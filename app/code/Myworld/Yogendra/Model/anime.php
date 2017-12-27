<?php
namespace Myworld\Yogendra\Model;
class anime extends \Magento\Framework\Model\AbstractModel implements \Myworld\Yogendra\Api\Data\animeInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'myworld_yogendra_anime';

    protected function _construct()
    {
        $this->_init('Myworld\Yogendra\Model\ResourceModel\anime');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
