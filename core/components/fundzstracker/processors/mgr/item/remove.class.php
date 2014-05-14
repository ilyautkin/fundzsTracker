<?php
/**
 * Remove an Item
 */
class fundzsTrackerItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'fundzsTrackerItem';
	public $classKey = 'fundzsTrackerItem';
	public $languageTopics = array('fundzstracker');

}

return 'fundzsTrackerItemRemoveProcessor';