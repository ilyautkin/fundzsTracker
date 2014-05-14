<?php
/**
 * Get an Item
 */
class fundzsTrackerItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'fundzsTrackerItem';
	public $classKey = 'fundzsTrackerItem';
	public $languageTopics = array('fundzstracker:default');
}

return 'fundzsTrackerItemGetProcessor';