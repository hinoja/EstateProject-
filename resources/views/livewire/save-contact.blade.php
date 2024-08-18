<div>
    <form id="contactform" method="post" action="#" class="form-contact">
        <div class="box grid-2">
            <fieldset>
                <div class="form-floating">
                    <input type="text" class="form-control" id="name" wire:model="name"
                        placeholder="@lang('Name')">
                    <label for="name">@lang('Name')</label>
                    @error('name')
                        <small class=" fs-12 text-danger fw-light"><small>{{ $message }}</small></small>
                    @enderror
                </div>
            </fieldset>

            <fieldset>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" wire:model="email" placeholder="Email">
                    <label for="email">Email</label>
                    @error('email')
                        <small class=" fs-12 text-danger fw-light"><small>{{ $message }}</small></small>
                    @enderror
                </div>
            </fieldset>
        </div>
        <div class="box">
            <fieldset>
                <div class="form-floating">
                    <input type="text" class="form-control" id="subject" wire:model="subject"
                        placeholder="@lang('Subject')">
                    <label for="subject">@lang('Subject')</label>
                    @error('subject')
                        <small class=" fs-12 text-danger fw-light"><small>{{ $message }}</small></small>
                    @enderror
                </div>
            </fieldset>

        </div>

        <div class="box">
            <fieldset >
                <div class="form-floating">
                    <textarea class="form-control" wire:model="message" id="message" style="height: 150px"></textarea>
                    <label style="font-weight: bold;" for="message"><strong>Message</strong></label>

                    @error('message')
                        <small class=" fs-12 text-danger fw-light"><small>{{ $message }}</small></small>
                    @enderror
                </div>
            </fieldset>
        </div>
        {{-- <div class="col-12">
            <button wire:click.prevent="save" wire:loading.remove class="btn btn-primary w-100 py-3" type="submit">@lang('Send Message')</button>
            <button wire:loading class="btn btn-primary w-100 py-3" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                @lang('Loading')...
            </button>
        </div> --}}
        <div class="send-wrap">
            <button wire:click.prevent="save" wire:loading.remove class="tf-btn primary"
                type="submit">@lang('Send Message')</button>
            <button wire:loading class="tf-btn primary size-1" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                @lang('Loading')...
            </button>
            {{-- <button class="tf-btn primary size-1" type="submit">Envoyer</button> --}}
        </div>
    </form>
</div>
