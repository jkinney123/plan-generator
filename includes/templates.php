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
                'Pre-Tax Premiums' => '<h1>ARTICLE I<br>INTRODUCTION</h1>'
                    . '<p>{{employer}} ("Employer") has restated this Cafeteria Plan ("Plan"), effective {{restatement_effective_date}}, to help employees pay for certain benefits with pre-tax dollars. The Plan follows Section 125 of the Internal Revenue Code (the federal tax law that allows "cafeteria plans"), as well as Sections 105, 129, and 223 (which set rules for tax-free medical expense reimbursements, dependent care expense reimbursements, and Health Savings Accounts, respectively). Because {{employer}} is a public employer in Minnesota, this Plan also follows Minnesota law. It is not subject to the Employee Retirement Income Security Act of 1974 (ERISA).</p>'
                    . '<hr style="border: none; border-top: 1pt solid #000; margin: 18pt 0; width: 100%;">'
                    . '<h3>Purpose of the Plan</h3>'
                    . '<p>This Plan exists to give eligible employees ("Employees") a variety of benefit choices, such as medical, dental, and vision insurance, a Health Savings Account ("HSA"), a Health Flexible Spending Arrangement ("Health FSA"), and a Dependent Care Assistance Plan ("Dependent Care FSA"). Employees can pay for these benefits on a pre-tax basis, which lowers their taxable income.</p>'
                    . '<hr style="border: none; border-top: 1pt solid #000; margin: 18pt 0; width: 100%;">'
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
                    . '</ol>'
                    . '<hr style="border: none; border-top: 1pt solid #000; margin: 18pt 0; width: 100%;">'
                    . '<p><strong>Qualified Benefits Not Offered.</strong> Benefits not identified above are not offered under the plan. Certain benefits that are technically permitted under the cafeteria plan rules are not made available as options for employers to select. These include 401(k).</p>'
                    . '<p>The plan does not offer prepayment of post‑retirement group‑term life insurance. This would let employees use pre‑tax pay now to buy life coverage that continues after they retire. It\'s rarely offered because the tax benefit is small, recordkeeping is cumbersome, and most group life insurers/administrators don\'t support a separate "prepaid retiree life" option.</p>'
                    . '<hr style="border: none; border-top: 1pt solid #000; margin: 18pt 0; width: 100%;">'
                    . '<h3>How It Works</h3>'
                    . '<p>For the Health FSA and Dependent Care FSA, this Plan follows the tax rules under Section 105 and Section 129 of the Code. These rules let the Plan reimburse medical or dependent care expenses without adding to the Employee\'s taxable income, as long as certain requirements are met. The Health FSA is also subject to special rules under COBRA (the federal continuation coverage rules) which allows employees to retain coverage through the end of the year if the account is underspent at the time of the loss of coverage.</p>'
                    . '<hr style="border: none; border-top: 1pt solid #000; margin: 18pt 0; width: 100%;">'
                    . '<h3>HSA Contributions</h3>'
                    . '<p>For Employees who choose an HSA, the Employer will send HSA contributions to a single HSA custodian. Employees then manage their own HSAs, decide how to invest HSA funds, and follow any rules set by the HSA provider. Once the money goes into an HSA, it belongs to the Employee. The Employee can withdraw or transfer the funds (as allowed by law). Although the Employer helps by making HSA contributions, neither the Employer\'s process for sending contributions nor the HSA itself counts as an "employee welfare benefit plan" under federal or Minnesota law.</p>',

            ]
        ],
        'v2' => [
            'label' => 'Version 2 (2026)',
            'components' => [
                'Pre-Tax Premiums' => '<h1>ARTICLE I</h1>'
                    . '<h2>INTRODUCTION</h2>'
                    . '<p>{{employer}} ("Employer") has amended and restated this Cafeteria Plan ("Plan") effective {{restatement_effective_date}} to comply with applicable federal and state laws and regulations. This Plan is intended to qualify as a "cafeteria plan" under Section 125 of the Internal Revenue Code of 1986, as amended (the "Code"), and applicable regulations.</p>'
                    . '<p>This Plan allows eligible employees to choose between cash compensation and certain qualified benefits. Employees may elect to reduce their compensation on a pre-tax basis to pay for these benefits, thereby reducing their taxable income and increasing their take-home pay.</p>'
                    . '<p>The benefits available under this Plan include:</p>'
                    . '<ul>'
                    . '<li>Premium payment arrangements for group health insurance coverage</li>'
                    . '<li>Health Flexible Spending Arrangements (Health FSAs)</li>'
                    . '<li>Dependent Care Assistance Programs</li>'
                    . '<li>Health Savings Account contributions (where applicable)</li>'
                    . '</ul>'
                    . '<p>This Plan is designed to provide employees with comprehensive tax-advantaged benefit options while ensuring full compliance with all applicable federal and state requirements.</p>'
                    . '<h1>ARTICLE XIV</h1>'
                    . '<h2>ADMINISTRATIVE INFORMATION</h2>'
                    . '<h3>Plan Name</h3>'
                    . '<p>{{employer}} Cafeteria Plan</p>'
                    . '<h3>Legal Status</h3>'
                    . '<p>The Plan Sponsor, Claims Administrator, and Plan Administrator information is as follows:</p>'
                    . '<p><strong>Plan Sponsor:</strong><br>{{employer}}<br>{{employer_address}}</p>'
                    . '<p><strong>Claims Administrator:</strong><br>{{claims_administrator}}<br>{{claims_administrator_address}}</p>'
                    . '<p>This Plan is maintained as a welfare benefit plan under the Employee Retirement Income Security Act of 1974 (ERISA), as applicable.</p>',

                'Health Flexible Spending Account (Health FSA)' => '<h3>Health Flexible Spending Account (Health FSA)</h3>'
                    . '<p>The Health Flexible Spending Arrangement (Health FSA) provides eligible employees with reimbursement for eligible medical expenses using pre-tax salary reductions. This benefit helps employees maximize their healthcare dollars by reducing taxable income.</p>'
                    . '<p>Eligible medical expenses include those defined under Section 213(d) of the Internal Revenue Code, including deductibles, copayments, and other qualifying medical, dental, and vision expenses not covered by insurance.</p>',

                'Health Savings Account (HSA)' => '<h3>Health Savings Account (HSA)</h3>'
                    . '<p>Employees enrolled in a qualifying high-deductible health plan may contribute to a Health Savings Account (HSA) through pre-tax payroll deductions. HSA funds may be used for qualified medical expenses and unused amounts carry forward indefinitely.</p>'
                    . '<p>HSA accounts are portable and remain with the employee upon termination of employment.</p>',

                'Dependent Care Account' => '<h3>Dependent Care Account</h3>'
                    . '<p>The Dependent Care Assistance Plan allows eligible employees to pay for qualifying dependent care expenses with pre-tax dollars. Covered expenses must be necessary to enable the employee and spouse (if applicable) to work or seek employment.</p>'
                    . '<p>Eligible dependents include children under age 13 and other qualifying dependents who are physically or mentally incapable of self-care.</p>',
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