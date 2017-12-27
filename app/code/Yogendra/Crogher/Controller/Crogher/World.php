<?php
namespace Yogendra\Crogher\Controller\Crogher;
 
 
class World extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        echo"heyyy";
        return $this->resultPageFactory->create(); 
    } 
}