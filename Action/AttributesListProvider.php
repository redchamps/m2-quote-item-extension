<?php

namespace RedChamps\QuoteItemExtension\Action;

class AttributesListProvider
{
    public function get()
    {
        return [
            'row_weight' => 'setRowWeight',
            'tax_percent' => 'setTaxPercent',
            'tax_amount' => 'setTaxAmount',
            'price_incl_tax' => 'setPriceInclTax',
            'row_total_incl_tax' => 'setRowTotalInclTax',
            'discount_amount' => 'setDiscountAmount',
            'row_total_with_discount' => 'setRowTotalWithDiscount',
            'row_total' => 'setRowTotal',
        ];
    }
}
