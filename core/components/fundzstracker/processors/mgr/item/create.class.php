<?php
/**
 * Create an Item
 */
class fundzsTrackerItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'fundzsTrackerItem';
	public $classKey = 'fundzsTrackerItem';
	public $languageTopics = array('fundzstracker');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('fundzsTrackerItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('fundzstracker_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'fundzsTrackerItemCreateProcessor';