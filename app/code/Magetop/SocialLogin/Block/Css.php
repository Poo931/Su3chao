<?php
/**
 * Magetop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magetop.com license that is
 * available through the world-wide-web at this URL:
 * https://www.magetop.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Magetop
 * @package   Magetop_SocialLogin
 * @copyright Copyright (c) Magetop (https://www.magetop.com/)
 * @license   https://www.magetop.com/LICENSE.txt
 */

namespace Magetop\SocialLogin\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magetop\SocialLogin\Helper\Data as DataHelper;

/**
 * Class Css
 *
 * @package Magetop\SocialLogin\Block
 */
class Css extends Template
{
    /**
     * @type DataHelper
     */
    protected $_helper;

    /**
     * Css constructor.
     *
     * @param Context $context
     * @param DataHelper $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        DataHelper $helper,
        array $data = []
    ) {
        $this->_helper = $helper;

        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        if ($this->_helper->isEnabled()) {
            if ($this->_helper->getPopupLogin()) {
                $this->pageConfig->addPageAsset('Magetop_SocialLogin::css/style.css');
                $this->pageConfig->addPageAsset('Magetop_SocialLogin::css/grid-magetop.css');
                $this->pageConfig->addPageAsset('Magetop_SocialLogin::css/font-awesome.min.css');
                $this->pageConfig->addPageAsset('Magetop_SocialLogin::css/magnific-popup.css');
            } elseif (in_array(
                $this->_request->getFullActionName(),
                ['customer_account_login', 'customer_account_create', 'customer_account_index']
            )
            ) {
                $this->pageConfig->addPageAsset('Magetop_SocialLogin::css/style.css');
                $this->pageConfig->addPageAsset('Magetop_SocialLogin::css/font-awesome.min.css');
            }
        }

        return $this;
    }

    /**
     * @return DataHelper
     */
    public function helper()
    {
        return $this->_helper;
    }
}
