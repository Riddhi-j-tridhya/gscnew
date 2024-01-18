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

namespace FireBox\Core\Analytics\Metrics;

if (!defined('ABSPATH'))
{
	exit; // Exit if accessed directly.
}

class Conversions extends Metric
{
	public function getData()
	{
		$data = [];

		$this->applyFilters();

		$sql = $this->wpdb->prepare(
			"SELECT
				{$this->getSelect()}
			FROM
				{$this->wpdb->prefix}firebox_submissions as l
				LEFT JOIN {$this->wpdb->prefix}firebox_submission_meta as sm ON sm.submission_id = l.id
				LEFT JOIN {$this->wpdb->prefix}firebox_logs as bl ON bl.id = sm.meta_value
				{$this->getJOINs()}
			CROSS JOIN (
				SELECT '%s' AS start_date, '%s' AS end_date
			) AS outer_query
			WHERE
				(
					l.created_at >= outer_query.start_date
					AND
					l.created_at <= outer_query.end_date
				)
				AND
				sm.meta_key = 'box_log_id'
                AND
                sm.meta_value != 'null'
				{$this->sql_filters}
			GROUP BY {$this->getGroupBy()}
			{$this->getHaving()}
			ORDER BY {$this->getOrderBy()}
			{$this->getLimit()}
			{$this->getOffset()}
			",
			$this->query_placeholders
		);

		if ($this->type === 'count')
		{
			$column_value = $this->wpdb->get_col($sql);
			$data = array_sum(array_map('intval', $column_value));
		}
		else
		{
			$data = $this->wpdb->get_results($sql);
		}

		return $data;
	}

	private function getSelect()
	{
		$select = '';
		
		switch ($this->type)
		{
			case 'top_campaign':
				$select = 'bl.box as id, (select p.post_title from ' . $this->wpdb->prefix . 'posts as p WHERE p.ID = bl.box) as label, count(l.id) as total';
				break;
			
			case 'countries':
				$select = 'bl.country as label, count(l.id) as total';
				break;
			
			case 'referrers':
				$select = 'bl.referrer as label, count(l.id) as total';
				break;
			
			case 'devices':
				$select = 'bl.device as label, count(l.id) as total';
				break;
			
			case 'pages':
				$select = 'bl.page as label, count(l.id) as total';
				break;
			
			case 'weekly':
				$select = 'DATE_FORMAT(STR_TO_DATE(CONCAT(yearweek(l.created_at), " ' . firebox()->_('FB_MONDAY') . '"), \'%%X%%V %%W\'), \'%%d %%b %%y\') as label, count(l.id) as total';
				break;
			
			case 'monthly':
				$select = 'DATE_FORMAT(l.created_at, \'%%b %%Y\') as label, COUNT(l.id) as total';
				break;
			
			case 'day_of_week':
				$select = 'DAYNAME(l.created_at) as label, COUNT(l.id) as total';
				break;
			
			case 'list':
			default:
				$partA = 'date(l.created_at) as label';

				if ($this->isSingleDay())
				{
					$partA = 'CONCAT(DATE_FORMAT(l.created_at, \'%H\'), \':00\') as label';
				}

				$select = $partA . ', count(l.id) as total';
				break;
			
			case 'count':
				$select = 'COUNT(l.id) as total';
				break;
		}
		
		return $select;
	}

	private function getGroupBy()
	{
		$groupby = 'date(l.created_at)';

		if ($this->isSingleDay())
		{
			$groupby = 'CONCAT(DATE_FORMAT(l.created_at, \'%H\'), \':00\')';
		}
		
		if ($this->type === 'top_campaign')
		{
			$groupby = 'bl.box';
		}
		else if ($this->type === 'countries')
		{
			$groupby = 'bl.country';
		}
		else if ($this->type === 'referrers')
		{
			$groupby = 'bl.referrer';
		}
		else if ($this->type === 'devices')
		{
			$groupby = 'bl.device';
		}
		else if ($this->type === 'pages')
		{
			$groupby = 'bl.page';
		}
		else if ($this->type === 'weekly')
		{
			$groupby = 'yearweek(l.created_at)';
		}
		else if ($this->type === 'monthly')
		{
			$groupby = 'YEAR(l.created_at), MONTH(l.created_at)';
		}
		else if ($this->type === 'day_of_week')
		{
			$groupby = 'label';
		}

		return $groupby;
	}

	private function getOrderBy()
	{
		$orderby = 'l.created_at DESC';

		if (in_array($this->type, ['top_campaign', 'countries', 'referrers', 'devices', 'pages', 'day_of_week']))
		{
			$orderby = 'total DESC';
		}
		
		if (isset($this->options['orderby']))
		{
			$orderby = $this->options['orderby'];
		}

		return $orderby;
	}

	private function getHaving()
	{
		$having = '';

		if ($this->type === 'countries')
		{
			$having = 'bl.country IS NOT NULL';
		}

		$having = $having ? 'HAVING ' . $having : '';
		
		return $having;
	}
}