<?php
namespace Myworld\Yogendra\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Myworld\Yogendra\Model\AnimeFactory $testFactory
    )
    {
        $this->_testFactory = $testFactory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
    $test = $this->_testFactory->create();
        $test->setTitle('Test Title');
        $test->save();
        $this->setTestModel($anime);
    }
}