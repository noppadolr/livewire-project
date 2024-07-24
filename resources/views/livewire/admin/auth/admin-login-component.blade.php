<div>
    <form wire:submit.prevent='submit'>

        <div class="mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input wire:model='email' class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Enter your email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group input-group-merge">
                <input wire:model='password' type="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Enter your password">
                <div class="input-group-text" data-password="false">
                    <span class="password-eye"></span>
                </div>
            </div>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" wire:model='remember'>
                <label class="form-check-label" for="checkbox-signin">Remember me</label>
            </div>
        </div>

        <div class="text-center d-grid">
            <button class="btn btn-primary" type="submit"> Log In </button>
        </div>

    </form>
</div>
