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
namespace Kaltura\Client\Plugin\EventNotification\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class EventNotificationTemplateBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEventNotificationTemplateBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
		if(count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationTemplateType
	 */
	public $typeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\EventNotification\Enum\EventNotificationTemplateStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

}
