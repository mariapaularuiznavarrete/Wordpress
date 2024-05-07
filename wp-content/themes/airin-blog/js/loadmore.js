/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* Copyright © Airin Blog by DMCWebZone. All Rights Reserved.
* @package Airin Blog
* Description: Post loading in categories (Button - Show more)
* ------------------------------------------------------------------------------ */


jQuery(function($) {

    'use strict';

    $('#airinblog-id-loadmore-button').click(function() {

        // Caption while loading
        $(this).text(airinblog_localize_loadmore.delay);
        
        var data = {
            'action': 'airinblog-action-loadmore',
            'query': true_posts,
            'page' : current_page
        };

        $.ajax({
            url: ajaxurl,
            data: data,
            type: 'POST',
            success: function (data) {

                if (data) {

                    $('#airinblog-id-loadmore').before(data);
                    // Return inscription, after loading
					$('#airinblog-id-loadmore-button').text(airinblog_localize_loadmore.more);
                    current_page++;
                    if (current_page == max_pages) $("#airinblog-id-loadmore-button").remove();

                    // Support for fluently blocks
                    $('.airinblog-css-cat-grid').each(function() {
                        $(this).css({
                            'opacity':'1',
                            'transform':'translateY(0)'
                        });
                    });

                } else {
                    $('#airinblog-id-loadmore-button').remove();
                }

            }
        });
    });
});
