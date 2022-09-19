<div class="table-responsive">
    <table id="userTable" class="table card-table table-vcenter text-nowrap datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Annual income($)</th>
                <th>Family type</th>
                <th>Occupation</th>
                <th>Manglik</th>
                @if(@Auth::user()->role_id == 2)<th>Match(%)</th>@endif
                <th>Email</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody style="min-height: 500px;">
            @if(@count(@$users) > 0)
                @foreach($users as $user)
                    <tr>
                        <td width="15%">{{$user->first_name}} {{$user->last_name}}</td>
                        <td width="20%">{{$user->age}}</td>
                        <td width="20%">{{$user->gender}}</td>
                        <td width="20%">{{$user->annual_income}}</td>
                        <td width="20%">{{$user->family_type}}</td>
                        <td width="20%">{{$user->occupation}}</td>
                        <td width="20%">{{$user->manglik_status}}</td>
                        @if(@Auth::user()->role_id == 2)<td width="20%">{{$user->Matches}}%</td>@endif
                        <td width="20%">{{$user->email}}</td>
                        <td width="20%">{{date('Y-m-d H:i:s',strtotime($user->created_at))}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
