<!-- resources/views/user-popup-form.blade.php -->

<div class="modal fade" id="userFormModal" tabindex="-1" role="dialog" aria-labelledby="userFormModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userFormModalLabel">Create User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form text-left" method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
              @error('name')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
              @error('email')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
              @error('password')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="phone" placeholder="Phone" aria-label="Phone" aria-describedby="phone-addon">
              @error('phone')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-check form-check-info text-left">
              <input class="form-check-input" type="checkbox" name="terms" id="termsCheck" checked>
              <label class="form-check-label" for="termsCheck">
                I agree to the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
              </label>
            </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Create User</button>
            </div>
            <p class="text-sm mt-3 mb-0">Already have an account? <a href="javascript:;" class="text-dark font-weight-bolder">Sign in</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  