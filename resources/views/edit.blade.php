@extends('layouts/app')

@section('tab-name')
Edit
@endsection

@section('btns')


@endsection
@section('page-name')
Edit User
@endsection

@section('content')
<div class=" ml-10 mr-10 p-5 pb-0 flex justify-center  border border-[rgb(220,220,220)] rounded-md ">
    <form action="">
        @csrf
        <div class="flex justify-center items-between flex-row flex-wrap border-b-1 border-gray-300">
            {{-- Personal informations --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-slate-200 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Update - Personal Informations</p>
                <div class="w-120 flex justify-between">
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Name</label>
                        <input
                            class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                            type="text" name="name" id="name" placeholder="Enter user name" required
                            autocomplete="off" />
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
                        class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px]  focus:outline-none focus:ring-2 focus:ring-blue-500"
                        type="date" name="birthdate" id="birthdate" required />
                </div>

                <div class="mt-3">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="nationality">Nationality</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="nationality" id="nationality" placeholder="Enter user nationality" required
                        autocomplete="off" />
                </div>
            </div>
            {{-- Contact Informations --}}
            <div class="w-100 m-10  p-3 pl-5 pr-5 bg-sky-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Update - Contact Informations</p>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Mobile</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="mobile" id="mobile" placeholder="Enter user phone numbr" required
                        autocomplete="off" />
                </div>
                <div class="mt-3">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="email">Email</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="email" id="email" placeholder="Enter user email" required
                        autocomplete="off" />
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
                        type="text" name="postcode" id="postcode" placeholder="e.g. PL10 1AB" required
                        autocomplete="off" />
                </div>

            </div>
            {{-- Emergancy Informations --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-red-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Update - Emergency Informations</p>

                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="emergency_phone">Emergency Contact
                        Phone:</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="emergency_phone" id="emergency_phone"
                        placeholder="Enter user emergency number" required autocomplete="off" />
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="emergency_name">Emergancy
                        Contact Name</label>
                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="emergency_name" id="emergency_name" placeholder="Enter emergancy contact name"
                        required autocomplete="off" />
                </div>

            </div>
            {{-- Membership plans --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-blue-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Update - Membership Plan</p>
                <div class="w-120 ">
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="skill_Level">Paln</label>

                        <select name="skill_Level" id="skill_Level" class="w-full p-2 outline-none bg-gray-100">

                            <option value="1">Adults - Brown</option>
                            <option value="1">Adults - Silver</option>
                            <option value="1">Adults - Gold</option>
                            <option value="1">Adults - Diamond</option>
                            <option value="1">Kids - Brown</option>
                            <option value="1">Kids - Silver</option>
                            <option value="1">Kids - Gold</option>
                            <option value="1">Kids - Diamond</option>

                        </select>
                    </div>
                </div>
            </div>
            {{-- Additional Informations --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-blue-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Update - Additional Informations</p>
                <div class="w-120 ">
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="skill_Level">Level</label>

                        <select name="skill_Level" id="skill_Level" class="w-full p-2 outline-none bg-gray-100">
                            <option value="1">White</option>
                            <option value="1">White - 1 stripe</option>
                            <option value="2">White - 2 stripes</option>
                            <option value="3">White - 3 stripes</option>
                            <option value="4">White - 4 stripes</option>
                            <option value="5">Blue</option>
                            <option value="5">Blue - 1 stripe</option>
                            <option value="6">Blue - 2 stripes</option>
                            <option value="7">Blue - 3 stripes</option>
                            <option value="8">Blue - 4 stripes</option>
                            <option value="9">Purple</option>
                            <option value="10">Brown</option>
                            <option value="11">Black</option>
                            <option value="12">Black - 1st degree</option>
                            <option value="13">Black - 2nd degree</option>
                            <option value="14">Black - 3rd degree</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="birthdate">Start date</label>
                        <input
                            class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px]  focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="date" name="birthdate" id="birthdate" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-5 mb-5 ">
            <button type="submit"
                class=" p-2 pl-15 pr-15 ml-2 mr-2 rounded-[50px] bg-emerald-500 shadow-2xl text-gray-100 text-xl hover:bg-emerald-600 hover:shadow-xl hover:scale-97 linear duration-300 cursor-pointer">Save</button>
            <a href="{{route('show.user')}}"
                class=" p-2 pl-15 pr-15 ml-2 mr-2 rounded-[50px] bg-red-500 shadow-2xl text-gray-100 text-xl hover:bg-red-600 hover:shadow-xl hover:scale-97 linear duration-300 cursor-pointer">Cancel</a>
        </div>
    </form>


</div>
@endsection