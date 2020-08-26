<?php

namespace Magepow\InfiniteScroll\Block;

/**
 * Class InfiniteScroll
 *
 */
class AjaxInfiniteScroll extends \Magento\Framework\View\Element\Template
{
    const XML_PATH_LOADING_IMAGE = 'magepow_infinitescroll/general/loading_image';

   /**
     * AjaxInfiniteScroll constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->storeManager = $storeManager;
        $this->scopeConfig = $scopeConfig;
    }


    /**
     * getLoadingImage
     *
     * @return mixed
     */
    public function getLoadingImage()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_LOADING_IMAGE, $storeScope);
    }

    /**
     * GetMediaPath
     *
     * @return mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getMediaPath()
    {
        return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    }
}