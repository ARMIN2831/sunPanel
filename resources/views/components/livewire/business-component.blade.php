<div class="container p-4">
<script src="{{ asset("plugins/jquery/jquery.min.js") }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ساخت کسب ({{ $businesses ? $businesses->count() : '0' }} عدد)</h3>


                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body ml-4" style="overflow-x: auto">
                    <div class="col-lg-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <table id="businessesTable" class="table table-bordered" style="width: 120%">
                                        <thead>
                                        <tr>
                                            <th scope="col">شماره</th>
                                            <th scope="col">نام</th>
                                            <th scope="col">نام خانوادگی</th>
                                            <th scope="col">کدملی</th>
                                            <th scope="col">شماره موبایل</th>
                                            <th scope="col">نوع کسب</th>
                                            <th scope="col">عکس تابلو</th>
                                            <th scope="col">طول</th>
                                            <th scope="col">عرض</th>
                                            <th scope="col">عکس مغازه</th>
                                            <th scope="col">عملکرد</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($businesses as $business)
                                            <tr>
                                                <th>{{ $business->id }}</th>
                                                <td>{{ $business->people->name }}</td>
                                                <td>{{ $business->people->lastName }}</td>
                                                <td>{{ $business->people->nationalCode }}</td>
                                                <td>{{ $business->people->mobile }}</td>
                                                <td>{{ $business->type }}</td>
                                                <td>
                                                    @if ($business->images)
                                                        <div class="mt-3 mx-auto">
                                                            @foreach ($business->images as $image)
                                                                @if($image->type == 'BImage')
                                                                    <img src="{{ asset('storage/' . $image->path) }}" alt="Uploaded Image" width="100" height="100" class="m-2">
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                @endif
                                                <td>{{ $business->width }}</td>
                                                <td>{{ $business->height }}</td>
                                                <td>
                                                    @if ($business->images)
                                                        <div class="mt-3 mx-auto">
                                                            @foreach ($business->images as $image)
                                                                @if($image->type == 'shopImage')
                                                                    <img src="{{ asset('storage/' . $image->path) }}" alt="Uploaded Image" width="100" height="100" class="m-2">
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                @endif
                                                <td>
                                                    <button onclick="confirmDelete({{ $business->id }})" type="button" class="btn btn-sm btn-danger ml-1 mt-1 float-left">
                                                        <span class="fa fa-trash fa-fw" aria-hidden="true"></span>
                                                        <span class="sr-only">حذف</span>
                                                    </button>
                                                    <button onclick="editBusiness({{ $business->id }})" class="btn btn-sm btn-primary ml-1 mt-1 float-left">
                                                        <span class="fas fa-pen fa-fw" aria-hidden="true"></span>
                                                        <span class="sr-only">ویرایش</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <!-- Button trigger modal -->
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <button onclick="resetAll()" type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#addBusinessModal">افزودن کسب</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@if($propertyId)
        <a href="{{ route('dashboard') }}" type="submit" class="btn bg-blue-500 text-white m-5" style="float: left">
            پایان
        </a>
    @endif
    <!-- jQuery and Bootstrap scripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>




    <!-- Modal -->
    <div class="modal fade p-0" id="addBusinessModal" tabindex="-1" role="dialog" aria-labelledby="addBusinessModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content mt-20">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBusinessModalLabel">افزودن کسب جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="submitBusinessOne" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">صاحب کسب و ملک یکسان هستند؟</label>
                            <input id="checkboxid" wire:click="toggleMalek" {{ $malek ? 'checked' : '' }} type="checkbox" name="malek" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nationalCode">کد ملی</label>
                            <input @if($malek) disabled value="{{ $nationalCode }}" @endif wire:model="BNationalCode" type="number" name="BNationalCode" class="form-control">
                            @error('BNationalCode') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="BBirth">تاریخ تولد</label>
                            <input @if($malek) disabled value="{{ $BBirth }}" @endif wire:model="BBirth" data-jdp name="BBirth" class="form-control">
                            @error('BBirth') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="modal-footer justify-between">
                        <button type="submit" class="btn bg-green-500 text-white">
                            {{ $BState == 1 ? 'ذخیره' : 'بعدی' }}
                        </button>
                        @if(isset($submitBusinessOneError)) <span style="position: static" class="text-danger error">{{ $submitBusinessOneError }}</span> @endif

                    </div>
                </form>

                <form class="{{ $BState > 1 ? '' : 'hidden' }}" wire:submit.prevent="submitBusinessTwo" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">نام</label>
                            <input @if($malek) disabled value="{{ $name }}" @endif wire:model="BName" type="text" name="BName" class="form-control">
                            @error('BName') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="lastName">نام خانوادگی</label>
                            <input @if($malek) disabled value="{{ $lastName }}" @endif wire:model="BLastName" type="text" name="BLastName" class="form-control">
                            @error('BLastName') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group relative">
                            <label for="mobile">شماره موبایل</label>
                            <input @if($malek) disabled value="{{ $mobile }}" @endif wire:model="BMobile" type="number" name="BMobile" class="form-control">
                            @error('BMobile') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                            <div onclick="BMobileValidate()" class="btn {{ $BMobileCheck == 1 ? 'btn-success' : 'btn-primary' }} absolute bottom-[0.25rem] left-[5px] px-2.5 py-1 text-sm">تایید</div>
                        </div>
                        <div class="form-group">
                            <label for="type">نوع کسب</label>
                            <div id="myModal" wire:ignore>
                                <select wire:model="BType" name="BType" id="categorySelect" class="form-control select2" style="width: 100%;height: 38px">
                                    <option value="">انتخاب کنید...</option>

                                    @foreach ($types as $index => $type)
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('BType') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                        </div>

                        @if($businessId)
                        <div class="{{ $businessId ? '' : 'hidden' }}">
                            <livewire:business-image-upload :businessId="$businessId" :type="'shopImage'" />


                            {{--<div class="form-group">
                                <!-- Placeholder for Image Preview -->
                                @if ($BShopImages)
                                    <div class="mt-3 mx-auto">
                                        @foreach (json_decode($BShopImages) as $image)
                                            <img src="{{ asset('storage/' . $image) }}" alt="Uploaded Image" width="100" height="100" class="m-2">
                                        @endforeach
                                    </div>
                                @endif


                                <label for="BShopImage">عکس مغازه</label>
                                <div
                                    x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                >
                                    <!-- File Input -->
                                    <input wire:model="BShopImages" type="file" name="BShopImages[]" class="form-control" id="upload2" accept="image/*" multiple>

                                    <!-- Progress Bar -->
                                    <div x-show="isUploading" class="flex justify-center">
                                        <progress class="mt-[5px] w-[98%] overflow-hidden rounded-md h-[5px]" max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('BShopImage') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                            </div>--}}


                            <div class="form-group">
                                <label for="name">تابلو عنوان دارد؟</label>
                                <input id="checkboxid2" wire:click="toggleTablo" {{ $tablo ? 'checked' : '' }} type="checkbox" name="tablo" class="form-control">
                            </div>
                            @if($tablo)
                                {{--<div class="form-group">
                                    @if ($BImages)
                                        <div class="mt-3 mx-auto">
                                            @foreach ($BImages as $image)
                                                <img src="{{ $image->temporaryUrl() }}" alt="Uploaded Image" style="max-width: 100%; max-height: 100px; margin: 5px;">
                                            @endforeach
                                        </div>
                                    @endif

                                    <label for="BImage">عکس تابلو</label>
                                    <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    >
                                        <!-- File Input -->
                                        <input wire:model="BImages" type="file" name="BImages[]" class="form-control" id="upload1" accept="image/*" multiple>

                                        <!-- Progress Bar -->
                                        <div x-show="isUploading" class="flex justify-center">
                                            <progress class="mt-[5px] w-[98%] overflow-hidden rounded-md h-[5px]" max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                    @error('BImage') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                                </div>--}}
                                <livewire:business-image-upload :businessId="$businessId" :type="'BImage'" />
                                <div class="form-group">
                                    <label for="BWidth">طول</label>
                                    <input wire:model="BWidth" type="number" name="BWidth" class="form-control">
                                    @error('BWidth') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="BHeight">عرض</label>
                                    <input wire:model="BHeight" type="number" name="BHeight" class="form-control">
                                    @error('BHeight') <span style="position: static" class="text-danger error">{{ $message }}</span> @enderror
                                </div>
                            @endif
                        </div>
                        @endif

                        <!-- Add other fields as needed -->
                    </div>
                    <div class="modal-footer justify-between">
                        <button type="submit" class="btn bg-green-500 text-white">
                            @if($isEditMode)
                                بروزرسانی
                            @else
                                {{ $businessId ? 'ذخیره' : 'بعدی' }}
                            @endif
                        </button>
                        @if(isset($submitBusinessTwoError)) <span style="position: static" class="text-danger error">{{ $submitBusinessTwoError }}</span> @endif
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Modal -->
    <style>
        jdp-container {
            z-index: 1050!important;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#categorySelect').select2({
                width: '100%',
                placeholder: 'انتخاب کنید...',
                minimumInputLength: 3,
                dropdownParent: $('#myModal')
            });
            $('#categorySelect').on('change', function (e) {
                var data = $('#categorySelect').select2("val");
                Livewire.dispatch('setSelectedCategory', {data});
            });
            $('#businessesTable').DataTable({
                language: {
                    search: "جستجو:",
                    lengthMenu: "نمایش _MENU_ رکورد در هر صفحه",
                    zeroRecords: "موردی یافت نشد",
                    info: "نمایش _PAGE_ از _PAGES_",
                    infoEmpty: "رکوردی موجود نیست",
                    infoFiltered: "(فیلتر شده از _MAX_ رکورد)",
                    paginate: {
                        next: "بعدی",
                        previous: "قبلی"
                    }
                }
            });
        });



        document.addEventListener('livewire:init', () => {
            Livewire.on('open-modal', (value) => {
                $('#addBusinessModal').modal('show');
                if(document.getElementById('checkboxid2')){
                    document.getElementById('checkboxid2').checked = value[0] === true;
                }
            });

            Livewire.on('close-modal', () => {
                $('#addBusinessModal').modal('hide');
                $('#categorySelect').val(null).trigger('change'); // Reset value

                // Wait for the modal to be fully hidden before removing the backdrop
                $('#addBusinessModal').on('hidden.bs.modal', function () {
                    $('.modal-backdrop').remove(); // Remove the backdrop
                });
            });
            Livewire.on('updateCategorySelect', (value) => {
                $('#categorySelect').val(value).trigger('change');
            });
        });


        function resetAll(){

            document.getElementById('checkboxid').checked = false;
            if(document.getElementById('checkboxid2')){
                document.getElementById('checkboxid2').checked = false;
            }
            $('#categorySelect').val(null).trigger('change');
            Livewire.dispatch('SetResetAll');
        }
        function editBusiness(businessId){
            resetAll();
            Livewire.dispatch('CallEditBusiness',{businessId});
        }
        function BMobileValidate(){
            Livewire.dispatch('mobileValidate');
        }
    </script>
</div>
