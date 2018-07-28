$(function() {
	var
	// ACTIVITY INDICATOR

		activityIndicatorOn = function() {
			$('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
		},
		activityIndicatorOff = function() {
			$('#imagelightbox-loading').remove();
		},

		// OVERLAY

		overlayOn = function() {
			$('<div id="imagelightbox-overlay"></div>').appendTo('body');
		},
		overlayOff = function() {
			$('#imagelightbox-overlay').remove();
		},

		// CLOSE BUTTON

		closeButtonOn = function(instance) {
			$('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function() {
				$(this).remove();
				instance.quitImageLightbox();
				return false;
			});
		},
		closeButtonOff = function() {
			$('#imagelightbox-close').remove();
		},

		// ARROWS

		arrowsOn = function(instance, selector) {
			var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

			$arrows.appendTo('body');

			$arrows.on('click touchend', function(e) {
				e.preventDefault();

				var $this = $(this),
					$target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
					index = $target.index(selector);

				if ($this.hasClass('imagelightbox-arrow-left')) {
					index = index - 1;
					if (!$(selector).eq(index).length)
						index = $(selector).length;
				} else {
					index = index + 1;
					if (!$(selector).eq(index).length)
						index = 0;
				}

				instance.switchImageLightbox(index);
				return false;
			});
		},
		arrowsOff = function() {
			$('.imagelightbox-arrow').remove();
		};

	var gallery = 'a[data-imagelightbox="gal"]';
	var instanceGal = $(gallery).imageLightbox({
		preloadNext: false,
		onStart: function() {
			overlayOn();
			closeButtonOn(instanceGal);
			arrowsOn(instanceGal, gallery);
		},
		onEnd: function() {
			overlayOff();
			closeButtonOff();
			arrowsOff();
			activityIndicatorOff();
		},
		onLoadStart: function() {
			activityIndicatorOn();
		},
		onLoadEnd: function() {
			$('.imagelightbox-arrow').css('display', 'block');
			activityIndicatorOff();
		}
	});

});