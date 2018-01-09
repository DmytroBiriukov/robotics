<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LANGUAGES <b class="caret"></b></a>
    <ul class="dropdown-menu">
        @foreach (array_keys(config('locale.languages')) as $lang)
            @if ($lang != app()->getLocale())
                <li><a href="{{ '/lang/'.$lang }}">{{ __('menus.language-picker.langs.'.$lang) }}</a></li>
            @endif
        @endforeach
    </ul>
</li>
