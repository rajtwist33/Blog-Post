<x-app-layout>
    <x-slot name="header">

        <a href="{{route('post_show')}} " class="text-success fs-5 nav nav-link "> View All Post</a>

    </x-slot>
<div class="row justify-content-center">
    <div class="col-md-4">  
    @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            
            @endif
    </div>
</div>

    <div class=" row justify-content-center mt-4  ">
        <div class="col-md-6 fixed">


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{route('post_update',$data['id'])}}" method="POST">

                        @csrf
                        <div class="mb-3">
                            <label for="post_title" class="form-label">Title</label>
                            <input 
                            type="text"
                             class="form-control"
                              name="title" 
                              id="exampleInputEmail1"
                               aria-describedby="emailHelp" 
                               value="{{$data['title']}}"
                               >
                        </div>
                        <div class=" mb-3">
                            <label for="post_body" class="form-label">Body</label>
                            <textarea class="form-control" 
                            placeholder="Write Something" 
                            id="floatingTextarea2" 
                            name="description" 
                            style="height: 100px"
                            >{{$data['description']}}
                        </textarea>

                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>