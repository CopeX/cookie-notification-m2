/**
 * CopeX
 *
 * @category   CopeX
 * @package    CopeX_CookieNotification
 * @copyright  Copyright (c) 2017 CopeX (https://copex.io)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

define([
    "jquery",
    "jquery/ui",
    "mage/cookies"
], function ($) {
    "use strict";

    $.widget('copex.cookieNotification', {
        _create: function () {
            if ($.mage.cookies.get(this.options.cookieName)) {
                this.element.hide();
            } else {
                this.element.show();
            }
            $(this.options.cookieAllowButtonSelector).on('click', $.proxy(function () {
                var cookieExpires = new Date(new Date().getTime() + this.options.cookieLifetime * 1000);

                $.mage.cookies.set(this.options.cookieName, JSON.stringify(this.options.cookieValue), {
                    expires: cookieExpires,
                    path: this.options.cookiePath,
                    domain: this.options.cookieDomain
                });
                if ($.mage.cookies.get(this.options.cookieName)) {
                    this.element.hide();
                } else {
                    window.location.href = this.options.cookieMoreLink;
                }
            }, this));

            $(this.options.cookieMoreButtonSelector).on('click', $.proxy(function () {
                if (this.options.cookieMoreLinkDestination == 1) {
                    window.location.href = this.options.cookieMoreLink;
                } else {
                    window.open(this.options.cookieMoreLink, '_blank');
                }
            }, this));
        }
    });

    return $.copex.cookieNotification;
});
