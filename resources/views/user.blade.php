@extends('layouts/app')

@section('tab-name', 'Member - Name')

@section('page-name')
Member name
@endsection



@section('content')
@section('btns')
<a href=""
    class="w-full pt-2 pb-2 pl-1 pr-1 hover:bg-white uppercase text-sm hover:scale-95 easy-in-out duration-100 cursor-pointer text-white hover:text-black">|
    <span class="text-[var(--color-secondary)] hover:text-[var(--color-primary_2)] ">
        &harr;</span>
    Edit</a>
<form action=""
    class="w-full pt-2 pb-2 pl-1 pr-1 hover:bg-white  text-sm hover:scale-95 easy-in-out duration-100 cursor-pointer text-white hover:text-black">
    <button type="submit" class="uppercase">| <span
            class="mr-1 text-[var(--color-secondary)] hover:text-[var(--color-primary_2)] ">
            &#x3C7;</span>Remove Member</button>
</form>


@endsection
<div class="p-5 ml-5 mr-5 flex justify-between flex-wrap border border-[rgb(220,220,220)] rounded-md ">
    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full pb-3 border-b-1 border-grey-50 text-center uppercase">Status</p>
        <table class="p-5 m-5 mb-10 border border-[rgb(220,220,220)] rounded-xl">
            <tr class="border-b-1">
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)] text-[white] text-left overflow-hidden">Membership
                    status</th>
                <td class="p-2 m-1 bg-green-100 text-green-700">Active</td>
            </tr>

            <tr>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Membership
                    Plan
                </th>
                <td class="p-2 m-1">Gold-60</td>
            </tr>
        </table>
        <form action="" class="flex flex-col p-5 rounded bg-gray-200">
            @csrf
            <label for="status" class="p-2 rounded bg-[var(--color-color_bg_table)] text-white">Update Status</label>
            <select name="stas#tus" id="status" class="p-2 outline-none bg-white">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
                <option value="3">Suspended</option>
            </select>
            <button type="submit" class="p-2 bg-blue-500 mt-8 text-white cursor-pointer">Confirm</button>
        </form>
    </div>

    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Basic informations</p>
        <table class="p-5 m-5 p-10 bg-grey-600 mb-10  border border-[rgb(220,220,220)] rounded-xl">


            <tr class="border-b-1">
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Start Date
                </th>
                <td class="p-2 m-1">15-05-2016</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Natonality
                </th>
                <td class="p-2 pl-4 pr-4">Poland</td>
            </tr>

            <tr>
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Age</th>
                <td class="p-2 pl-4 pr-4">42</td>
            </tr>

        </table>
    </div>

    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Contact </p>
        <table class="p-5 m-5 mb-10  border border-[rgb(220,220,220)] rounded-xl">
            <tr class="border-b-1">
                <th class="p-2 bg-red-300 text-red-700 text-left overflow-hidden">Emergancy Contact</th>
                <td class="p-2 pl-4 pr-4">07877 320658</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Contact
                </th>
                <td class="p-2 pl-4 pr-4">07877 320658</td>
            </tr>

            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Email</th>
                <td class="p-2 pl-4 pr-4">szelag.maciej@gmail.com</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Address
                </th>
                <td class="p-2 pl-4 pr-4">159 Granby Street</td>
            </tr>
            <tr>
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Post Code
                </th>
                <td class="p-2 pl-4 pr-4">PL1 4BL</td>
            </tr>
        </table>
    </div>
    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Skill Level</p>
        <table class="p-5 m-5 mb-10  border border-[rgb(220,220,220)] rounded-xl">
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Belt</th>
                <td class="p-2 pl-4 pr-4">Brown</td>
            </tr>
            <tr>
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Last
                    Promotion
                </th>
                <td class="p-2 pl-4 pr-4">12-05-2025</td>
            </tr>


        </table>
        <form action="" class="flex flex-col p-5 rounded bg-gray-200">
            @csrf
            <label for="status" class="p-2 rounded bg-[var(--color-color_bg_table)] text-white">Update Belt</label>
            <select name="stas#tus" id="status" class="p-2 outline-none bg-white">
                <option value="1">White - 1 stripe</option>
                <option value="2">White - 2 stripes</option>
                <option value="3">White - 3 stripes</option>
                <option value="4">White - 4 stripes</option>
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
            <button type="submit" class="p-2 bg-blue-500 mt-8 text-white cursor-pointer">Confirm</button>
        </form>
        <form action="" class="flex flex-col p-5 mt-5 rounded bg-gray-200">
            @csrf
            <label for="status" class="p-2 rounded bg-[var(--color-color_bg_table)] text-white">Updated Date</label>
            <input type="date" name="stas#tus" id="status" class="p-2 outline-none bg-white">
            <button type="submit" class="p-2 bg-blue-500 mt-8 text-white cursor-pointer">Confirm Date</button>
        </form>
    </div>
    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Created/Updated </p>
        <table class="p-5 m-5 mb-10  border border-[rgb(220,220,220)] rounded-xl">

            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Created at
                </th>
                <td class="p-2 pl-4 pr-4">16-05-2016</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Updated at
                </th>
                <td class="p-2 pl-4 pr-4">15-05-2025</td>
            </tr>


        </table>
    </div>


</div>
@endsection