@extends('layouts.app')

@section('title', 'Settings - BMS Demo')
@section('page-title', 'Settings')

@section('content')
<div class="space-y-6">
    <!-- Account Settings -->
    <div class="bg-white shadow rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Account Settings</h3>
            <p class="text-sm text-gray-500">Manage your personal account information and preferences</p>
        </div>
        <div class="p-6 space-y-6">
            <!-- Personal Information -->
            <div>
                <h4 class="text-md font-medium text-gray-900 mb-4">Personal Information</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" id="firstName" value="Admin" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" id="lastName" value="User" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" value="demo@gmail.com" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="phone" value="+63 912 345 6789" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div>
                <h4 class="text-md font-medium text-gray-900 mb-4">Security</h4>
                <div class="space-y-4">
                    <div>
                        <label for="currentPassword" class="block text-sm font-medium text-gray-700">Current Password</label>
                        <input type="password" id="currentPassword" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="newPassword" class="block text-sm font-medium text-gray-700">New Password</label>
                        <input type="password" id="newPassword" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                        <input type="password" id="confirmPassword" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Notification Preferences -->
            <div>
                <h4 class="text-md font-medium text-gray-900 mb-4">Notification Preferences</h4>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <input type="checkbox" id="emailNotifications" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="emailNotifications" class="ml-2 block text-sm text-gray-900">Email Notifications</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="smsNotifications" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="smsNotifications" class="ml-2 block text-sm text-gray-900">SMS Notifications</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="pushNotifications" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="pushNotifications" class="ml-2 block text-sm text-gray-900">Push Notifications</label>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="button" 
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                    Save Account Changes
                </button>
            </div>
        </div>
    </div>

    <!-- Barangay Settings -->
    <div class="bg-white shadow rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Barangay Settings</h3>
            <p class="text-sm text-gray-500">Configure barangay-specific information and system preferences</p>
        </div>
        <div class="p-6 space-y-6">
            <!-- Basic Information -->
            <div>
                <h4 class="text-md font-medium text-gray-900 mb-4">Basic Information</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="barangayName" class="block text-sm font-medium text-gray-700">Barangay Name</label>
                        <input type="text" id="barangayName" value="Barangay A" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="barangayCode" class="block text-sm font-medium text-gray-700">Barangay Code</label>
                        <input type="text" id="barangayCode" value="123456" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City/Municipality</label>
                        <input type="text" id="city" value="Sample City" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
                        <input type="text" id="province" value="Sample Province" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="md:col-span-2">
                        <label for="address" class="block text-sm font-medium text-gray-700">Complete Address</label>
                        <input type="text" id="address" value="123 Main Street, Barangay A, Sample City, Sample Province" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div>
                <h4 class="text-md font-medium text-gray-900 mb-4">Contact Information</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="contactNumber" class="block text-sm font-medium text-gray-700">Contact Number</label>
                        <input type="tel" id="contactNumber" value="+63 912 345 6789" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="emailAddress" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="emailAddress" value="barangay@example.com" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                        <input type="url" id="website" value="https://barangay-a.example.com" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook Page</label>
                        <input type="url" id="facebook" value="https://facebook.com/barangayA" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- System Configuration -->
            <div>
                <h4 class="text-md font-medium text-gray-900 mb-4">System Configuration</h4>
                <div class="space-y-4">
                    <div>
                        <label for="timezone" class="block text-sm font-medium text-gray-700">Timezone</label>
                        <select id="timezone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="Asia/Manila" selected>Asia/Manila (UTC+8)</option>
                            <option value="Asia/Tokyo">Asia/Tokyo (UTC+9)</option>
                            <option value="America/New_York">America/New_York (UTC-5)</option>
                        </select>
                    </div>
                    <div>
                        <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                        <select id="language" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="en" selected>English</option>
                            <option value="tl">Filipino</option>
                            <option value="es">Spanish</option>
                        </select>
                    </div>
                    <div>
                        <label for="dateFormat" class="block text-sm font-medium text-gray-700">Date Format</label>
                        <select id="dateFormat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="Y-m-d" selected>YYYY-MM-DD</option>
                            <option value="m/d/Y">MM/DD/YYYY</option>
                            <option value="d/m/Y">DD/MM/YYYY</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Module Settings -->
            <div>
                <h4 class="text-md font-medium text-gray-900 mb-4">Module Settings</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="residentsModule" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="residentsModule" class="ml-2 block text-sm text-gray-900">Residents Management</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="certificatesModule" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="certificatesModule" class="ml-2 block text-sm text-gray-900">Certificate Management</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="assetsModule" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="assetsModule" class="ml-2 block text-sm text-gray-900">Assets Management</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="financeModule" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="financeModule" class="ml-2 block text-sm text-gray-900">Finance Management</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="newsModule" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="newsModule" class="ml-2 block text-sm text-gray-900">News & Updates</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="workforceModule" checked 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="workforceModule" class="ml-2 block text-sm text-gray-900">Workforce Management</label>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="button" 
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                    Save Barangay Settings
                </button>
            </div>
        </div>
    </div>

    <!-- Danger Zone -->
    <div class="bg-white shadow rounded-lg border border-red-200">
        <div class="px-6 py-4 border-b border-red-200 bg-red-50">
            <h3 class="text-lg font-medium text-red-900">Danger Zone</h3>
            <p class="text-sm text-red-600">Irreversible and destructive actions</p>
        </div>
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-md font-medium text-gray-900">Delete Account</h4>
                    <p class="text-sm text-gray-500">Permanently delete your account and all associated data</p>
                </div>
                <button type="button" 
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700">
                    Delete Account
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

