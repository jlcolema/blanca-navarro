jQuery.fn.limitScrollToContainer=function(){var a=0;jQuery(this).bind("mousewheel DOMMouseScroll touchmove",function(b){var c=b.wheelDelta||b.originalEvent&&b.originalEvent.wheelDelta||-b.detail,d=null;"mousewheel"===b.type?d=-.5*c:"DOMMouseScroll"===b.type?d=-40*c:"touchmove"===b.type&&(d=10,b.originalEvent.touches[0].pageY>a&&(d=-10),a=b.originalEvent.touches[0].pageY),d&&(b.preventDefault(),jQuery(this).scrollTop(d+jQuery(this).scrollTop()))})};