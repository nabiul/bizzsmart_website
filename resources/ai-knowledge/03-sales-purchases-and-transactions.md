# Sales, purchases, orders, and related transactions

Verified from the application source on 2026-09-15.

## Before entering a transaction

Confirm that the correct current location is selected and that the necessary contact, item, unit, godown, and account master data already exists. The exact fields shown vary by enabled modules and settings.

## Create a sale

Required permission: `sales create` or an equivalent privileged role.

1. Open **Transaction → Sales**.
2. Select the action for a new sale. The application also provides **POS** and batch sale workflows when enabled.
3. Select or search for the customer/contact.
4. Optionally select **DSR**, **Price Tiers**, **Projects**, **Shift**, or enter **Voucher Number**, **Vehicle Number**, **Customer Address**, **Customer Phone**, and **Note** when those fields appear.
5. Search for and add an item.
6. For each line, verify **Unit**, **Godown**, **Quantity**, **Unit Price**, **Discount**, discount **Type**, and line **Total**.
7. For bag-based items, verify **Bag Size**, **Total Weight**, **Bag Quantity**, and **Rate**.
8. For warranty items, verify **Warranty days** and **Warranty Start Date**.
9. Review any **Additional Discount**, tax, delivery charge, paid amount, balance, and payment fields displayed by the configured form.
10. Select **Complete** once. Wait for the result before submitting again.
11. Open the created sale to verify the invoice and payment status.

Do not complete a sale if the customer, godown, item unit, quantity, price, or payment allocation is uncertain. Sale completion affects stock and financial records.

## POS sale

The application has a dedicated **POS** route in addition to the standard sale form. Use POS for the organization's counter-sale process when enabled. Item, stock, contact, pricing, discount, and payment rules still apply.

## View, print, clone, edit, or delete a sale

- Open **Transaction → Sales** and use the row actions.
- A sale can have invoice views, challan, gate pass, email invoice, and clone actions depending on configuration.
- Editing requires `sales edit`; deleting requires `sales delete`.
- Clone creates a new transaction based on an earlier sale; it does not edit the original. Verify all dates, stock, prices, and payments before completing the cloned sale.
- Destructive actions can affect stock and accounting. Use them only with authorization.

## Sale return

1. Open the sale return workflow from **Transaction → Sales**.
2. Select the original sale/contact as requested.
3. Select only the items and quantities actually being returned.
4. Confirm the return destination/godown, unit, price, and financial adjustment.
5. Submit and review the generated return record.

Serial-tracked items must use a compatible serial associated with the original stock flow. Never return a quantity greater than the eligible sold quantity.

## Sale orders and delivery challans

1. Open **Transaction → Sale Orders**.
2. Create and save the order using the customer and item details requested by the form.
3. Open the order to review it.
4. Use the order-completion action when the order is ready to become a completed sale.
5. Delivery challans can be created, viewed in summary/detail form, and deleted through the order workflow where authorized.
6. An order can also be cancelled when the action is available.

An order is not the same as a completed sale. Verify order status before treating it as invoiced or paid.

## Quotations

1. Open **Transaction → Quotation**.
2. Create a quotation with the contact, items, quantities, and prices.
3. Save and review it.
4. When accepted, use the quotation-to-sale action to create a sale.

A quotation is not a completed sale and should not be treated as a stock or payment transaction until converted and completed.

## Create a purchase

Required permission: `purchase create` or an equivalent privileged role.

1. Open **Transaction → Purchase**.
2. Select the action for a new purchase. Batch purchase is available separately where enabled.
3. Select **Contact** for the supplier.
4. Optionally select **Claim By** and enter **Vehicle Number** and **Note** when shown.
5. Search for and add an item.
6. For each line, verify **Unit**, **Godown**, **Quantity**, **Unit Price**, **Discount**, discount **Type**, and line **Total**.
7. For bag-based items, verify **Bag Size**, **Total Weight**, **Bag Quantity**, and **Rate**.
8. Review **Additional Discount**, charges, total, payment, and balance fields shown by the configuration.
9. Select **Complete** once and wait for the result.
10. Open the created purchase to verify the record and inventory effect.

The purchase form can create a supplier or item from an inline form when the user has permission. Avoid creating duplicates; search existing records first.

## Add a purchase-cart item with BizzPilot

1. Open **BizzPilot** from the navbar.
2. Ask it to add an item and include its name or item code and quantity, for example: **Add 3 Rice 25kg to purchase cart**.
3. Check the matched item and quantity shown by the agent.
4. Select **Confirm & add to purchase cart**.
5. Open the provided **Purchase cart** link and review the unit, godown, costing price, tax, discount, and quantity before saving the purchase.

The user must have **purchase create** permission. The agent uses the current location, default purchase unit, default godown, and current costing price. It never submits the purchase or payment. If multiple items match, provide the exact item code. Serial numbers and any special purchase details must be completed on the Purchase page.

To add multiple items from a document, select **Image / PDF** in the chat and upload a purchase invoice, quotation, or item list. Supported files are JPG, JPEG, PNG, WebP, and PDF up to 7 MB. The agent extracts at most 50 product lines and shows which database items matched. If a name/code is not exact, choose the correct item from its similar-item dropdown or leave it on **Skip**. Review every name and quantity before selecting **Confirm & add to purchase cart**. For DeepSeek, only the first five PDF pages are analyzed.

## Import sale-cart items in the Flutter POS

1. Open **POS Order** and select the document-scan icon in the header.
2. Choose a JPG, JPEG, PNG, WebP, or PDF item list (maximum 7 MB).
3. Review exact matches. For a non-exact name, select the correct similar item or leave it skipped.
4. Select **Confirm & add to sale cart**.

The document is used only to identify item names/codes and quantities. The app loads the current software selling price (including the selected customer's sale-tier price), default sale unit, and stock before adding an item. It does not use a rate or price printed in the document, and it does not submit the sale automatically.

## Purchase return

1. Open the purchase return workflow from **Transaction → Purchase**.
2. Select the original purchase/supplier as requested.
3. Select only the items and eligible quantities being returned.
4. Confirm the godown, unit, price, and financial adjustment.
5. Submit and review the return record.

## Purchase orders and challans

1. Open **Transaction → Purchase Orders**.
2. Create the order and review it from the order list.
3. Use the completion workflow when goods are received and the order is ready to become a purchase.
4. Purchase-order challans can be created, viewed in summary/detail form, and deleted when authorized.

A purchase order is not a completed purchase until the completion workflow succeeds.

## Suspended transactions

Sales and purchases support suspend and unsuspend workflows. Use suspend when a transaction must be saved without ordinary completion. From the relevant list, reopen the suspended transaction to continue or remove it if authorized. Always check whether a transaction already completed before trying again.

## Due entry

Use **Transaction → Due Entry** to create and review due-related entries when enabled. Select the correct contact and verify the outstanding amount before saving. Due deletion is available only to authorized users.

## EMI

Use **Transaction → EMI** for installment arrangements related to a sale. The module supports create, create-from-sale, view, edit, delete, and agreement output. Verify the underlying sale, installment terms, interest, dates, and payment status before saving.

## After Sale Services

Use **Transaction → After Sale Services** for service records associated with sold items. The module provides create, view, edit, and delete actions. Select the correct sale and item and verify whether the item is eligible for the intended service.

## Offers, promotions, subsidy bills, and commission

- **Offers & Promotions** manages offer rules when enabled.
- **Subsidy Bills** manages subsidy-related billing when enabled.
- **Generate Sale Commission** calculates commission for eligible sales.
- **Sale Commission Pay** records commission payment.

Commission generation and payment are different steps. Verify the date range, eligible salesperson/DSR, sale status, and calculated amount before payment.
