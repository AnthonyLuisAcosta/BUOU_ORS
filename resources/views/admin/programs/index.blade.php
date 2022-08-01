<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			
            <div class="flex items-center justify-end px-4 py-6 text-right sm:px-6">
                <a href="{{ route('admin.programs.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">New Program</a>
            </div>

			<div class="pb-4 bg-white sm:rounded-lg">
				<!--<form action="/search" method="get">
					<label for="table-search" class="sr-only">Search</label>
					<div class="relative mt-1 pt-4 pl-4">
						<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
							<svg class="pl-4 pt-4 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
						</div>
						<div>
					
							<input type="search" name="search" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-400 focus:border-gray-500 dark:text-black " placeholder="Search">
					
						</div>
						<button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
							<span class="sr-only">Search</span>
						</button>
					</div>
				</form>-->
				
				<form action="/search" method="get" class="flex items-center">
			
					<div class="relative mt-1 pt-4 pl-4">
						<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
							<svg aria-hidden="true" class="pl-4 pt-4 w-10 h-10 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
						</div>
						<input type="search" name="search"  class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5   dark:border-gray-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required="">
					</div>
				</form>
			</div>
			
			
			<div class="overflow-x-auto relative shadow-md">
				<table class="w-full text-sm text-left text-black dark:text-gray-400">
					<thead class="bg-white border-b dark:bg-gray-200 dark:border-gray-300 text-black">
						<tr>
							<th scope="col" class="p-4">
								<div class="flex items-center">
									<input id="checkbox-all-search" type="checkbox" class="checkBox">
									<label for="checkbox-all-search" class="sr-only">checkbox</label>
								</div>
							</th>
							<th scope="col" class="py-3 px-6">
								Code
							</th>
							<th scope="col" class="py-3 px-6">
								Description
							</th>
							<th scope="col" class="py-3 px-6">
								Created at
							</th>
							<th scope="col" class="py-3 px-6">
								Updated at
							</th>
							<th scope="col" class="py-3 px-6">
								Action
							</th>
						</tr>
					</thead>
					<tbody class="text-black">
						
								@foreach($programs as $program)
									<tr class = "bg-white border-b hover:bg-gray-50 text-black">
										<td class="p-4 w-4">
											<div class="flex items-center">
												<input id="checkbox-table-search-1" type="checkbox" name='ids' value="{{ $program->id }}" class="checkBox">
												<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
											</div>
										</td>
										<td>{{ $program->code }}</td>
										<td>{{ $program->description }}</td>
										<td>{{ $program->created_at }}</td>
										<td>{{ $program->updated_at }}</td>
										<td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
											<a href="{{ route('admin.programs.show', $program->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
											<a href="{{ route('admin.programs.edit', $program->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
											<form class="inline-block" action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
												<input type="hidden" name="_method" value="DELETE">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
											</form>
										</td>
									</tr>
								@endforeach
							
					</tbody>
				</table>
				<nav class="flex justify-between items-center pt-4" aria-label="Table navigation">
					<span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-gray-500">1-10</span> of <span class="font-semibold text-gray-900 dark:text-gray-500">1000</span></span>
					<ul class="inline-flex items-center -space-x-px">
						<li>
							<a href="#" class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700  dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
								<span class="sr-only">Previous</span>
								<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
							</a>
						</li>
						<li>
							<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
						</li>
						<li>
							<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
						</li>
						<li>
							<a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-200 dark:text-white">3</a>
						</li>
						<li>
							<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
						</li>
						<li>
							<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
								<span class="sr-only">Next</span>
								<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
							</a>
						</li>
					</ul>
				</nav>
			</div>
        </div>
    </div>
	<script>
		$(function(e){
			$("#checkbox-all-search").click(function(){
				$(".checkBox").prop('checked', $(this).prop('checked'));
			});
		});
	</script>
</x-app-layout>