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
class PlayerEmbedCodeType extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayerEmbedCodeType';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->label))
			$this->label = (string)$xml->label;
		if(count($xml->entryOnly))
		{
			if(!empty($xml->entryOnly) && $xml->entryOnly != 'false')
				$this->entryOnly = true;
			else
				$this->entryOnly = false;
		}
		if(count($xml->minVersion))
			$this->minVersion = (string)$xml->minVersion;
	}
	/**
	 * 
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 */
	public $label = null;

	/**
	 * 
	 * @var bool
	 */
	public $entryOnly = null;

	/**
	 * 
	 * @var string
	 */
	public $minVersion = null;

}
