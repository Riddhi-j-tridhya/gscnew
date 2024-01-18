<?php
/**
 * @package         FireBox
 * @version         2.1.3 Free
 * 
 * @author          FirePlugins <info@fireplugins.com>
 * @link            https://www.fireplugins.com
 * @copyright       Copyright © 2023 FirePlugins All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

namespace FireBox\Core\Analytics\Helpers;

if (!defined('ABSPATH'))
{
	exit; // Exit if accessed directly.
}

class Campaigns
{
	/**
	 * Gets top X published and draft campaigns.
	 * 
	 * @param   int    $limit
	 * 
	 * @return  array
	 */
	public static function getCampaignsList($limit = -1)
	{
		$args_published = [
			'post_type'      => 'firebox',
			'posts_per_page' => $limit,
			'post_status'    => 'publish', // Query for published posts
		];
		
		// Query for published posts
		$query_published = new \WP_Query($args_published);
		$published_posts = $query_published->get_posts();
		
		// Calculate how many draft posts we need to retrieve to reach the $limit
		$draft_limit = max(0, $limit - count($published_posts));
		
		if ($draft_limit > 0) {
			// Query for draft posts with the calculated limit
			$args_draft = [
				'post_type'      => 'firebox',
				'posts_per_page' => $draft_limit,
				'post_status'    => 'draft', // Query for draft posts
			];
		
			$query_draft = new \WP_Query($args_draft);
			$draft_posts = $query_draft->get_posts();
		} else {
			$draft_posts = [];
		}
		
		// Combine the results with published posts first and limit to $limit
		$query_results = array_merge($published_posts, $draft_posts);
		$query_results = array_slice($query_results, 0, $limit);
		
		// Create a new WP_Query object to wrap the combined results
		$combined_query = new \WP_Query();
		$combined_query->posts = $query_results;
		$combined_query->post_count = count($query_results);
		
		// Clean up both queries
		wp_reset_postdata($query_published);
		if (isset($query_draft)) {
			wp_reset_postdata($query_draft);
		}
		
		return $combined_query;
	}
}