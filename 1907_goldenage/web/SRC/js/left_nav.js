$(document).ready(function() {
		// prevent page from jumping to top from  # href link
		$('.menu-top-menu-container li.menu-item-has-children > a').click(function(e) {
				e.preventDefault();
		});

		// remove link from menu items that have children
		$(".menu-top-menu-container li.menu-item-has-children > a").attr("href", "#");

		//  function to open / close menu items
		$(".menu-top-menu-container a").click(function() {
				var link = $(this);
				var closest_ul = link.closest("ul");
				var parallel_active_links = closest_ul.find(".active")
				var closest_li = link.closest("li");
				var link_status = closest_li.hasClass("active");
				var count = 0;

				closest_ul.find("ul").slideUp(function() {
						if (++count == closest_ul.find("ul").length)
								parallel_active_links.removeClass("active");
				});

				if (!link_status) {
						closest_li.children("ul").slideDown();
						closest_li.addClass("active");
				}
		})
})