fundzsTracker.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'fundzstracker-panel-home'
			,renderTo: 'fundzstracker-panel-home-div'
		}]
	}); 
	fundzsTracker.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(fundzsTracker.page.Home,MODx.Component);
Ext.reg('fundzstracker-page-home',fundzsTracker.page.Home);