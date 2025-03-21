<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <div class="max-w-2xl mx-auto my-20 prose">
        @markdown
        # Privacy Policy

        {{ config('app.name') }} ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.

        ## 1. Information We Collect
        - **Personal Information**: Name, email address, phone number, and any other information you provide.
        - **Automated Data**: IP address, browser type, and browsing activity.

        ## 2. How We Use Your Information
        - To provide and improve our services.
        - To process transactions and customer inquiries.
        - To send promotional and marketing communications (with your consent).

        ## 3. How We Share Your Information
        - We do not sell or rent your data.
        - We may share data with third-party service providers for business operations.
        - We may disclose information if required by law.

        ## 4. Data Security
        We implement security measures to protect your data, but no method is 100% secure.

        ## 5. Your Rights
        You may request access, correction, or deletion of your personal data.

        ## 6. Changes to This Policy
        We may update this policy periodically. Continued use of our services indicates acceptance.

        ## 7. Contact Us
        For any questions, contact us at [{{ config('contact.email') }}](mailto:{{ config('contact.email') }}).
        @endmarkdown
    </div>
</x-app-layout>
