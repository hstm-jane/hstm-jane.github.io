/*
* A colorselector for Twitter Bootstrap which lets you select a color from a predefined set of colors only.
* https://github.com/flaute/bootstrap-colorselector
*
* Copyright (C) 2014 Flaute
*
* Licensed under the MIT license
*/

(function ($) {
    "use strict";

    var ColorSelector = function (select, options) {
        this.options = options;
        this.$select = $(select);

        var cols = [
            '003366', '336699', '3366cc', '003399', '000099', '0000cc', '000066',
            '006666', '006699', '0099cc', '0066cc', '0033cc', '0000ff', '3333ff', '333399',
            '669999', '009999', '33cccc', '00ccff', '0099ff', '0066ff', '3366ff', '3333cc', '666699',
            '339966', '00cc99', '00ffcc', '00ffff', '33ccff', '3399ff', '6699ff', '6666ff', '6600ff', '6600cc',
            '339933', '00cc66', '00ff99', '66ffcc', '66ffff', '66ccff', '99ccff', '9999ff', '9966ff', '9933ff', '9900ff',
            '006600', '00cc00', '00ff00', '66ff99', '99ffcc', 'ccffff', 'ccccff', 'cc99ff', 'cc66ff', 'cc33ff', 'cc00ff', '9900cc',
            '003300', '009933', '33cc33', '66ff66', '99ff99', 'ccffcc', 'ffffff', 'ffccff', 'ff99ff', 'ff66ff', 'ff00ff', 'cc00cc', '660066',
            '333300', '009900', '66ff33', '99ff66', 'ccff99', 'ffffcc', 'ffcccc', 'ff99cc', 'ff66cc', 'ff33cc', 'cc0099', '993399',
            '336600', '669900', '99ff33', 'ccff66', 'ffff99', 'ffcc99', 'ff9999', 'ff6699', 'ff3399', 'cc3399', '990099',
            '666633', '99cc00', 'ccff33', 'ffff66', 'ffcc66', 'ff9966', 'ff6666', 'ff0066', 'd60094', '993366',
            'a58800', 'cccc00', 'ffff00', 'ffcc00', 'ff9933', 'ff6600', 'ff0033', 'cc0066', '660033',
            '996633', 'cc9900', 'ff9900', 'cc6600', 'ff3300', 'ff0000', 'cc0000', '990033',
            '663300', '996600', 'cc3300', '993300', '990000', '800000', '993333'
        ];

        for (var i = 0; i < cols.length; i++) {
            this.$select.append("<option data-color='#" + cols[i] + "' value='#" + parseInt(cols[i], 16) + "'></option>");
        }

        this._init();
    };

    ColorSelector.prototype = {
        constructor: ColorSelector,

        _init: function () {

            var callback = this.options.callback;

            var selectValue = this.$select.val();
            var selectColor = this.$select.find("option:selected").data("color");

            var $markupUl = $("<ul>").addClass("dropdown-menu").addClass("dropdown-caret");
            var $markupDiv = $("<div>").addClass("dropdown").addClass("dropdown-colorselector");
            var $markupSpan = $("<span>").addClass("btn-colorselector").css("background-color", selectColor);
            var $markupA = $("<a>").attr("data-toggle", "dropdown").addClass("dropdown-toggle").attr("href", "#").append($markupSpan);

            // create an li-tag for every option of the select
            $("option", this.$select).each(function () {

                var option = $(this);
                var value = option.attr("value");
                var color = option.data("color");
                var title = option.text();

                // create a-tag
                var $markupA = $("<a>").addClass("color-btn");
                if (option.prop("selected") === true || selectValue === color) {
                    $markupA.addClass("selected");
                }
                $markupA.css("background-color", color);
                $markupA.attr("href", "#").attr("data-color", color).attr("data-value", value).attr("title", title);

                // create li-tag
                $markupUl.append($("<li>").append($markupA));
            });

            // append the colorselector
            $markupDiv.append($markupA);
            // append the colorselector-dropdown
            $markupDiv.append($markupUl);

            // hide the select
            this.$select.hide();

            // insert the colorselector
            this.$selector = $($markupDiv).insertAfter(this.$select);

            // register change handler
            this.$select.on("change", function () {

                var value = $(this).val();
                var color = $(this).find("option[value='" + value + "']").data("color");
                var title = $(this).find("option[value='" + value + "']").text();

                // remove old and set new selected color
                $(this).next().find("ul").find("li").find(".selected").removeClass("selected");
                $(this).next().find("ul").find("li").find("a[data-color='" + color + "']").addClass("selected");

                $(this).next().find(".btn-colorselector").css("background-color", color);

                callback(value, color, title);
            });

            // register click handler
            $markupUl.on('click.colorselector', $.proxy(this._clickColor, this));
        },

        _clickColor: function (e) {

            var a = $(e.target);

            if (!a.is(".color-btn")) {
                return false;
            }

            this.$select.val(a.data("value")).change();

            e.preventDefault();
            return true;
        },

        setColor: function (color) {
            // find value for color
            var value = $(this.$selector).find("li").find("a[data-color='" + color + "']").data("value");
            this.setValue(value);
        },

        setValue: function (value) {
            this.$select.val(value).change();
        },

    };

    $.fn.colorselector = function (option) {
        var args = Array.apply(null, arguments);
        args.shift();

        return this.each(function () {

            var $this = $(this), data = $this.data("colorselector"), options = $.extend({}, $.fn.colorselector.defaults, $this.data(), typeof option == "object" && option);

            if (!data) {
                $this.data("colorselector", (data = new ColorSelector(this, options)));
            }
            if (typeof option == "string") {
                data[option].apply(data, args);
            }
        });
    };

    $.fn.colorselector.defaults = {
        callback: function (value, color, title) {
        },
        colorsPerRow: 8
    };

    $.fn.colorselector.Constructor = ColorSelector;

})(jQuery, window, document);