<?php
namespace Omnipay\VipsMobilepay;

use Omnipay\Common\AbstractGateway;

/**
 * Description of VippsMobilepay
 *
 * @author niels
 */
class Gateway extends AbstractGateway{


    /**
     * Get the processor name.
     *
     * @return string
     */
    public function getName():string {
        return 'VippsMobilepay';
    }

    /**
     * Declare the parameters that will be used to authenticate with the site.
     *
     * A getter (e.g getUsername for username) is required for each of these.
     *
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
          'merchant_id' => '',
          'secret_key' => '',
          'testMode' => false,
          'key_version' => 2,
        );
    }

    /**
     * Authorize credentials.
     *
     * @param array $parameters
     *
     * @return \Omnipay\Mercanet\Message\OffsiteAuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Mercanet\Message\OffsiteAuthorizeRequest', $parameters);
    }

    /**
     *
     * @param array $parameters
     * @return \Omnipay\Mercanet\Message\OffsiteCaptureRequest
     */
    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Mercanet\Message\OffsiteCaptureRequest', $parameters);
    }

    /**
     *
     * @param array $parameters
     * @return \Omnipay\Mercanet\Message\OffsitePurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Mercanet\Message\OffsitePurchaseRequest', $parameters);
    }

    /**
     *
     * @param array $parameters
     * @return \Omnipay\Mercanet\Message\OffsiteCompletePurchaseRequest
     */
    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Mercanet\Message\OffsiteCompletePurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Mercanet\Message\CompleteAuthorizeRequest
     */
    public function completeAuthorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Mercanet\Message\OffsiteCompleteAuthorizeRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Mercanet\Message\CompleteAuthorizeRequest
     */
    public function acceptNotification(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Mercanet\Message\OffsiteNotifyRequest', $parameters);
    }

    public function getMerchantID()
    {
        return $this->getParameter('merchant_id');
    }

    public function setMerchantID($value)
    {
        return $this->setParameter('merchant_id', $value);
    }
    public function getSecretKey()
    {
        return $this->getParameter('secret_key');
    }

    public function setSecretKey($value)
    {
        return $this->setParameter('secret_key', $value);
    }

    /**
     * @return int
     */
    public function getKeyVersion()
    {
        return $this->getParameter('key_version');
    }

    /**
     * @param string $value
     *
     * @return OffsiteGateway
     */
    public function setKeyVersion($value)
    {
        return $this->setParameter('key_version', $value);
    }

}
