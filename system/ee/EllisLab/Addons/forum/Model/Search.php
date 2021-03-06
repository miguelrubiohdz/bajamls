<?php
/**
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2018, EllisLab, Inc. (https://ellislab.com)
 * @license   https://expressionengine.com/license
 */

namespace EllisLab\Addons\Forum\Model;

use EllisLab\ExpressionEngine\Service\Model\Model;

/**
 * Search Model for the Forum
 *
 * A model representing a search in the Forum.
 */
class Search extends Model {

	protected static $_primary_key = 'search_id';
	protected static $_table_name = 'forum_search';

	protected static $_typed_columns = array(
		'board_id'    => 'int',
		'search_date' => 'timestamp',
		'member_id'   => 'int',
	);

	protected static $_relationships = array(
		'Board' => array(
			'type' => 'belongsTo'
		),
		'Member' => array(
			'type'  => 'belongsTo',
			'model' => 'ee:Member',
			'inverse' => array(
				'name' => 'Search',
				'type' => 'hasMany'
			)
		),
	);

	protected static $_validation_rules = array(
		'search_date' => 'required',
		'keywords'    => 'required',
		'member_id'   => 'required',
		'ip_address'  => 'required|ipAddress',
		'topic_ids'   => 'required',
		'post_ids'    => 'required',
		'sort_order'  => 'required',
	);

	protected $search_id;
	protected $board_id;
	protected $search_date;
	protected $keywords;
	protected $member_id;
	protected $ip_address;
	protected $topic_ids;
	protected $post_ids;
	protected $sort_order;

}

// EOF
