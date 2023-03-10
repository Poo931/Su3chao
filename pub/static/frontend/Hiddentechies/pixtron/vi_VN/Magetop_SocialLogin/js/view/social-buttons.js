/**
 * Magetop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magetop.com license that is
 * available through the world-wide-web at this URL:
 * https://www.magetop.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Magetop
 * @package   Magetop_SocialLogin
 * @copyright Copyright (c) Magetop (https://www.magetop.com/)
 * @license   https://www.magetop.com/LICENSE.txt
 */
/*jshint browser:true jquery:true*/
/*global alert*/
define(
    [
        'jquery',
        'ko',
        'uiComponent',
        'socialProvider'
    ],
    function ($, ko, Component, socialProvider) {
        'use strict';

        /**
         * @type {{init: ko.bindingHandlers.socialButton.init}}
         */
        ko.bindingHandlers.socialButton = {
            init: function (element, valueAccessor, allBindings) {
                var config = {
                    url: allBindings.get('url'),
                    label: allBindings.get('label')
                };

                socialProvider(config, element);
            }
        };

        return Component.extend(
            {
                defaults: {
                    template: 'Magetop_SocialLogin/social-buttons'
                },
                buttonLists: window.socialAuthenticationPopup,

                /**
                 * @returns {Array}
                 */
                socials: function () {
                    var socials = [];
                    $.each(
                        this.buttonLists, function (key, social) {
                            socials.push(social);
                        }
                    );

                    return socials;
                },

                /**
                 * @returns {boolean}
                 */
                isActive: function () {
                    return (typeof this.buttonLists !== 'undefined');
                }
            }
        );
    }
);
