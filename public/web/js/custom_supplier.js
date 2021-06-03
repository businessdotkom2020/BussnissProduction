/*!
 * jquery.counterup.js 1.0
 *
 * Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
 * Released under the GPL v2 License
 *
 * Date: Nov 26, 2013
 */
(function( $ ){
	"use strict";

	$.fn.counterUp = function( options ) {

		// Defaults
		var settings = $.extend({
			'time': 400,
			'delay': 10
		}, options);

		return this.each(function(){

			// Store the object
			var $this = $(this);
			var $settings = settings;

			var counterUpper = function() {
				var nums = [];
				var divisions = $settings.time / $settings.delay;
				var num = $this.text();
				var isComma = /[0-9]+,[0-9]+/.test(num);
				num = num.replace(/,/g, '');
				var isInt = /^[0-9]+$/.test(num);
				var isFloat = /^[0-9]+\.[0-9]+$/.test(num);
				var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;

				// Generate list of incremental numbers to display
				for (var i = divisions; i >= 1; i--) {

					// Preserve as int if input was int
					var newNum = parseInt(num / divisions * i);

					// Preserve float if input was float
					if (isFloat) {
						newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
					}

					// Preserve commas if input had commas
					if (isComma) {
						while (/(\d+)(\d{3})/.test(newNum.toString())) {
							newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
						}
					}

					nums.unshift(newNum);
				}

				$this.data('counterup-nums', nums);
				$this.text('0');

				// Updates the number until we're done
				var f = function() {
					$this.text($this.data('counterup-nums').shift());
					if ($this.data('counterup-nums').length) {
						setTimeout($this.data('counterup-func'), $settings.delay);
					} else {
						delete $this.data('counterup-nums');
						$this.data('counterup-nums', null);
						$this.data('counterup-func', null);
					}
				};
				$this.data('counterup-func', f);

				// Start the count up
				setTimeout($this.data('counterup-func'), $settings.delay);
			};

			// Perform counts when the element gets into view
			$this.waypoint(counterUpper, { offset: '100%', triggerOnce: true });
		});

	};

})( jQuery );



(function ($) {
    var storeLists = {
        query: {},
        form: null,
        cateItemStringArray: [],
        init: function () {
            $("#dokan-store-listing-filter-wrap .sort-by #stores_orderby").on("change", this.buildSortByQuery);
            $("#dokan-store-listing-filter-wrap .toggle-view span").on("click", this.toggleView);
            $("#dokan-store-listing-filter-wrap .dokan-store-list-filter-button, #dokan-store-listing-filter-wrap .dokan-icons, #dokan-store-listing-filter-form-wrap .apply-filter #cancel-filter-btn ").on("click", this.toggleForm);
            $("#dokan-store-listing-filter-form-wrap .store-search-input").on("change", this.buildSearchQuery);
            $("#dokan-store-listing-filter-form-wrap .apply-filter #apply-filter-btn").on("click", this.submitForm);
            this.maybeHideListView();
            const self = storeLists;
            self.form = document.forms.dokan_store_lists_filter_form;
            const view = self.getLocal("dokan-layout");
            if (view) {
                const toggleBtns = $(".toggle-view span");
                self.setView(view, toggleBtns);
            }
            const params = self.getParams();
            if (params.length) {
                let openTheForm = !1;
                params.forEach(function (param) {
                    const keys = Object.keys(param);
                    const values = Object.values(param);
                    if (!keys.includes("stores_orderby") || params.length > 1) {
                        openTheForm = !0;
                    }
                    self.setParams(keys, values);
                });
                if (openTheForm) {
                    $("#dokan-store-listing-filter-form-wrap").slideToggle();
                }
            }
        },
        buildSortByQuery: function (event) {
            const self = storeLists;
            self.query.stores_orderby = event.target.value;
            self.submitForm(event);
        },
        toggleView: function (event) {
            const self = storeLists;
            const currentElement = $(event.target);
            const elements = currentElement.parent().find("span");
            const view = currentElement.data("view");
            self.setView(view, elements);
            self.setLocal("dokan-layout", view);
        },
        setView: function (view, elements) {
            if (typeof view === "undefined" || view.length < 1 || typeof elements === "undefined" || elements.length < 1) {
                return;
            }
            const listingWrap = $("#dokan-seller-listing-wrap");
            [...elements].forEach(function (value) {
                const element = $(value);
                if (view === element.data("view")) {
                    element.addClass("active");
                    listingWrap.addClass(view);
                } else {
                    element.removeClass("active");
                    listingWrap.removeClass(element.data("view"));
                }
            });
        },
        toggleForm: function (event) {
            event.preventDefault();
            $("#dokan-store-listing-filter-form-wrap").slideToggle();
        },
        buildSearchQuery: function (event) {
            if (event.target.value) {
                storeLists.query.dokan_seller_search = event.target.value;
            } else {
                delete storeLists.query.dokan_seller_search;
            }
        },
        submitForm: function (event) {
            event.preventDefault();
            const queryString = decodeURIComponent($.param(storeLists.query));
            window.history.pushState(null, null, `?${queryString}`);
            window.location.reload();
        },
        setLocal: function (key, value) {
            window.localStorage.setItem(key, value);
        },
        getLocal: function (key) {
            return window.localStorage.getItem(key);
        },
        setParams: function (key, value) {
            const self = storeLists;
            const elements = self.form ? self.form.elements : "";
            const sortingForm = document.forms.stores_sorting;
            const sortingFormElements = sortingForm ? sortingForm.elements : "";
            Object.values(sortingFormElements).forEach(function (element) {
                if (element.name === key[0]) {
                    $(element).val(value[0]);
                }
            });
            Object.values(elements).forEach(function (element) {
                if (key.includes(element.name)) {
                    if (element.type === "checkbox") {
                        element.checked = ["yes", "true", "1"].includes(value[0]) ? !0 : !1;
                    } else if (["text", "search"].includes(element.type)) {
                        element.value = value[0];
                    }
                }
                if (key[0].includes("store_categories[") || key[0].includes("store_category[")) {
                    const trimedValue = value[0].split(" ").join("-");
                    const cateItem = $(`[data-slug=${trimedValue}]`);
                    if (!self.cateItemStringArray.includes(cateItem.text().trim())) {
                        self.cateItemStringArray.push(cateItem.text().trim());
                    }
                    cateItem.addClass("dokan-btn-theme");
                } else if (key[0] === "rating") {
                    const trimedValue = value[0].split(" ").join("-");
                    $(`[data-${key[0]}=${trimedValue}]`).addClass("active");
                    $(`[data-rating=${trimedValue}]`).parent().addClass("selected");
                }
            });
            key.forEach(function (param, index) {
                if (!param.includes("[")) {
                    self.query[param] = value[index];
                }
            });
        },
        getParams: function () {
            const params = new URLSearchParams(location.search);
            const allParams = [];
            params.forEach(function (value, key) {
                allParams.push({ [key]: value });
            });
            return allParams;
        },
        maybeHideListView: function () {
            const self = storeLists;
            if (window.matchMedia("(max-width: 767px)").matches) {
                if ("list-view" === self.getLocal("dokan-layout")) {
                    self.setLocal("dokan-layout", "grid-view");
                }
            }
            $(window).on("resize", function () {
                const container = $(this);
                if (container.width() < 767) {
                    $("#dokan-seller-listing-wrap").removeClass("list-view");
                    $("#dokan-seller-listing-wrap").addClass("grid-view");
                } else {
                    $(".toggle-view.item span").last().removeClass("active");
                    $(".toggle-view.item span").first().addClass("active");
                }
            });
        },
    };
    if (window.dokan) {
        window.dokan.storeLists = storeLists;
        window.dokan.storeLists.init();
    }
})(jQuery);