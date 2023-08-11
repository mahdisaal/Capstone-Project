@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-8">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                Todays top
              </h4>
              <table
                class="table table-striped table-responsive table-bordered"
              >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Forum</th>
                    <th scope="col">Topics</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Latest Post</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <h3 class="h5">
                        <a href="http://127.0.0.1:8000/login" class="text-uppercase">Forum name</a>
                      </h3>
                      <p class="mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta, laboriosam.
                      </p>
                    </td>
                    <td><div>5</div></td>
                    <td><div>20</div></td>
                    <td>
                      <h4 class="h6 font-weight-bold mb-0">
                      <span style="text-decoration: none; cursor: default;">Post name</span>
                      </h4>
                      <div><span style="text-decoration: none; cursor: default;">Author name</span></div>
                      <div>05/08/ 2023 23:08</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h5">
                        <a href="http://127.0.0.1:8000/login" class="text-uppercase">Forum name</a>
                      </h3>
                      <p class="mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta, laboriosam.
                      </p>
                    </td>
                    <td><div>3</div></td>
                    <td><div>18</div></td>
                    <td>
                      <h4 class="h6 font-weight-bold mb-0">
                      <span style="text-decoration: none; cursor: default;">Post name</span>
                      </h4>
                      <div><span style="text-decoration: none; cursor: default;">Author name</span></div>
                      <div>05/08/ 2023 20:04</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h5">
                        <a href="http://127.0.0.1:8000/login" class="text-uppercase">Forum name</a>
                      </h3>
                      <p class="mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta, laboriosam.
                      </p>
                    </td>
                    <td><div>4</div></td>
                    <td><div>12</div></td>
                    <td>
                      <h4 class="h6 font-weight-bold mb-0">
                      <span style="text-decoration: none; cursor: default;">Post name</span>
                      </h4>
                      <div><span style="text-decoration: none; cursor: default;">Author name</span></div>
                      <div>05/08/ 2023 18:30</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h5">
                        <a href="http://127.0.0.1:8000/login" class="text-uppercase">Forum name</a>
                      </h3>
                      <p class="mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta, laboriosam.
                      </p>
                    </td>
                    <td><div>1</div></td>
                    <td><div>10</div></td>
                    <td>
                      <h4 class="h6 font-weight-bold mb-0">
                      <span style="text-decoration: none; cursor: default;">Post name</span>
                      </h4>
                      <div><span style="text-decoration: none; cursor: default;">Author name</span></div>
                      <div>05/08/ 2023 17:13</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h5">
                        <a href="http://127.0.0.1:8000/login" class="text-uppercase">Forum name</a>
                      </h3>
                      <p class="mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta, laboriosam.
                      </p>
                    </td>
                    <td><div>6</div></td>
                    <td><div>7</div></td>
                    <td>
                      <h4 class="h6 font-weight-bold mb-0">
                      <span style="text-decoration: none; cursor: default;">Post name</span>
                      </h4>
                      <div><span style="text-decoration: none; cursor: default;">Author name</span></div>
                      <div>05/08/ 2023 16:04</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div> 
@endsection