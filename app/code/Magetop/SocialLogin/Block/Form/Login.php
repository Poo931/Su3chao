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

namespace Magetop\SocialLogin\Block\Form;

/**
 * Class Login
 *
 * @package Magetop\SocialLogin\Block\Form
 */
class Login extends \Magento\Customer\Block\Form\Login
{
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return $this;
    }
}
