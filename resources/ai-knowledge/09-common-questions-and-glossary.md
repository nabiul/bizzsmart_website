# Common questions and glossary

Verified from the application source on 2026-09-15.

## Common questions

### Why can another user see a menu that I cannot?

Menus depend on role/permission, global module settings, location module settings, and sometimes developer-only restrictions. Ask an administrator to compare these settings. Do not share another user's account.

### Why is a customer, supplier, item, account, or employee missing from a selector?

Confirm the active location, record type, active/delete status, and the user's permissions. Search the corresponding master-data list first. Do not create a duplicate until the existing record has been ruled out.

### Why does an item show no stock?

Check the current location and godown, unit conversion, purchase/receipt completion, sale/return, stock transfer status, damage, inventory-count adjustments, production, and date filters. Use Inventory Ledger and Inventory Summary for investigation.

### Why can I view a record but not edit or delete it?

View, create, edit, delete, complete, approve, and unsuspend can be separate permissions. The record's status or location can also block modification.

### I clicked Complete/Save and the page is still processing. Should I click again?

No. Wait for the result, then search the relevant list by contact, date, amount, or voucher/invoice number. Repeated submission can create duplicate financial or inventory effects.

### How do I correct a wrong financial or stock transaction?

Open the source transaction and use its authorized edit, return, reversal, cancel, suspend, or delete workflow as appropriate. First verify linked payments, orders, challans, serials, stock, journals, and reports. Escalate when uncertain; do not edit database records directly.

### Why do report totals differ?

Compare location, exact start/end time, statuses, transaction type, return handling, discounts, tax, delivery charges, opening balances, visibility settings, and whether the report counts vouchers or item lines.

### Can BizzPilot perform the action for me?

BizzPilot normally provides guidance. It can prepare and add purchase-cart items after explicit user confirmation when the user has **purchase create** permission. It cannot submit purchases, make payments, or perform other business actions.

## Glossary

- **Account/Bank**: a cash or bank ledger selected in financial transactions.
- **Batch**: depending on the menu, a production batch, party batch, or bulk transaction workflow. Always identify the module.
- **Challan**: delivery/receipt document related to an order.
- **Contact**: customer, supplier, or both, depending on Contact Type.
- **Current location**: the active business location that scopes many menus and records.
- **Deposit / Cr**: money received or credited into an account.
- **DSR**: a sales/distribution representative used in sales and related reports.
- **Godown**: inventory storage location/warehouse.
- **Group Item**: a grouped product definition, distinct from an Item Category.
- **Inventory Count**: a physical-count workflow that can create stock adjustments.
- **Item Category**: classification for products/items.
- **Order**: a planned purchase or sale that is not necessarily completed.
- **Payeer/Payee**: named payer/payee master data used by financial forms. The application spelling is **Payeer/Payee**.
- **Purpose**: accounting classification used for income, expense, or both.
- **Quotation**: proposed sale terms, not a completed sale.
- **RFID**: employee/device identifier used where attendance hardware is configured.
- **Role**: a named group of permissions assigned to a user.
- **Sale/Purchase Return**: reversal flow for eligible quantities from an original transaction.
- **Serial Number**: unique item identifier tracked across purchase, stock, sale, and return states.
- **Suspended transaction**: saved but not processed as an ordinary completed transaction.
- **Transfer**: linked movement from one account to another, or in Product context, stock movement between locations/godowns.
- **Vector Store**: the OpenAI knowledge collection containing these support documents for File Search.
- **Withdraw / Dr**: money paid or debited from an account.
