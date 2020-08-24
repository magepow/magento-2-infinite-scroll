<?php

namespace Magepow\InfiniteScroll\Block;

/**
 * Class InfiniteScroll
 *
 */
class AjaxInfiniteScroll extends \Magento\Framework\View\Element\Template
{
    /**
     * StoreManagerInterface
     *
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * ScopeConfigInterface
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * XML_PATH_ENABLED
     */
    const XML_PATH_ENABLED = 'magepow_ajax_infinite_scroll/general/enabled';

    /**
     * XML_PATH_DELAY
     */
    const XML_PATH_DELAY = 'magepow_ajax_infinite_scroll/selectors/delay';

    /**
     * XML_PATH_CONTENT
     */
    const XML_PATH_CONTENT = 'magepow_ajax_infinite_scroll/selectors/content';

    /**
     * XML_PATH_PAGINATION
     */
    const XML_PATH_PAGINATION = 'magepow_ajax_infinite_scroll/selectors/pagination';

    /**
     * XML_PATH_NEXT
     */
    const XML_PATH_NEXT = 'magepow_ajax_infinite_scroll/selectors/next';

    /**
     * XML_PATH_ITEM
     */
    const XML_PATH_ITEM = 'magepow_ajax_infinite_scroll/selectors/item';

    /**
     * XML_PATH_LOADING_IMAGE
     */
    const XML_PATH_LOADING_IMAGE = 'magepow_ajax_infinite_scroll/design/loading_image';

    /**
     * XML_PATH_LOADING_TEXT
     */
    const XML_PATH_LOADING_TEXT = 'magepow_ajax_infinite_scroll/design/loading_text';

    /**
     * XML_PATH_DONE_TEXT
     */
    const XML_PATH_DONE_TEXT = 'magepow_ajax_infinite_scroll/design/done_text';

     /**
     * load more
     * XML_PATH_LOAD_MORE
     */
    const XML_PATH_LOAD_MORE = 'magepow_ajax_infinite_scroll/design/load_more';
    
    /**
     *  load more text
     *  XML_PATH_LOAD_MORE_TEXT
     */
    const XML_PATH_LOAD_MORE_TEXT = 'magepow_ajax_infinite_scroll/design/load_more_text';

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
     * IsEnabled
     *
     * @return mixed
     */
    public function isEnabled()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_ENABLED, $storeScope);
    }

    /**
     * getDely
     *
     * @return mixed
     */
    public function getDelay()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_DELAY, $storeScope);
    }

    /**
     * getContent
     *
     * @return mixed
     */
    public function getContent()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_CONTENT, $storeScope);
    }

    /**
     * getPagination
     *
     * @return mixed
     */
    public function getPagination()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_PAGINATION, $storeScope);
    }

    /**
     * getNext
     *
     * @return mixed
     */
    public function getNext()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_NEXT, $storeScope);
    }

    /**
     * getItem
     *
     * @return mixed
     */
    public function getItem()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_ITEM, $storeScope);
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
     * getLoadingText
     *
     * @return mixed
     */
    public function getLoadingText()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_LOADING_TEXT, $storeScope);
    }

    /**
     * GetdoneText
     *
     * @return mixed
     */
    public function getDoneText()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_DONE_TEXT, $storeScope);
    }

    /**
     * getLoadmore
     * @return mixed
     */
    public function getLoadMore()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_LOAD_MORE, $storeScope);
    }

    /**
     * getLoadMoreText
     * @return mixed
     */
    public function getLoadMoreText()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::XML_PATH_LOAD_MORE_TEXT, $storeScope);
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