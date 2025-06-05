@extends('layouts/app')

@section('tab-name', 'Create a new member')

@section('btns')


@endsection
@section('page-name')
Create a new member
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        {{-- @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach --}}
    </ul>
</div>
@endif
@endsection

@section('content')
<div class=" ml-10 mr-10 p-5 pb-0 flex justify-center  border border-[rgb(220,220,220)] rounded-md ">
    <form action="{{route('member.store')}}" method="post">
        @csrf

        <div class="flex justify-center items-between flex-row flex-wrap border-b-1 border-gray-300">
            {{-- Personal informations --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-slate-200 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Personal Informations</p>
                <div class="w-120 flex justify-between">
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="name">
                            Name
                            @error('name')
                            <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                            @enderror
                        </label>

                        <input
                            class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                            type="text" name="name" id="name" placeholder="Enter user name" autocomplete="off"
                            value="{{old('name')}}" />
                    </div>
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="last_name">Last Name
                            @error('last_name')
                            <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                            @enderror</label>

                        <input
                            class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                            type="text" name="last_name" id="last_name" placeholder="Enter user last name"
                            autocomplete="off" value="{{old('last_name')}}" />
                    </div>
                </div>
                <div class="mt-3">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="birth_date">Date of Birth
                        @error('birth_date')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror</label>

                    <input
                        class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px]  focus:outline-none focus:ring-2 focus:ring-blue-500"
                        type="date" name="birth_date" id="birth_date" value="{{old('birth_date')}}" />
                </div>

                <div class="mt-3">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="nationality">Nationality
                        @error('nationality')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror</label>

                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="nationality" id="nationality" placeholder="Enter user nationality"
                        autocomplete="off" value="{{old('nationality')}}" />
                </div>
            </div>
            {{-- Contact Informations --}}
            <div class="w-100 m-10  p-3 pl-5 pr-5 bg-sky-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Contact Informations</p>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="username">Mobile @error('mobile')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror</label>

                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="mobile" id="mobile" placeholder="Enter user phone numbr" autocomplete="off"
                        value="{{old('mobile')}}" />
                </div>
                <div class="mt-3">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="email">Email
                        @error('email')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror
                    </label>

                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="email" name="email" id="email" placeholder="Enter user email" autocomplete="off"
                        value="{{old('email')}}" />
                </div>

                <div class="mt-3">

                    <label class="block mb-2 text-sm font-medium text-gray-700" for="address">Address
                        @error('address')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror
                    </label>
                    @error('address')
                    <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                    @enderror
                    <input
                        class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                        type="text" name="address" id="address" placeholder="123 Main St" autocomplete="address"
                        value="{{old('address')}}" />
                </div>
                <div class="mt-3">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="postcode">Postcode
                        @error('postcode')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror
                    </label>

                    <input
                        class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                        type="text" name="postcode" id="postcode" placeholder="e.g. PL10 1AB" autocomplete="off"
                        value="{{old('postcode')}}" />
                </div>

            </div>
            {{-- Emergancy Informations --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-red-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Emergency Informations</p>


                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="emergency_phone">
                        Emergency Contact Phone
                        @error('emergency_phone')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror</label>

                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="emergency_phone" id="emergency_phone"
                        placeholder="Enter user emergency number" autocomplete="off"
                        value="{{old('emergency_phone')}}" />
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="emergency_name">
                        Emerganc Contact Name
                        @error('emergency_name')
                        <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                        @enderror</label>

                    <input
                        class="w-full p-2 pl-4 pr-4 border border-gray-300 bg-gray-100 rounded-[50px] text-center focus:outline-none focus:ring-1 focus:ring-blue-500"
                        type="text" name="emergency_name" id="emergency_name" placeholder="Enter emergancy contact name"
                        autocomplete="off" value="{{old('emergency_name')}}" />
                </div>

            </div>
            {{-- Membership plans --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-blue-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Membership Plan</p>
                <div class="w-120 ">
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="membership_plan">
                            Choose membership plan
                            @error('membership_plan')
                            <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                            @enderror
                        </label>

                        <select name="membership_plan" id="membership_plan" class="w-full p-2 outline-none bg-gray-100"
                            value="{{old('membership_plan')}}">

                            <option value="Adults - Brown">Adults - Brown</option>
                            <option value="Adults - Silver">Adults - Silver</option>
                            <option value="Adults - Gold">Adults - Gold</option>
                            <option value="Adults - Diamond">Adults - Diamond</option>
                            <option value="Kids - Brown">Kids - Brown</option>
                            <option value="Kids - Silver">Kids - Silver</option>
                            <option value="Kids - Gold">Kids - Gold</option>
                            <option value="Kids - Diamond">Kids - Diamond</option>

                        </select>
                    </div>
                </div>
            </div>
            {{-- Additional Informations --}}
            <div class="m-10  p-3 pl-5 pr-5 bg-blue-100 rounded-xl shadow-xl">
                <p class="mb-4  font-medium  text-2xl text-gray-800">Additional Informations</p>
                <div class="w-120 ">
                    <div class="">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="skill_level">
                            Level
                            @error('skill_level')
                            <p>{{$message}}</p> <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                            @enderror
                        </label>

                        <select name="skill_level" id="skill_level" class="w-full p-2 outline-none bg-gray-100"
                            value="{{old('skill_level')}}">
                            <option value="White">White</option>
                            <option value="White - 1 stripe">White - 1 stripe</option>
                            <option value="White - 2 stripes">White - 2 stripes</option>
                            <option value="White - 3 stripes">White - 3 stripes</option>
                            <option value="White - 4 stripes">White - 4 stripes</option>
                            <option value="Blue">Blue</option>
                            <option value="Blue - 1 stripe">Blue - 1 stripe</option>
                            <option value="Blue - 2 stripes">Blue - 2 stripes</option>
                            <option value="Blue - 3 stripes">Blue - 3 stripes</option>
                            <option value="Blue - 4 stripes">Blue - 4 stripes</option>
                            <option value="Purple">Purple</option>
                            <option value="Brown">Brown</option>
                            <option value="Black">Black</option>
                            <option value="Black - 1st degree">Black - 1st degree</option>
                            <option value="Black - 2nd degree">Black - 2nd degree</option>
                            <option value="Black - 3rd degree">Black - 3rd degree</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="start_day">
                            Start date
                            @error('start_day')
                            <span class="text-red-400 text-xs"> - * {{$message}}&downarrow;</span>
                            @enderror</label>


                        <input
                            class="w-full p-2 border border-gray-300 bg-gray-100 rounded-[50px]  focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="date" name="start_day" id="start_day" value="{{old('start_day')}}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-5 mb-5 ">
            <button type="submit"
                class=" p-2 pl-15 pr-15 rounded-[50px] bg-emerald-500 shadow-2xl text-gray-100 text-xl hover:bg-emerald-600 hover:shadow-xl hover:scale-97 linear duration-300 cursor-pointer">Save</button>
        </div>
    </form>


</div>
@endsection