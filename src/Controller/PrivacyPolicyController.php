<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PrivacyPolicyController extends AbstractController
{
    #[Route('/privacy-policy', name: 'privacy_policy')]
    public function index(): Response
    {
        return new Response('<h1>Privacy Policy</h1><p>Privacy Policy for Studio Vision<br>

Last Updated: August 13, 2025<br>

1. Introduction<br>

Welcome to Studio Vision, a Croatian firm providing marketing services and AI automations. We are committed to protecting your personal data in compliance with the General Data Protection Regulation (GDPR) and the Croatian Personal Data Protection Act (Zakon o provedbi Opće uredbe o zaštiti podataka). This Privacy Policy explains how we collect, use, store, and protect your personal data when you use our services, website (https://studio-vision.hr), or apps integrated with platforms like Facebook, Instagram, LinkedIn, and others.

2. Who We Are<br>
<br>
We are Studio Vision, obrt za vizualizaciju i uređenje prostora, owned by Hrvoje Malinović, located at Zagrebačka 89, 42000 Varaždin, Croatia (OIB: 98929408219). For privacy inquiries, contact us at hrvoje@studio-vision.hr. If required, our Data Protection Officer (DPO) will be appointed and listed here once our operations scale.

3. Personal Data We Collect<br>
<br>
We collect and process personal data for our business-to-business (B2B) clients and, where authorized, their end-users. The types of data include:





Client Data:





Name, surname, email address, phone number, and business address for project agreements, offers, or invoices.



OAuth access tokens or account IDs for platforms (e.g., Meta, Google, LinkedIn) to manage marketing or automation services.



End-User Data (via clients):





Names, email addresses, or other contact details provided by clients for services like email campaigns, CRM integrations, or AI chatbots.



Engagement data (e.g., likes, comments, analytics) from social media platforms (Facebook, Instagram, LinkedIn) when authorized.



Technical Data:





IP addresses, device information, or usage logs from our website or apps.



Data from web scraping of public APIs (where legally permitted) for marketing or analytics purposes.



Cookies and Tracking:





Functional, analytical, and marketing cookies on our website (see Section 10 for details).

We collect only the minimum data necessary for our services, in line with GDPR’s data minimization principle.

4. How We Use Your Personal Data

We process personal data for the following purposes and legal bases (GDPR Article 6):





To Provide Services (Legal Basis: Contract):





Deliver marketing services (e.g., posting on Facebook, Instagram, LinkedIn) and AI automations (e.g., data analysis, email campaigns, chatbots, workflow analysis) via platforms like n8n.



Manage client accounts and integrations with CRMs (e.g., via Mailchimp) or social media platforms.



To Communicate (Legal Basis: Contract or Consent):





Send offers, invoices, project updates, or newsletters (if you opt in).



To Improve Services (Legal Basis: Legitimate Interests):





Analyze website usage, service performance, or campaign analytics to enhance our offerings.



To Comply with Legal Obligations (Legal Basis: Legal Obligation):





Meet GDPR, Croatian law, or platform requirements (e.g., Meta’s Platform Terms).

5. How We Collect Your Data





Directly from Clients: When you provide data (e.g., name, email) via contracts, forms, or OAuth authorizations for platform access (e.g., Meta, Google, LinkedIn).



From Clients’ End-Users: When clients provide us with their customers’ data (e.g., email lists for campaigns) or authorize us to access engagement data via APIs.



Automatically: Via cookies, analytics tools, or public APIs (where permitted) for web scraping.



Third Parties: From platforms like Meta, Google, or LinkedIn when you grant access via OAuth.

6. Sharing Your Personal Data

We share personal data only as necessary:





With Platforms: Data is processed by Meta, Google, LinkedIn, Mailchimp, or n8n to enable services (e.g., posting, analytics, automations). These providers are GDPR-compliant processors.



With Client-Approved CRMs: Data may be shared with your chosen CRM for integrations.



With AI Providers: Limited data (e.g., for chatbot training or analytics) may be processed by Open AI, Perplexity, or Gemini, under strict data processing agreements.



Legal Requirements: We may disclose data to comply with legal obligations or respond to authorities (e.g., AZOP).

We do not sell or share your data for unauthorized purposes.

7. International Data Transfers

Some platforms (e.g., Meta, Google, Open AI) are based in the US, requiring data transfers outside the EU/EEA. We ensure compliance through:





Standard Contractual Clauses (SCCs) or Data Transfer Agreements with providers.



Meta’s Data Transfer Addendum for GDPR compliance.



Other safeguards as required by GDPR Article 46.

8. Data Retention





Client Data: Retained for the duration of our contract plus 6 years to comply with Croatian tax and accounting laws (e.g., Zakon o računovodstvu).



End-User Data: Retained only as long as necessary for the service (e.g., campaign duration) or until the client revokes access.



Access Tokens: Stored securely and deleted upon client request or contract termination.



Cookies: Retained as per our Cookie Policy (Section 10).

We delete data when no longer needed, per GDPR’s storage limitation principle.

9. Your Data Protection Rights

Under GDPR and Croatian law, you (clients and end-users) have the following rights:





Access: Request a copy of your personal data.



Rectification: Correct inaccurate or incomplete data.



Erasure: Request deletion of your data (e.g., when no longer needed).



Restriction: Limit how we process your data in certain cases.



Portability: Receive your data in a structured, machine-readable format.



Objection: Object to processing based on legitimate interests (e.g., analytics).



Withdraw Consent: Revoke consent at any time (e.g., for newsletters).

To exercise these rights, email hrvoje@studio-vision.hr. We’ll respond within 30 days (extendable to 60 days for complex requests). If dissatisfied, you may lodge a complaint with the Croatian Personal Data Protection Agency (AZOP) at https://azop.hr.

10. Cookie Policy

10.1 What Are Cookies?

Cookies are small text files stored on your device when you visit https://studio-vision.hr. They help us improve user experience, analyze performance, and deliver targeted marketing.

10.2 Types of Cookies We Use





Functional Cookies: Ensure website functionality (e.g., navigation).



Analytical Cookies: Track website performance (e.g., via Google Analytics).



Marketing Cookies: Enable targeted ads (e.g., via Meta or LinkedIn).

10.3 Managing Cookies

On your first visit, a cookie consent banner allows you to accept or decline non-essential cookies. You can manage preferences at any time via the cookie settings link at https://studio-vision.hr/en/privacy-policy-and-gdpr/. You can also disable cookies in your browser, but this may affect website functionality.

10.4 Third-Party Cookies

We use third-party cookies (e.g., Google Analytics, Meta) for analytics and marketing. These providers may collect data about your activity on our site and others, subject to their GDPR-compliant policies.

10.5 Contact

For cookie-related inquiries, email hrvoje@studio-vision.hr.

11. Data Security

We implement GDPR-compliant security measures, including:





Encryption for OAuth access tokens and data transfers.



Access controls for n8n and other platforms.



Regular audits to ensure secure data handling.

12. Data Deletion Instructions

To request data deletion (e.g., client data, access tokens), email hrvoje@studio-vision.hr or use our deletion form at https://studio-vision.hr/en/data-deletion. We’ll delete your data within 30 days, unless required for legal purposes (e.g., Croatian tax law).

13. Updates to This Policy

We review and update this policy annually or when our services, website, or legal requirements change. Check https://studio-vision.hr/en/privacy-policy-and-gdpr/ for the latest version.

14. Contact

For questions or concerns about this policy or your data, contact:





Email: hrvoje@studio-vision.hr



Address: Studio Vision, Zagrebačka 89, 42000 Varaždin, Croatia

15. Supervisory Authority

If you have concerns about our data practices, you may contact the Croatian Personal Data Protection Agency (AZOP):





Website: https://azop.hr



Address: Selska cesta 136, 10000 Zagreb, Croatia



Email: azop@azop.hr</p>');
    }
}