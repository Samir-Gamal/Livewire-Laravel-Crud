<form>
<div class="form-group">
<input type="hidden" wire:model="user_id">
<label for="exampleFormControlInput1">Name</label>
<input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter Name">
@error('name') <span class="text-danger">{{ $message }}</span>@enderror
</div>
<div class="form-group">
<label for="exampleFormControlInput2">Email address</label>
<input type="email" class="form-control" wire:model="email" id="exampleFormControlInput2" placeholder="Enter Email">
@error('email') <span class="text-danger">{{ $message }}</span>@enderror
</div>
<button wire:click.prevent="update()" class="btn btn-dark">Update</button>
<button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>