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
class StreamContainer extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaStreamContainer';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->trackIndex))
			$this->trackIndex = (int)$xml->trackIndex;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->channelIndex))
			$this->channelIndex = (int)$xml->channelIndex;
		if(count($xml->label))
			$this->label = (string)$xml->label;
		if(count($xml->channelLayout))
			$this->channelLayout = (string)$xml->channelLayout;
	}
	/**
	 * 
	 * @var string
	 */
	public $type = null;

	/**
	 * 
	 * @var int
	 */
	public $trackIndex = null;

	/**
	 * 
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 * @var int
	 */
	public $channelIndex = null;

	/**
	 * 
	 * @var string
	 */
	public $label = null;

	/**
	 * 
	 * @var string
	 */
	public $channelLayout = null;

}
