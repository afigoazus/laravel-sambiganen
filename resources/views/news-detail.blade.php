@include("layouts.header")
<main class="font-dusha mt-24 container mx-auto">
    <section class="w-11/12 mx-auto py-10 lg:grid lg:grid-cols-[3fr_1fr] gap-5 space-y-8">
        <!-- Main -->
        <div class="space-y-8">
            <!-- Header berita -->
            <div class="space-y-4">
                <div class="rounded-2xl overflow-hidden relative">
                    <img src="{{ asset("storage/" . $news->photo_path) }}" class="w-full h-auto max-h-[250px] object-cover" alt="{{ $news->title }}">

                    <!-- category -->
                    <div class="absolute bottom-2 left-2 flex gap-3">
                        <!-- kategori -->
                        @foreach ($news->categories as $category)
                        <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $category->name }}</span>
                        @endforeach
                        <!-- dusun -->
                        @foreach ($news->locations as $location)
                        <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $location->name }}</span>
                        @endforeach
                    </div>
                </div>

                <h1 class="text-center font-poppins text-xl md:text-2xl font-semibold">{{ $news->title }}</h1>
            </div>

            <!-- Content berita -->
            <div class="font-poppins text-sm md:text-base text-justify space-y-4 text-[#2C2738]">
                {!! $news->content !!}
            </div>
        </div>

        <div class="font-poppins space-y-4">
            <div class="border-b-[6px] border-[#0081a7]">
                <p class="px-4 py-2 text-white bg-primary rounded-tr-lg w-fit text-right font-medium">Berita Populer</p>
            </div>

            @foreach ($differentNews as $difNews)
            <div class="border-b-[3px] border-[#0081a7] pb-4 space-y-4">
                @if ($loop->index === 0)
                <div>
                    <img src="{{ asset('storage/' . $difNews->photo_path) }}" class="w-full h-auto max-h-[200px] object-cover" alt="{{ $difNews->title }}">
                </div>
                @endif
                <p class="font-bold">
                    <a href="{{ route('berita.get', ['id' => $difNews->id]) }}">{{ $difNews->title }}</a>
                </p>
            </div>
            @endforeach
        </div>
    </section>
</main>
@include("layouts.footer")