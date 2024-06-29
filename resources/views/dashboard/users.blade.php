@extends('layouts.app-template')

@section('content')
    <div class="main-content">
        <div class="main-content-inner ">

            <div class="widget-box-2 wd-listing">
                <h6 class="title">Utilisateurs</h6>
                <div class="wrap-table">
                    <div class="body">
                        {{-- @livewire('admin.users.user-manage') --}}
                        <div class="table-responsive">
                            <table
                                class="table table-striped table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>@lang('Avatar')</th>
                                        <th>@lang('Name')</th>
                                        <th>@lang('Email')</th>
                                        <th>@lang('Status')</th>
                                        <th>@lang('Role')</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td><img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('assets/images/avatar/user-default.png') }}"
                                                    alt=""></td>
                                            <td>{{ $user->name }} @if ($user->last_seen >= now()->subMinutes(2))
                                                    {{-- <i class="fas fa-circle  text-success"></i> --}}
                                                    <i class="badge badge-pill badge-success"> Online </i>
                                                @endif
                                            </td>
                                            <td>{{ $user->email }} </td>
                                            <td>
                                                @if ($user->is_active)
                                                    <div class="py-2 px-2">
                                                        <span
                                                            class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-info ">
                                                            Actif </span>
                                                    </div>
                                                @else
                                                    <div class="py-2 px-2">
                                                        <span
                                                            class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-dark ">
                                                            Bloqué</span>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user->role->name }}
                                            </td>
                                            <td>
                                                <div style="display: inline-block;">
                                                    @if ($user->role_id > 2)
                                                        <form method="POST" action="#">
                                                            {{-- action="{{ route('admin.users.status', $user->id) }}"> --}}
                                                            @csrf
                                                            @method('PATCH')
                                                            {{-- <a href="{{ route('admin.users.status', $user->id) }}" --}}
                                                            <a href="#"
                                                                title="{{ $user->is_active ? __('Block') : __('Unblock') }}"
                                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();"
                                                                class="btn-xs btn btn-{{ $user->is_active ? 'danger' : 'primary' }}">
                                                                @if ($user->is_active)
                                                                    {{-- @lang('Block') --}}
                                                                    <i class="fa fa-lock"></i>
                                                                @else
                                                                    {{-- @lang('Unblock') --}}
                                                                    <i class="fa fa-lock-open"></i>
                                                                @endif

                                                            </a>
                                                        </form>
                                                    @endif


                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>

                    {{-- <ul class="wd-navigation">
                        <li><a href="#" class="nav-item active">1</a></li>
                        <li><a href="#" class="nav-item">2</a></li>
                        <li><a href="#" class="nav-item">3</a></li>
                        <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <div class="footer-dashboard">
            <p class="text-variant-2">©2024 Well-done Real Estate. All Rights Reserved.</p>
        </div>
    </div>
@endsection
