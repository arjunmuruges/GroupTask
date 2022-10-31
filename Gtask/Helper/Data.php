<?php
namespace Codilar\Gtask\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
   const MODULE_ENABL  E = "custom_module/general/enable";

   public function getDefaultConfig($path)
   {
       return $this->scopeConfig->getValue($path, \Magento\Framework\App\Config\ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
   }

   public function isModuleEnabled()
   {
       return (bool) $this->getDefaultConfig(self::MODULE_ENABLE);
   }
 }