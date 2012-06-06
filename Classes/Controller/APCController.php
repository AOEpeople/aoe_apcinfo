<?php
/***************************************************************
 * Copyright notice
 *
 * (c) 2010 AOE media GmbH <dev@aoemedia.de>
 * All rights reserved
 *
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @package searchperience
 */
class Tx_AoeApc_Controller_APCController extends Tx_Searchperience_Controller_AbstractConfigurationBasedController {

	/**
	 * @retrun void
	 */
	public function indexAction() {
		ob_start();
			require_once  dirname(__FILE__).'/../Contribute/apc-status.php';
			$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
}