<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('cookie-policy') }}
    </x-slot:breadcrumbs>

    <x-sections.top-of-page>
        <div class="max-w-2xl mx-auto prose">
            @markdown
            # Cookie Policy


            This Cookie Policy explains how {{ config('app.name') }} ("we," "our," or "us") uses cookies on our website.

            ## 1. What Are Cookies?
            Cookies are small text files stored on your device that help improve your browsing experience.

            ## 2. How We Use Cookies
            We use cookies to:
            - Enhance website functionality.
            - Analyze website traffic and performance.
            - Personalize content and advertisements.

            ## 3. Types of Cookies We Use
            - **Essential Cookies**: Required for website functionality.
            - **Analytical Cookies**: Help us understand website traffic.
            - **Marketing Cookies**: Used for targeted advertising.

            ## 4. Managing Cookies
            You can disable cookies through your browser settings. However, some features of the website may not function properly.

            ## 5. Changes to This Policy
            We may update this Cookie Policy from time to time. The latest version will always be available on our website.

            ## 6. Contact Us
            If you have any questions about our Cookie Policy, email us at [{{ config('contact.email') }}](mailto:{{ config('contact.email') }}).

            @endmarkdown
        </div>
    </x-sections.top-of-page>
</x-app-layout>
