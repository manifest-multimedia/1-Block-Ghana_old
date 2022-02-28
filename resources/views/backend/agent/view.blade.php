<x-backend.app >

    <!-- Main Content -->
<section class="content agent">
    <x-backend.breadcrumb page="Packages" menu="Agents" link="{{route('agent.add')}}" />
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong></strong> Agents</h2>

            </div>

            <div class="body">
                <div class="table-responsive social_media_table">
                    @if (!$agents->isEmpty())
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Pic</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Business Name</th>
                                <th>Package</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count = 0;
                            @endphp

                            @foreach ($agents as $agent)
                             @php $count++;@endphp
                            <tr>
                                <td><span class="social_icon linkedin">{{$count}}</span>
                                </td>
                                <td><span class="list-name">{{$package->name}}</span>
                                </td>
                                <td>{{$package->type}}</td>
                                <td>Image</td>
                                <td>{{$agent->firstname}} {{$agent->lastname}}</td>
                                <td>{{$agent->email}}</td>
                                <td>{{$agent->mobile}}</td>
                                <td>{{$agent->business->name}}</td>
                                <td>{{$agent->business->package}}</td>


                                <td>
                                    <a href="{{route('package.edit',['id'=>$package->id])}}"><button class="badge badge-success">Edit</button></a>


                                    <form method="POST" action="{{ route('package.delete', $package->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="button" data-toggle="modal" data-target="#deleteModal" class="badge badge-danger">Delete</button>
                                        <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p><strong>Are you sure you want to delete this Package?</strong></p>
            You won't be able to revert this!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p><strong>No Package listed</strong></p>
                    <span><a href="{{route('package.add')}}">Click here</a> to add a new package</span>
                    @endif


                </div>
            </div>
        </div>
    </div>

</section>
</x-backend.app>

