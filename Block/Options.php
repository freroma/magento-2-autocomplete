<?php
namespace Freroma\OptionsAutocomplete\Block;

class Options extends \Magento\Framework\View\Element\Template
{
    protected $helperData;

	public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Freroma\OptionsAutocomplete\Helper\Data $helperData
        )
	{
        parent::__construct($context);
        $this->helperData = $helperData;
    }
    
    public function isEnable()
    {
        return $this->helperData->getGeneralConfig('enable');
    }

    public function placeholderText()
    {
        return $this->helperData->getGeneralConfig('placeholder_text');
    }

}