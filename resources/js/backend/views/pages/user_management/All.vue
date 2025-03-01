<template lang="">
  <div class="container-fluid">
    <PageTitle :page_title="config.all_page_title" />
    <div>
        <div class="card rounded-none">
            <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                <div><h4 class="bn" style="font-size: 22px !important;">All employee</h4></div>
                <div class="d-flex justify-content-between">
                    <div class="ps-3 d-flex gap-2"><a href="#/admin/class/create" class="btn btn-sm btn-info"> Create </a></div>
                </div>
            </div>
            <div class="card-body px-4 py-2 form_area custom_scroll">
                <div class="custom_table nowrap table-responsive w-100 h-100 custom_scroll">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-start" style="width: 5px;"><input type="checkbox" /></th>
                                <th class="text-start" style="width: 50px;">Sl</th>
                                <th class="" style="width: 400px;">Title</th>
                                <th style="width: 200px;">Status</th>
                                <th class="text-center" style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">1</td>
                                <td class="">one</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/1" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">2</td>
                                <td class="">Two</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/2" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">3</td>
                                <td class="">Three</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/3" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">4</td>
                                <td class="">Four</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/4" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">5</td>
                                <td class="">Five</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/5" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">6</td>
                                <td class="">Six</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/6" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">7</td>
                                <td class="">Seven</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/7" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">8</td>
                                <td class="">Eight</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/8" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">9</td>
                                <td class="">Nine</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/9" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">10</td>
                                <td class="">Ten</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/10" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">11</td>
                                <td class="">Alim First Year</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/11" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">12</td>
                                <td class="">Alim Second Year</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/12" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">13</td>
                                <td class="">nursery</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/class/edit/15" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-2">
                <nav aria-label="Page navigation example" class="">
                    <ul class="pagination pagination-warning">
                        <li class="page-item">
                            <a class="page-link"><span>« Previous</span></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="http://127.0.0.1:8000/api/v1/navbar-menu-details/all?orderByType=DESC&amp;sub_menu_slug=vrti-notis-82634719&amp;page=1"><span>1</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"><span>Next »</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import config from "./config/index.js";
import PageTitle from "./components/page.vue";
export default {
    components: {
        PageTitle,
    },
    data() {
        return {
            config,
        }
    },
}
</script>

<style lang="">

</style>
