@extends('layouts.app')

@section('title', 'Assets - BMS Demo')
@section('page-title', 'Assets Management')

@section('content')
<div class="space-y-6">
    <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Assets Management</h3>
        <p class="text-gray-600">This page would contain asset tracking, inventory management, and maintenance schedules for barangay properties and equipment.</p>
        <div class="mt-4 p-4 bg-blue-50 rounded-md">
            <p class="text-blue-800 text-sm">Demo: Assets management features would include:</p>
            <ul class="text-blue-700 text-sm mt-2 list-disc list-inside">
                <li>Asset inventory tracking</li>
                <li>Maintenance schedules</li>
                <li>Depreciation calculations</li>
                <li>Asset allocation reports</li>
            </ul>
        </div>
    </div>
</div>
@endsection

