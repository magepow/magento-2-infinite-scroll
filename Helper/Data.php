<?php

declare(strict_types=1);

namespace Magepow\InfiniteScroll\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var array
     */
    protected $configModule;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
        $this->configModule = $this->getConfig(strtolower($this->_getModuleName()));
    }

    /**
     * @param string $cfg
     * @return \Magento\Framework\App\Config\ScopeConfigInterface|mixed
     */
    public function getConfig(string $cfg = '')
    {
        if ($cfg) {
            return $this->scopeConfig->getValue($cfg, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        }
        return $this->scopeConfig;
    }

    /**
     * @param string $cfg
     * @param null   $value
     * @return array|\Magento\Framework\App\Config\ScopeConfigInterface|mixed|null
     */
    public function getConfigModule(string $cfg = '', $value = null)
    {
        $values = $this->configModule;
        if (!$cfg) {
            return $values;
        }
        $config = explode('/', (string) $cfg);
        $end = count($config) - 1;
        foreach ($config as $key => $vl) {
            if (isset($values[$vl])) {
                if ($key === $end) {
                    $value = $values[$vl];
                } else {
                    $values = $values[$vl];
                }
            }

        }
        return $value;
    }
}
