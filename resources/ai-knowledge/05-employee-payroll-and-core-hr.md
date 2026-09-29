# Employee management, payroll, attendance, and Core HR

Verified from the application source on 2026-09-15.

Payroll and HR records contain sensitive personal and financial information. Only authorized users should view or change them.

## Recommended setup order

1. **Employee Management → Departments**
2. **Employee Management → Designations**
3. **Employee Management → Shift**
4. **Payroll → Salary Grades** and leave/holiday settings
5. **Employee Management → Employees**
6. **Employee Management → Rosters** when roster scheduling is used
7. Attendance and payroll transactions

## Create an employee

Required permission: `payroll employee create` or an equivalent privileged role.

1. Open **Employee Management → Employees**.
2. Select the new-employee action.
3. Complete **Personal Information**: **First Name**, **Last Name**, **Guardian Name**, **Relation**, **Identifier**, **Religion**, **Blood Group**, **Marital Status**, **Nationality**, **Permanent Address**, **RFID**, **Date of Birth**, and **Gender** as applicable.
4. Complete **Contact Information**: **Staff ID**, **Order**, **Phone**, **Emergency Phone**, **Email**, and **Address**.
5. Complete **Employment Details**: **Joining Date**, **Project**, **Departments**, **Designations**, **Shift**, **Shift In**, **Shift Out**, **Location**, and **Reporting Officer**.
6. Complete **Salary & Compensation** according to the selected **Salary Type**. Depending on type, the form can show **Salary Grade**, **Basic Salary**, **Gross Salary**, **Salary**, **Tiffin Amount**, **Daily Rate**, **Hourly Rate**, **Work Type**, and salary start month/year.
7. Complete **Settings & Preferences**, including assigned leave type and weekend where applicable.
8. Optionally complete **Banking Information** and the displayed balance fields.
9. Optionally enter a note and upload permitted employee assets/images.
10. If the employee needs application access, complete **User Account Setup**, select **Role**, and enter **User Name**, **Password**, and **Confirm Password**.
11. Select **Save**.

The employee **Identifier**, RFID/device identifiers, and username must match the organization's conventions. Search existing employees before creating another record.

## Employee records and documents

The employee view can provide appointment letters, multiple appointment-letter formats, biodata, ID card, job application, nomination form, salary certificate, age verification, experience certificate, warning letter, tax information, and related payroll entries. Availability depends on configuration and permission.

## Shift setup

1. Open **Employee Management → Shift**.
2. Create a shift.
3. Enter **Shift Title**, **In Time**, **Out Time**, and **Grace Period**.
4. Select **Save**.

Confirm whether a shift crosses midnight. Incorrect shift times can affect attendance, late, overtime, and payroll results.

## Rosters

1. Open **Employee Management → Rosters**.
2. Select the create action.
3. Choose **Year** and **Month**.
4. Filter by **Departments**, **Shift**, and **Project** when needed.
5. Choose **Select Shift**.
6. Set **Date Selection Type** and then select days, one date, or a start/end date range as displayed.
7. Select the employees.
8. Review and **Save**.

Use the roster print action to review assignments. A roster change can affect attendance interpretation.

## Attendance entry

1. Open **Payroll → Time Sheets → Attendances**.
2. Select **New Attendance** for one record, **Bulk Create** for multiple records, employee-range entry for a date range, or Import/Export when appropriate.
3. For a manual attendance, select **Employee**, **Attendance Date**, **In Time**, and **Out Time**.
4. Select **Save**.

The module also contains sync operations for connected attendance systems, duty-shift change, missing-punch preview/fix, and keeping first/last punches. Preview and verify affected employees and dates before applying a bulk fix.

## Device allocation and biometric data

Use **Employee Management → Device Allocation** to allocate or revoke an employee on connected biometric devices. **FastFace Error Logs** and employee-specific Tipsoi error logs help diagnose failed synchronization or enrollment. Verify device connectivity and the employee identifier before retrying.

## Leave management

1. Configure **Payroll → Time Sheets → Leave Types**.
2. Open **Leave Management** and create a leave.
3. Select **Employee** and **Leave Type**.
4. For maternity leave, complete **Expected Delivery Date** and **Medical Certificate Reference** when required.
5. Choose **Duration**. For half-day leave, select **Half-Day Session**.
6. Select **Start Date** and **End Date**.
7. Enter **Description** and **Remark** when applicable.
8. Save and review the employee leave summary/balance.

The application provides earned-balance and maternity-eligibility checks. Do not promise approval or available balance without reviewing the displayed calculation.

## Holidays and working-day overrides

- Use **Holiday Management** to create, edit, and delete holidays.
- Use **Weekend Working-Day Overrides** when a normal weekend must be treated as a working day.

Date configuration influences attendance and salary calculations. Verify the date and affected employees/location before saving.

## Salary grades

1. Open **Payroll → Salary Grades**.
2. Create a grade.
3. Enter **Grade Name** and **Basic Salary**, plus other displayed components.
4. Select **Save**.

## Salary generation and payment

The application provides **Monthly Salary**, **Hourly Salary**, and **As Per Work** salary generation, plus payment history and payslips.

1. Ensure employee salary configuration, attendance, leave, holiday, roster, advances, bonuses, penalties, deductions, and applicable work transactions are complete for the period.
2. Open the required Salary Generate screen.
3. Select the month/date range and employees requested by the form.
4. Generate and review the calculated salaries.
5. Use the payment action only after review and authorization.
6. Review **Payment History** and payslips after payment.

Generating and paying salary are separate operations. Do not regenerate or delete salary merely to change a payment without first checking existing salary and payment records.

## Advances, bonuses, and adjustments

- **Employee Advance** manages employee advance transactions.
- **Employee Advance Salary** records advance salary.
- **Salary Bulk Data Entry** enters multiple salary components.
- **Bonus Payment** records bonus payment.
- **Bonus Override** changes configured bonus results for selected cases.
- Employee records can contain allowances, deductions, loans, commissions, penalties, pensions, other payments, and salary history.

Verify effective date, employee, type, recurrence, and amount before saving.

## As Per Work payroll

Recommended order:

1. Create **Work Type**.
2. Create **Work** records.
3. Create **Work Style**.
4. Configure **Work Pricing Matrix**.
5. Enter or import **Work Transactions**.
6. Review entries and use **Salary Generate** for as-per-work salary.

## Core HR

- **Promotions**: create/update promotion records and generate promotion letters.
- **Transfers**: create/update employee transfer records and generate transfer letters.
- **Warnings**: create/update warnings and generate warning letters.
- **Terminations**: create/update terminations and generate termination letters.
- **Training Types** and **All Trainings**: manage training, assign employees, and generate certificates.
- **Award Types** and **All Awards**: manage awards and generate certificates.
- **Document Types**, **All Documents**, and **Expiring Documents**: manage employee documents, preview/download files, and review expiry.

Only authorized HR personnel should create or delete these records. Verify employee, effective date, reason, and supporting documentation.
