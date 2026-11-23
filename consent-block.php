<?php
// DPDP consent block for the Skin Quiz booking step. Include inside the form, just before the submit button.
// Bump $consentVersion in privacy-config.php whenever this wording or the Privacy Policy changes.
require_once __DIR__ . '/privacy-config.php';
?>
<style>
    .consent-block { text-align: left; font-size: 14px; line-height: 1.5; margin: 10px 0 20px; }
    .consent-block .consent-note { font-size: 13px; margin-bottom: 10px; opacity: 0.9; }
    .consent-block .consent-check { display: flex; align-items: flex-start; gap: 10px; margin: 0 0 8px; font-weight: 400; cursor: pointer; }
    .consent-block .consent-check input[type=checkbox] { position: static; opacity: 1; visibility: visible; display: inline-block; appearance: auto; -webkit-appearance: checkbox; width: 18px; height: 18px; flex: 0 0 18px; margin: 2px 0 0; padding: 0; }
    .consent-block a { text-decoration: underline; }
</style>
<div class="consent-block">
    <p class="consent-note"><strong>Why we need this:</strong> We use your name, contact details and quiz answers only to arrange your consultation and suggest suitable treatment. Please don't include detailed medical history here; the doctor will discuss it with you at your consultation. We don't sell your data. You can withdraw your consent anytime on our <a href="data-request.php?type=withdraw-marketing" target="_blank" rel="noopener">Your Data Rights</a> page.</p>
    <label class="consent-check">
        <input type="checkbox" name="consent_privacy" value="yes" required>
        <span>I agree to <?php echo h($org['brand']); ?> using my details and quiz answers to arrange my consultation, as explained in the <a href="privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a> (<a href="privacy-policy-hi.php" target="_blank" rel="noopener" lang="hi">हिन्दी</a>). I am 18 or older; if I am booking for a child or someone else, I am their parent or guardian or have their permission. *</span>
    </label>
    <label class="consent-check">
        <input type="checkbox" name="consent_marketing" value="yes">
        <span>Send me updates and skin-care tips from <?php echo h($org['brand']); ?> by WhatsApp, SMS or email. (Optional)</span>
    </label>
    <input type="hidden" name="consent_version" value="<?php echo h($consentVersion); ?>">
</div>
