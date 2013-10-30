<?php namespace Byznaga\Html;

use View;
use Illuminate\Routing\UrlGenerator;

class HtmlBuilder extends \Illuminate\Html\HtmlBuilder {

	/**
	 * Create a new HTML builder instance.
	 *
	 * @param  \Illuminate\Routing\UrlGenerator  $url
	 * @return void
	 */
	public function __construct(UrlGenerator $url = null)
	{
		$this->url = $url;
	}

	/**
	 * [datatable description]
	 * @param  [type] $modelName [description]
	 * @param  [type] $route     [description]
	 * @param  array  $filters   [description]
	 * @return [type]            [description]
	 */
	public function table($data, $headers, $columns) 
	{
		$tableData = array(
			'data' => $data,
			'headers' => $headers,
			'columns' => $columns,
		);
		return View::make('html::table', $tableData);	
	}

}

