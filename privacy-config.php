<?php
// DPDP settings shared by privacy-policy.php, privacy-policy-hi.php, data-request.php and consent-block.php.
// Edit the details here once; every page updates.
//
// TODO (client): fill in the Grievance Officer's full name (it can be Dr. Parneet Sidhu), the clinic
// address and the office hours. The website does not show an address or hours anywhere yet, so the
// pages hide those lines until they are filled in.

$org = [
    'brand'   => 'The Rapple Skin Care',
    'doctor'  => 'Dr. Parneet Sidhu',
    'website' => 'therappleskincare.com',
    'address' => '', // e.g. 'Clinic address, City, PIN'
    'phone'   => '+91 7385218413',
    'email'   => 'therappleskincare@gmail.com',
];

$grievance = [
    'name'     => '', // e.g. 'Dr. Parneet Sidhu'
    'email'    => 'therappleskincare@gmail.com',
    'phone'    => '+91 7385218413',
    'hours'    => '', // e.g. 'Monday to Saturday, 10:00 am to 6:00 pm IST'
    'hours_hi' => '', // e.g. 'सोमवार से शनिवार, सुबह 10:00 से शाम 6:00 बजे (IST)'
];

// Shown as "Last updated" on the policy pages. Change it whenever the policy text changes,
// and bump $consentVersion at the same time so each submission records which version was agreed to.
$policyUpdated   = '23 November 2026';
$policyUpdatedHi = '23 नवंबर 2026';
$consentVersion  = '2026-11';

// Where data rights requests are sent: the Formester form the site's (now commented-out) contact
// forms used, tagged with form_type = "Data rights request". Confirm it is still active.
$dataRequestEndpoint = 'https://app.formester.com/forms/GaT6dwYwp/submissions';

if (!function_exists('h')) {
    function h($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }
}
