@extends('layouts.default')

<x-app-layout>
    <x-slot name="header">
        @include('includes.header') {{-- Assuming you have a header partial --}}
    </x-slot>

    <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden">
        {{-- Background overlay behind the content --}}
        <div class="absolute inset-0 bg-gray-100 dark:bg-gray-800 z-0"></div>

        {{-- Main content area --}}
        <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 z-10 relative overflow-y-auto max-h-screen">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Update Profile Information --}}
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-4">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Update Profile Information') }}</h2>
                    <div class="max-w-md">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                {{-- Update Password --}}
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-4">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Update Password') }}</h2>
                    <div class="max-w-md">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                {{-- Delete Account --}}
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-4">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Delete Account') }}</h2>
                    <div class="max-w-md">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="footer">
        @include('includes.footer') {{-- Assuming you have a footer partial --}}
    </x-slot>
</x-app-layout>

@php
    $hideSidebar = true;
@endphp

<style>
    /* Adjustments for zoomed-out appearance */
    .max-w-7xl {
        max-width: 90%; /* Adjust as needed */
    }

    .max-w-md {
        max-width: 100%; /* Adjust as needed */
    }

    .grid-cols-1 {
        grid-template-columns: 1fr; /* Single column on small screens */
    }

    @media (min-width: 768px) {
        .grid-cols-1 {
            grid-template-columns: repeat(2, minmax(0, 1fr)); /* Two columns on medium screens */
        }
    }

    @media (min-width: 1024px) {
        .max-w-7xl {
            max-width: 80%; /* Adjust as needed */
        }
    }
</style>
