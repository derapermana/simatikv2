<template>
    <div>
        <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>

                <div class="card-tools">
                    <a href="#" class="btn btn-primary" @click="modal">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Institution</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Last Login</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Institution</td>
                    <td>Email</td>
                    <td>Type</td>
                    <td>Status</td>
                    <td>Last Login</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-edit"></i>
                        </a>
                        |
                        <a href="#">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updateUser() : createUser()" @keydown="form.onKeydown($event)">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input v-model="form.name" type="text" name="name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input v-model="form.email" type="email" name="email"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="form-group">
                        <label>Unit Utama/Satuan Kerja</label>
                        <input v-model="form.institution_id" type="text" name="institution_id"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('institution_id') }">
                        <has-error :form="form" field="institution_id"></has-error>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select v-model="form.isactive" type="text" name="isactive"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('isactive') }">
                            <option value="0">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                        <has-error :form="form" field="isactive"></has-error>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <select v-model="form.type" type="text" name="type"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                            <option value="admin">Administrator</option>
                            <option value="user">User</option>
                        </select>
                        <has-error :form="form" field="type"></has-error>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                editMode: true,
                form: new Form({
                id: '',
                name: '',
                email: '',
                institution_id: '',
                isactive: '',
                lastlogin: '',
                type: '',
                created_at: '',
                updated_at: ''
                })
            }
        },
        methods: {
            modal() {
                $('#modal').modal('show');
            },
            createUser() {

            },
            updateUser() {

            },
        },
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
