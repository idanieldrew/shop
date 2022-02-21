<x-panel>
    <x-slot name="title">
        ایجاد محصول
    </x-slot>
    {{-- <x-slot name="scripts">
        <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
        <!-- ckeditor Plugin Js -->
        <script>
            // CKEDITOR.replace('body', {
            //     language: 'fa',
            //     filebrowserUploadUrl: '{{ route('editor.upload', ['_token' => csrf_token()]) }}',
            //     filebrowserUploadMethod: 'form'
            // });
        </script>
    </x-slot> --}}
    <!--begin::Main Content-->
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">ایجاد محصول</h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="index.html" title="محصول">محصول</a></li>
                        <li><a href="index.html" class="text-dark" title="محصول">ایجاد محصول</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="body">
                        <form action="{{ route('product.store') }}" method="POST" id="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="نام محصول"
                                            required data-parsley-minlength="8">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="details" class="form-control "
                                            placeholder="جزییات محصول">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="number" name="quantity" class="form-control "
                                            placeholder="تعداد محصول">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="number" name="price" class="form-control "
                                            placeholder="قیمت محصول">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="description"
                                            placeholder="توضیحات درمورد محصول" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select name="category" class="form-control ">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group file-upload-ui">
                                        <label for="file-ip-1">اپلود تصویر</label>
                                        <input type="file" name="image" id="file-ip-1" onchange="showreview(event);"
                                            class="form-control" value="" accept="image/*">
                                        <div class="preview">
                                            <img id="file-ip-1-preview">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <ul class="list-group mb-3 tp-setting">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <label class="form-label mb-0">نشان دادن</label>
                                                <div class="">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckDefault" checked>
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckDefault"></label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <ul class="list-group mb-3 tp-setting">
                                    <li class="list-group-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                تست
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck2">
                                                تست
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                            <label class="form-check-label" for="defaultCheck3">
                                                تست
                                            </label>
                                        </div>
                                    </li>
                                </ul>

                            </div> --}}

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary-ui">ایجاد محصول</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!--end::Main Content-->
</x-panel>
