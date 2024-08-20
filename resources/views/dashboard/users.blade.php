@extends('layouts.back')
@section('title', __('Users list'))
@section('content')
    <div class="main-content">
        <div class="main-content-inner ">
            <div class="button-show-hide show-mb">
                <span class="body-1">Volet de Naviguation </span>
            </div>
            <div class="section-body">
                <div class="row">
                    @livewire('admin.manage-users')
                </div>
            </div>

        </div>

    </div>
@endsection
@push('js')
    <script type="text/javascript">
        // close adding user  modal
        window.addEventListener('openModal', event => {
            $('#UserModal').modal('show');
            //alert('parameter: ' + event.detail.someParameter);
        })
        window.addEventListener('closeModal', () => {
            $('#UserModal').modal('hide');
        });

        // close delete user  modal
        window.addEventListener('openDeleteModal', event => {
            $('#deleteUser').modal('show');
            //alert('parameter: ' + event.detail.someParameter);
        })
        window.addEventListener('closeModal', () => {
            $('#deleteUser').modal('hide');
        });
    </script>
@endpush
