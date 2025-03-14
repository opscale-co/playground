<div class="max-w-md w-full bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
    <div class="px-6 py-4 flex justify-between items-center">
        <div class="flex-1">
            <h1 class="text-2xl font-semibold text-gray-800">{{ $name }}</h1>
            <p class="text-sm mt-1">Demo: <a class= "link-default" href='{{ url($path) }}'>{{ $path }}</a></p>
            <p class="text-sm mt-1">Repo: <a class= "link-default" href='{{ url($url) }}' target="_blank">{{ $url }}</a></p>
        </div>
        <div class="text-blue-500 ml-4">
            <i class="fa-solid {{ $icon }} fa-2x"></i>
        </div>
    </div>
</div>