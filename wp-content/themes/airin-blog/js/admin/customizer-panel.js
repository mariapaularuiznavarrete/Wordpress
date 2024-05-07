/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* Copyright © Airin Blog by DMCWebZone. All Rights Reserved.
* @package Airin Blog
* Description: Customizer panel
* ------------------------------------------------------------------------------ */


jQuery(document).ready(function($) {

	'use strict';

	//? ---------- Hiding minor settings when deactivating the main setting (fluently)

	// Ticker in top bar
	wp.customize('airinblog_cus_ticker', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_ticker_"], \
				[id^="customize-control-airinblog_cus_date"]').hide(200);
			} else if (set == 2) {
				$('[id^="customize-control-airinblog_cus_date"], \
				#customize-control-airinblog_cus_ticker_width, \
				#customize-control-airinblog_cus_ticker_color, \
				#customize-control-airinblog_cus_ticker_size, \
				#customize-control-airinblog_cus_ticker_up').show(150);
				$('[id^="customize-control-airinblog_cus_ticker_cat"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_ticker_"]').show(150);
				$('[id^="customize-control-airinblog_cus_date"]').hide(200);
			}
	    });
	});

	// Where to get the date
	wp.customize('airinblog_cus_date', function(control) {
		control.bind(function(set) {
			if (set == 2) {
				$('[id^="customize-control-airinblog_cus_date_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_date_"]').show(150);
			}
		});
	});

	// Top menu settings
	wp.customize('airinblog_cus_top_menu', function(control) {
	    control.bind(function(set) {
		  	if (set == 1) {
				$('[id^="customize-control-airinblog_cus_top_menu_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_top_menu_"]').show(150);
			}
	    });
	});

	// Logo option settings
	wp.customize('airinblog_cus_title_tagline_logo_var', function(control) {
	    control.bind(function(set) {
		  	if (set == 'fix') {
				$('#customize-control-custom_logo').show(150);
				$('#customize-control-airinblog_cus_supple_logo').hide(200);
			} else {
				$('#customize-control-airinblog_cus_supple_logo').show(150);
				$('#customize-control-custom_logo').hide(200);
			}
	    });
	});

	// Social Links
	wp.customize('airinblog_cus_soc', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_soc_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_soc_"]').show(150);
			}
	    });
	});

	// Social link form
	wp.customize('airinblog_cus_soc_form', function(control) {
	    control.bind(function(set) {
		  	if (set == 'without-background') {
				$('#customize-control-airinblog_cus_soc_design_no_back').show(150);
				$('#customize-control-airinblog_cus_soc_design_back').hide(200);
			} else {
				$('#customize-control-airinblog_cus_soc_design_back').show(150);
				$('#customize-control-airinblog_cus_soc_design_no_back').hide(200);
			}
	    });
	});

	// Search
	wp.customize('airinblog_cus_search', function(control) {
	    control.bind(function(set) {
		  	if (set == 'off') {
				$('[id^="customize-control-airinblog_cus_search_"]').hide(200);
			} else if (set == 'top-bar') {
				$('#customize-control-airinblog_cus_search_size').show(150);
				$('#customize-control-airinblog_cus_search_soc').hide(200);
			} else {
				$('#customize-control-airinblog_cus_search_soc').show(150);
				wp.customize('airinblog_cus_search_soc', function(setting) {
					var set_chield = setting.get();
					var soc = wp.customize('airinblog_cus_soc').get();
					if (set_chield == 1 && soc == 1) {
						$('#customize-control-airinblog_cus_search_size').hide(200);
					} else {
						$('#customize-control-airinblog_cus_search_size').show(150);
					}
				});
			}
	    });
	});
	wp.customize('airinblog_cus_search_soc', function(control) {
		control.bind(function(set) {
			var soc = wp.customize('airinblog_cus_soc').get();
			if (set == 1 && soc == 1) {
				$('#customize-control-airinblog_cus_search_size').hide(200);
			} else {
				$('#customize-control-airinblog_cus_search_size').show(150);
			}
		});
	});

	// Main menu settings
	wp.customize('airinblog_cus_main_menu', function(control) {
	    control.bind(function(set) {
		  	if (set == 1) {
				$('[id^="customize-control-airinblog_cus_main_menu_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_main_menu_"]').show(150);
			}
	    });
	});

	// "Read more" button in categories
	wp.customize('airinblog_cus_cat_style_more', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_cat_style_more_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_cat_style_more_"]').show(150);
			}
	    });
	});

	// Meta tags in categories
	wp.customize('airinblog_cus_cat_meta', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_cat_meta_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_cat_meta_"]').show(150);
			}
	    });
	});

	// Meta tags in posts
	wp.customize('airinblog_cus_post_meta', function(control) {
	    control.bind(function(conVal) {
		  	if (conVal == 0) {
				$('[id^="customize-control-airinblog_cus_post_meta_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_post_meta_"]').show(150);
			}
	    });
	});

	// Bulleted Lists
	wp.customize('airinblog_cus_post_li_mark', function(control) {
		control.bind(function(set) {
			if (set == 'v0') {
				$('#customize-control-airinblog_cus_post_li_mark_color').hide(200);
			} else {
				$('#customize-control-airinblog_cus_post_li_mark_color').show(150);
			}
		});
	});

	// Numbered Lists
	wp.customize('airinblog_cus_post_li_num', function(control) {
		control.bind(function(set) {
			if (set == 'v0') {
				$('[id^="customize-control-airinblog_cus_post_li_num_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_post_li_num_"]').show(150);
			}
		});
	});

	// Quote Blocks
	wp.customize('airinblog_cus_post_quote', function(control) {
	    control.bind(function(set) {
		  	if (set == 'v0') {
				$('[id^="customize-control-airinblog_cus_post_quote_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_post_quote_"]').show(150);
			}
	    });
	});

	// Icon for block quotes
	wp.customize('airinblog_cus_post_quote_icon', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_post_quote_icon_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_post_quote_icon_"]').show(150);
			}
	    });
	});

	// Titles H2
	wp.customize('airinblog_cus_post_h2', function(control) {
	    control.bind(function(set) {
		  	if (set == 'off') {
				$('[id^="customize-control-airinblog_cus_post_h2_"]').hide(200);
			} else if (set == 'v1' || set == 'v2') {
				$('[id^="customize-control-airinblog_cus_post_h2_"]').show(150);
				$('#customize-control-airinblog_cus_post_h2_icon_select, \
				#customize-control-airinblog_cus_post_h2_count_text, \
				#customize-control-airinblog_cus_post_h2_tag, \
				#customize-control-airinblog_cus_post_h2_icon_text_color').hide();
			} else if (set == 'v3') {
				$('[id^="customize-control-airinblog_cus_post_h2_"]').show(150);
				$('#customize-control-airinblog_cus_post_h2_icon_select, \
				#customize-control-airinblog_cus_post_h2_tag').hide();
			} else if (set == 'v4') {
				$('[id^="customize-control-airinblog_cus_post_h2_"]').show(150);
				$('#customize-control-airinblog_cus_post_h2_count_text, \
				#customize-control-airinblog_cus_post_h2_tag').hide();
			} else if (set == 'v5') {
				$('[id^="customize-control-airinblog_cus_post_h2_"]').show(150);
				$('#customize-control-airinblog_cus_post_h2_icon_select, \
				#customize-control-airinblog_cus_post_h2_count_text').hide();
			} else {
				$('[id^="customize-control-airinblog_cus_post_h2_"]').show(150);
				$('#customize-control-airinblog_cus_post_h2_icon_select, \
				#customize-control-airinblog_cus_post_h2_count_text, \
				#customize-control-airinblog_cus_post_h2_tag, \
				#customize-control-airinblog_cus_post_h2_icon_text_color, \
				#customize-control-airinblog_cus_post_h2_element_color').hide();
			}
	    });
	});

	// Titles H3 - H6
	wp.customize('airinblog_cus_post_h36', function(control) {
	    control.bind(function(set) {
		  	if (set == 'off') {
				$('[id^="customize-control-airinblog_cus_post_h36_"]').hide(200);
			} else if (set == 'v1' || set == 'v2') {
				$('[id^="customize-control-airinblog_cus_post_h36_"]').show(150);
				$('#customize-control-airinblog_cus_post_h36_icon_select, \
				#customize-control-airinblog_cus_post_h36_count_text, \
				#customize-control-airinblog_cus_post_h36_tag, \
				#customize-control-airinblog_cus_post_h36_icon_text_color').hide();
			} else if (set == 'v3') {
				$('[id^="customize-control-airinblog_cus_post_h36_"]').show(150);
				$('#customize-control-airinblog_cus_post_h36_icon_select, \
				#customize-control-airinblog_cus_post_h36_tag').hide();
			} else if (set == 'v4') {
				$('[id^="customize-control-airinblog_cus_post_h36_"]').show(150);
				$('#customize-control-airinblog_cus_post_h36_count_text, \
				#customize-control-airinblog_cus_post_h36_tag').hide();
			} else if (set == 'v5') {
				$('[id^="customize-control-airinblog_cus_post_h36_"]').show(150);
				$('#customize-control-airinblog_cus_post_h36_icon_select, \
				#customize-control-airinblog_cus_post_h36_count_text').hide();
			} else {
				$('[id^="customize-control-airinblog_cus_post_h36_"]').show(150);
				$('#customize-control-airinblog_cus_post_h36_icon_select, \
				#customize-control-airinblog_cus_post_h36_count_text, \
				#customize-control-airinblog_cus_post_h36_tag, \
				#customize-control-airinblog_cus_post_h36_icon_text_color, \
				#customize-control-airinblog_cus_post_h36_element_color').hide();
			}
	    });
	});

	// Author block
	wp.customize('airinblog_cus_post_bio', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id*="_cus_post_bio_"]').hide(200);
			} else {
				$('[id*="_cus_post_bio_"]').show(150);
			}
	    });
	});

	// Author block separator variation
	wp.customize('airinblog_cus_post_bio_design', function(control) {
	    control.bind(function(set) {
		  	if (set == 'v0' || set == 'v1' || set == 'v2') {
				$('[id^="customize-control-airinblog_cus_post_bio_design_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_post_bio_design_"]').show(150);
			}
	    });
	});

	// Author's latest posts in the author's block
	wp.customize('airinblog_cus_post_bio_related', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_post_bio_related_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_post_bio_related_"]').show(150);
			}
	    });
	});

	// Similar posts
	wp.customize('airinblog_cus_post_related', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_post_related_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_post_related_"]').show(150);
			}
	    });
	});

	

	// Enable Recent Posts Section on Homepage
	wp.customize('airinblog_cus_home_article_block', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('#customize-control-airinblog_cus_home_article_block_h').hide(200);
			} else {
				$('#customize-control-airinblog_cus_home_article_block_h').show(150);
			}
	    });
	});

	

	// Activate Link "Home" in bread crumbs
	wp.customize('airinblog_cus_bread_main', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('#customize-control-airinblog_cus_bread_main_text').hide(200);
			} else {
				$('#customize-control-airinblog_cus_bread_main_text').show(150);
			}
	    });
	});

	// Fluently movement of blocks
	wp.customize('airinblog_cus_flow_block', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_flow_block_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_flow_block_"]').show(150);
			}
	    });
	});

	// Categories on the site map
	wp.customize('airinblog_cus_sitemap_cat', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_sitemap_cat_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_sitemap_cat_"]').show(150);
			}
	    });
	});

	// Posts on the site map
	wp.customize('airinblog_cus_sitemap_post', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_sitemap_post_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_sitemap_post_"]').show(150);
			}
	    });
	});

	// Pages on the site map
	wp.customize('airinblog_cus_sitemap_page', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_sitemap_page_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_sitemap_page_"]').show(150);
			}
	    });
	});

	// Up button
	wp.customize('airinblog_cus_top_scroll', function(control) {
	    control.bind(function(set) {
		  	if (set == 1) {
				$('[id^="customize-control-airinblog_cus_top_scroll_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_top_scroll_"]').show(150);
			}
	    });
	});

	

	// Underline titles of all classic widgets
	wp.customize('airinblog_cus_widget_sidebar_h_border', function(control) {
	    control.bind(function(set) {
		  	if (set == 'v0') {
				$('#customize-control-airinblog_cus_widget_sidebar_h_border_size').hide(200);
			} else {
				$('#customize-control-airinblog_cus_widget_sidebar_h_border_size').show(150);
			}
	    });
	});

	

	// Bottom part
	wp.customize('airinblog_cus_footer', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_footer_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_footer_"]').show(150);
			}
	    });
	});

	// Lower menu
	wp.customize('airinblog_cus_footer_menu', function(control) {
	    control.bind(function(set) {
		  	if (set == 0) {
				$('[id^="customize-control-airinblog_cus_footer_menu_"]').hide(200);
			} else {
				$('[id^="customize-control-airinblog_cus_footer_menu_"]').show(150);
			}
	    });
	});

	


	//? ---------- Blocks with sorting (home page and social links)

	function airinblog_fun_refresh_elastic_values() {
		$(".multi-elastic-field-control-wrap").each(function() {
			var values = []; 
			var $this = $(this);
			$this.find(".multi-elastic-field-control").each(function() {
				var valueToPush = {};
				$(this).find('[data-name]').each(function() {
					var dataName = $(this).attr('data-name');
					var inputue = $(this).val();
					valueToPush[dataName] = inputue;
				});
				values.push(valueToPush);
			});
			$this.next('.multi-elastic-collector').val(JSON.stringify(values)).trigger('change');
		});
	}


	// Show hidden field
	function airinblog_fun_display_set_options() {
		// Dynamically hiding or adding settings
		
	}


    $('#customize-theme-controls').on('click','.multi-elastic-field-title', function() {
        $(this).next().slideToggle();
        $(this).closest('.multi-elastic-field-control').toggleClass('expanded');
    });

    $('#customize-theme-controls').on('click', '.multi-elastic-field-close', function() {
    	$(this).closest('.multi-elastic-fields').slideUp();
    	$(this).closest('.multi-elastic-field-control').toggleClass('expanded');
    });

    $("body").on("click",'.airinblog-add-control-field', function() {
        
		var $this = $(this).parent();
		if (typeof $this != 'undefined') {

            var field = $this.find(".multi-elastic-field-control:first").clone();
            if (typeof field != 'undefined') {
          
				field.find(".airinblog-def-checkbox").each(function() {
                	var defaultValue = $(this).next('input[data-name]').attr('data-default');
                	$(this).next('input[data-name]').val(defaultValue);
                	
                	$(this).find('input[type="checkbox"]').each(function() {
	                	if ($(this).val() == defaultValue) {
	                		$(this).prop('checked', 1);
							$(this).val(1);
	                	} else {
	                		$(this).prop('checked', 0);
							$(this).val(0);
	                	}
                	});
                });

				field.find("input[type='color'][data-name]").each(function() {
                	var defaultValue = $(this).attr('data-default');
                	$(this).val(defaultValue);
                });

				field.find("input[type='number'][data-name]").each(function() {
                	var defaultValue = $(this).attr('data-default');
                	$(this).val(defaultValue);
                });

                field.find("input[type='text'][data-name]").each(function() {
                	var defaultValue = $(this).attr('data-default');
                	$(this).val(defaultValue);
                });

				field.find("input[type='hidden'][data-name]").each(function() {
                	var defaultValue = $(this).attr('data-default');
					if ($(this).val() == defaultValue) {
                		defaultValue = Math.floor(Math.random() * 9999) + 99;
                	}
					$(this).val(defaultValue);
                });

                field.find("textarea[data-name]").each(function() {
                	var defaultValue = $(this).attr('data-default');
                	$(this).val(defaultValue);
                });

                field.find("select[data-name]").each(function() {
                	var defaultValue = $(this).attr('data-default');
                	$(this).val(defaultValue);                    
                });

                field.find(".radio-labels input[type='radio']").each(function() {
                	var defaultValue = $(this).closest('.radio-labels').next('input[data-name]').attr('data-default');
                	$(this).closest('.radio-labels').next('input[data-name]').val(defaultValue);
                	
                	if ($(this).val() == defaultValue) {
                		$(this).prop('checked',true);
                	} else {
                		$(this).prop('checked',false);
                	}
                });

                field.find(".selector-labels label").each(function() {
                	var defaultValue = $(this).closest('.selector-labels').next('input[data-name]').attr('data-default');
                	var input = $(this).attr('data-val');
                	$(this).closest('.selector-labels').next('input[data-name]').val(defaultValue);
                	if (defaultValue == input) {
                		$(this).addClass('selector-selected');
                	} else {
                		$(this).removeClass('selector-selected');
                	}
                });

				field.find(".selector-labels-soc label").each(function() {
                	var defaultValue = $(this).closest('.selector-labels-soc').next('input[data-name]').attr('data-default');
                	var input = $(this).attr('data-val');
                	$(this).closest('.selector-labels-soc').next('input[data-name]').val(defaultValue);
					if (defaultValue == input) {
                		$(this).addClass('selector-soc-selected');
                	} else {
                		$(this).removeClass('selector-soc-selected');
                	}
                });

				field.find('.range-input').each(function() {
					var $dis = $(this);
                	$dis.removeClass('ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all').empty();
					var defaultValue = parseFloat($dis.attr('data-defaultvalue'));
					$dis.siblings(".range-input-selector").val(defaultValue);
					$dis.slider({
						range: "min",
						value: parseFloat($dis.attr('data-defaultvalue')),
						min: parseFloat($dis.attr('data-min')),
						max: parseFloat($dis.attr('data-max')),
						step: parseFloat($dis.attr('data-step')),
						slide: function( event, ui) {
							$dis.siblings(".range-input-selector").val(ui.value );
							airinblog_fun_refresh_elastic_values();
						}
					});
				});

				field.find('.onoffswitch').each(function() {
					var defaultValue = $(this).next('input[data-name]').attr('data-default');
					$(this).next('input[data-name]').val(defaultValue);
					if (defaultValue == 'on') {
						$(this).addClass('switch-on');
					} else {
						$(this).removeClass('switch-on');
					}
				});

				field.find(".attachment-media-view").each(function() {
					var defaultValue = $(this).find('input[data-name]').attr('data-default');
					$(this).find('input[data-name]').val(defaultValue);
					if (defaultValue) {
						$(this).find(".thumbnail-image").html('<img src="'+defaultValue+'"/>').prev('.placeholder').addClass('hidden');
					} else {
						$(this).find(".thumbnail-image").html('').prev('.placeholder').removeClass('hidden');	
					}
				});
                
                field.find(".airinblog-icon-list").each(function() {
					var defaultValue = $(this).next('input[data-name]').attr('data-default');
					$(this).next('input[data-name]').val(defaultValue);
					$(this).prev('.airinblog-selected-icon').children('i').attr('class','').addClass(defaultValue);
					
					$(this).find('li').each(function() {
						var icon_class = $(this).find('i').attr('class');
						if (defaultValue == icon_class) {
							$(this).addClass('icon-active');
						} else {
							$(this).removeClass('icon-active');
						}
					});
				});

				field.find(".airinblog-multi-category-list").each(function() {
                	var defaultValue = $(this).next('input[data-name]').attr('data-default');
                	$(this).next('input[data-name]').val(defaultValue);
                	
                	$(this).find('input[type="checkbox"]').each(function() {
	                	if ($(this).val() == defaultValue) {
	                		$(this).prop('checked', true);
	                	} else {
	                		$(this).prop('checked', false);
	                	}
                	});
                });

				field.find('.airinblog-fields').show();

				$this.find('.multi-elastic-field-control-wrap').append(field);
                
				airinblog_fun_display_set_options();

				field.addClass('expanded').find('.multi-elastic-fields').show();
                $('.accordion-section-content').animate({ scrollTop: $this.height() }, 1000);
                airinblog_fun_refresh_elastic_values();
            }

		}
		return false;
	});
	
	$("#customize-theme-controls").on("click", ".multi-elastic-field-remove", function() {
		if (typeof	$(this).parent() != 'undefined') {
			$(this).closest('.multi-elastic-field-control').slideUp('normal', function() {
				$(this).remove();
				airinblog_fun_refresh_elastic_values();
			});
		}
		return false;
	});

	$("#customize-theme-controls").on('keyup change', '[data-name]', function() {
		 airinblog_fun_refresh_elastic_values();
		 return false;
	});

	$("#customize-theme-controls").on('change', 'input[type="checkbox"][data-name]', function() {
		if ($(this).is(":checked")) {
			$(this).val(1);
		} else {
			$(this).val(0);
		}
		airinblog_fun_refresh_elastic_values();
		return false;
	});

	// Block sorting
	$('.multi-elastic-field-control-wrap').sortable({
		handle: ".multi-elastic-field-title",
		update: function(event, ui) {
			airinblog_fun_refresh_elastic_values();
		}
	}).disableSelection();
	// Selector .disableSelection() - this is a ban on editing the headers of sortable fields for some browsers, for example Chrome

	// Set all variables to be used in scope
	var frame;

	// ADD IMAGE LINK
	$('.customize-control-multi-elastic').on( 'click', '.airinblog-upload-button', function( event) {
		event.preventDefault();

		var imgContainer = $(this).closest('.airinblog-fields-wrap').find( '.thumbnail-image'),
		placeholder = $(this).closest('.airinblog-fields-wrap').find( '.placeholder'),
		imgIdInput = $(this).siblings('.upload-id');

		// Create a new media frame
		frame = wp.media({
			title: 'Select or Upload Image',
			button: {
			text: 'Use Image'
			},
			multiple: false  // Set to true to allow multiple files to be selected
		});

		// When an image is selected in the media frame...
		frame.on('select', function() {

			// Get media attachment details from the frame state
			var attachment = frame.state().get('selection').first().toJSON();

			// Submit the URL of the attachment to our custom image input field.
			imgContainer.html( '<img src="'+attachment.url+'">' );
			placeholder.addClass('hidden');

			// Send attachment id to our hidden input
			imgIdInput.val( attachment.url ).trigger('change');

		});

		// Finally, open the modal on click
		frame.open();
	});


	// DELETE IMAGE LINK
	$('.customize-control-multi-elastic').on('click', '.airinblog-delete-button', function(event) {

	event.preventDefault();
	var imgContainer = $(this).closest('.airinblog-fields-wrap').find('.thumbnail-image'),
	placeholder = $(this).closest('.airinblog-fields-wrap').find('.placeholder'),
	imgIdInput = $(this).siblings('.upload-id');

	// Clear out the preview image
	imgContainer.find('img').remove();
	placeholder.removeClass('hidden');

	// Delete the image id from the hidden input
	imgIdInput.val( '' ).trigger('change');

	});

	$('body').on('click','.selector-labels label', function() {
		var $this = $(this);
		var value = $this.attr('data-val');
		$this.siblings().removeClass('selector-selected');
		$this.addClass('selector-selected');
		$this.closest('.selector-labels').next('input').val(value).trigger('change');
	});

	$('body').on('click','.selector-labels-soc label', function() {
		var $this = $(this);
		var value = $this.attr('data-val');
		$this.siblings().removeClass('selector-soc-selected');
		$this.addClass('selector-soc-selected');
		$this.closest('.selector-labels-soc').next('input').val(value).trigger('change');
	});

	$('body').on('change','.airinblog-type-radio input[type="radio"]', function() {
		var $this = $(this);
		$this.parent('label').siblings('label').find('input[type="radio"]').prop('checked',false);
		var value = $this.closest('.radio-labels').find('input[type="radio"]:checked').val();
		$this.closest('.radio-labels').next('input').val(value).trigger('change');
	});

	$('body').on('click', '.onoffswitch', function() {
		var $this = $(this);
		if ($this.hasClass('switch-on')) {
			$(this).removeClass('switch-on');
			$this.next('input').val('off').trigger('change');
		} else {
			$(this).addClass('switch-on');
			$this.next('input').val('on').trigger('change');
		}
	});

	$('.range-input').each(function() {
		var $this = $(this);
		$this.slider({
			range: "min",
			value: parseFloat($this.attr('data-value')),
			min: parseFloat($this.attr('data-min')),
			max: parseFloat($this.attr('data-max')),
			step: parseFloat($this.attr('data-step')),
			slide: function( event, ui) {
				$this.siblings(".range-input-selector").val(ui.value );
				airinblog_fun_refresh_elastic_values();
			}
		});
	});

	$('body').on('click', '.airinblog-icon-list li', function() {
		var icon_class = $(this).find('i').attr('class');
		$(this).addClass('icon-active').siblings().removeClass('icon-active');
		$(this).parent('.airinblog-icon-list').prev('.airinblog-selected-icon').children('i').attr('class','').addClass(icon_class);
		$(this).parent('.airinblog-icon-list').next('input').val(icon_class).trigger('change');
		airinblog_fun_refresh_elastic_values();
	});

	$('body').on('click', '.airinblog-selected-icon', function() {
		$(this).next().slideToggle();
	});

	// MultiCheck box Control JS
    $('body').on('change', '.airinblog-type-multicategory input[type="checkbox"]', function() {

        var checkbox_values = $(this).parents('.airinblog-type-multicategory').find( 'input[type="checkbox"]:checked').map(function() {
            return $( this ).val();
        }).get().join( ',' );

        $(this).parents('.airinblog-type-multicategory').find('input[type="hidden"]').val(checkbox_values).trigger('change');
        airinblog_fun_refresh_elastic_values();
    });
    
	airinblog_fun_display_set_options();

});
