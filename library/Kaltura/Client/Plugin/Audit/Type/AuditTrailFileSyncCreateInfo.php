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
namespace Kaltura\Client\Plugin\Audit\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class AuditTrailFileSyncCreateInfo extends \Kaltura\Client\Plugin\Audit\Type\AuditTrailInfo
{
	public function getKalturaObjectType()
	{
		return 'KalturaAuditTrailFileSyncCreateInfo';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->version))
			$this->version = (string)$xml->version;
		if(count($xml->objectSubType))
			$this->objectSubType = (int)$xml->objectSubType;
		if(count($xml->dc))
			$this->dc = (int)$xml->dc;
		if(count($xml->original))
		{
			if(!empty($xml->original) && $xml->original != 'false')
				$this->original = true;
			else
				$this->original = false;
		}
		if(count($xml->fileType))
			$this->fileType = (int)$xml->fileType;
	}
	/**
	 * 
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 * @var int
	 */
	public $objectSubType = null;

	/**
	 * 
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 * @var bool
	 */
	public $original = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailFileSyncType
	 */
	public $fileType = null;

}
