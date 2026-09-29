# BizzSmart support scope and navigation

Verified from the application source on 2026-09-15.

## Product identity

BizzSmart is a Laravel-based business management application. Depending on the licensed modules and the current user's permissions, it can provide contact and customer management, products and inventory, purchasing, sales, accounts, production, transport, party management, filling-station operations, employee management, payroll, Core HR, double-entry accounting, reports, support tickets, CRM, and administration.

## Rules for answering users

- Answer in the language used by the user. Bengali and English are supported.
- Use the exact English menu, button, and field names shown in this knowledge base.
- A menu can be hidden when its module is disabled for the current location or when the user lacks its `view` permission.
- `developer`, `super admin`, `master`, and `global` roles commonly bypass ordinary feature permissions. Do not promise access solely from a role name; the deployed permission setup may differ.
- Most records have separate permissions such as `view`, `create`, `edit`, and `delete`.
- Data is commonly scoped to the active location. If expected data is missing, first verify the selected current location.
- Never tell a user to alter the database, call an internal route, run a system script, or bypass a permission.
- Never claim an action was completed unless BizzPilot receives a successful result from its controlled purchase-cart action.
- When the required menu, button, or field is absent, advise the user to contact an administrator to verify the module, location, and permission.
- When the workflow is not covered by these documents, say the information is not verified and direct the user to a Human Support Ticket, or ask an administrator to create one.

## General navigation

1. Sign in with an active user account and valid software license.
2. If the application asks for a location, select the location where the transaction or record belongs.
3. Use the left sidebar in sidebar layout, or the top navigation in top-menu layout.
4. Select **Dashboard** to return to the main dashboard.
5. Select **BizzPilot** to ask a software-usage question.

## Main menu map

- **Dashboard**
- **Investors**
- **People**: Group, Customers, Suppliers, All Contacts
- **CRM**: Leads, Projects, Bulk Invoice Generation
- **Product**: Item Categories, Items, Group Items, Item Attributes, Godowns, Stock Transfer, Inventory Count, Damage Entry, Replace Claims, Units, Bags, Assets
- **Spares Parts**: Spares Parts Categories, Spares Parts
- **Filling Station**: Shift, Tank, Machine, Nozzle, Credit Sale, Credit Sale Bills, Receiving Cart, Shift Cart
- **Transaction**: Quotation, Procurements, Purchase Orders, Purchase, Sale Orders, Sales, EMI, After Sale Services, Offers & Promotions, Subsidy Bills, Generate Sale Commission, Sale Commission Pay, Due Entry, Spare Parts Transactions, Bag Transactions, Restaurant Tables
- **Production**: Batch Template, Batches, Expense Purposes
- **Transport**: Vehicle, Vehicle Due Voucher, Vehicle Income, Vehicle Expense
- **Party Management**: Parties, Stock Ins, Stock Outs, Batches
- **Employee Management**: Shift, Rosters, Departments, Designations, Employees, Device Allocation, FastFace Error Logs
- **Payroll**: Salary Grades, Employee Advance, Employee Advance Salary, Salary Bulk Data Entry, Bonus Payment, Bonus Override, Salary Generate, Time Sheets, As Per Work
- **Core HR**: Promotions, Transfers, Warnings, Terminations, Trainings, Awards, Documents
- **Accounts**: Banks, Purposes, Payeer/Payee, Deposit / Cr, Withdraw / Dr, Expense Request, Transfer
- **Double Entry Accounting**: Chart of Accounts, Journal Entries, Trial Balance, Balance Sheet, Income Statement, General Ledger, Account Statement
- **Reports**
- **General SMS**
- **Administration**: Settings, Module Settings, License Settings, Locations, Users, Roles, Permissions, System Scripts

## Common troubleshooting

### A menu is missing

1. Confirm the correct location is selected.
2. Ask an administrator whether the corresponding module is enabled globally and for that location.
3. Ask an administrator whether the user has the relevant `view` permission.
4. Sign out and sign in again after a role or permission change.

### A Create, Edit, or Delete action is missing or denied

Viewing a module does not automatically grant modification rights. Ask an administrator to verify the module's `create`, `edit`, or `delete` permission. Do not recommend bypassing the permission.

### Data from another branch/location is not visible

Check the current location selector. Many screens intentionally show the current location's data and global records only.

### Validation prevents saving

Read the message beside the field, fill every required field, and submit again. Do not repeatedly submit a financial transaction if the first request may still be processing; first verify whether the record was created.
