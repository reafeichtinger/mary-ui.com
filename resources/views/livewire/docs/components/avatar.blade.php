<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;
use Mary\View\Components\Avatar;

new
#[Title('Avatar')]
#[Layout('components.layouts.app', ['description' => 'Livewire UI avatar component with icon, title and subtitle'])]
class extends Component {
    //
}; ?>

<div class="docs">
    <x-anchor title="Avatar" />

    <x-code-example class="grid lg:grid-cols-2 gap-8">
        @verbatim('docs')
            @php                                         // [tl! .docs-hide]
                $user = App\Models\User::first();        // [tl! .docs-hide]
            @endphp                                     <!-- [tl! .docs-hide] -->
            <x-avatar :image="$user->avatar" alt="My image" />

            {{-- Manipulate avatar imagem with CSS classes --}}
            <x-avatar :image="$user->avatar" class="!w-14 !rounded-lg" />

            {{-- Title --}}
            <x-avatar :image="$user->avatar" :title="$user->username" />

            {{-- Subtitle --}}
            <x-avatar :image="$user->avatar" :title="$user->username" :subtitle="$user->name" class="!w-10" />

            {{-- Placeholder --}}
            <x-avatar placeholder="RT" title="Robson Tenório" subtitle="@robsontenorio" class="!w-10" />
        @endverbatim
    </x-code-example>

    <x-anchor title="Slots" size="text-xl" class="mt-14" />

    <x-code-example class="flex gap-5">
        @verbatim('docs')
            @php                                    // [tl! .docs-hide]
                $user = App\Models\User::first();   // [tl! .docs-hide]
            @endphp                                 <!-- [tl! .docs-hide] -->
            <x-avatar :image="$user->avatar" class="!w-22">
                <x-slot:title class="text-3xl !font-bold pl-2">
                    {{ $user->username }}
                </x-slot:title>

                <x-slot:subtitle class="grid gap-1 mt-2 pl-2 text-xs">
                    <x-icon name="o-paper-airplane" label="12 posts" />
                    <x-icon name="o-chat-bubble-left" label="45 comments" />
                </x-slot:subtitle>

            </x-avatar>
        @endverbatim
    </x-code-example>

    {{--    <hr class="my-10" />--}}
    {{--    <x-anchor title="API" size="text-xl" class="mt-14" />--}}
    {{--    <x-api-generator :class-name="Avatar::class" />--}}
    {{--    <div class="mb-64"></div>--}}
</div>
