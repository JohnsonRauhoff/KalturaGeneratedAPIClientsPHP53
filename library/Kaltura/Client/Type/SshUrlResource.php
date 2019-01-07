<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * Used to ingest media that is available on remote SSH server and accessible using the supplied URL, media file will be downloaded using import job in order to make the asset ready.
 * @package Kaltura
 * @subpackage Client
 */
class SshUrlResource extends \Kaltura\Client\Type\UrlResource
{
	public function getKalturaObjectType()
	{
		return 'KalturaSshUrlResource';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->privateKey))
			$this->privateKey = (string)$xml->privateKey;
		if(count($xml->publicKey))
			$this->publicKey = (string)$xml->publicKey;
		if(count($xml->keyPassphrase))
			$this->keyPassphrase = (string)$xml->keyPassphrase;
	}
	/**
	 * SSH private key
	 * @var string
	 */
	public $privateKey = null;

	/**
	 * SSH public key
	 * @var string
	 */
	public $publicKey = null;

	/**
	 * Passphrase for SSH keys
	 * @var string
	 */
	public $keyPassphrase = null;

}
