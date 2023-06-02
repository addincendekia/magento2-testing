define([
    "knockout",
    "uiComponent",
    "Magento_Customer/js/customer-data",
], function (ko, Component, customerData) {
    "use strict";

    return Component.extend({
        defaults: {
            message: "${ $.message_templates.empty_cart }",
            cartTotal: 0,
            tracks: {
                message: true,
                cartTotal: true,
            },
            listens: {
                "minicart_content.subtotal.container.subtotal.subtotal.totals:cart":
                    "_updateCartTotal",
            },
        },
        initialize: function () {
            this._super();

            this._syncCart();

            this._generateMessage();
        },
        _updateCartTotal: function (updatedCart) {
            if (updatedCart?.subtotalAmount) {
                this.cartTotal = updatedCart.subtotalAmount;
            }
        },
        _syncCart: function () {
            const self = this;

            const cart = customerData.get("cart");

            customerData.getInitCustomerData().done(() => {
                if (cart()?.subtotalAmount) {
                    self.cartTotal = cart()?.subtotalAmount;
                }
            });
        },
        _generateMessage: function () {
            const self = this;
            const { empty_cart, x_away, free_shipping } =
                self.message_templates;

            self.message = ko.computed(function () {
                const freeShippingMin = parseFloat(self.FREE_SHIPPING_MIN);
                const subtotal = parseFloat(self.cartTotal);

                if (subtotal <= 0) {
                    return empty_cart.replace("$X", `$${freeShippingMin}`);
                }

                if (subtotal <= freeShippingMin) {
                    const remainTotal = freeShippingMin - subtotal;
                    return x_away.replace("$X", `$${remainTotal}`);
                }

                return free_shipping;
            });
        },
    });
});
