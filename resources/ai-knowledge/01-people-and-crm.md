# People, contacts, investors, and CRM

Verified from the application source on 2026-09-15.

## Contact areas

The **People** menu can contain:

- **Group** for contact grouping.
- **Customers** for customer contacts.
- **Suppliers** for supplier contacts.
- **All Contacts** for the combined contact list.

Available entries depend on module settings and permissions.

## Create a contact

Required permission: `contact create` or an equivalent privileged role.

1. Open **People → Customers**, **People → Suppliers**, or **People → All Contacts**.
2. Select the action for creating a new contact.
3. Enter **Contact Name** and **Contact Phone**.
4. Choose **Contact Type** when the form displays it.
5. Optionally enter **Proprietor Name**, **Dealer ID**, **Group**, **Select DSR**, **Contact Email**, and **Contact Address**.
6. Optionally enter banking information: **Bank Name**, **Bank Branch**, **Account Name**, and **Account No**.
7. If applicable, enter **Opening Balance**, **Opening Bag Balance**, **Tier Type**, **Location**, and **Note**.
8. Some configurations allow a contact login. In that section enter **Username**, **Password**, and **Confirm Password**.
9. Some configurations display identity, vehicle, and guarantor information. Complete only the fields relevant to the business.
10. Select **Save**.

Do not invent an opening balance. Confirm whether a positive or negative amount represents receivable or payable under the organization's accounting policy before saving.

## Edit or view a contact

1. Open the appropriate contact list.
2. Search for the contact by the available identifying information.
3. Use the row's view or edit action.
4. Change only verified information and save.

Editing requires `contact edit`. Deleting requires `contact delete`. If the actions are unavailable, contact an administrator.

## Contact-related payments and history

The contact area is connected to sales, receiving/purchases, deposits, withdrawals, transfers, ledgers, and bag balances. For an accounting correction, use the relevant transaction screen rather than changing a contact's opening balance after regular transactions already exist, unless the organization's authorized accountant instructs otherwise.

## Groups

Use **People → Group** to manage contact groups. Groups can be used when creating contacts and may affect filtering or business workflows.

## Investors

The **Investors** menu provides list, create, view, edit, and delete operations when the Investors module and permissions are enabled. Use the create action to add an investor, then save the form. Do not treat an investor as a customer or supplier unless the business process explicitly requires both records.

## CRM Leads

Use **CRM → Leads** to manage leads when the CRM module is enabled. Lead operations include listing, creating, viewing, editing, and deleting based on permissions. A lead is a prospect and is not automatically the same as a transactional customer record.

## CRM Projects

Use **CRM → Projects** to manage projects. Project information can be referenced by other areas, including sales, withdrawals, employees, payroll, and project-related reporting. Create the project before attempting to select it in another form.

## Bulk invoice generation

**CRM → Bulk Invoice Generation** is tied to the application's license/client invoicing workflow. Use it only when the menu is available and the user is authorized. It is not the ordinary customer sales invoice screen; use **Transaction → Sales** for normal sales.
