<?php

declare(strict_types=1);

namespace Magepow\InfiniteScroll\Block;

use Magento\Framework\Exception\NoSuchEntityException;

class InfiniteScroll extends \Magento\Framework\View\Element\Template
{
    private \Magento\Store\Model\StoreManagerInterface $storeManager;

    /**
     * InfiniteScroll constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface       $storeManager
     * @param array                                            $data
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
     * @param null $img
     * @return string
     */
    public function getMedia($img = null): string
    {
        $urlMedia = '';
        try {
            $urlMedia = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        } catch (NoSuchEntityException $e) {
        }

        return $img ? $urlMedia . $img : $urlMedia;
    }
}
