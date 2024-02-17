@extends('welcome')
@push('css')
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .stepper-wrapper {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stepper-item {
            display: flex;
            align-items: center;
        }

        .stepper-item.active .stepper-circle {
            background-color: #4f46e5;
        }

        .stepper-circle {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #d1d5db;
            line-height: 25px;
            text-align: center;
            color: white;
        }

        .stepper-title {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endpush

@section('content')
    <div class="max-w-screen-md mx-auto p-5" data-aos="fade-up">
        <div class="text-center mb-16">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular uppercase">
                Register Your Application
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Get In <span class="text-indigo-600">OneTouchPay</span>
            </h3>
        </div>
        <div class="max-w-4xl mx-auto p-5">
            <div class="stepper-wrapper">
                <div class="stepper-item active">
                    <div class="stepper-circle">1</div>
                    <div class="stepper-title" style="margin-top: 0px !important; margin-left: 5px">Step 1</div>
                </div>
                <div class="stepper-item">
                    <div class="stepper-circle">2</div>
                    <div class="stepper-title" style="margin-top: 0px !important; margin-left: 5px">Step 2</div>
                </div>
                <div class="stepper-item">
                    <div class="stepper-circle">3</div>
                    <div class="stepper-title" style="margin-top: 0px !important; margin-left: 5px">Step 3</div>
                </div>
            </div>

            <form id="applicationForm" class="w-full">
                <!-- Step 1 -->
                <div class="step active" id="step-1">
                    <!-- Your original form's Step 1 content here -->
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-password">
                                Application Name
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-email" type="text" name="name" placeholder="TechifyBD" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-first-name">
                                Contact Person Name
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   id="grid-first-name" type="text" name="contact_person_name"
                                   placeholder="Md ishtiaque" required>
                            <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-last-name">
                                Contact Person Email
                            </label>
                            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-last-name" type="email" name="contact_person_email"
                                   placeholder="Doe@gmail.com" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-first-name">
                                Country
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   id="grid-first-name" type="text" name="country" value="Bangladesh" required readonly
                            >
                            <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-last-name">
                                Business Type Name
                            </label>
                            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-last-name" type="text" name="business_type_name"
                                   placeholder="Ecommerce Platform" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-first-name">
                                Product Name
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   id="grid-first-name" type="text" name="product_name" required
                            >
                            <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-last-name">
                                Product Profile Name
                            </label>
                            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-last-name" type="text" name="product_profile_name"
                                   placeholder="" required>
                        </div>
                    </div>
                    <div class="flex items-center mb-4 w-full gap-2">
                        <input id="default-checkbox" type="checkbox" value=""
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                               checked disabled>
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is
                            Use Shipping Method?</label>
                        <!-- Hidden input to ensure the value is submitted with the form -->
                        <input type="hidden" name="is_use_shipping_method" value="true">
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step" id="step-2">
                    <!-- Your original form's Step 2 content here -->
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-password">
                                Currency
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-email" type="text" value="BDT" name="currency" readonly required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-password">
                                Transaction Type
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-email" type="text" name="transaction_type" placeholder="online" required>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step" id="step-3">
                    <!-- Your original form's Step 3 content here -->
                    <!-- Consider this as the last section of your form including the submit button -->
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-first-name">
                                Category
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   id="grid-first-name" type="text" name="category[0]" readonly value="success" required
                            >
                            <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-last-name">
                                url
                            </label>
                            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-last-name" type="text" name="url[0]" required
                                   placeholder="https://example.com/success">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-first-name">
                                Category
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   id="grid-first-name" type="text" name="category[1]" readonly value="cancel" required
                            >
                            <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-last-name">
                                url
                            </label>
                            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-last-name" type="text" name="url[1]" required
                                   placeholder="https://example.com/cancel">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-first-name">
                                Category
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   id="grid-first-name" type="text" name="category[2]" readonly value="fail" required
                            >
                            <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-last-name">
                                url
                            </label>
                            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-last-name" type="text" name="url[2]" required
                                   placeholder="https://example.com/fail">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-first-name">
                                Category
                            </label>
                            <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   id="grid-first-name" type="text" name="category[3]" readonly value="ipn" required
                            >
                            <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="grid-last-name">
                                url
                            </label>
                            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   id="grid-last-name" type="text" name="url[3]" required
                                   placeholder="https://example.com/ipn">
                        </div>
                    </div>
                </div>

                <div class="flex justify-between mt-8">
                    <button type="button"
                            class="btn-prev hidden text-white font-bold py-2 px-6 rounded bg-gray-500 hover:bg-gray-600">
                        Previous
                    </button>
                    <button type="button" id="next-btn"
                            class="btn-next text-white font-bold py-2 px-6 rounded bg-indigo-600 hover:bg-indigo-700">
                        Next
                    </button>
                    <button type="submit" id="submit-btn" style="display: none"
                            class="btn-next text-white font-bold py-2 px-6 rounded bg-indigo-600 hover:bg-indigo-700">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div id="submissionData" class="mt-10">
            <h4 class="mb-4 text-xl font-semibold text-gray-900">Registered Applications</h4>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="bg-indigo-600 text-white">
                        <th scope="col" class="px-6 py-3 text-center">App Name</th>
                        <th scope="col" class="px-6 py-3 text-center">Customer Name</th>
                        <th scope="col" class="px-6 py-3 text-center">Customer Email</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white border-b">
                    @foreach($items as $item)
                        <tr>
                            <td class="px-6 py-4 text-center">{{ $item->name }}</td>
                            <td class="px-6 py-4 text-center">{{ $item->contact_person_name }}</td>
                            <td class="px-6 py-4 text-center">{{ $item->contact_person_email }}</td>
                            <td class="px-6 py-4 text-center text-blue-700">
                                <button class="text-indigo-600 hover:text-indigo-900">Details -></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
@push('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('applicationForm');

            form.addEventListener('submit', function (event) {
                // Prevent the default form submission behavior
                event.preventDefault();

                const formData = new FormData(form);

                const data = {
                    application: {
                        name: formData.get("name"),
                        contact_person_name: formData.get("contact_person_name"),
                        contact_person_email: formData.get("contact_person_email"),
                        country: formData.get("country"),
                        business_type_name: formData.get("business_type_name"),
                        is_use_shipping_method: 0, // You may need to adjust this value based on your requirements
                        product_name: formData.get("product_name"),
                        product_profile_name: formData.get("product_profile_name")
                    },
                    config: {
                        currency: formData.get("currency")
                    },
                    application_key: {
                        key: 'techify6338'
                    },
                    business_category_types: [
                        {
                            transaction_type: formData.get("transaction_type"),
                            transaction_urls: [
                                {
                                    category: formData.get("category[0]"),
                                    url: formData.get("url[0]")
                                },
                                {
                                    category: formData.get("category[1]"),
                                    url: formData.get("url[1]")
                                },
                                {
                                    category: formData.get("category[2]"),
                                    url: formData.get("url[2]")
                                },
                                {
                                    category: formData.get("category[3]"),
                                    url: formData.get("url[3]")
                                }
                            ]
                        }
                    ]
                };
                axios.post('api/app-register', data, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Api-Secret-Key': 'emon'
                    },

                })
                    .then(function (response) {
                        // Handle success
                        console.log(response.data);
                        location.reload();
                        // Optionally, redirect the user or show a success message
                        Toastify({
                            text: "This is a toast",
                            duration: 3000,
                            destination: "https://github.com/apvarun/toastify-js",
                            newWindow: true,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "left", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                            },
                            onClick: function () {
                            } // Callback after click
                        }).showToast();
                    })
                    .catch(function (error) {
                        // Handle error
                        console.error(error);
                        // Optionally, show an error message to the user
                    });
            });
        });
    </script>
    <script>
        let currentStep = 1;
        const steps = document.querySelectorAll('.step');
        const nextBtn = document.getElementById('next-btn');
        const submitBtn = document.getElementById('submit-btn');
        const prevBtn = document.querySelector('.btn-prev');
        const stepperItems = document.querySelectorAll('.stepper-item');

        const updateSteps = () => {
            // Hide all steps
            steps.forEach((step, index) => {
                step.style.display = 'none';
            });

            // Show the current step
            steps[currentStep - 1].style.display = 'block';

            // Update stepper items
            stepperItems.forEach((item, index) => {
                item.classList.remove('active');
                if (index + 1 === currentStep) {
                    item.classList.add('active');
                }
            });

            // Update button states
            prevBtn.style.display = currentStep === 1 ? 'none' : 'inline-block';
            if (currentStep === steps.length) {
                nextBtn.style.display = 'none';
                submitBtn.style.display = 'block';
            } else {
                nextBtn.innerText = 'Next';
                nextBtn.style.display = 'block';
                submitBtn.style.display = 'none';
                nextBtn.setAttribute('type', 'button'); // Ensure it's set back if not the last step
            }
        };

        nextBtn.addEventListener('click', () => {
            if (currentStep < steps.length) {
                currentStep++;
                updateSteps();
            } else {
                // The form will be submitted by the browser as nextBtn is now of type 'submit'
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateSteps();
            }
        });

        updateSteps();
    </script>
@endpush
