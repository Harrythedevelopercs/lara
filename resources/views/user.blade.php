<x-Header />
<x-Navbar />
    <div class="mt-5 container">
        <div class="col-8">
            <h1>User</h1>
            <table class="table table-dark table-hover">
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Phone</th>
                </tr>
              </thead>
              <tbody>


                    <tr>
                        <td>{{ $Users[0]->Name }}</td>
                        <td>{{ $Users[0]->Email }}</td>
                        <td>{{ $Users[0]->Company }}</td>
                        <td>{{ $Users[0]->Phone }}</td>
                    </tr>

              </tbody>
            </table>
        </div>

    </div>

<x-Footer/>
