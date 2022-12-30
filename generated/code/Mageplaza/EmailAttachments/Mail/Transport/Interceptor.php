<?php
namespace Mageplaza\EmailAttachments\Mail\Transport;

/**
 * Interceptor class for @see \Mageplaza\EmailAttachments\Mail\Transport
 */
class Interceptor extends \Mageplaza\EmailAttachments\Mail\Transport implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($message, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, $parameters = null)
    {
        $this->___init();
        parent::__construct($message, $scopeConfig, $parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendMessage');
        return $pluginInfo ? $this->___callPlugins('sendMessage', func_get_args(), $pluginInfo) : parent::sendMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessage');
        return $pluginInfo ? $this->___callPlugins('getMessage', func_get_args(), $pluginInfo) : parent::getMessage();
    }
}
