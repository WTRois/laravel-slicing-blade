@extends('layouts.main')

@section('content')
    <!-- create user form -->
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h5 class="font-bold">Create New User</h5>
                    </div>
                    <div class="flex-auto px-6 py-6">
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @include('pages.user._form')
                            <!-- Action Buttons -->
                            <div class="flex items-center justify-end space-x-4">
                                <a href="{{ route('user.index') }}"
                                    class="inline-block px-6 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-gray-500 text-gray-500 hover:opacity-75">
                                    <i class="fa-solid fa-arrow-left"></i> Back
                                </a>
                                <button type="submit"
                                    class="inline-block px-6 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-fuchsia-500 text-fuchsia-500 hover:opacity-75">
                                    <i class="fa-solid fa-save"></i> Create User
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end create user form -->
@endsection
