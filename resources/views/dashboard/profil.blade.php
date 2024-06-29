@extends('layout.app-template')

@section('content')

<div class="main-content">
    <div class="main-content-inner wrap-dashboard-content-2">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>
        <div class="widget-box-2">
            <div class="box">
                <h6 class="title">Account Settings</h6>
                <div class="box-agent-account">
                    <h6>Agent Account</h6>
                    <p class="note">Your current account type is set to agent, if you want to remove your agent account, and return to normal account, you must click the button below</p>
                    <a href="#" class="tf-btn primary">Remove Agent Account</a>
                </div>
            </div>
            <div class="box">
                <h6 class="title">Avatar</h6>
                <div class="box-agent-avt">
                    <div class="avatar">
                        <img src="images/avatar/account.jpg" alt="avatar" loading="lazy" width="128" height="128">
                    </div>
                    <div class="content uploadfile">
                        <p>Upload a new avatar</p>
                        <div class="box-ip">
                            <input type="file" class="ip-file">
                        </div>
                        <p>JPEG 100x100</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <h6 class="title">Agent Poster</h6>
                <div class="box-agent-avt">
                    <div class="img-poster">
                        <img src="images/avatar/account-2.jpg" alt="avatar" loading="lazy">
                    </div>
                    <div class="content uploadfile">
                        <p>Upload a new poster</p>
                        <div class="box-ip">
                            <input type="file" class="ip-file">
                        </div>
                        <span>JPEG 100x100</span>
                    </div>
                </div>
            </div>
            <h6 class="title">Information</h6>
            <div class="box box-fieldset">
                <label for="name">Full name:<span>*</span></label>
                <input type="text" value="Demo Agent" class="form-control style-1">
            </div>
            <div class="box box-fieldset">
                <label for="desc">Description:<span>*</span></label>
                <textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
            </div>
            <div class="box grid-4 gap-30">
                <div class="box-fieldset">
                    <label for="company">Your Company:<span>*</span></label>
                    <input type="text" value="Your Company" class="form-control style-1">
                </div>
                <div class="box-fieldset">
                    <label for="position">Position:<span>*</span></label>
                    <input type="text" value="Your Company" class="form-control style-1">
                </div>
                <div class="box-fieldset">
                    <label for="num">Office Number:<span>*</span></label>
                    <input type="number" value="1332565894" class="form-control style-1">
                </div>
                <div class="box-fieldset">
                    <label for="address">Office Address:<span>*</span></label>
                    <input type="text" value="10 Bringhurst St, Houston, TX" class="form-control style-1">
                </div>
            </div>
            <div class="box grid-4 gap-30 box-info-2">
                <div class="box-fieldset">
                    <label for="job">Job:<span>*</span></label>
                    <input type="text" value="Realter" class="form-control style-1">
                </div>
                <div class="box-fieldset">
                    <label for="email">Email address:<span>*</span></label>
                    <input type="text" value="themeflat@gmail.com" class="form-control style-1">
                </div>
                <div class="box-fieldset">
                    <label for="phone">Your Phone:<span>*</span></label>
                    <input type="number" value="1332565894" class="form-control style-1">
                </div>
            </div>
            <div class="box box-fieldset">
                <label for="location">Location:<span>*</span></label>
                <input type="text" value="634 E 236th St, Bronx, NY 10466" class="form-control style-1">
            </div>
            <div class="box box-fieldset">
                <label for="fb">Facebook:<span>*</span></label>
                <input type="text" value="#" class="form-control style-1">
            </div>
            <div class="box box-fieldset">
                <label for="tw">Twitter:<span>*</span></label>
                <input type="text" value="#" class="form-control style-1">
            </div>
            <div class="box box-fieldset">
                <label for="linkedin">Linkedin:<span>*</span></label>
                <input type="text" value="#" class="form-control style-1">
            </div>
            <div class="box">
                <a href="#" class="tf-btn primary">Save & Update</a>
            </div>
            <h6 class="title">Change password</h6>
            <div class="box grid-3 gap-30">
                <div class="box-fieldset">
                    <label for="old-pass">Old Password:<span>*</span></label>
                    <div class="box-password">
                        <input type="password" class="form-contact style-1 password-field" placeholder="Password">
                        <span class="show-pass">
                            <i class="icon-pass icon-eye"></i>
                            <i class="icon-pass icon-eye-off"></i>
                        </span>
                    </div>
                </div>
                <div class="box-fieldset">
                    <label for="new-pass">New Password:<span>*</span></label>
                    <div class="box-password">
                        <input type="password" class="form-contact style-1 password-field2" placeholder="Password">
                        <span class="show-pass2">
                            <i class="icon-pass icon-eye"></i>
                            <i class="icon-pass icon-eye-off"></i>
                        </span>
                    </div>
                </div>
                <div class="box-fieldset">
                    <label for="confirm-pass">Confirm Password:<span>*</span></label>
                    <div class="box-password">
                        <input type="password" class="form-contact style-1 password-field3" placeholder="Password">
                        <span class="show-pass3">
                            <i class="icon-pass icon-eye"></i>
                            <i class="icon-pass icon-eye-off"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="box">
                <a href="#" class="tf-btn primary">Update Password</a>
            </div>
        </div>
    </div>
    <div class="footer-dashboard">
        <p class="text-variant-2">©2024 Homzen. All Rights Reserved.</p>
    </div>
</div>

@endsection