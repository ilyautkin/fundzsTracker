fundzsTracker.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('fundzstracker')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('fundzstracker_items')
				,items: [{
					html: _('fundzstracker_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'fundzstracker-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	fundzsTracker.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(fundzsTracker.panel.Home,MODx.Panel);
Ext.reg('fundzstracker-panel-home',fundzsTracker.panel.Home);
