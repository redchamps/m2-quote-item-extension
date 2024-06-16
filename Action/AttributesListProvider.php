<?php

namespace RedChamps\QuoteItemExtension\Action;

class AttributesListProvider
{
    public function get()
    {
        return [
            'row_weight' => 'setItemRowWeight',
            'tax_percent' => 'setItemTaxPercent',
            'tax_amount' => 'setItemTaxAmount',
            'price_incl_tax' => 'setItemPriceInclTax',
            'row_total_incl_tax' => 'setItemRowTotalInclTax',
            'discount_amount' => 'setItemDiscountAmount',
            'row_total_with_discount' => 'setItemRowTotalWithDiscount',
            'row_total' => 'setItemRowTotal',
        ];
    }
}
