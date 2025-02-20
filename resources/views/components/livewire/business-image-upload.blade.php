<div>
    <!-- بخش آپلود عکس -->
    <div class="form-group">
        <label for="image">آپلود عکس</label>

        <div
            x-data="{ isUploading: false, progress: 0 }"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false"
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
        >
            <!-- File Input -->
            <input type="file" wire:model="image" id="image" class="form-control">

            <!-- Progress Bar -->
            <div x-show="isUploading" class="flex justify-center">
                <progress class="mt-[5px] w-[98%] overflow-hidden rounded-md h-[5px]" max="100" x-bind:value="progress"></progress>
            </div>
        </div>

        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mt-3">
        <h4>تصاویر آپلود شده:</h4>
        <div class="d-flex flex-wrap">
            @foreach ($images as $img)
                @if($img->type == $type)
                <div class="m-2">
                    <img src="{{ asset('storage/' . $img->path) }}" alt="Image" width="100" height="100" class="rounded">
                    <button class="btn btn-danger btn-sm mt-1" wire:click="deleteImage({{ $img->id }})">حذف</button>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
