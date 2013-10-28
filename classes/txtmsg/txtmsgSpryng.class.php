<?php

/*
 * PHP Server Monitor v2.0.1
 * Monitor your servers with error notification
 * http://phpservermon.sourceforge.net/
 *
 * Copyright (c) 2008-2011 Pepijn Over (ipdope@users.sourceforge.net)
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 */

class txtmsgSpryng extends txtmsgCore {
	// =========================================================================
	// [ Fields ]
	// =========================================================================
	public $gateway = 1;
	public $resultcode = null;
	public $resultmessage = null;
	public $success = false;
	public $successcount = 0;

	// =========================================================================
	// [ Methods ]
	// =========================================================================
	public function setGateway($gateway) {
		$this->gateway = $gateway;
	}

	public function sendSMS($message) {
		$recipients = implode(',', $this->recipients);

		$result = $this->_auth_https_post('http://www.spryng.nl', '/SyncTextService',
			'?OPERATION=send' .
			'&USERNAME=' . $this->username .
			'&PASSWORD=' . $this->password .
			'&DESTINATION=' . $recipients .
			'&SENDER=' . $this->originator .
			'&BODY=' . $message .
			'&SMSTYPE=' . 'BUSINESS'
		);
		return $result;
	}

	protected function _auth_https_post($host, $path, $data) {

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $host . $path . $data);
		//curl_setopt($ch, CURLOPT_HEADER, 1);
		//curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
}

?>