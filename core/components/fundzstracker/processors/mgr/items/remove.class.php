<?php
/**
 * Remove an Items
 */
class fundzsTrackerItemsRemoveProcessor extends modProcessor {
    public $checkRemovePermission = true;
	public $objectType = 'fundzsTrackerItem';
	public $classKey = 'fundzsTrackerItem';
	public $languageTopics = array('fundzstracker');

	public function process() {

        foreach (explode(',',$this->getProperty('items')) as $id) {
            $item = $this->modx->getObject($this->classKey, $id);
            $item->remove();
        }
        
        return $this->success();

	}

}

return 'fundzsTrackerItemsRemoveProcessor';