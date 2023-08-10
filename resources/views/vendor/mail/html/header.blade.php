<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<h1 class="titulo"><img src="https://testdineroinmediato.alwaysdata.net/img/logo.png" class="logo" alt="Laravel Logo" style="vertical-align: middle;"> App Dinero Inmediato</h1>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
