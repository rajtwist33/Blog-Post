<x-app-layout>
    <x-slot name="header" class="fixed ">

        <a href="{{ROUTE('index')}}" class="text-success fs-3 nav nav-link">Add Post</a>



    </x-slot>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(Session::has('success'))
            <div class="alert alert-danger">
                {{Session::get('success')}}
            </div>

            @endif
        </div>
    </div>
    <div class="py-12 row justify-content-center ">
        <div class="col-md-8 ">


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="bg-dark text-light fs-3 text-center">All Posts</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th>S.N</th> -->
                                <th>Title</th>
                                <th>Body</th>
                                @can('isAdmin')
                                    
                                
                                <th>Action</th>@endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($key as $data)


                            <tr>
                                <!-- <td>{{$data ->id}}</td> -->
                                <td>{{$data->title}}</td>
                                <td>{{$data->description}}</td>
                                @can('isAdmin')
                                <td>

                                    <a href="{{route('post_edit',$data->id)}}" class="m-1"><i class="bi bi-pencil text-primary"></i></a>


                                    <form action="{{route('post_delete' , $data->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="" type="submit"><i class="bi bi-trash3-fill text-danger"></i></button>
                                    </form>


                                </td>@endcan

                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>
</x-app-layout>