@php
use Illuminate\Support\Facades\App;
@endphp
<form method="POST" action="{{ route('change-language') }}" class="lang-form">
    @csrf
    <input type="hidden" name="locale" id="language-locale" value="{{ App::getLocale() === 'en' ? 'sw' : 'en' }}">
    <div class="lan-switch">
        <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" onchange="this.form.submit()">
        <label for="language-toggle"></label>
        @if(empty(app()->getLocale()))
            <span class='on'>SW</span>
            <span class='off'>EN</span>
        @else
            <span class="{{ app()->getLocale() === 'sw' ? 'on' : 'off' }}">SW</span>
            <span class="{{ app()->getLocale() === 'en' ? 'on' : 'off' }}">EN</span>
        @endif

    </div>
</form>
