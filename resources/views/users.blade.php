<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
					<form action="{{ route('users.destroy', ['user' => -1]) }}" method="POST">
						@method('DELETE')
						@csrf
						<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
								<td>{{ $user->name }}</td><td>{{ $user->email }}</td>
								<td><input type="checkbox" name="users[]" value="{{$user->id}}"></td>
							</tr>
							@endforeach
						</tbody>
					</table>
						<input type="submit" value="Delete selected users">
					</form>
				</div>
            </div>
        </div>
    </div>	
</x-app-layout>
