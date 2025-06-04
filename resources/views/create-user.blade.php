@extends('layouts/app')

@section('tab-name', 'Create a new member')

@section('btns')


@endsection
@section('page-name')
Create a new member
@endsection

@section('content')
<div class=" ml-10 mr-10 p-5 flex justify-center  border border-[rgb(220,220,220)] rounded-md ">
    <form action="" class="flex justify-center items-between flex-row flex-wrap">
        @csrf
        <div class="m-10  p-3 pl-5 pr-5 bg-slate-200 rounded-xl shadow-xl">
            <p class="mb-4  font-medium  text-2xl text-gray-800">Personal Informations</p>
            <div class="w-120 flex justify-between">
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Name</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="name" id="name" placeholder="Enter user name" required autocomplete="off" />
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="lastName">Last Name</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="lastName" id="lastName" placeholder="Enter user last name" required
                        autocomplete="off" />
                </div>
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="birthdate">Date of Birth</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="date" name="birthdate" id="birthdate" required />
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="address">Address</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" name="address" id="address" placeholder="123 Main St" required
                    autocomplete="street-address" />
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="postcode">Postcode</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" name="postcode" id="postcode" placeholder="e.g. PL10 1AB" required autocomplete="off" />
            </div>
        </div>

        <div class="m-10  p-3 pl-5 pr-5 bg-teal-100 rounded-xl shadow-xl">
            <p class="mb-4  font-medium  text-2xl text-gray-800">Contact Informations</p>

            <div class="">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Mobile</label>
                <input
                    class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                    type="text" name="mobile" id="mobile" placeholder="Enter user phone numbr" required
                    autocomplete="off" />
            </div>



            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Name</label>
                <input
                    class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                    type="text" name="name" id="name" placeholder="Enter user name" required autocomplete="off" />
            </div>


            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="birthdate">Date of Birth</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="date" name="birthdate" id="birthdate" required />
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="address">Address</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" name="address" id="address" placeholder="123 Main St" required
                    autocomplete="street-address" />
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="postcode">Postcode</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" name="postcode" id="postcode" placeholder="e.g. PL10 1AB" required autocomplete="off" />
            </div>
        </div>
        <div class="m-10  p-3 pl-5 pr-5 bg-red-100 rounded-xl shadow-xl">
            <p class="mb-4  font-medium  text-2xl text-gray-800">Contact Informations</p>
            <div class="w-120 flex justify-between">
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Mobile</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="mobile" id="mobile" placeholder="Enter user phone numbr" required
                        autocomplete="off" />
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="emergancyNumber">Emergancy
                        Contact</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="emergancyNumber" id="emergancyNumber" placeholder="Enter emergancy number"
                        required autocomplete="off" />
                </div>
            </div>

            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Name</label>
                <input
                    class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                    type="text" name="name" id="name" placeholder="Enter user name" required autocomplete="off" />
            </div>


            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="birthdate">Date of Birth</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="date" name="birthdate" id="birthdate" required />
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="address">Address</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" name="address" id="address" placeholder="123 Main St" required
                    autocomplete="street-address" />
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="postcode">Postcode</label>
                <input
                    class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" name="postcode" id="postcode" placeholder="e.g. PL10 1AB" required autocomplete="off" />
            </div>
        </div>

    </form>


</div>
@endsection