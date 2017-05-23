var MobileNavigation = new Vue({
    el: "#MobileNavigation",
    data: {
        items: [],
        activeItem: null
    },
    methods: {
        getItemById: function(id)
{
            for (var key in this.items)
{
                if (this.items[key].id === id)
{
                    return this.items[key];
                }
            }
            return null;
        },
        itemHasChildren: function({id: id})
{
            var items = this.getItemsByParentId(id);

            return items.length > 0;
        },
        getItemsByParentId: function(id)
{
            return this.items.filter(function(item)
{
                return item.parent === id;
            });
        },
        triggerItem: function(item, useUrl)
{
            if (useUrl && item.url)
{
                window.location.href = item.url;
            }
            else if (this.itemHasChildren(item))
{
                this.setActiveItem(item.id);
            }
        },
        getBreadcrumbItems: function(itemId)
{
            var items = [];
            var tmp = this.getItemById(itemId);

            while (tmp)
{
                items.unshift(tmp);
                tmp = this.getItemById(tmp.parent);
            }
            return items;
        },
        addItem: function(id, title, parent, url)
{
            this.items.push({
                id: id,
                title: title,
                parent: parent,
                url: url
            });
        },
        setActiveItem: function(id)
{
            this.activeItem = id;
        },
        doNothing: function()
{
            // console.log('doing nothing');
        }
    }
});

// lint requires us to do something with MobileNavigation. of course this is not the best fix :P
MobileNavigation.doNothing();

// these functions need to be global, because they may be called outside of the vue context
/*eslint-disable */
function showMobileNavigation() {
    $('#MobileNavigation').fadeIn();
}
function hideMobileNavigation() {
    $('#MobileNavigation').fadeOut();
}
/*eslint-enable */
