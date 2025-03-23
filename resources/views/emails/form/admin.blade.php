<x-mail::message>
    // @formatter:off

# {{ $subject }}

{{ $message }}

### Contact details
- {{ $first_name }} {{ $last_name }}
- {{ $email }}
- {{ $phone }}

</x-mail::message>
