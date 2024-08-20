@extends('layouts.back')
@section('title', 'Liste des Terrains')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="section-body">
                <div class="row">
                    @livewire('admin.manage-estate')
                </div>
            </div>

        </div>

    </div>
@endsection
@push('js')
    <script type="text/javascript">
        // close adding Estate  modal
        window.addEventListener('openModal', event => {
            $('#EstateModal').modal('show');
            //alert('parameter: ' + event.detail.someParameter);
        })
        window.addEventListener('closeModal', () => {
            $('#EstateModal').modal('hide');
        });

        // close delete Estate  modal
        window.addEventListener('openDeleteModal', event => {
            $('#deleteEstate').modal('show');
            //alert('parameter: ' + event.detail.someParameter);
        })
        window.addEventListener('closeModal', () => {
            $('#deleteEstate').modal('hide');
        });
    </script>
@endpush
