@extends('layouts.app-template')

@section('content')

<div class="main-content">
    <div class="main-content-inner">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Upload Media</h6>
            <div class="box-uploadfile text-center">
                <label class="uploadfile">
                    <span class="icon icon-img-2"></span>
                    <div class="btn-upload">
                        <a href="#" class="tf-btn primary">Choose Image</a>
                        <input type="file" class="ip-file">
                    </div>
                    <p class="file-name fw-5">Or drop image here to upload</p>
                </label>
            </div>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Information</h6>
            <div class="box-info-property">
                <fieldset class="box box-fieldset">
                    <label for="title">
                        Title:<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1" ">
                </fieldset>
                <fieldset class="box box-fieldset">
                    <label for="desc">Description:</label>
                    <textarea class="textarea-tinymce" name="area">
                    </textarea>
                </fieldset>
                <div class="box grid-3 gap-30">
                    <fieldset class="box-fieldset">
                        <label for="address">
                            Full Address:<span>*</span>
                        </label>
                        <input type="text" class="form-control style-1" placeholder="Enter property full address">
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="zip">
                            Zip Code:<span>*</span>
                        </label>
                        <input type="text" class="form-control style-1" placeholder="Enter property zip code">
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="country">
                            Country:<span>*</span>
                        </label>
                        <div class="nice-select" tabindex="0"><span class="current">United States</span>
                            <ul class="list"> 
                                <li data-value="1" class="option selected">United States</li>
                                <li data-value="2" class="option">United Kingdom</li>
                                <li data-value="3" class="option">Russia</li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
                <div class="box grid-2 gap-30">
                    <fieldset class="box-fieldset">
                        <label for="state">
                            Province/State:<span>*</span>
                        </label>
                        <div class="nice-select" tabindex="0"><span class="current">None</span>
                            <ul class="list"> 
                                <li data-value="1" class="option selected">None</li>
                                <li data-value="2" class="option">Texas</li>
                                <li data-value="3" class="option">New York</li>
                            </ul>
                        </div>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="neighborhood">
                            Neighborhood:<span>*</span>
                        </label>
                        <div class="nice-select" tabindex="0"><span class="current">None</span>
                            <ul class="list"> 
                                <li data-value="1" class="option selected">None</li>
                                <li data-value="2" class="option">Little Italy</li>
                                <li data-value="3" class="option"> Bedford Park</li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
                <div class="box box-fieldset">
                    <label for="location">Location:<span>*</span></label>
                    <div class="box-ip">
                        <input type="text" class="form-control style-1">
                        <a href="#" class="btn-location"><i class="icon icon-location"></i></a>
                    </div>
                    <div id="map-single" class="map-single"  data-map-zoom="16" data-map-scroll="true"></div>
                </div>
                
            </div>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Price</h6>
            <div class="box-price-property">
                <div class="box grid-2 gap-30">
                    <fieldset class="box-fieldset">
                        <label for="price">
                            Price:<span>*</span>
                        </label>
                        <input type="text" class="form-control style-1" placeholder="Example value: 12345.67">
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="neighborhood">
                            Unit Price:<span>*</span>
                        </label>
                        <div class="nice-select" tabindex="0"><span class="current">None</span>
                            <ul class="list"> 
                                <li data-value="1" class="option selected">None</li>
                                <li data-value="2" class="option">1000</li>
                                <li data-value="3" class="option">2000</li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
                <div class="grid-2 gap-30">
                    <fieldset class="box-fieldset">
                        <label for="price">
                            Before Price Label:<span>*</span>
                        </label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="price">
                            After Price Label:<span>*</span>
                        </label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                    
                </div>
                <fieldset class="box-cb d-flex align-items-center gap-6">
                    <input type="checkbox" class="tf-checkbox" id="cb-ip">
                    <label for="cb-ip">Price to Call</label>
                </fieldset>
            </div>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Addtional Information</h6>
            <div class="box grid-3 gap-30">
                <fieldset class="box-fieldset">
                    <label for="type">
                        Property Type:<span>*</span>
                    </label>
                    <div class="nice-select" tabindex="0"><span class="current"></span>
                        <ul class="list"> 
                            <li data-value="1" class="option">Apartment</li>
                            <li data-value="2" class="option">Villa</li>
                            <li data-value="3" class="option">Studio</li>
                            <li data-value="4" class="option">Studio</li>
                            <li data-value="5" class="option">Office</li>
                            <li data-value="6" class="option">Townhouse</li>
                        </ul>
                    </div>
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="status">
                        Property Status:<span>*</span>
                    </label>
                    <div class="nice-select" tabindex="0"><span class="current"></span>
                        <ul class="list"> 
                            <li data-value="1" class="option">For Rent</li>
                            <li data-value="2" class="option">For Sale</li>
                        </ul>
                    </div>
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="label">
                        Property Label:<span>*</span>
                    </label>
                    <div class="nice-select" tabindex="0"><span class="current"></span>
                        <ul class="list"> 
                            <li data-value="1" class="option">New Listing</li>
                            <li data-value="2" class="option">Open House</li>
                        </ul>
                    </div>
                </fieldset>
            </div>
            <div class="box grid-3 gap-30">
                <fieldset class="box-fieldset">
                    <label for="size">
                        Size (SqFt):<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1">
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="land">
                        Land Area (SqFt):<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1">
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="id">
                        Property ID:<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1"> 
                </fieldset>
            </div>
            <div class="box grid-3 gap-30">
                <fieldset class="box-fieldset">
                    <label for="rom">
                        Rooms:<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1">
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="bedrooms">
                        Bedrooms:<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1">
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="bathrooms">
                        Bathrooms:<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1"> 
                </fieldset>
            </div>
            <div class="box grid-3 gap-30">
                <fieldset class="box-fieldset">
                    <label for="garages">
                        Garages:<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1">
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="garages-size">
                        Garages Size (SqFt):<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1">
                </fieldset>
                <fieldset class="box-fieldset">
                    <label for="year">
                        Year Built:<span>*</span>
                    </label>
                    <input type="text" class="form-control style-1"> 
                </fieldset>
            </div>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Amenities<span>*</span></h6>
            <div class="box-amenities-property">
                <div class="box-amenities">
                    <div class="title-amenities fw-7">Home safety:</div>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb1" checked> 
                        <label for="cb1" class="text-cb-amenities">Smoke alarm</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb2"> 
                        <label for="cb2" class="text-cb-amenities">Carbon monoxide alarm</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb3" checked> 
                        <label for="cb3" class="text-cb-amenities">First aid kit</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb4" checked> 
                        <label for="cb4" class="text-cb-amenities">Self check-in with lockbox</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb5"> 
                        <label for="cb5" class="text-cb-amenities">Security cameras</label>
                    </fieldset>
                </div>
                <div class="box-amenities">
                    <div class="title-amenities fw-7">Bedroom:</div>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb6"> 
                        <label for="cb6" class="text-cb-amenities">Hangers</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb7" checked> 
                        <label for="cb7" class="text-cb-amenities">Bed linens</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb8"> 
                        <label for="cb8" class="text-cb-amenities">Extra pillows & blankets</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb9"> 
                        <label for="cb9" class="text-cb-amenities">Iron</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb10" checked> 
                        <label for="cb10" class="text-cb-amenities">TV with standard cable</label>
                    </fieldset>
                </div>
                <div class="box-amenities">
                    <div class="title-amenities fw-7">Kitchen:</div>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb11"> 
                        <label for="cb11" class="text-cb-amenities">Refrigerator</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb12"> 
                        <label for="cb12" class="text-cb-amenities">Microwave</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb13"> 
                        <label for="cb13" class="text-cb-amenities">Dishwasher</label>
                    </fieldset>
                    <fieldset class="amenities-item">
                        <input type="checkbox" class="tf-checkbox style-1 primary" id="cb14"> 
                        <label for="cb14" class="text-cb-amenities">Coffee maker</label>
                    </fieldset>
                    
                </div>
            </div>
        </div>
        <div class="widget-box-2">
            <h6 class="title">File Attachments</h6>
            <div class="box-uploadfile text-center">
                <label class="uploadfile style-1">
                    <span class="icon icon-img-2"></span>
                    <div class="btn-upload">
                        <a href="#" class="tf-btn primary">Choose File</a>
                        <input type="file" class="ip-file">
                    </div>
                    <p class="file-name fw-5">Or drop file here to upload</p>
                </label>
            </div>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Virtual Tour 360</h6>
            <div class="box-radio-check">
                <div class="fw-7">Virtual Tour Type:</div>
                <fieldset class="fieldset-radio">
                    <input type="radio" class="tf-radio" name="radio" id="radio1" checked> 
                    <label for="radio1" class="text-radio">Embedded code</label>
                </fieldset>
                <fieldset class="fieldset-radio">
                    <input type="radio" class="tf-radio" name="radio" id="radio2"> 
                    <label for="radio2" class="text-radio">Upload image</label>
                </fieldset>
            </div>
            <fieldset class="box-fieldset">
                <label for="embedded">Embedded Code Virtual 360</label>
                <textarea class="textarea"></textarea>
            </fieldset>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Videos</h6>
            <fieldset class="box-fieldset">
                <label for="video">Video URL:</label>
                <input type="text" class="form-control style-1" placeholder="Youtube, vimeo url">
            </fieldset>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Floors</h6>
            <div class="box-radio-check">
                <div class="fw-7">Enable Floor Plan:</div>
                <fieldset class="fieldset-radio">
                    <input type="radio" class="tf-radio" name="radio2" id="radio3" checked> 
                    <label for="radio3" class="text-radio">Enable</label>
                </fieldset>
                <fieldset class="fieldset-radio">
                    <input type="radio" class="tf-radio" name="radio2" id="radio4"> 
                    <label for="radio4" class="text-radio">Disable</label>
                </fieldset>
            </div>
            <div class="box-floor-property file-delete">
                <div class="top d-flex justify-content-between align-items-center">
                    <h6>Floor 1:</h6>
                    <a href="#" class="remove-file tf-btn primary">Delete Floor 1</a>
                </div>
                <fieldset class="box box-fieldset">
                    <label for="name">Floor Name:</label>
                    <input type="text" class="form-control style-1">
                </fieldset>
                <div class="grid-2 box gap-30">
                    <fieldset class="box-fieldset">
                        <label for="floor-price">Floor Price (Only Digits):</label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="price-postfix">Price Postfix:</label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                </div>
                <div class="grid-2 box gap-30">
                    <fieldset class="box-fieldset">
                        <label for="floor-size">Floor Size (Only Digits):</label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="size-postfix">Size Postfix:</label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                </div>
                <div class="grid-2 box gap-30">
                    <fieldset class="box-fieldset">
                        <label for="bedrooms">Bedrooms:</label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="bathrooms">Bathrooms:</label>
                        <input type="text" class="form-control style-1">
                    </fieldset>
                </div>
                <div class="grid-2 box gap-30">
                    <fieldset class="box-fieldset">
                        <label for="bedrooms">Floor Image:</label>
                        <div class="box-floor-img uploadfile">
                            <div class="btn-upload">
                                <a href="#" class="tf-btn primary">Choose File</a>
                                <input type="file" class="ip-file">
                            </div>
                            <p class="file-name fw-5">Or drop file here to upload</p>
                        </div>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="bathrooms">Description:</label>
                        <textarea class="textarea"></textarea>
                    </fieldset>
                </div>
            </div>
            <a href="#" class="tf-btn primary btn-add-floor">Add New Floor</a>
        </div>
        <div class="widget-box-2">
            <h6 class="title">Agent Information</h6>
            <div class="box-radio-check">
                <div class="fw-7">Choose type agent infomation?</div>
                <fieldset class="fieldset-radio">
                    <input type="radio" class="tf-radio" name="radio3" id="radio5" checked> 
                    <label for="radio5" class="text-radio">Your current user information</label>
                </fieldset>
                <fieldset class="fieldset-radio">
                    <input type="radio" class="tf-radio" name="radio3" id="radio6"> 
                    <label for="radio6" class="text-radio">Other contact</label>
                </fieldset>
            </div>
        </div>
        <a href="#" class="tf-btn primary">Add Property</a>
    </div>
    <div class="footer-dashboard">
        <p class="text-variant-2">©2024 Homzen. All Rights Reserved.</p>
    </div>
</div>

@endsection