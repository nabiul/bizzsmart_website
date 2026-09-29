# Products and inventory

Verified from the application source on 2026-09-15.

## Recommended setup order

Before entering purchases or sales, configure the necessary master data in this order:

1. **Product → Units**
2. **Product → Item Categories**
3. **Product → Godowns**
4. **People → Suppliers** when supplier selection is required
5. **Product → Items**

Optional master data includes **Item Attributes**, **Group Items**, **Assets**, and **Spares Parts**.

## Create an item

Required permission: `item create` or an equivalent privileged role.

1. Open **Product → Items**.
2. Select the action for a new item.
3. Enter **Item Name**. **Item Name (Bangla)** is optional when displayed.
4. Select **Item Category** and **Unit Type**.
5. Select **Location**.
6. Enter **Costing Price** and **Selling Price**.
7. Optionally enter **Item Code**, **UPC/EAN/ISBN Code**, **Brand Name**, **Model Name**, **Re-Order Level**, **Supplier**, **Discount**, and **Commission Percentage**.
8. Complete any displayed price-tier fields.
9. Set the displayed Yes/No options carefully: **Is Service?**, **Is Favorite?**, **Is Spares Parts?**, **Alternative Description?**, **Is Warranty Product?**, and **Is Asset?**.
10. If **Is Warranty Product?** is enabled, enter **Warranty Days**.
11. If **Track Serial Numbers?** is enabled, choose the required **Serial Number Format**.
12. Select **Save Item**.

An item marked as a service should not be treated like a normal stocked product. Serial-number tracking and warranty settings should be decided before routine transactions begin.

## Edit, view, or remove an item

1. Open **Product → Items**.
2. Search for the item.
3. Use the relevant row action to view or edit it.
4. Save verified changes.

Deleting or deactivating an item can affect transaction entry. Use the delete action only with authorization and never advise direct database deletion.

## Categories, units, and godowns

- **Item Categories** classify items.
- **Units** define measurement types used by items and transactions.
- **Godowns** represent inventory storage locations.
- **Assign Units** can associate additional units with an item where this feature is enabled.

If an item cannot be selected during a purchase or sale, verify that the item is active, assigned to the correct location, and configured with the required unit and godown.

## Item attributes and variations

Use **Product → Item Attributes** to manage attribute definitions. Item variation operations are available for viewing and bulk saving where enabled. Configure attributes before creating or editing variations for an item.

## Group items

Use **Product → Group Items** to manage grouped products. A group item is distinct from a contact group and an item category.

## Stock transfer

Required permissions depend on the Product/Item configuration.

1. Open **Product → Stock Transfer**.
2. Start a new stock transfer.
3. Select the source and destination location/godown fields shown by the form.
4. Add the item and quantity to transfer.
5. Submit the transfer.
6. Use the transfer list to view its status. Completion and cancellation actions are available in the application.

Do not transfer more stock than the source godown contains. Confirm the source, destination, unit, and quantity before completion.

## Inventory count

1. Open **Product → Inventory Count**.
2. Create a new inventory count.
3. Search and enter counted quantities, or use the available import workflow.
4. The count can autosave while being prepared.
5. Review the draft and optionally export it.
6. Review non-counted items. An authorized user can set non-counted items to zero when that is the intended count policy.
7. Use **Adjust** only after the count is checked. Adjustment changes inventory based on the count difference.

Inventory adjustment is a material stock change. Never assume that missing items should be zero; confirm the count policy first.

## Damage entry

1. Open **Product → Damage Entry**.
2. Select the item, godown/location, and damage quantity requested by the form.
3. Review the quantity and save.

Damage entry reduces or reclassifies usable stock according to the configured workflow. Use the **Damage Report** to review recorded damage.

## Serial numbers

The application provides item serial list, create, edit, history, and print-label operations. Serial validation is integrated with purchase and sale workflows. Do not reuse a serial already associated with an incompatible stock state.

## Bags

The Product area includes bag setup and bag purchase/sale and transfer workflows where enabled. Transaction forms can request **Bag Size**, **Total Weight**, **Bag Quantity**, and **Rate**. Contact bag balances can be reviewed through the related report.

## Replace claims

Use **Product → Replace Claims** to record and manage replacement claims when enabled. Claim issue types are managed by authorized administrators. Use **Reports → Claim Report** to review claims.
