@extends('welcome')

@push('css')
    <style>
        /* Custom styles can still be applied if needed */
    </style>
@endpush

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular uppercase">
                Register Your Application
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Get In <span class="text-indigo-600">OneTouchPay</span>
            </h3>
        </div>

        <!-- Stepper -->
        <div class="flex justify-center flex-wrap gap-4 mb-8">
            @foreach(['Step 1', 'Step 2', 'Step 3'] as $index => $step)
                <div class="stepper-item {{ $loop->first ? 'text-indigo-600' : 'text-gray-500' }}">
                    <div class="flex items-center">
                        <div class="stepper-circle bg-{{ $loop->first ? 'indigo-600' : 'gray-300' }} text-white rounded-full h-8 w-8 flex items-center justify-center">
                            {{ $index + 1 }}
                        </div>
                        <div class="hidden sm:block ml-2">{{ $step }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <form id="applicationForm" class="w-full max-w-4xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <!-- Steps will be inserted here -->
            <!-- Similar structure for Step 2 and Step 3 -->
            <!-- Step navigation and submission button -->

            <div class="flex justify-between mt-8">
                <button type="button" class="btn-prev hidden bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Previous
                </button>
                <button type="button" id="next-btn" class="btn-next bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                    Next
                </button>
                <button type="submit" id="submit-btn" style="display: none" class="btn-next bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <div id="submissionData" class="mt-10 max-w-4xl mx-auto">
        <h4 class="mb-4 text-xl font-semibold text-gray-900">Registered Applications</h4>
        <!-- Responsive table for displaying registered applications -->
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Your existing JavaScript for handling form navigation and submission
    </script>
@endpush
