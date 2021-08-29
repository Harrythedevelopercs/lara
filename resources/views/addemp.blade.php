<x-Header />
<x-Navbar />
    <div class="mt-5 container">
        <h1>Add User</h1>
        <div class="col-12">
            <form action="/addusers" class="form" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="col ">
                      <input type="text" class="form-control" name='goodname' placeholder="Name" aria-label="Name">
                    </div>
                    <div class="col">
                      <input type="email" class="form-control" name='email' placeholder="Email" aria-label="Last name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col ">
                      <input type="text" class="form-control"  name='city' placeholder="City" aria-label="City">
                    </div>
                    <div class="col">
                      <input type="tel" class="form-control" placeholder="Phone" aria-label="Phone" name='phone'>
                    </div>
                </div>
                <input type="submit" value="submit" class="btn btn-info mt-3" name="submit">
            </form>
        </div>
    </div>

<x-Footer/>
