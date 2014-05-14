<?php
/**
 * Update an Item
 */
class fundzsTrackerItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'fundzsTrackerItem';
	public $classKey = 'fundzsTrackerItem';
	public $languageTopics = array('fundzstracker');
	public $permission = 'edit_document';
}

return 'fundzsTrackerItemUpdateProcessor';
