<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Veriler') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name Lastname</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
        @foreach($veriler as $veri)
            <tr>
                <td>{{$veri->namelastname}}</td>
                <td>{{$veri->email}}</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td class="d-flex mg-5">
                <a class="btn btn-success btn-sm" href="{{ route('veriler.show', $veri->id) }}" role="button">Show</a>&nbsp;
                <a class="btn btn-primary btn-sm" href="{{ route('veriler.edit', $veri->id) }}" role="button">Edit</a>&nbsp;
                
                <form action="{{ route('veriler.destroy', $veri->id) }}" method="POST">
                        @csrf
                        @method("delete")
                      <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                       </form>
                       
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>