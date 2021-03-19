<x-guest-layout>

    <x-my.nav/>

    <x-my.forest-pic/>

    <x-my.title title="News"/>

    @foreach ($news as $new)

        <x-my.content>

            <div>
                <div class="text-right m-4">{!! $new->date !!}</div>
                <div>{!! $new->content !!}</div>
            </div>

        </x-my.content>

    @endforeach

    <x-my.footer/>

</x-guest-layout>

