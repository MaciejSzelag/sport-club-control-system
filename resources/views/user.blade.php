@extends('layouts/app')

@section('tab-name', 'Member - Name')

@section('page-name')
{{$member->name }} {{$member->last_name}}
@endsection



@section('content')
@section('btns')
<a href="{{route('edit.user',['member'=>$member->id])}}"
    class="w-full pt-2 pb-2 pl-1 pr-1 hover:bg-white uppercase text-sm hover:scale-95 easy-in-out duration-100 cursor-pointer text-white hover:text-black">
    <span class="text-amber-400">| &harr; </span>Edit</a>
<form action="{{route('delete.member', ['member'=>$member->id])}}" method="post"
    class="w-full pt-2 pb-2 pl-1 pr-1 hover:bg-white  text-sm hover:scale-95 easy-in-out duration-100 cursor-pointer text-white hover:text-black">
    @csrf
    @method('DELETE')
    <button type="submit" class="uppercase"> <span class="text-red-400">| &#x3C7; </span>Remove Member</button>
</form>


@endsection
<div class="p-5 ml-5 mr-5 flex justify-evenly flex-wrap border border-[rgb(220,220,220)] rounded-md ">
    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full pb-3 border-b-1 border-grey-50 text-center uppercase">Status</p>
        <table class="p-5 m-5 mb-10 border border-[rgb(220,220,220)] rounded-xl">
            <tr class="border-b-1">
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)] text-[white] text-left overflow-hidden">
                    Membership
                    status</th>


                @if($member->status == 1)
                <td class="p-2 pr-4 pl-4 m-1 border-b-1 border-green-700 bg-green-100 text-green-600">Active</td>
                @elseif($member->status == 0)
                <td class="p-2 pr-4 pl-4 m-1 border-b-1 border-red-700 bg-red-100 text-red-600">Inactive</td>
                @else
                <td class="p-2 pr-4 pl-4 m-1 border-b-1 border-blue-700 bg-blue-100 text-blue-600">Suspended</td>
                @endif
            </tr>

            <tr>
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">
                    Membership
                    Plan
                </th>
                <td class="p-2 m-1">{{$member->membership_plan}}</td>
            </tr>
        </table>

    </div>

    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Basic informations</p>
        <table class="p-5 m-5 p-10 bg-grey-600 mb-10  border border-[rgb(220,220,220)] rounded-xl">


            <tr class="border-b-1">
                <th class="p-2 m-1 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Start
                    Date
                </th>
                <td class="p-2 m-1">{{$member->start_day}}</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">
                    Nationality
                </th>
                <td class="p-2 pl-4 pr-4"> {{$member->nationality}}</td>
            </tr>

            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Date of
                    birth
                </th>
                <td class="p-2 pl-4 pr-4">{{$birthday}}</td>
            </tr>

            <tr>
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Age</th>
                <td class="p-2 pl-4 pr-4">{{$memberAge}}</td>
            </tr>

        </table>
    </div>

    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Contact </p>
        <table class="p-5 m-5 mb-10  border border-[rgb(220,220,220)] rounded-xl">
            <tr class="border-b-1">
                <th class="p-2 bg-red-300 text-red-700 text-left overflow-hidden">Emergancy Contact</th>
                <td class="p-2 pl-4 pr-4">{{$member->emergency_phone}}</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Contact
                </th>
                <td class="p-2 pl-4 pr-4">{{$member->mobile}}</td>
            </tr>

            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Email</th>
                <td class="p-2 pl-4 pr-4">{{$member->email}}</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Address
                </th>
                <td class="p-2 pl-4 pr-4">{{$member->address}}t</td>
            </tr>
            <tr>
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Post Code
                </th>
                <td class="p-2 pl-4 pr-4">{{$member->postcode}}L</td>
            </tr>
        </table>
    </div>
    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Skill Level</p>
        <table class="p-5 m-5 mb-10  border border-[rgb(220,220,220)] rounded-xl">
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Belt</th>
                <td class="p-2 pl-4 pr-4">{{$member->skill_level}}</td>
            </tr>
            <tr>
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Last
                    Promotion
                </th>
                <td class="p-2 pl-4 pr-4">{{$member->skill_level_updated ?? 'New member'}}</td>
            </tr>


        </table>

    </div>
    <div class="m-5 p-5 rounded-xl shadow-xl linear duration-300 hover:scale-104">
        <p class="w-full   pb-3 border-b-1 border-grey-50 text-center uppercase">Created/Updated </p>
        <table class="p-5 m-5 mb-10  border border-[rgb(220,220,220)] rounded-xl">

            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Created at
                </th>
                <td class="p-2 pl-4 pr-4">{{$member->created_at}}</td>
            </tr>
            <tr class="border-b-1">
                <th class="p-2 bg-[var(--color-color_bg_table)]  text-[white] text-left overflow-hidden">Updated at
                </th>
                <td class="p-2 pl-4 pr-4">{{$member->updated_at}}</td>
            </tr>


        </table>
    </div>


</div>
@endsection