<div>
    <div>
        <div class="container p-4">

            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">فرم مرحله اول</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-widget="remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12">

                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">

                                            <form wire:submit.prevent="submitPropertyOne">

                                                <div class="form-group row">
                                                    <label for="nationalCode" class="col-sm-3  col-form-label"><b>کدملی</b></label>
                                                    <div class="col-sm-8">
                                                        <input wire:model="nationalCode" type="number" name="nationalCode" class="form-control" value="" id="image"
                                                               placeholder="کدملی">
                                                        @error('nationalCode') <span class="text-danger error">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="birth" class="col-sm-3 col-form-label"><b>تاریخ تولد</b></label>
                                                    <div class="col-sm-8">
                                                        <input wire:model="birth" data-jdp name="birth" class="form-control"
                                                               placeholder="تاریخ تولد">
                                                        @error('birth') <span class="text-danger error">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        {{--<a href="{{ route('dashboard') }}" class="btn btn-warning">لغو</a>--}}
                                                        <button type="submit" name="add" class="btn {{ $propertyId ? 'btn-success' : 'btn-primary' }} input-lg">{{ $propertyId ? 'ویرایش' : 'ذخیره' }}</button>
                                                        @if(isset($submitPropertyOneError)) <span style="position: static" class="text-danger error">{{ $submitPropertyOneError }}</span> @endif
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @if($state != 1)
            <div class="container p-4">

                <div class="row">
                    <div class="col-md-12 col-md-offset-1">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">فرم مرحله دوم</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-12">

                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">

                                                <form wire:submit.prevent="submitPropertyTwo">

                                                    <div class="form-group row">
                                                        <label for="code" class="col-sm-3  col-form-label"><b>کد ملک</b></label>
                                                        <div class="col-sm-8">
                                                            <input wire:model="code" type="number" name="code" class="form-control" value="" id="image"
                                                                   placeholder="کد ملک">
                                                            @error('code') <span class="text-danger error">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="name" class="col-sm-3  col-form-label"><b>نام مالک</b></label>
                                                        <div class="col-sm-8 relative">
                                                            <input wire:model="name" type="text" name="name" class="form-control" value="" id="image"
                                                                   placeholder="نام">
                                                            @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="lastName" class="col-sm-3  col-form-label"><b>نام خانوادگی مالک</b></label>
                                                        <div class="col-sm-8">
                                                            <input wire:model="lastName" type="text" name="lastName" class="form-control" value="" id="image"
                                                                   placeholder="نام خانوادگی">
                                                            @error('lastName') <span class="text-danger error">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="mobile" class="col-sm-3  col-form-label"><b>شماره موبایل</b></label>
                                                        <div class="col-sm-8">
                                                            <input wire:model="mobile" type="number" name="mobile" class="form-control" value="" id="image"
                                                                   placeholder="شماره موبایل">
                                                            @error('mobile') <span class="text-danger error">{{ $message }}</span> @enderror
                                                            <div onclick="mobileValidate()" class="btn {{ $mobileCheck == 1 ? 'btn-success' : 'btn-primary' }} absolute top-1 left-[15px] px-2.5 py-1 text-sm">تایید</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            {{--<a href="{{ route('dashboard') }}" class="btn btn-warning">لغو</a>--}}
                                                            <button type="submit" name="add" class="btn  {{ $state == 3 ? 'btn-success' : 'btn-primary' }} input-lg">{{ $state == 3 ? 'ویرایش' : 'ذخیره' }}</button>
                                                            @if(isset($submitPropertyTwoError)) <span style="position: static" class="text-danger error">{{ $submitPropertyTwoError }}</span> @endif
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endif
    </div>
    @if($state == 3)
        <livewire:business-component :propertyId="$propertyId" />
    @endif

    <script>
        document.addEventListener('livewire:init', () => {

        });


        function mobileValidate(){
            Livewire.dispatch('mobileValidate');
        }


        jalaliDatepicker.startWatch();
    </script>
</div>
