<?php

namespace Jmcharadva\FreeShippingmsg\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper
{

	/**
   	* @var \Magento\Framework\App\Config\ScopeConfigInterface
   	*/
	protected $scopeConfig;

	public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
   	{
    	$this->scopeConfig = $scopeConfig;
   	}

	public function getStoreConfigValue($config_path)
	{		

		return $this->scopeConfig->getValue($config_path,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		
	}
}