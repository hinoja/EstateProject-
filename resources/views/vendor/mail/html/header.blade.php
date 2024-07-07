@props(['url'])
<tr>
<td class="header">
<a href="{{ url('/') }}" style="display: inline-block;">
@if (trim($slot) === env('APP_NAME'))
<img src="{{ asset('assets/logo.jpg') }}" class="logo" alt="{{ config('app.name') }} Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
