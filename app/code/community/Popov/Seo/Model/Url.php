<?php
/**
 * @category Popov
 * @package Popov_Seo
 * @author Serhii Popov <popow.serhii@gmail.com>
 * @datetime: 27.06.15 23:47
 */
class Popov_Seo_Model_Url extends ManaPro_FilterSeoLinks_Model_Url {

	public function getUrl($routePath = null, $routeParams = null) {
		$url = parent::getUrl($routePath, $routeParams);

		return rtrim($url, '/');
	}

}