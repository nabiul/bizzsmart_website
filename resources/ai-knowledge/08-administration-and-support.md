# Administration, permissions, settings, and support

Verified from the application source on 2026-09-15.

Administration changes can affect every user and location. Only authorized administrators or developers should perform them.

## Settings

Use **Administration → Settings** for system-wide configuration when the user has `settings view` and the required modification access. Record the old value and understand the affected modules before changing a setting.

## Module settings

**Administration → Module Settings** is restricted to the developer role in the current navigation. Modules can be enabled globally and separately for locations. A user can have permission but still not see a feature if its module is disabled for the active location.

## Locations

Use **Administration → Locations** to manage business locations. Transaction data is often scoped to the active location. Avoid deleting or disabling a location with existing operational data without a migration/archive plan.

## Users

1. Open **Administration → Users → Users**.
2. Select the create action.
3. Enter the requested identity and login information.
4. Assign the appropriate role/location information shown by the form.
5. Save and test with the intended least-privileged access.

User listing, create, view, edit, delete, and developer-only restore operations have separate permissions.

## Roles and permissions

1. Use **Administration → Users → Roles** to create or edit a role.
2. Assign only the permissions required for that job.
3. Use **Permissions** only as a developer; the current navigation restricts it to the developer role.
4. After changing access, ask the affected user to sign out and sign in again.

Common permission families use names ending in `view`, `create`, `edit`, and `delete`. Access to one action does not imply access to the others.

## License settings

**Administration → License Settings** is restricted to developers in the navigation. License state can prevent ordinary application access. Do not provide license bypass instructions.

## System Scripts

**Administration → System Scripts** is developer-only. The application includes maintenance scripts that can recalculate or modify inventory, profit, attendance, contact balances, duplicate data, salaries, and related records.

Never recommend running a script as a generic fix. A developer must diagnose the exact problem, back up relevant data, understand the script's scope, and explicitly approve it.

## BizzPilot

1. Open **BizzPilot** from the main navigation.
2. Ask a specific question in Bengali or English, for example: `একটি নতুন sale কীভাবে তৈরি করব?`
3. Use the exact menu and field names in the answer.
4. Verify important financial, inventory, payroll, permission, and destructive operations before acting.
5. Select **New chat** to clear the current session's conversation history.

BizzPilot provides verified software guidance. With **purchase create** permission, it can prepare purchase-cart items from text, an image, or a PDF, but it changes the cart only after user confirmation. It cannot submit a purchase, approve anything, or make a payment.

## Create a human Support Ticket

Required permission: `support ticket create` or an equivalent privileged role. The Support Ticket module must be enabled.

1. Open **Support Tickets**.
2. Select **Add Support Ticket**.
3. Enter **Ticket Date**.
4. Select the **Contact**. A permitted user can add a contact from the same page when necessary.
5. Optionally select **Assign to** and **Assign to members**.
6. Enter a clear **Description** containing the module, intended action, expected result, actual result, exact error message, time, user, and location. Do not include passwords or API keys.
7. Optionally select **Send SMS** when SMS is enabled and the contact should be notified.
8. Select **Save**.

## Support Ticket status

- `pending`: not yet assigned/completed.
- `assigned`: assigned to a service person.
- `completed`: finished; the controller prevents further ordinary updates.

A ticket must be assigned before the normal update workflow can proceed. A ticket connected to a completed service invoice can be marked completed. Warranty processing can select an eligible sale and meter reading where relevant.

## How to write a useful ticket

Include:

- Current location and username, but never the password.
- Module and page/menu name.
- Record ID, voucher number, or invoice number when safe and relevant.
- Exact steps that produced the problem.
- Exact error text.
- Expected and actual result.
- Whether the action may already have created a transaction.

For financial or inventory duplication, tell support immediately and stop repeated submissions.
