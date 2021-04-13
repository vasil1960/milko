<x-guest-layout>

    <x-my.nav/>

    <x-my.forest-pic/>

    <x-my.title title="Content"/>

    @foreach ($journals as $journal)

        <x-my.content class="">
            <div class="text-center">
                <div class="lg:grid grid-cols-7 lg:items-center">
                    <div class="font-bold"> {{ $journal->title }}</div>
                    <div class="lg:text-center">Vol. {{ $journal->volume }}</div>
                    <div class="lg:text-center">Nr.  {{ $journal->number }}</div>
                    <div class="lg:text-center"> Year: {{ $journal->year }}</div>
                    <div class="lg:text-center"> Downloads: {{ $journal->dcount }}</div>
                    {{-- <div> File: {{ $journal->file }}</div> --}}
                    <div class="text-center">
                        <a  href="{{ route('journal.download', $journal->id) }}">
                            <svg class="w-6 h-6 mt-4  mr-20 lg:ml-20 hover:bg-green-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex items-center">
                        <div>
                            <a href="{{ route('journal.article', $journal->id) }}">
                                <svg class="w-6 h-6 mt-4 lg:ml-20 hover:bg-green-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <small>
                                ({{ $journal->article->count() }})
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </x-my.content>

    @endforeach

    <x-my.footer/>

</x-guest-layout>
