@extends('layouts.main')

@section('content')
    <!-- User Detail -->
    <div class="w-full px-4 py-6 mx-auto sm:px-6">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-xl rounded-2xl">
                    <!-- Header -->
                    <div class="p-6 pb-0 mb-0 bg-white border-b border-gray-200 rounded-t-2xl">
                        <div class="flex items-center justify-between">
                            <h5 class="text-xl font-bold text-gray-900">User Details</h5>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex-auto p-6">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <!-- Avatar Section -->
                            <div class="flex flex-col items-center lg:items-start">
                                <div class="relative group">
                                    <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/img/team-2.jpg') }}"
                                        class="w-30 sm:w-30 rounded-2xl object-cover border-4 border-white shadow-2xl transition-transform duration-300 group-hover:scale-105"
                                        alt="User Avatar">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 rounded-2xl transition-all duration-300">
                                    </div>
                                </div>
                            </div>

                            <!-- User Info Section -->
                            <div class="lg:col-span-2 pt-4">
                                <div class="bg-gray-50 rounded-xl p-6">
                                    <h6 class="text-sm font-semibold text-gray-700 uppercase tracking-wider mb-4">
                                        Account Information
                                    </h6>

                                    <div class="space-y-4">
                                        <!-- Full Name -->
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-gray-200 last:border-b-0">
                                            <div class="sm:w-32 mb-2 sm:mb-0">
                                                <span class="text-sm font-medium text-gray-700 flex items-center">
                                                    <i class="fas fa-user w-4 h-4 mr-2 text-gray-400"></i>
                                                    Full Name
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <span class="text-sm text-gray-900 font-medium">{{ $user->name }}</span>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-gray-200 last:border-b-0">
                                            <div class="sm:w-32 mb-2 sm:mb-0">
                                                <span class="text-sm font-medium text-gray-700 flex items-center">
                                                    <i class="fas fa-envelope w-4 h-4 mr-2 text-gray-400"></i>
                                                    Email
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <span class="text-sm text-gray-900 font-medium">{{ $user->email }}</span>
                                            </div>
                                        </div>

                                        <!-- Join Date -->
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-gray-200 last:border-b-0">
                                            <div class="sm:w-32 mb-2 sm:mb-0">
                                                <span class="text-sm font-medium text-gray-700 flex items-center">
                                                    <i class="fas fa-calendar-alt w-4 h-4 mr-2 text-gray-400"></i>
                                                    Joined
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex flex-col">
                                                    <span class="text-sm text-gray-900 font-medium">
                                                        {{ $user->created_at->format('F d, Y') }}
                                                    </span>
                                                    <span class="text-xs text-gray-500 mt-1">
                                                        {{ $user->created_at->diffForHumans() }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Account Status -->
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-gray-200 last:border-b-0">
                                            <div class="sm:w-32 mb-2 sm:mb-0">
                                                <span class="text-sm font-medium text-gray-700 flex items-center">
                                                    <i class="fas fa-shield-alt w-4 h-4 mr-2 text-gray-400"></i>
                                                    Status
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <span
                                                    class="inline-block px-2.5 py-1 text-xs font-bold text-white bg-gradient-to-tl from-green-600 to-lime-400 rounded-1.8">
                                                    Active
                                                </span>
                                            </div>
                                        </div>

                                        <!-- User ID (Additional Info) -->
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-gray-200 last:border-b-0">
                                            <div class="sm:w-32 mb-2 sm:mb-0">
                                                <span class="text-sm font-medium text-gray-700 flex items-center">
                                                    <i class="fas fa-hashtag w-4 h-4 mr-2 text-gray-400"></i>
                                                    User ID
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <span
                                                    class="text-sm text-gray-900 font-mono">#{{ str_pad($user->id, 6, '0', STR_PAD_LEFT) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->


                                <div class="flex items-center justify-end space-x-4 pt-4    ">
                                    <a href="{{ route('user.index') }}"
                                        class="inline-block px-6 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-gray-500 text-gray-500 hover:opacity-75">
                                        <i class="fa-solid fa-arrow-left"></i> Back
                                    </a>
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="inline-block px-6 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-fuchsia-500 text-fuchsia-500 hover:opacity-75">
                                        <i class="fa-solid fa-save"></i> Update User
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Detail -->
@endsection
