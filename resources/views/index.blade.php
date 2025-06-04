@extends('layouts/app')

@section('tab-name', 'Members')

@section('btns')


@endsection
@section('page-name')
All Members
@endsection

@section('content')
<div class="p-5 flex justify-center  border border-[rgb(220,220,220)] rounded-md flex-col">
    <div class="flex justify-center  p-4 pb-0 flex-wrap">
        <p class="w-full p-2 m-2 rounded bg-green-200 border border-green-300 text-center text-green-700">Active members
            - 45</p>
        <p class="size-auto p-2 m-2 rounded bg-red-200 border border-red-300 text-red-700">Inactive memberships - 15</p>
        <p class="size-auto p-2 m-2 rounded bg-blue-200 border border-blue-300 text-blue-700">Suspended memberships - 15
        </p>
    </div>
    <div class="flex justify-center p-4">
        <table class="p-5 m-5 border border-[rgb(220,220,220)] rounded-xl">
            <tr>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-center overflow-hidden ">ID</th>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-center overflow-hidden">Surname
                </th>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-center overflow-hidden">Name</th>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-center overflow-hidden">Status
                </th>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-center overflow-hidden">
                    Membership
                    paln
                </th>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-center overflow-hidden">Action
                </th>
            </tr>
            <tr>
                <td class="p-2 m-1 bg-gray-200 text-center">2</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Szelag</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Maciej</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Active</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Gold-60</td>
                <td class="p-2 m-1 border-b-1 border-grey-400"><a href="{{route('show.user')}}"
                        class="w-full h-full pl-5 pr-5 flex justify-center border hover:border-stone-700  bg-stone-100 hover:bg-stone-400 text-stone-700 hover:text-stone-700 rounded linear duration-300">More
                        &rightarrow;</a>
                </td>
            </tr>
            <tr>
                <td class="p-2 m-1 bg-gray-200 text-center">1</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Szelag</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Maciej</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Active</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">Gold-60</td>
                <td class="p-2 m-1 border-b-1 border-grey-400"><a href="{{route('show.user')}}"
                        class="w-full h-full pl-5 pr-5 flex justify-center border hover:border-stone-700 bg-stone-100 hover:bg-stone-400  text-stone-700 hover:text-stone-700 rounded linear duration-300">More
                        &rightarrow;</a>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection