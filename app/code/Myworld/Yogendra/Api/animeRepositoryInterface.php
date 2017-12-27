<?php
namespace Myworld\Yogendra\Api;

use Myworld\Yogendra\Api\Data\animeInterface;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Api\SearchCriteriaInterface;

interface animeRepositoryInterface 
{
    public function save(animeInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(animeInterface $page);

    public function deleteById($id);
}
