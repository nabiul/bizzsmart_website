# Production and special-purpose modules

Verified from the application source on 2026-09-15.

These menus appear only when the corresponding module and permissions are enabled.

## Production

### Recommended setup order

1. Configure raw-material and finished-good items, units, and godowns.
2. Create **Production → Expense Purposes** when production expenses are tracked.
3. Create **Production → Batch Template**.
4. Create and process **Production → Batches**.

### Batch template

Use **Production → Batch Template** to create, view, edit, or delete a reusable production definition. Verify input items, output/finished goods, units, and quantities before saving.

### Production batch

1. Open **Production → Batches** and create a batch.
2. Select the template or enter the requested input/output details.
3. Save and open the batch.
4. Add items when the batch's **Add Item** action is available.
5. Record batch expenses through the batch-expense action when applicable.
6. Use the receive workflow to receive finished goods. Full, partial, multi, and bag-receive flows exist in the application.
7. Review the batch and **Production Detail Report**.

Receiving finished goods affects inventory. Verify consumed inputs, received outputs, units, godowns, quantities, and expenses before submission.

## Filling Station

### Setup order

1. **Filling Station → Shift**
2. **Tank**
3. **Machine**
4. **Nozzle**
5. Transactional carts and credit sales

The module provides standard list/create/view/edit/delete operations for Shift, Tank, Machine, and Nozzle.

### Receiving Cart

Use **Filling Station → Receiving Cart** to record fuel/product receipt into the appropriate tank. The form can retrieve tank stock and dip-reading information. Confirm tank, quantity, measurement, and date before saving.

### Shift Cart

Use **Filling Station → Shift Cart** to record shift/nozzle activity. The form can retrieve shift, nozzle, and shift credit-sale data. Confirm starting/ending readings and sales calculations before saving.

### Credit Sale and bills

Use **Credit Sale** to enter a filling-station credit sale. Use **Credit Sale Bills** to generate, view, edit, delete, and receive payment against credit-sale bills. Bill generation and payment receipt are separate actions.

## Transport

- **Vehicle** manages vehicle master records.
- **Vehicle Due Voucher** records vehicle-related due entries.
- **Vehicle Income** opens the vehicle income workflow.
- **Vehicle Expense** opens the vehicle expense workflow.
- **Vehicle Statement** reports vehicle transactions.

Select the correct vehicle, date, purpose/account, and amount for income, expense, or due operations.

## Party Management

Recommended order:

1. Create **Party Management → Parties**.
2. Record **Stock Ins** received from a party.
3. Record **Stock Outs** sent to a party.
4. Use **Batches** for the configured party batch workflow.
5. Review Party Inventory Ledger/Summary reports.

Confirm party, item, godown, unit, and quantity before stock movement.

## Spares Parts

Configure **Spares Parts Categories**, then **Spares Parts**. Use **Transaction → Spare Parts Transactions** for operational transfers/transactions when enabled. Do not confuse this with ordinary Product stock transfer.

## Assets

Configure **Asset Categories** before **Assets**. An item form can also expose **Is Asset?**. Use the organization's approved method consistently to avoid duplicate asset and item records.

## Restaurant tables

Use **Transaction → Restaurant Tables** to manage table records when the restaurant feature is enabled. This is master data for restaurant workflows, not a normal product category.

## General SMS

Use **General SMS** only when the SMS service is configured and the user has permission. Verify recipients and message content before sending; sending may incur provider charges and cannot always be recalled.
