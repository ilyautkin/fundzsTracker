<?php

/**
 * Class fundzsTrackerMainController
 */
abstract class fundzsTrackerMainController extends modExtraManagerController {
	/** @var fundzsTracker $fundzsTracker */
	public $fundzsTracker;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('fundzstracker_core_path', null, $this->modx->getOption('core_path') . 'components/fundzstracker/');
		require_once $corePath . 'model/fundzstracker/fundzstracker.class.php';

		$this->fundzsTracker = new fundzsTracker($this->modx);

		$this->addCss($this->fundzsTracker->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->fundzsTracker->config['jsUrl'] . 'mgr/fundzstracker.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			fundzsTracker.config = ' . $this->modx->toJSON($this->fundzsTracker->config) . ';
			fundzsTracker.config.connector_url = "' . $this->fundzsTracker->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('fundzstracker:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends fundzsTrackerMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}