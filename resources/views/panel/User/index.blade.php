  <x-panel>
      <x-slot name="title">
          لیست کاربران
      </x-slot>
      <!--begin::Main Content-->
      <div class="main-content">
          <div class="row">
              <div class="col-12">
                  <div class="toolbar-ui">
                      <h1 class="text-dark fs-5 fw-bold">کاربران</h1>
                      <ul class="breadcrumb-ui ps-0">
                          <li><a href="index.html">داشبورد</a></li>
                          <li><a href="index.html" class="text-dark">کاربران</a></li>
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
                                  <input type="text" class="w-250px" placeholder="جستجوی کاربر">
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
                                          <th>کاربر</th>
                                          <th>شماره موبایل</th>
                                          <th>سطح کاربری</th>
                                          <th>تاریخ عضویت</th>
                                          <th>ای پی</th>
                                          <th>درحال یادگیری</th>
                                          <th>وضعیت حساب</th>
                                          <th>عملیات</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><a href="">1</a></td>
                                          <td>
                                              <div class="d-flex justify-content-center align-items-center">
                                                  <img src="{{ asset('dashboard/images/xs/avatar2.jpg') }}"
                                                      data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                                      class="w35 h35 rounded" data-original-title="Avatar Name">
                                                  <div class="ms-3">
                                                      <a href="javascript:void(0);" title="">امیر</a>
                                                      <p class="mb-0">hilsonxhero.me@gmail.com</p>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>09276108107</td>
                                          <td>کاربر عادی</td>
                                          <td>1399/11/11</td>
                                          <td>148.12.12.1</td>
                                          <td>5 دوره</td>
                                          <td><span class="badge badge-success ml-0 mr-0">تایید شده</span></td>
                                          <td>
                                              <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                                  <i class="ri-eye-fill"></i>
                                              </button>


                                              <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="تایید"
                                                  aria-describedby="tooltip66185"><i
                                                      class="ri-check-line"></i></button>

                                              <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"
                                                  aria-describedby="tooltip286794"><i
                                                      class="ri-edit-2-line"></i></button>
                                              <button type="button"
                                                  class="btn btn-sm btn-default ac-btn-ui js-btn-delete"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"
                                                  aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i>
                                              </button>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div class="pagination mt-4">
                          <ul>
                              <!--pages or li are comes from javascript -->
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--end::Main Content-->
  </x-panel>
