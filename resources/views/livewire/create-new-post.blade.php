<div>
  <form wire:submit.prevent="postTweet" enctype="multipart/form-data">
    @csrf

    <div class="tweetbox__input">
      <img src="https://png.pngitem.com/pimgs/s/273-2738704_user-login-png-transparent-logo-twitter-blanco-png.png"
        alt="" />

      <input type="text" wire:model="tweet" placeholder="What's happening?" />

    </div>

    <div class="m-3">
      <label for="formFile" class="form-label">Upload an image</label>
      <input class="form-control" wire:model='photo' type="file" id='inputfile'>
      @error('photo') <span class="error text-danger fw-bold ">{{ $message }}</span> @enderror
    </div>
    <button class="tweetBox__tweetButton">Tweet</button>
  </form>

  @error('tweet') <span class="error text-danger fw-bold ms-4">{{ $message }}</span> @enderror

  @script
  <script>
    $wire.on('fileInputReset', () => {
        document.getElementById('inputfile').value= null;
      });
  </script>
  @endscript
</div>