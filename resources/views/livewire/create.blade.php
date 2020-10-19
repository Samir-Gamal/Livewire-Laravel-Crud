<form>
<div class="form-group">
<label for="exampleFormControlInput1">Name</label>
<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
@error('name') <span class="text-danger">{{ $message }}</span>@enderror
</div>
<div class="form-group">
<label for="exampleFormControlInput2">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput2" wire:model="email" placeholder="Enter Email">
@error('email') <span class="text-danger">{{ $message }}</span>@enderror
</div>
<button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>