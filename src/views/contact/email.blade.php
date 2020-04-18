@component('mail::message')
# Hy Admin, you have a new contact message
From : {{ $contact['name'] }}, [{{ $contact['email'] }}}

# Message
{{ $contact['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
