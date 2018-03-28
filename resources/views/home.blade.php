@include('include.header')

  <div class="container ">
    <div class="row ">
      @if(session('info'))
        <div class="col-md-10 alert alert-success center-div">
          {{ session('info') }}
        </div>
      @endif
      <div class="col-md-10 center-div">
        <table class="table table-hover text text-center">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Phone No</th>
            </tr>
          </thead>
          <tbody>
            @if(count($articles)>0)
              @foreach($articles->all() as $article)


            <tr class="table-active">
              <th scope="row">{{ $article->id }}</th>
              <td>{{ $article->name }}</td>
              <td>{{ $article->address }}</td>
              <td>{{ $article->phone_no }}</td>
              <td>
                
                <a href="{{url("/update/{$article->id}") }}" class="btn btn-success">Update</a> |
                <a href="{{url("/delete/{$article->id}") }}" class="btn btn-danger">Delete</a> 

              </td>
            </tr>
              @endforeach
            @endif
    
          </tbody>
        </table> 
      </div>
      
    </div>
    
  </div>

@include('include.footer')