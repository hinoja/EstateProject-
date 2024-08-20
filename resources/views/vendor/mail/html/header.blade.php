@props(['url'])
<tr>
    <td class="header">
        <a href="{{ url('/') }}" style="display: inline-block;">
            @if (trim($slot) === 'Well-Done REAL Estate. SCI.')
                <img src="{{ asset('assets/images/logo/logo2.jpg') }}" class="logo" alt="{{ config('app.name') }} Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
