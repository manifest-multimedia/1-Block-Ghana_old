<x-backend.app >
    
    <!-- Main Content -->
<section class="content agent">
    <x-backend.breadcrumb page="Create Package" menu="Create Package" />
    <div class="container-fluid">        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Package</strong> Details</h2>
                        
                    </div>
                    <div class="body">
                        <div class="row clearfix mb-3">
                            <div class="col-sm-6">
                                <x-form.label value="{{ __('Package Name') }}" />
                                <x-form.input name="name" placeholder="Package Name" />
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Type') }}" />
                                    <x-form.input name="type" placeholder="Type" />
                                </div>
                            </div>
                           
                        </div>

                        <div class="row clearfix mb-3">
                         <div class="col-sm-6">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Listing Limit') }}" />
                                    <x-form.input name="listinglimit" type="number" placeholder="Listing Limit" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                <x-form.label value="{{ __('Image Upload Limit') }}" />
                                    <x-form.input name="imageLimit" type="number" placeholder="Image Upload Limit" />
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix mb-3">
                            <div class="col-sm-6">
                                <x-form.label value="{{ __('Number of Video Uploads') }}" />
                                <x-form.input name="videouploadlimit"  type="number" placeholder="Number of Video Uploads" />
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Video Lenght Limit') }}" />
                                    <x-form.input name="videolengthlimit" type="number" placeholder="Video Length Limit" />
                                </div>
                            </div>
                        </div>
												 <button type="submit" class="btn btn-primary btn-round">Create Package</button>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-backend.app>

