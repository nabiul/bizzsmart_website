# Reports and investigation guide

Verified from the application source on 2026-09-15.

## General report workflow

1. Open **Reports**.
2. Select the required report.
3. Choose the active location and filters displayed by the report, such as date range, account, contact, item, godown, DSR, employee, department, designation, project, or status.
4. Generate/apply the report.
5. Verify the filter summary before relying on totals.
6. Use print or export actions only when displayed.

Reports are permission-controlled. Some transaction reports can also be subject to configured visibility rules. A missing record does not by itself prove deletion; verify location, date, status, permissions, and source transaction.

## Accounting and transaction reports

- **Bank Statement**: activity for a selected bank/account and period.
- **Deposit Report**: deposit/credit transactions.
- **Withdraw Report**: withdrawal/debit transactions.
- **Sales Ledger**: sales transactions by selected filters.
- **Item Wise Sales Report**: sold-item detail/summary.
- **Purchases Ledger**: purchase transactions.
- **Item Wise Purchase Report**: purchased-item detail/summary.
- **Contact Ledger**: a contact's financial transaction history. The application includes an authorized apply-discount action.
- **Overall Report**: combined operational/financial overview under its available filters.
- **Profit Loss Report**: profit/loss results for a selected period.
- **Income Expense Report** and **Purpose Wise Income Expense**: income and expense analysis.
- **Balance Sheet**: balance-sheet view in the report module.
- **Dayclose Report**: day-closing activity.
- **Backdate Due Report**: due position for a historical date.
- **Supplier Wise Details Report**: supplier-specific detail.
- **EMI Details Report**: EMI-related information.
- **Sale Commission Report**: commission information.

The application also provides double-entry versions of Trial Balance, Balance Sheet, Income Statement, General Ledger, and Account Statement under **Double Entry Accounting → Financial Reports**.

## Inventory reports

- **Inventory Ledger**: detailed inventory movements.
- **Inventory Ledger Summary**: inventory position/movement summary, including historical reporting.
- **Inventory Summary**: summarized stock.
- **Low Inventory Report**: items under the configured threshold.
- **Godown Wise Report**: inventory by godown.
- **Damage Report**: recorded damage transactions.
- **Bag Ledger**: bag transactions.
- **Contact Bag Balance**: bag balance by contact.
- **Party Inventory Ledger** and **Party Inventory Summary**: party-management inventory.

When stock does not match expectation, compare the item/godown/date filters against purchase, sale, return, transfer, damage, inventory-count adjustment, production, and party stock movements.

## Sales-team reports

- **DSR Closeout Report**
- **DSR Due Report**
- **DSR Detail Report**

Verify DSR, date range, contact, and location filters.

## Production, transport, and other reports

- **Production Detail Report**
- **Vehicle Statement**
- **Claim Report**
- **Project Wise Salary Summary Report**

## Attendance and payroll reports

- **Daily Attendance**
- **Daily Absent**
- **Datewise Attendance**
- **Monthly Attendance**
- **Summary Monthly Attendance**
- **Working Hour Summary Report**
- **Datewise Overtime Report**
- **Datewise Break Hours Report**
- **Datewise Night Bonus Report**
- **Department Designation Present Report**
- **Employee Joining Report**
- **Advance Salary Report**
- **Generated Salaries Report**
- **As Per Work Report**
- **Bulk Payslip**
- **Bulk ID Card**
- **Employee GPS Map Report**

Attendance reports depend on shift, roster, attendance punches, holidays, weekends, leave, and corrections. Review these source records before changing payroll.

## Troubleshooting totals

When two reports differ:

1. Confirm both use the same location, start/end timestamps, and status filters.
2. Confirm whether returns, suspended/deleted transactions, discounts, taxes, delivery charges, and opening balances are included.
3. Confirm whether one report is item-based and the other voucher-based.
4. Open the source transaction from its normal module.
5. Escalate unexplained differences to an authorized accountant or support person. Do not run **System Scripts** unless a developer has diagnosed the issue and approved a specific script.
