  <x-panel>
      <x-slot name="title">
          لیست کاربران
      </x-slot>
      <!--begin::Main Content-->
      <div class="main-content">
          <div class="row">
              <div class="col-12">
                  <div class="toolbar-ui">
                      <h1 class="text-dark fs-5 fw-bold">محصولات</h1>
                      <ul class="breadcrumb-ui ps-0">
                          <li><a href="index.html">محصولات</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12">
                  <div class="card pb-0">
                      <div class="header d-flex flex-wrap align-items-center justify-content-between">
                          <div class="t-header-search ms-0">
                              <div class="t-header-searchbox">
                                  <input type="text" class="w-250px" placeholder="جستجوی محصول">
                              </div>
                          </div>
                          <div class="mt-3 mt-sm-0">
                              <button type="submit" class="btn btn-light-primary filter-btn-ui dropdown-toggle"
                                  data-bs-auto-close="false" id="filter-dropdown-ui" data-bs-toggle="dropdown"
                                  aria-expanded="true" data-bs-offset="0,15">فیلتر
                              </button>
                              <div class="dropdown-menu dropdown-menu-start p-4 w-250px"
                                  aria-labelledby="filter-dropdown-ui">
                                  <div class="dropdown-header-ui text-dark pb-3">گزینه های فیلتر</div>
                                  <div class="separator border-gray-300"></div>
                                  <div class="dropdown-body-ui pt-3 ">
                                      <label for="select-role-ui">نقش کاربری</label>
                                      <select class="js-select-ui form-select" id="select-role-ui"
                                          data-minimum-results-for-search="Infinity">
                                          <option value="">کاربر عادی</option>
                                          <option value="">مدرس</option>
                                          <option value="">مدیر کل</option>
                                      </select>
                                  </div>
                                  <div class="pt-4">
                                      <button type="button" class="btn btn-primary">اعمال</button>
                                      <button type="button" class="btn btn-white" data-bs-dismiss="dropdown">بازنشانی
                                      </button>
                                  </div>

                              </div>
                          </div>

                      </div>
                      <div class="body">
                          <div class="table-responsive">
                              <table class="table table-hover table-custom spacing5">
                                  <thead>
                                      <tr class="title-row">
                                          <th>#</th>
                                          <th>عکس</th>
                                          <th>نام</th>
                                          <th>جزییات</th>
                                          <th>قیمت</th>
                                          <th>موجودی</th>
                                          <th>وضعیت </th>
                                          <th>دیدن </th>
                                          <th>ویراریش </th>
                                          <th>حذف </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($products as $product)
                                          <tr>
                                              <td><a href="">{{ $product->id }} </a></td>
                                              <td>
                                                  <img src="{{ asset('dashboard/images/xs/avatar2.jpg') }}"
                                                      data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                                      class="w35 h35 rounded" data-original-title="Avatar Name">
                                              </td>
                                              <td>
                                                  <div class="ms-3">
                                                      <a href="javascript:void(0);" title="">{{ $product->name }}</a>
                                                  </div>
                                              </td>
                                              <td>{{ $product->details }}</td>
                                              <td>{{ $product->price }}</td>
                                              <td>1{{ $product->quantity }}</td>
                                              <td><span class="badge badge-success ml-0 mr-0">تایید شده</span></td>
                                              <td>
                                                  <a href="{{ route('shop.show', $product->slug) }}"
                                                      class="btn btn-sm btn-default ac-btn-ui" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title="مشاهده">
                                                      <i class="ri-eye-fill"></i>
                                                  </a>
                                              </td>
                                              <td>
                                                  <form action="{{ route('shop.show', $product->id) }}"
                                                      method="post">
                                                      @method('delete')
                                                      @csrf
                                                      <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          title="ویرایش" aria-describedby="tooltip286794"><i
                                                              class="ri-edit-2-line"></i></button>
                                                  </form>
                                              </td>
                                              <td>

                                                <form action="{{ route('product.destroy', $product->id) }}"
                                                      method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit"
                                                          class="btn btn-sm btn-default ac-btn-ui js-btn-delete"
                                                          data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"
                                                          aria-describedby="tooltip286794"><i
                                                              class="ri-delete-bin-line"></i>
                                                      </button>
                                                  </form>
                                              </td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      {{ $products->links() }}
                  </div>
              </div>
          </div>
      </div>
      <!--end::Main Content-->
  </x-panel>
