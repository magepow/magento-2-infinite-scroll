<?php

declare(strict_types=1);

namespace Magepow\InfiniteScroll\Block;

use Magento\Framework\Exception\NoSuchEntityException;

class InfiniteScroll extends \Magento\Framework\View\Element\Template
{

    /**
     * InfiniteScroll constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array                                            $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }


    /**
     * @param null $img
     * @return string
     */
    public function getMedia($img = null): string
    {
        $urlMedia = '';
        try {
            $urlMedia = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        } catch (NoSuchEntityException $e) {
            echo 'Error: ' . $e;
        }

        return $img ? $urlMedia . $img : $urlMedia;
    }
}
