<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <div class="max-w-2xl mx-auto my-20 prose">
        @markdown
        # Terms of Service


        Welcome to {{ config('app.name') }}. By accessing our website or using our services, you agree to comply with these Terms of Service.

        ## 1. Acceptance of Terms
        By accessing or using our website, you agree to these terms and conditions. If you do not agree, please do not use our services.

        ## 2. Use of Services
        - You must be at least 18 years old or have parental consent.
        - You agree not to use our website for any unlawful purposes.
        - We reserve the right to terminate accounts that violate our policies.

        ## 3. Intellectual Property
        All content on our website, including text, images, and branding, is owned by {{ config('app.name') }} and protected by copyright laws.

        ## 4. Disclaimers and Liability
        - Our services are provided "as is" without warranties.
        - We are not responsible for any indirect damages resulting from website use.
        - We do not guarantee the availability of our website at all times.

        ## 5. Payment and Refund Policy
        - Payments for our products and services must be completed before fulfillment.
        - Refunds are subject to our refund policy.

        ## 6. Changes to Terms
        We may modify these Terms at any time. Your continued use of our services constitutes acceptance.

        ## 7. Governing Law
        These Terms are governed by the laws of Cape Town, South Africa.

        ## 8. Contact Us
        For any concerns regarding these Terms, email us at [{{ config('contact.email') }}](mailto:{{ config('contact.email') }}).
        @endmarkdown
    </div>
</x-app-layout>
