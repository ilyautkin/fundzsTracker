var fundzsTracker = function(config) {
	config = config || {};
	fundzsTracker.superclass.constructor.call(this,config);
};
Ext.extend(fundzsTracker,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('fundzstracker',fundzsTracker);

fundzsTracker = new fundzsTracker();