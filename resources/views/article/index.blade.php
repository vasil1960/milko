<x-guest-layout>

    <x-my.nav/>

    <x-my.forest-pic/>

    <x-my.title title="{{ $journal->title }}, {{ $journal->volume }}, {{ $journal->number }}, {{ $journal->year }}"/>

    @foreach ($articles as $article)

        <x-my.content>

            <div class="md:flex py-4 px-1 space-x-6">
                <div class="md:w-3/4 space-y-6 text-gray-600">
                    <h2 class="font-extrabold mb-6 text-green-700 uppercase">
                        {!! strip_tags($article->title) !!}
                    </h2>

                    <p class="text-sm font-bold text-gray-400">
                        {!! strip_tags($article->author) !!}
                    </p>

                    <p class="text-sm font-bold text-gray-400">
                        {!! strip_tags($article->from) !!}
                    </p>

                    <p class="text-justify">
                        {!! strip_tags($article->summary) !!}
                    </p>
                </div>

                <div class="md:w-1/4  text-center p-4 rounded-md border border-gray-300 bg-green-50  space-y-14 max-h-full">
                    <p class="font-bold">
                        {{ $article->journal->title }}, {{ $article->journal->volume }}, {{ $article->journal->number }}, {{ $article->journal->year }}
                    </p>

                    <p class="px-auto">
                        <a href="{{ route('article.download', $article->id) }}">
                            <svg class="w-10 h-10 md:ml-24 ml-48 hover:bg-green-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </p>

                    <p class="text-sm">
                        {{ $article->file }}
                    </p>

                    <p class="text-sm">
                        Downloads: {{ $article->dcount }}
                    </p>
                </div>
            </div>


        </x-my.content>

    @endforeach

    <x-my.footer/>

</x-guest-layout>

