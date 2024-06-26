@extends('layouts.app-template')

@section('content')

<div class="main-content">
    <div class="main-content-inner wrap-dashboard-content">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show</span>
        </div>
        <div class="widget-box-2 wd-listing">
            <h6 class="title">Lotissements</h6>
            <div class="wrap-table">
                <div class="table-responsive">
                    <table>
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date Published</th>
                        <th>Status</th>
                        <th>Feature</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="file-delete">
                            <td>
                                <div class="listing-box">
                                    <div class="images">
                                        <img src="{{asset('assets/images/home/house-1.jpg')}}" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="property-details-v1.html" class="link">Gorgeous Apartment Building</a> </div>
                                        <div class="text-date">12 Lowell Road, Port Washington</div>
                                        <div class="text-1 fw-7">$5050,00</div> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>April 9, 2024</span>
                            </td>
                            <td>
                                <div class="status-wrap">
                                    <a href="#" class="btn-status">Published</a>
                                </div>
                            </td>
                            <td>
                                <span>No</span>
                            </td>
                            <td>
                                <ul class="list-action">
                                    <li><a class="item"><i class="icon icon-edit"></i>Edit</a></li>
                                    <li><a class="item"><i class="icon icon-sold"></i>Sold</a></li>
                                    <li><a class="remove-file item"><i class="icon icon-trash"></i>Delete</a></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- col 2 -->
                        <tr class="file-delete">
                            <td>
                                <div class="listing-box">
                                    <div class="images">
                                        <img src="{{asset('assets/images/home/house-2.jpg')}}" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="property-details-v1.html" class="link">Mountain Mist Retreat, Aspen</a> </div>
                                        <div class="text-date">Brian Drive, Montvale, New Jersey</div>

                                        <div class="text-1 fw-7">$5050,00</div> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>April 9, 2024</span>
                            </td>
                            <td>
                                <div class="status-wrap">
                                    <a href="#" class="btn-status">Published</a>
                                </div>
                            </td>
                            <td>
                                <span>No</span>
                            </td>
                            <td>
                                <ul class="list-action">
                                    <li><a class="item"><i class="icon icon-edit"></i>Edit</a></li>
                                    <li><a class="item"><i class="icon icon-sold"></i>Sold</a></li>
                                    <li><a class="remove-file item"><i class="icon icon-trash"></i>Delete</a></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- col 3 -->
                        <tr class="file-delete">
                            <td>
                                <div class="listing-box">
                                    <div class="images">
                                        <img src="{{asset('assets/images/home/house-3.jpg')}}" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="property-details-v1.html" class="link">Lakeview Haven, Lake Tahoe</a> </div>
                                        <div class="text-date">12 Lowell Road, Port Washington</div>

                                        <div class="text-1 fw-7">$5050,00</div> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>April 9, 2024</span>
                            </td>
                            <td>
                                <div class="status-wrap">
                                    <a href="#" class="btn-status">Published</a>
                                </div>
                            </td>
                            <td>
                                <span>No</span>
                            </td>
                            <td>
                                <ul class="list-action">
                                    <li><a class="item"><i class="icon icon-edit"></i>Edit</a></li>
                                    <li><a class="item"><i class="icon icon-sold"></i>Sold</a></li>
                                    <li><a class="remove-file item"><i class="icon icon-trash"></i>Delete</a></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- col 4 -->
                        <tr class="file-delete">
                        <td>
                            <div class="listing-box">
                                <div class="images">
                                    <img src="{{asset('assets/images/home/house-4.jpg')}}" alt="images">
                                </div>
                                <div class="content">
                                    <div class="title"><a href="property-details-v1.html" class="link">Coastal Serenity Cottage</a> </div>
                                    <div class="text-date">Brian Drive, Montvale, New Jersey</div>
                                    <div class="text-1 fw-7">$5050,00</div> 
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>April 9, 2024</span>
                        </td>
                        <td>
                            <div class="status-wrap">
                                <a href="#" class="btn-status">Published</a>
                            </div>
                        </td>
                        <td>
                            <span>No</span>
                        </td>
                        <td>
                            <ul class="list-action">
                                <li><a class="item"><i class="icon icon-edit"></i>Edit</a></li>
                                <li><a class="item"><i class="icon icon-sold"></i>Sold</a></li>
                                <li><a class="remove-file item"><i class="icon icon-trash"></i>Delete</a></li>
                            </ul>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>

                <ul class="wd-navigation">
                    <li><a href="#" class="nav-item active">1</a></li>
                    <li><a href="#" class="nav-item">2</a></li>
                    <li><a href="#" class="nav-item">3</a></li>
                    <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-dashboard">
        <p class="text-variant-2">©2024 Well-done Real Estate.  All Rights Reserved.</p>
    </div>
</div>

@endsection