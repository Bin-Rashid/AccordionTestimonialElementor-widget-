jQuery(document).ready(function($) {
    // Accordion functionality
    const accordionHeaders = $('.accordion-header');

    accordionHeaders.each(function() {
        $(this).on('click', function() {
            const index = $(this).data('index');
            const currentlyActiveItem = $('.accordion-item.active');
            const currentlyActiveBody = $('.accordion-body.active');

            if (currentlyActiveItem.length && currentlyActiveItem[0] !== $(this).parent()[0]) {
                currentlyActiveItem.removeClass('active');
                currentlyActiveBody.removeClass('active');
            }

            $(this).parent().toggleClass('active');
            $('.accordion-body').eq(index).toggleClass('active');
        });
    });

    // Optional: Set the first accordion item to be active by default
    const firstItem = $('.accordion-item').first();
    if (firstItem.length) {
        firstItem.addClass('active');
        const firstBody = firstItem.find('.accordion-body').first();
        if (firstBody.length) {
            firstBody.addClass('active');
        }
    }

    // Elementor hooks and dynamic styling
    elementorFrontend.hooks.addAction('frontend/element_ready/ventCube_accordion_testimonial.default', function($scope) {
        var $clientImageBody = $scope.find('.client-image-body');

        // Update styles based on Elementor controls
        elementorFrontend.hooks.addAction('frontend/element_ready/global', function() {
            var settings = $scope.data('settings');

            if (settings) {
                var size = settings.client_image_size;
                var top = settings.client_image_position_top;
                var left = settings.client_image_position_left;
                var right = settings.client_image_position_right;
                var bottom = settings.client_image_position_bottom;

                // Apply the styles to the client image
                $clientImageBody.css({
                    'width': size + 'px',
                    'height': size + 'px',
                    'top': top + 'px',
                    'left': left + 'px',
                    'right': right + 'px',
                    'bottom': bottom + 'px'
                });
            }
        });
    });

    // Icon size adjustment for buttons
    $('.button_left').each(function() {
        var iconSize = $(this).data('icon-size');
        if (iconSize) {
            $(this).find('.button-icon').css('font-size', iconSize + 'px');
        }
    });

    $('.button_right').each(function() {
        var iconSize = $(this).data('icon-size');
        if (iconSize) {
            $(this).find('.button-icon').css('font-size', iconSize + 'px');
        }
    });
});
