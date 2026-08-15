@props([
    'size' => 100,
    'alt' => '',
])

{{-- Decorative by default: every usage sits next to a "PHP Monitor" wordmark. --}}
<img width="{{ $size }}" height="{{ $size }}"
     src="{{ url()->to("/phpmon-icon.svg") }}"
     alt="{{ $alt }}"
     style="position: relative; left: -15px; margin-bottom: 10px;"
/>
