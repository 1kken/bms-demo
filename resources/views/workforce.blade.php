@extends('layouts.app')

@section('title', 'Workforce - BMS Demo')
@section('page-title', 'Workforce Management')

@section('content')
<div class="space-y-6">
    <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Workforce Management</h3>
        <p class="text-gray-600">This page would contain personnel records, training management, task assignment, and performance evaluation for barangay staff and officials.</p>
        <div class="mt-4 p-4 bg-yellow-50 rounded-md">
            <p class="text-yellow-800 text-sm">Demo: Workforce management features would include:</p>
            <ul class="text-yellow-700 text-sm mt-2 list-disc list-inside">
                <li>Personnel records management</li>
                <li>Training and certification tracking</li>
                <li>Task assignment and scheduling</li>
                <li>Performance evaluation tools</li>
            </ul>
        </div>
    </div>
</div>
@endsection

