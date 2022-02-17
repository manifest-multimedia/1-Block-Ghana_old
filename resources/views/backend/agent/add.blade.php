<x-backend.app >

    <!-- Main Content -->
<section class="content agent">
    <x-backend.breadcrumb page="Agents" menu="Add Agent" />
    @if (session('status'))
    <div class="mb-4 text-sm font-medium text-green-600">
        {{ session('status') }}
    </div>
    @endif
    <div class="container-fluid">
        <div class="clearfix row">
            <div class="col-lg-12">
                @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="header">
                        <h2><strong>Personal</strong> Information</h2>
                    </div>
                    
                    <div class="body">
                        {{-- <form action="/agent/save" method="post"> --}}
                        <form action="{{ route('send.agent.otp') }}" method="post">
                            @csrf
                            <div class="clearfix mb-3 row">
                                <div class="col-sm-6">
                                    <x-form.label value="{{ __('First Name') }}" />
                                    <x-form.input name="firstname" placeholder="Firstname" />
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <x-form.label value="{{ __('Last Name') }}" />
                                        <x-form.input name="lastname" placeholder="Lastname" />
                                    </div>
                                </div>

                            </div>

                            <div class="clearfix mb-3 row">
                             <div class="col-sm-6">
                                    <div class="form-group">
                                        <x-form.label value="{{ __('Business Name') }}" />
                                        <x-form.input name="business_name" type="text" placeholder="Business Name" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <x-form.label value="{{ __('Business Type') }}" />
                                        <x-form.input name="business_type" type="text" placeholder="Business Type" />
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix mb-3 row">
                                <div class="col-sm-6">
                                    <x-form.label value="{{ __('Physical Address') }}" />
                                    <x-form.input name="physical_address" placeholder="Physical Address" />
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <x-form.label value="{{ __('Email Address') }}" />
                                        <x-form.input name="email" type="email" placeholder="Email Address" />
                                        @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix mb-3 row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Send Agent OTP</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-backend.app>

