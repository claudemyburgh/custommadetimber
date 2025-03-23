{{--@formatter:off--}}
<x-mail::message>

# Hi, {{ $first_name }} {{ $last_name }}

Here appreciate that you contacted us.
Whe will get back to you asap.


Thanks,<br>
{{ config('app.name') }}

</x-mail::message>
