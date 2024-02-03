@props(['list'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/car/{{$list->id}}">{{$list->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$list->company}}</div>
            <x-car-tags :tagsCsv="$list->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot">{{$list->location}}</i>
            </div>
        </div>
    </div>
</x-card>