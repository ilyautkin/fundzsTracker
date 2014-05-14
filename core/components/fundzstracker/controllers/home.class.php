<?php
/**
 * The home manager controller for fundzsTracker.
 *
 */
class fundzsTrackerHomeManagerController extends fundzsTrackerMainController {
	/* @var fundzsTracker $fundzsTracker */
	public $fundzsTracker;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('fundzstracker');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->fundzsTracker->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->fundzsTracker->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->fundzsTracker->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "fundzstracker-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->fundzsTracker->config['templatesPath'] . 'home.tpl';
	}
}