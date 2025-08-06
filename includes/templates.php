<?php
// Updated template content to include new fields: employer, restatement_effective_date, employer_address, claims_administrator, and claims_administrator_address in the PDF templates.
if (!defined('ABSPATH'))
    exit;

function cpp_get_template_versions()
{
    return [
        'v1' => [
            'label' => 'Version 1 (2025)',
            'components' => [
                'Pre-Tax Premiums' =>
                    '<span class="cpp-template" data-key="intro"><h1>ARTICLE I<br>INTRODUCTION</h1>'
                    . '<p>{{employer}} ("Employer") has restated this Cafeteria Plan ("Plan"), effective {{restatement_effective_date}}, to help employees pay for certain benefits with pre-tax dollars. The Plan follows Section 125 of the Internal Revenue Code (the federal tax law that allows "cafeteria plans"), as well as Sections 105, 129, and 223 (which set rules for tax-free medical expense reimbursements, dependent care expense reimbursements, and Health Savings Accounts, respectively). Because {{employer}} is a public employer in Minnesota, this Plan also follows Minnesota law. It is not subject to the Employee Retirement Income Security Act of 1974 (ERISA).</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="purpose">'
                    . '<h3>Purpose of the Plan</h3>'
                    . '<p>This Plan exists to give eligible employees ("Employees") a variety of benefit choices, such as medical, dental, and vision insurance, a Health Savings Account ("HSA"), a Health Flexible Spending Arrangement ("Health FSA"), and a Dependent Care Assistance Plan ("Dependent Care FSA"). Employees can pay for these benefits on a pre-tax basis, which lowers their taxable income.</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="components">'
                    . '<h3>Plan Components</h3>'
                    . '<p>This Plan has four main parts. Each part lets Employees make contributions by reducing their salary before taxes are taken out:</p>'
                    . '<ol>'
                    . '<li><strong>Premium Payment Plan</strong> – Helps pay an Employee\'s share of premiums for qualifying medical, dental, or vision coverage.</li>'
                    . '<li><strong>Health FSA</strong> – Reimburses qualifying medical expenses for Employees (and their dependents, if applicable). There are two types of Health FSAs:'
                    . '<ul>'
                    . '<li>A General Purpose FSA (for those who do not have an HSA), and</li>'
                    . '<li>A Limited Purpose FSA (for those who do have an HSA, covering only certain expenses like dental, vision and preventive care (as defined by the IRS) until the employee meets the minimum deductible required for an HSA-eligible high deductible health plan (a "HDHP").</li>'
                    . '</ul></li>'
                    . '<li><strong>Dependent Care FSA</strong> – Reimburses qualifying child or dependent care costs so that Employees (and spouses, if applicable) can work or look for work.</li>'
                    . '<li><strong>HSA Program</strong> – Allows the Employer and Employees to put money into an HSA on a pre-tax basis. This is only available if the Employee is enrolled in an HSA-eligible HDHP and does not have other health coverage (except for vision, dental, and preventive care) below the minimum deductible required for a HDHP under Section 223 of the Code.</li>'
                    . '</ol><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="not-offered">'
                    . '<p><strong>Qualified Benefits Not Offered.</strong> Benefits not identified above are not offered under the plan. Certain benefits that are technically permitted under the cafeteria plan rules are not made available as options for employers to select. These include 401(k).</p>'
                    . '<p>The plan does not offer prepayment of post‑retirement group‑term life insurance. This would let employees use pre‑tax pay now to buy life coverage that continues after they retire. It\'s rarely offered because the tax benefit is small, recordkeeping is cumbersome, and most group life insurers/administrators don\'t support a separate "prepaid retiree life" option.</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="how-it-works">'
                    . '<h3>How It Works</h3>'
                    . '<p>For the Health FSA and Dependent Care FSA, this Plan follows the tax rules under Section 105 and Section 129 of the Code. These rules let the Plan reimburse medical or dependent care expenses without adding to the Employee\'s taxable income, as long as certain requirements are met. The Health FSA is also subject to special rules under COBRA (the federal continuation coverage rules) which allows employees to retain coverage through the end of the year if the account is underspent at the time of the loss of coverage.</p><hr style="border: none; border-top: 1pt solid #000; margin: 18pt 0; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="hsa-contributions">'
                    . '<h3>HSA Contributions</h3>'
                    . '<p>For Employees who choose an HSA, the Employer will send HSA contributions to a single HSA custodian. Employees then manage their own HSAs, decide how to invest HSA funds, and follow any rules set by the HSA provider. Once the money goes into an HSA, it belongs to the Employee. The Employee can withdraw or transfer the funds (as allowed by law). Although the Employer helps by making HSA contributions, neither the Employer\'s process for sending contributions nor the HSA itself counts as an "employee welfare benefit plan" under federal or Minnesota law.</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    // --- Begin ARTICLE XIV ---
                    . '<span class="cpp-template" data-key="art-xiv-title">'
                    . '<h1 style = "margin-top: 12pt !important;">ARTICLE XIV<br>ADMINISTRATIVE INFORMATION</h1>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="plan-name">'
                    . '<h3>Plan Name:</h3>'
                    . '<p>{{employer}} Cafeteria Plan</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="legal-status">'
                    . '<h3>Legal Status:</h3>'
                    . '<p>The Cafeteria Plan, and the Dependent Care FSA, Health FSA, and HSAs funded through the Cafeteria Plan are made available through a local government entity and are not subject to ERISA.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="plan-sponsor">'
                    . '<h3>Plan Sponsor:</h3>'
                    . '<p>{{employer}}<br>{{employer_address}}</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="claims-admin">'
                    . '<h3>Claims Administrator:</h3>'
                    . '<p>{{claims_administrator}}<br>{{claims_administrator_address}}</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="employer">'
                    . '<h3>Employer:</h3>'
                    . '<p>{{employer}}</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="plan-year">'
                    . '<h3>Plan Year:</h3>'
                    . '<p>The Plan Year is from January 1 to December 31.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="funding">'
                    . '<h3>14.1 Type of Funding</h3>'
                    . '<p>Benefits under the Plan are from Employer\'s general assets. There is no trust or other fund, no independent source of funds, or any insurance contract that guarantees the payment of benefits under the Plan. Employees who elect any of the benefits requiring Participant contributions will contribute at a fixed rate toward the cost of the benefit through payroll deductions as specified in the Election Form or as otherwise specified by the Claims Administrator.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="assign-duties">'
                    . '<h3>14.2 Assignment of Duties</h3>'
                    . '<p>(a) The Employer has the discretionary authority to administer the Plan in all of its details, including determining eligibility for benefits and construing all terms of the Plan. The Employer has the exclusive right and discretion to interpret the Plan and to determine all questions of fact and/or law that may arise in connection with the administration of the Plan.</p>'
                    . '<p>(b) The Employer may assign its duties to others. The Employer has currently designated {{claims_administrator}} at {{claims_administrator_address}} as the “Claims Administrator” for the Plan with the authority to exercise all rights and discretion of Employer in the administration of the Plan.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="future">'
                    . '<h3>14.3 Future of the Plan</h3>'
                    . '<p>Employer intends to continue this Plan indefinitely. However, Employer reserves the right to change or terminate the Plan at any time. Employer or any authorized officer or representative of Employer can make changes to or terminate the Plan by a written instrument signed or approved by such representative. You will be notified if any changes are made. Nothing in this Plan is intended to entitle you to vested benefits. No vested benefits are provided under the Plan; provided, any amount you contribute to an HSA will belong to you if you are otherwise eligible for the HSA.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="not-employment">'
                    . '<h3>14.4 Not an Employment Contract</h3>'
                    . '<p>Neither this Plan nor any action taken with respect to it will confer upon any person the right to continued employment with Employer.</p>'
                    . '</span>'

            ]
        ],
        'v2' => [
            'label' => 'Version 2 (2026)',
            'components' => [
                'Pre-Tax Premiums' =>
                    '<span class="cpp-template" data-key="intro"><h1>ARTICLE I<br>INTRODUCTION</h1>'
                    . '<p>{{employer}} ("Employer") has updated and revised this Cafeteria Plan ("Plan"), effective {{restatement_effective_date}}, to assist employees in covering certain benefits using pre-tax dollars. The Plan is governed by Section 125 of the Internal Revenue Code (the federal law that enables "cafeteria plans"), as well as Sections 105, 129, and 223 (which provide rules for tax-free medical and dependent care reimbursements, and Health Savings Accounts, respectively). As {{employer}} is a public employer in Minnesota, this Plan also complies with Minnesota law. It is not subject to the Employee Retirement Income Security Act of 1974 (ERISA).</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="purpose">'
                    . '<h3>Purpose of the Plan</h3>'
                    . '<p>This Plan is designed to provide eligible employees ("Employees") with a broader range of benefit options, including medical, dental, and vision insurance, a Health Savings Account ("HSA"), a Health Flexible Spending Arrangement ("Health FSA"), and a Dependent Care Assistance Plan ("Dependent Care FSA"). Employees may pay for these benefits on a pre-tax basis, reducing their taxable income.</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="components">'
                    . '<h3>Plan Components</h3>'
                    . '<p>This Plan consists of four primary components. Each component allows Employees to contribute by reducing their salary before taxes are withheld:</p>'
                    . '<ol>'
                    . '<li><strong>Premium Payment Plan</strong> – Assists with payment of an Employee\'s share of premiums for eligible medical, dental, or vision coverage.</li>'
                    . '<li><strong>Health FSA</strong> – Reimburses eligible medical expenses for Employees (and their dependents, if applicable). There are two types of Health FSAs:'
                    . '<ul>'
                    . '<li>A General Purpose FSA (for those who do not have an HSA), and</li>'
                    . '<li>A Limited Purpose FSA (for those who have an HSA, covering only dental, vision, and preventive care (as defined by the IRS) until the employee meets the minimum deductible required for an HSA-eligible high deductible health plan (a "HDHP").</li>'
                    . '</ul></li>'
                    . '<li><strong>Dependent Care FSA</strong> – Reimburses qualifying dependent care expenses so that Employees (and spouses, if applicable) can work or seek employment.</li>'
                    . '<li><strong>HSA Program</strong> – Permits the Employer and Employees to contribute to an HSA on a pre-tax basis. This is only available if the Employee is enrolled in an HSA-eligible HDHP and does not have other health coverage (except for vision, dental, and preventive care) below the minimum deductible required for a HDHP under Section 223 of the Code.</li>'
                    . '</ol><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="not-offered">'
                    . '<p><strong>Qualified Benefits Not Offered.</strong> Benefits not listed above are not available under this plan. Certain benefits technically allowed under cafeteria plan rules are not offered as selectable options for employers. These include 401(k) plans.</p>'
                    . '<p>The plan does not provide for prepayment of post‑retirement group‑term life insurance. This would allow employees to use pre‑tax pay now to purchase life coverage that continues after retirement. This option is rarely provided due to minimal tax benefit, complex recordkeeping, and the fact that most group life insurers/administrators do not support a separate "prepaid retiree life" feature.</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="how-it-works">'
                    . '<h3>How It Works</h3>'
                    . '<p>For the Health FSA and Dependent Care FSA, this Plan follows the tax rules under Section 105 and Section 129 of the Code. These rules allow the Plan to reimburse medical or dependent care expenses without increasing the Employee\'s taxable income, provided certain requirements are met. The Health FSA is also subject to special rules under COBRA (federal continuation coverage), which allows employees to maintain coverage through the end of the year if the account is underspent at the time coverage is lost.</p><hr style="border: none; border-top: 1pt solid #000; margin: 18pt 0; width: 100%;"></span>'
                    . '<span class="cpp-template" data-key="hsa-contributions">'
                    . '<h3>HSA Contributions</h3>'
                    . '<p>For Employees who elect an HSA, the Employer will remit HSA contributions to a designated HSA custodian. Employees are responsible for managing their own HSAs, including investment decisions and compliance with HSA provider rules. Once funds are deposited into an HSA, they belong to the Employee. The Employee may withdraw or transfer the funds (as permitted by law). Although the Employer facilitates HSA contributions, neither the Employer\'s process for making contributions nor the HSA itself is considered an "employee welfare benefit plan" under federal or Minnesota law.</p><hr style="border: none; border-top: 1pt solid #000; margin-top: 18pt; width: 100%;"></span>'
                    // --- Begin ARTICLE XIV ---
                    . '<span class="cpp-template" data-key="art-xiv-title">'
                    . '<h1 style = "margin-top: 12pt !important;">ARTICLE XIV<br>ADMINISTRATIVE INFORMATION</h1>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="plan-name">'
                    . '<h3>Plan Name:</h3>'
                    . '<p>{{employer}} Cafeteria Plan</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="legal-status">'
                    . '<h3>Legal Status:</h3>'
                    . '<p>The Cafeteria Plan, and the Dependent Care FSA, Health FSA, and HSAs funded through the Cafeteria Plan are made available through a local government entity and are not subject to ERISA.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="plan-sponsor">'
                    . '<h3>Plan Sponsor:</h3>'
                    . '<p>{{employer}}<br>{{employer_address}}</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="claims-admin">'
                    . '<h3>Claims Administrator:</h3>'
                    . '<p>{{claims_administrator}}<br>{{claims_administrator_address}}</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="employer">'
                    . '<h3>Employer:</h3>'
                    . '<p>{{employer}}</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="plan-year">'
                    . '<h3>Plan Year:</h3>'
                    . '<p>The Plan Year is from January 1 to December 31.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="funding">'
                    . '<h3>14.1 Type of Funding</h3>'
                    . '<p>Benefits under the Plan are paid from the Employer\'s general assets. There is no trust or other fund, no independent source of funds, and no insurance contract that guarantees the payment of benefits under the Plan. Employees who elect any of the benefits requiring Participant contributions will contribute at a fixed rate toward the cost of the benefit through payroll deductions as specified in the Election Form or as otherwise specified by the Claims Administrator.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="assign-duties">'
                    . '<h3>14.2 Assignment of Duties</h3>'
                    . '<p>(a) The Employer has the discretionary authority to administer the Plan in all of its details, including determining eligibility for benefits and construing all terms of the Plan. The Employer has the exclusive right and discretion to interpret the Plan and to determine all questions of fact and/or law that may arise in connection with the administration of the Plan.</p>'
                    . '<p>(b) The Employer may assign its duties to others. The Employer has currently designated {{claims_administrator}} at {{claims_administrator_address}} as the “Claims Administrator” for the Plan with the authority to exercise all rights and discretion of Employer in the administration of the Plan.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="future">'
                    . '<h3>14.3 Future of the Plan</h3>'
                    . '<p>Employer expects to continue this Plan indefinitely. However, Employer reserves the right to change or terminate the Plan at any time. Employer or any authorized officer or representative of Employer can make changes to or terminate the Plan by a written instrument signed or approved by such representative. You will be notified if any changes are made. Nothing in this Plan is intended to entitle you to vested benefits. No vested benefits are provided under the Plan; provided, any amount you contribute to an HSA will belong to you if you are otherwise eligible for the HSA.</p>'
                    . '</span>'
                    . '<span class="cpp-template" data-key="not-employment">'
                    . '<h3>14.4 Not an Employment Contract</h3>'
                    . '<p>Neither this Plan nor any action taken with respect to it will confer upon any person the right to continued employment with Employer.</p>'
                    . '</span>'
            ]
        ],
    ];
}

/**
 * 7) Load sample library from JSON or array
 */
function cpp_load_plan_library()
{
    return [
        [
            'id' => 'cobra_clause',
            'trigger' => 'include_cobra', // used if user selected "yes"
            'title' => 'COBRA Coverage Clause',
            'body' => 'Under this plan, employees who qualify may continue coverage per COBRA guidelines...',
        ],
        // You can add more standard paragraphs here (FSA, etc.) or just inline them in the PDF code.
    ];
}