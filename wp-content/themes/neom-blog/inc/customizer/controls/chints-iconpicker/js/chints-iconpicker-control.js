(function ($) {
    'use strict';
    wp.chintsiconpicker = {

        init: function () {
            $('.chints-iconpicker-items>i').on('click', function () {
                var iconClass = $(this).attr('class') //.slice(3);
                var classInput = $(this).parents('.chints-iconpicker-popover').prev().find('.chints-icp');
                classInput.val(iconClass);
                classInput.attr('value', iconClass);

                var iconPreview = classInput.next('.chints-input-group-addon');
                var iconElement = '<i class="'.concat(iconClass, '"><\/i>');
                iconPreview.empty();
                iconPreview.append(iconElement);

                //var th = $(this).parent().parent().parent();
                classInput.trigger('change');
                //customizer_repeater_refresh_social_icons(th);
                return false;
            });
        },
        search: function ($searchField) {
            var itemsList = $searchField.parent().next().find('.chints-iconpicker-items');
            var searchTerm = $searchField.val().toLowerCase();
            if (searchTerm.length > 0) {
                itemsList.children().each(function () {
                    if ($(this).filter('[title*='.concat(searchTerm)).length > 0 || searchTerm.length < 1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                itemsList.children().show();
            }
        },
        iconPickerToggle: function ($input) {
            var iconPicker = $input.parent().next();
            iconPicker.addClass('chints-iconpicker-visible');
        }
    };

    $(document).ready(function () {
        wp.chintsiconpicker.init();

        $('.chints-iconpicker-search').on('input', function () {
            wp.chintsiconpicker.search($(this));
        });

        $('.chints-icp-auto').on('click', function () {
            wp.chintsiconpicker.iconPickerToggle($(this));
        });

        $(document).mouseup( function (e) {
            var container = $('.chints-iconpicker-popover');

            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                container.removeClass('chints-iconpicker-visible');
            }
        });

    });

})(jQuery);
