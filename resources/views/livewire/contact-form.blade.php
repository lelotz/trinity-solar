<div>
    @if ($successMessage)
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit.prevent="sendMessage">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" wire:model="name">
                    <label for="name">{{ __('site.your_name') }}</label>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="Your Email" wire:model="email">
                    <label for="email">{{ __('site.your_email') }}</label>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" wire:model="subject">
                    <label for="subject">{{ __('site.subject') }}</label>
                    @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" wire:model="message"></textarea>
                    <label for="message">{{ __('site.message') }}</label>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">{{ __('site.send_message') }}</button>
            </div>
        </div>
    </form>
</div>
