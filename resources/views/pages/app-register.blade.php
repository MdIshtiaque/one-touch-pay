@extends('welcome')
@section('content')
    <div class="max-w-screen-md mx-auto p-5">
        <div class="text-center mb-16">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular uppercase">
                Register Your Application
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Get In <span class="text-indigo-600">OneTouchPay</span>
            </h3>
        </div>

        <form class="w-full" id="applicationForm">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-password">
                        Application Name
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-email" type="text" name="name" placeholder="TechifyBD">
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
                           placeholder="Md ishtiaque">
                    <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        Contact Person Email
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name" type="email" name="contact_person_email"
                           placeholder="Doe@gmail.com">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-first-name">
                        Country
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-name" type="text" name="country" value="Bangladesh" readonly
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
                           placeholder="Ecommerce Platform">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-first-name">
                        Product Name
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-name" type="text" name="product_name"
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
                           placeholder="">
                </div>
            </div>
            <div class="flex items-center mb-4 w-full gap-2">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked disabled>
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is Use Shipping Method?</label>
                <!-- Hidden input to ensure the value is submitted with the form -->
                <input type="hidden" name="is_use_shipping_method" value="true">
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-password">
                        Currency
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-email" type="text" value="BDT" name="currency" readonly>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-password">
                        Transaction Type
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-email" type="text" name="transaction_type" placeholder="online">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-first-name">
                        Category
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-name" type="text" name="category[0]"
                    >
                    <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        url
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name" type="text" name="url[0]"
                           placeholder="">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-first-name">
                        Category
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-name" type="text" name="category[1]"
                    >
                    <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        url
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name" type="text" name="url[1]"
                           placeholder="">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-first-name">
                        Category
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-name" type="text" name="category[2]"
                    >
                    <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        url
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name" type="text" name="url[2]"
                           placeholder="">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-first-name">
                        Category
                    </label>
                    <input class="appearance-none block w-full  text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-name" type="text" name="category[3]"
                    >
                    <p class="text-red-500 text-xs italic" hidden>Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        url
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name" type="text" name="url[3]"
                           placeholder="">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="flex justify-between w-full px-3">
                    <div class="md:flex md:items-center">

                    </div>
                    <button class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                            type="submit">
                        Send Message
                    </button>
                </div>

            </div>

        </form>
    </div>
@endsection
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
                    // Optionally, redirect the user or show a success message
                })
                .catch(function (error) {
                    // Handle error
                    console.error(error);
                    // Optionally, show an error message to the user
                });
        });
    });
</script>