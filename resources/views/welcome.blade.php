<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Welcome to Job Portal Application!
                    </div>
                    <div class="py-5">
                        @forelse($activeJobs as $job)
                        <div class="py-4 flex justify-between">
                            <div>
                                <h3 class="text-2xl">{{ $job->title }}</h3>
                                <p class="text-lg text-gray-600">{{ $job->company->name }}</p>
                                <p class="text-sm text-gray-600">{{ $job->created_at->diffForHumans() }}</p>
                            </div>
                            <div>
                                @if(auth()->check())
                                <a href="#" class="px-2 py-1 bg-gradient-to-l from-blue-800 to-blue-600 text-white">Apply Now</a>
                                @else
                                <a href="/login" class="px-2 py-1 bg-gradient-to-l from-blue-800 to-blue-600 text-white">Apply Now</a>
                                @endif
                            </div>
                        </div>
                        @empty
                        <h3 class="text-center"> No Jobs posted yet</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
