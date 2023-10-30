<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-ends m-2 p-2">
                <a href="{{ route('admin.brandsub.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
            </div>

            <div class="space-y-8 divide-y divide-gray-200 mt-10">
            <form method="POST" action="{{ route('admin.brandsub.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="name" class="block text-sm font-medium text-gray-700">Brand Name</label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                        </div>
                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="brands" class="block text-sm font-medium text-gray-700"> Brand </label>
                        <div class="mt-1">
                            <select id="brand_id" name="brand_id" class="form-multiselect block w-full mt-1">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="intro_en" class="block text-sm font-medium text-gray-700">Intro (EN)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="intro_en" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('intro_en') border-red-400 @enderror"></textarea>
                        </div>
                        @error('intro_en')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="intro_mn" class="block text-sm font-medium text-gray-700">Intro (MN)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="intro_mn" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('intro_mn') border-red-400 @enderror"></textarea>
                        </div>
                        @error('intro_mn')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="intro_ru" class="block text-sm font-medium text-gray-700">Intro (RU)</label>
                        <div class="mt-1">
                            <textarea id="texteditor" name="intro_ru" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('intro_ru') border-red-400 @enderror"></textarea>
                        </div>
                        @error('intro_ru')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label for="not_brand" class="block text-sm font-medium text-gray-700">Брэнд эсэх</label>
                        <div class="mt-1">
                            <select id="not_brand" name="not_brand" class="form-multiselect block w-full mt-1">
                                <option value="0" selected>Тийм</option>
                                <option value="1">Үгүй</option>
                            </select>
                        </div>
                        <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                        <div class="mt-1">
                            <input type="file" id="logo" name="logo" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('logo') border-red-400 @enderror" />
                        </div>
                        @error('logo')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <label for="slider_image" class="block text-sm font-medium text-gray-700">Home page Slider image</label>
                        <div class="mt-1">
                            <input type="file" id="slider_image" name="slider_image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('slider_image') border-red-400 @enderror" />
                        </div>
                        @error('slider_image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="width: 100%;">Add</button>
                        </div>
                    </div>
                    
                </div>
    
            </form>
            </div>

        </div>
    </div>
</x-admin-layout>
