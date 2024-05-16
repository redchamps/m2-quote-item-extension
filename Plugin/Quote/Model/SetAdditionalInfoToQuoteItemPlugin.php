<?php
declare(strict_types=1);

namespace RedChamps\QuoteItemExtension\Plugin\Quote\Model;

use Magento\Quote\Model\Quote;
use RedChamps\QuoteItemExtension\Action\AttributesListProvider;

/**
 * Interceptor for @see \Magento\Quote\Model\Quote
 */
class SetAdditionalInfoToQuoteItemPlugin
{
    private $attributesListProvider;

    public function __construct(
        AttributesListProvider $attributesListProvider
    ) {
        $this->attributesListProvider = $attributesListProvider;
    }

    /**
     * Intercepted method setItems.
     *
     * @param Quote $subject
     * @param array|null $items
     *
     * @return array
     * @see \Magento\Quote\Model\Quote::setItems
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeSetItems(Quote $subject, ?array $items = null): array
    {
        /**@var $items \Magento\Quote\Api\Data\CartItemInterface[]**/
        foreach ($items as $item) {
            $extensionAttributes = $item->getExtensionAttributes();
            foreach ($this->attributesListProvider->get() as $key => $method) {
                $extensionAttributes->$method($item->getData($key));
            }
            $item->setExtensionAttributes($extensionAttributes);
        }
        return [$items];
    }
}
