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
            - {{$activeMembers}}</p>
        <p class="size-auto p-2 m-2 rounded bg-red-200 border border-red-300 text-red-700">Inactive memberships -
            {{$inActiveMembers}}</p>
        <p class="size-auto p-2 m-2 rounded bg-blue-200 border border-blue-300 text-blue-700">Suspended memberships -
            {{$suspended}}
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
            @forelse($member as $user)
            <tr>


                <td class="p-2 m-1 bg-gray-200 text-center">{{$user->id}}</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">{{$user->last_name}}</td>
                <td class="p-2 m-1 border-b-1 border-grey-400">{{$user->name}}</td>


                @if($user->status == 1)
                <td class="p-2 pr-4 pl-4 m-1 border-b-1 border-green-700 bg-green-100 text-green-600">Active</td>
                @elseif($user->status == 0)
                <td class="p-2 pr-4 pl-4 m-1 border-b-1 border-red-700 bg-red-100 text-red-600">Inactive</td>
                @else

                <td class="p-2 pr-4 pl-4 m-1 border-b-1 border-blue-700 bg-blue-100 text-blue-600">Suspended</td>

                @endif


                <td class="p-2 m-1 border-b-1 border-grey-400">{{$user->membership_plan}}</td>
                <td class="p-2 m-1 border-b-1 border-grey-400"><a href="{{route('show.user',['member'=>$user->id])}}"
                        class="w-full h-full pl-5 pr-5 flex justify-center border hover:border-stone-700 bg-stone-100 hover:bg-stone-400  text-stone-700 hover:text-stone-700 rounded linear duration-300">More
                        &rightarrow;</a>
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="6" class="p-2 m-1 border-b-1 border-grey-400 text-center">Brak zadań do wyświetlenia.</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection