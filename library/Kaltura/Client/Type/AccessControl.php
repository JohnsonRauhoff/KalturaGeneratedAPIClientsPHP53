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
 * @package Kaltura
 * @subpackage Client
 */
class AccessControl extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAccessControl';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->isDefault))
			$this->isDefault = (int)$xml->isDefault;
		if(count($xml->restrictions))
		{
			if(empty($xml->restrictions))
				$this->restrictions = array();
			else
				$this->restrictions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->restrictions, "KalturaBaseRestriction");
		}
		if(count($xml->containsUnsuportedRestrictions))
		{
			if(!empty($xml->containsUnsuportedRestrictions) && $xml->containsUnsuportedRestrictions != 'false')
				$this->containsUnsuportedRestrictions = true;
			else
				$this->containsUnsuportedRestrictions = false;
		}
	}
	/**
	 * The id of the Access Control Profile
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The name of the Access Control Profile
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Access Control Profile
	 * @var string
	 */
	public $systemName = null;

	/**
	 * The description of the Access Control Profile
	 * @var string
	 */
	public $description = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * True if this Conversion Profile is the default
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Array of Access Control Restrictions
	 * @var array<KalturaBaseRestriction>
	 */
	public $restrictions;

	/**
	 * Indicates that the access control profile is new and should be handled using KalturaAccessControlProfile object and accessControlProfile service
	 * @var bool
	 * @readonly
	 */
	public $containsUnsuportedRestrictions = null;

}
