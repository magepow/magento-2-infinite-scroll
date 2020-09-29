<?php

namespace Magepow\InfiniteScroll\Block;

/**
 * Class InfiniteScroll
 *
 */
class InfiniteScroll extends \Magento\Framework\View\Element\Template
{

   /**
     * InfiniteScroll constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->storeManager = $storeManager;
    }


    /**
     * getLoadingImage
     *
     * @return mixed
     */
    public function getMedia($img=null)
    {
        $urlMedia = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        if($img) return $urlMedia . $img;
        return $urlMedia;
    }

}