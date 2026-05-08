@props([
    'href'   => '#',
    'label'  => '',
    'active' => false,
])

<li class="nav__item">
    <a href="{{ $href }}"
       class="nav__link {{ $active ? 'nav__link--active' : '' }}">
        {{ $label }}
    </a>
</li>