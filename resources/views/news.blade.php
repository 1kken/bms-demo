@extends('layouts.app')

@section('title', 'News & Updates - BMS Demo')
@section('page-title', 'News & Updates')

@section('content')
<div class="space-y-6">
    <!-- Header with Add Button -->
    <div class="flex justify-between items-center">
        <div>
            <h3 class="text-lg font-medium text-gray-900">Community Announcements</h3>
            <p class="text-sm text-gray-500">Share important news and updates with barangay residents</p>
        </div>
        <button onclick="document.getElementById('addNewsModal').classList.remove('hidden')" 
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Post Announcement
        </button>
    </div>

    <!-- Featured Announcement -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg shadow-lg overflow-hidden">
        <div class="px-6 py-8 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 mb-3">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        Urgent
                    </span>
                    <h2 class="text-2xl font-bold mb-2">Community Clean-up Drive</h2>
                    <p class="text-blue-100 mb-4">Join us this Saturday for our monthly community clean-up drive. Let's work together to keep our barangay clean and beautiful!</p>
                    <div class="flex items-center text-blue-100 text-sm">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Saturday, January 20, 2024 • 7:00 AM
                        <svg class="w-4 h-4 ml-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Barangay Hall Grounds
                    </div>
                </div>
                <div class="hidden md:block">
                    <svg class="w-24 h-24 text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- News Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Event
                    </span>
                    <span class="ml-auto text-sm text-gray-500">2 days ago</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Free Medical Check-up</h3>
                <p class="text-gray-600 text-sm mb-4">Free medical check-up for senior citizens and 4Ps members. Blood pressure, blood sugar, and basic health screening available.</p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    January 25, 2024
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Read More</button>
            </div>
        </div>

        <!-- News Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        Information
                    </span>
                    <span class="ml-auto text-sm text-gray-500">1 week ago</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">New Barangay ID System</h3>
                <p class="text-gray-600 text-sm mb-4">We're implementing a new digital barangay ID system. All residents are required to register for the new ID cards.</p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    January 15, 2024
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Read More</button>
            </div>
        </div>

        <!-- News Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        Reminder
                    </span>
                    <span class="ml-auto text-sm text-gray-500">2 weeks ago</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tax Payment Deadline</h3>
                <p class="text-gray-600 text-sm mb-4">Reminder: Real property tax payment deadline is approaching. Please settle your taxes to avoid penalties.</p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    January 10, 2024
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Read More</button>
            </div>
        </div>

        <!-- News Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                        Program
                    </span>
                    <span class="ml-auto text-sm text-gray-500">3 weeks ago</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Livelihood Training Program</h3>
                <p class="text-gray-600 text-sm mb-4">Free livelihood training program for unemployed residents. Learn skills in cooking, handicrafts, and basic computer operations.</p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    January 5, 2024
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Read More</button>
            </div>
        </div>

        <!-- News Card 5 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                        Alert
                    </span>
                    <span class="ml-auto text-sm text-gray-500">1 month ago</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Road Maintenance Notice</h3>
                <p class="text-gray-600 text-sm mb-4">Road maintenance work will begin on Main Street. Expect traffic delays and use alternative routes when possible.</p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    December 28, 2023
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Read More</button>
            </div>
        </div>

        <!-- News Card 6 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                        Update
                    </span>
                    <span class="ml-auto text-sm text-gray-500">1 month ago</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Barangay Hall Renovation</h3>
                <p class="text-gray-600 text-sm mb-4">Barangay hall renovation is complete. New facilities include a conference room, computer lab, and improved waiting area.</p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    December 20, 2023
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Read More</button>
            </div>
        </div>
    </div>
</div>

<!-- Add News Modal -->
<div id="addNewsModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Post New Announcement</h3>
                <button onclick="document.getElementById('addNewsModal').classList.add('hidden')" 
                        class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <form class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" placeholder="Enter announcement title" 
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select id="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="information">Information</option>
                        <option value="event">Event</option>
                        <option value="reminder">Reminder</option>
                        <option value="alert">Alert</option>
                        <option value="program">Program</option>
                        <option value="update">Update</option>
                    </select>
                </div>
                
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea id="content" rows="4" placeholder="Enter announcement content..." 
                              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Event Date (Optional)</label>
                    <input type="date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700">Location (Optional)</label>
                    <input type="text" id="location" placeholder="Enter event location" 
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="document.getElementById('addNewsModal').classList.add('hidden')" 
                            class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                        Post Announcement
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

