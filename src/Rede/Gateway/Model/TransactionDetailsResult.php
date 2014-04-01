<?php namespace Rede\Gateway\Model;

/**
 * 
 * @author Lucas Zerma - <lzerma@gmail.com>
 * @since 01/04/2014
 * @project www.lucaszerma.com/eredegw
 * @see https://github.com/lzerma/gateway_rede
 *
 */
class TransactionDetailsResult {

	/**
	 * 
	 * @var Transaction reference number attributed by the acquirer. It is the NSU.
	 */
	private $authHostReference;
	
	/**
	 * 
	 * @var Reference ERede use for historical transaction, the uuid on gateway. 
	 */
	private $gatewayReference;
	
	/**
	 * 
	 * @var unknown
	 */
	private $extendedResponseMessage;
	
	/**
	 * 
	 * @var unknown
	 */
	private $extendedStatus;
	
	/**
	 * 
	 * @var unknown
	 */
	private $merchantReference;
	
	/**
	 * 
	 * @var unknown
	 */
	private $mid;
	
	/**
	 * 
	 * @var unknown
	 */
	private $mode;
	
	/**
	 * 
	 * @var unknown
	 */
	private $reason;
	
	/**
	 * 
	 * @var unknown
	 */
	private $status;
	
	/**
	 * 
	 * @var unknown
	 */
	private $time;
	
	/**
	 * 
	 * @var CardResult
	 */
	private $cardResult;
	
	/**
	 * 
	 * @param SimpleXMLElement $result
	 */
	public function __construct($result) {
		
		$this->setAuthHostReference($result->auth_host_reference);
		$this->setCardResult(new CardResult($result));
		$this->setGatewayReference($result->gateway_reference);
		$this->setExtendedResponseMessage($result->extended_response_message);
		$this->setExtendedStatus($result->extended_status);
		$this->setMerchantReference($result->merchantreference);
		$this->setMid($result->mid);
		$this->setMode($result->mode);
		$this->setReason($result->reason);
		$this->setStatus($result->status);
		$this->setTime($result->time);
	}
	
	/**
	 * @return the $authHostReference
	 */
	public function getAuthHostReference() {
		return $this->authHostReference;
	}

	/**
	 * @return the $gatewayReference
	 */
	public function getGatewayReference() {
		return $this->gatewayReference;
	}

	/**
	 * @return the $extendedResponseMessage
	 */
	public function getExtendedResponseMessage() {
		return $this->extendedResponseMessage;
	}

	/**
	 * @return the $extendedStatus
	 */
	public function getExtendedStatus() {
		return $this->extendedStatus;
	}

	/**
	 * @return the $merchantReference
	 */
	public function getMerchantReference() {
		return $this->merchantReference;
	}

	/**
	 * @return the $mid
	 */
	public function getMid() {
		return $this->mid;
	}

	/**
	 * @return the $mode
	 */
	public function getMode() {
		return $this->mode;
	}

	/**
	 * @return the $reason
	 */
	public function getReason() {
		return $this->reason;
	}

	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return the $time
	 */
	public function getTime() {
		return $this->time;
	}

	/**
	 * 
	 * @return \Rede\Gateway\Model\CardResult
	 */
	public function getCardResult() {
		return $this->cardResult;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $authHostReference
	 */
	public function setAuthHostReference($authHostReference) {
		$this->authHostReference = (string) $authHostReference;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $gatewayReference
	 */
	public function setGatewayReference($gatewayReference) {
		$this->gatewayReference = (string) $gatewayReference;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $extendedResponseMessage
	 */
	public function setExtendedResponseMessage($extendedResponseMessage) {
		$this->extendedResponseMessage = (string) $extendedResponseMessage;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $extendedStatus
	 */
	public function setExtendedStatus($extendedStatus) {
		$this->extendedStatus = (string) $extendedStatus;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $merchantReference
	 */
	public function setMerchantReference($merchantReference) {
		$this->merchantReference = (string) $merchantReference;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $mid
	 */
	public function setMid($mid) {
		$this->mid = (string) $mid;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $mode
	 */
	public function setMode($mode) {
		$this->mode = (string) $mode;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $reason
	 */
	public function setReason($reason) {
		$this->reason = (string) $reason;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $status
	 */
	public function setStatus($status) {
		$this->status = (string) $status;
	}

	/**
	 * @param \Rede\Gateway\Model\unknown $time
	 */
	public function setTime($time) {
		$this->time = (int) $time;
	}

	/**
	 * @param \Rede\Gateway\Model\CardResult $card
	 */
	public function setCardResult($cardResult) {
		$this->cardResult = $cardResult;
	}

}