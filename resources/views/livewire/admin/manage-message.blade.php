<div>
    <div class="col-12">
        <h6 class="title">Messages <small class="mr-5">({{ $totalMessages }}) </small></h6>
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th><strong>@lang('Name')</strong></th>
                            <th><strong>@lang('Subject')</strong></th>
                            <th><strong>@lang('Received at')</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td class="p-0 text-center">{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>
                                    <button wire:click="showModalForm({{ $contact }})" {{ $contact->response ? "style='background-color: rgb(81,132,197)'" : ''}}
                                        class="btn btn-{{ $contact->response ? 'primary' : 'danger' }}"><i
                                            class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    {{ $contacts->links() }}
                </nav>
            </div>
        </div>

        <!-- Modal showMessage -->
        <div wire:ignore.self class="modal fade" id="MessageModal" tabindex="-1" role="dialog"
            aria-labelledby="EditCategoryLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="MessageModalLabel">@lang('Message Details')</h5>
                        <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                            <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    <div>
                        @if ($displayContact)
                            <div class="modal-body">
                                <div class="form-group">
                                    <label style="font-weight:bold;float:left;"
                                        class="control-label">@lang('Name')</label>
                                    <div style="float:right;">{{ $displayContact->name }}</div> <br>
                                    <div class="row"></div>
                                    <hr>
                                    <div><label for="control-label" style="font-weight:bold;float:left;">Email</label>
                                        <div style="float:right;" href="">{{ $displayContact->email }}</div>
                                    </div>
                                </div>
                                <div class="row"></div> <br>
                                <hr>
                                <div class="form-group">
                                    <label style="font-weight:bold;float:left;"
                                        class="control-label">@lang('Subject')</label>
                                    <div style="float:right;">{{ $displayContact->subject }}</div>
                                </div>
                                <div class="row"></div> <br>
                                <hr>
                                <div class="form-group">
                                    <label style="font-weight:bold;float:left;"
                                        class="control-label mr-2">@lang('Message')</label>
                                    <div class="row"></div> <br>
                                    <div style="text-align:justify;"> {{ $displayContact->message }}</div>
                                </div>
                                <br>
                                @if (!$displayContact->response)
                                    <form wire:submit.prevent="replyMessage({{ $displayContact }})" id="InputRepyForm">
                                        <hr style="background-color:blue;">
                                        <div class="form-group">
                                            <label class="control-label"> @lang('Response') </label>
                                            <textarea cols="30" rows="10" type="text" wire:model.defer="reply" class="form-control"
                                                placeholder=" {{ __('Reply to the message here') }}..."></textarea>
                                            @error('reply')
                                                <span class="text-danger ">{{ $message }} </span>
                                            @enderror
                                            <div class="row"></div> <br>
                                            <div class="mt-2">
                                                <button style="background-color: rgb(81,132,197)" wire:loading.remove type="submit" style="float: right;"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-paper-plane"></i>
                                                    @lang('Send')
                                                </button>
                                                <button style="background-color: rgb(81,132,197)" wire:loading wire:target="replyMessage" style="float: right;"
                                                    class="btn btn-primary" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></span>
                                                    @lang('Loading...')
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <div class="form-group">
                                        <label class="control-label">@lang('Response')</label>
                                        <div class="row"></div>
                                        <strong style="font-weight: bold">{{ $displayContact->response }}</strong>
                                        <div class="d-flex justify-content-end">
                                            <small>{{ $displayContact->updated_at }}</small>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
