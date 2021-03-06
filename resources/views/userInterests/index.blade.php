@php
    /** @var \Domain\Source\Models\Source $source */
@endphp

@component('layouts.user', [
    'title' => __('Interests'),
])
    <heading>{{ __('Interests') }}</heading>

    <div class="content">
        <p>
            You can specify your interests by choosing topics. Only selected topics will end up in your feed.
        </p>
    </div>

    @include('userInterests.partials.form')
@endcomponent
