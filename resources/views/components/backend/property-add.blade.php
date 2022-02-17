<div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Property</strong> Information  </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Property Name') }}" />
                                    <x-form.input name="property_name" placeholder="Property Name" value="{{$user->business->name ?? ''}}" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <x-form.label value="{{ __('ID') }}" />
                                    <x-form.input name="property_id" placeholder="RV151" value="{{$user->business->type ?? ''}}" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Property Type') }}" />
                                    <x-form.input name="property_type"  placeholder="" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Year Built') }}" />
                                    <x-form.input type="date" name="property_year_built" placeholder="" />
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Property Description') }}" />
                                    <x-form.textarea name="property_description" type="email" placeholder="Description about the property" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="header">
                        <h2><strong>Property</strong> Features </h2>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="radio inlineblock m-r-25">
                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                    <label for="radio1">For Rent</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                    <label for="radio2">For Sale</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Price') }}" />
                                    <x-form.input name="property_price" placeholder="GHS450,000" value="{{$user->business->type ?? ''}}" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <x-form.label value="{{ __('Size') }}" />
                                    <x-form.input name="property_size" placeholder="458 SqFt" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <x-form.label type="number" value="{{ __('Number of Bedrooms') }}" />
                                    <x-form.input name="property_bedroom"  placeholder="0" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <x-form.label type="number" value="{{ __('Number of Kitchen') }}" />
                                    <x-form.input name="property_kitchen"  placeholder="0" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <x-form.label type="number" value="{{ __('Number of Bathrooms') }}" />
                                    <x-form.input name="property_bathroom"  placeholder="0" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Amenities </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox21" type="checkbox">
                                    <label for="checkbox21">Swimming pool</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox22" type="checkbox">
                                    <label for="checkbox22">Terrace</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox23" type="checkbox" checked="">
                                    <label for="checkbox23">Air conditioning</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox24" type="checkbox" checked="">
                                    <label for="checkbox24">Internet</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox25" type="checkbox">
                                    <label for="checkbox25">Balcony</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox26" type="checkbox">
                                    <label for="checkbox26">Cable TV</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox27" type="checkbox">
                                    <label for="checkbox27">Computer</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox28" type="checkbox" checked="">
                                    <label for="checkbox28">Dishwasher</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox29" type="checkbox" checked="">
                                    <label for="checkbox29">Near Green Zone</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox30" type="checkbox">
                                    <label for="checkbox30">Near Church</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox31" type="checkbox">
                                    <label for="checkbox31">Near Estate</label>
                                </div>
                                <div class="checkbox inlineblock m-r-20">
                                    <input id="checkbox32" type="checkbox">
                                    <label for="checkbox32">Cofee pot</label>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <form action="/" id="frmFileUpload" class="dropzone m-b-15 m-t-15" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph">  </div>
                                        <h3>Upload all images here</h3>
                                        </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Amenities </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <iframe src="" frameborder="0"></iframe>
                            </div>

                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
