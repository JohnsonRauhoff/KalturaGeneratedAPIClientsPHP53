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
class Playlist extends \Kaltura\Client\Type\BaseEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaylist';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->playlistContent))
			$this->playlistContent = (string)$xml->playlistContent;
		if(count($xml->filters))
		{
			if(empty($xml->filters))
				$this->filters = array();
			else
				$this->filters = \Kaltura\Client\ParseUtils::unmarshalArray($xml->filters, "KalturaMediaEntryFilterForPlaylist");
		}
		if(count($xml->totalResults))
			$this->totalResults = (int)$xml->totalResults;
		if(count($xml->playlistType))
			$this->playlistType = (int)$xml->playlistType;
		if(count($xml->plays))
			$this->plays = (int)$xml->plays;
		if(count($xml->views))
			$this->views = (int)$xml->views;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(count($xml->executeUrl))
			$this->executeUrl = (string)$xml->executeUrl;
	}
	/**
	 * Content of the playlist - 
	 * 	 XML if the playlistType is dynamic 
	 * 	 text if the playlistType is static 
	 * 	 url if the playlistType is mRss
	 * @var string
	 */
	public $playlistContent = null;

	/**
	 * 
	 * @var array<KalturaMediaEntryFilterForPlaylist>
	 */
	public $filters;

	/**
	 * Maximum count of results to be returned in playlist execution
	 * @var int
	 */
	public $totalResults = null;

	/**
	 * Type of playlist
	 * @var \Kaltura\Client\Enum\PlaylistType
	 * @insertonly
	 */
	public $playlistType = null;

	/**
	 * Number of plays
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * Number of views
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * The duration in seconds
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * The url for this playlist
	 * @var string
	 * @readonly
	 */
	public $executeUrl = null;

}
