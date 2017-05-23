// avoid conflicts between Twig and Vue
Vue.config.delimiters = ['${', '}']

var MobileNavigation = new Vue({
	el: '#MobileNavigation',
	data: {
		items: [],
		activeItem: null
	},
	methods: {
		getItemById: function(id) {
			for (var key in this.items) {
				if (this.items[key].id == id) {
					return this.items[key];
				}
			}
		},
		itemHasChildren: function(item) {
			var items = this.getItemsByParentId(item.id);
			return items.length > 0;
		},
		getItemsByParentId: function(id) {
			return this.items.filter(function(item) {
				return item.parent == id;
			});
		},
		triggerItem: function(item, useUrl) {
			if (useUrl && item.url) {
				window.location.href = item.url;
			} else if (this.itemHasChildren(item)) {
				this.setActiveItem(item.id);
			}
		},
		getBreadcrumbItems: function(item_id) {
			var items = [];
			var item = this.getItemById(item_id);
			while (item) {
				items.unshift(item);
				var item = this.getItemById(item.parent);
			}
			return items;
		},
		addItem: function(id, title, parent, url) {
			this.items.push({
				id: id,
				title: title,
				parent: parent,
				url: url
			})
		},
		setActiveItem: function(id) {
			this.activeItem = id;
		}
	}
});


// these functions need to be global, because they may be called outside of the vue context
function showMobileNavigation() {
	$('#MobileNavigation').fadeIn();
}

function hideMobileNavigation() {
	$('#MobileNavigation').fadeOut();
}