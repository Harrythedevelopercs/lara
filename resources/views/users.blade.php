<x-Header />
<x-Navbar />
    <div class="mt-5 container">
        <div class="col-6 ">
        <h1>All Users</h1>
        <table class="table table-dark table-hover">
          <thead>
            <tr>
                <th>Name</th>
                <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Users as $user)
                <tr>
                    <td>{{ $user->Name }}</td>
                    <td><a href="/user/{{ $user->Email }}" class="btn btn-info">View</a></td>
                </tr>
            @endforeach

          </tbody>
        </table>
        {{ $Users->onEachSide(5)->links() }}
    </div>
    </div>

<x-Footer/>
