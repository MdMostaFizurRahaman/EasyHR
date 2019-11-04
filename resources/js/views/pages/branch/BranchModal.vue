<template>
    <div id="add-branch" class="modal fade in bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Branch</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form-horizontal form-material" @submit.prevent="editmode ? updateBranch() : createBranch()">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-md-12 m-b-20">
                                <input  v-model="form.name" type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" name="name" placeholder="Name"> 
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <input  v-model="form.email" type="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" name="email" placeholder="Email"> 
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <input  v-model="form.mobile" type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('mobile') }" name="mobile" placeholder="Mobile"> 
                                <has-error :form="form" field="mobile"></has-error>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <textarea  v-model="form.address" name="address" class="form-control" :class="{ 'is-invalid': form.errors.has('address') }" placeholder="Address"></textarea>
                                <has-error :form="form" field="address"></has-error>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <select  v-model="form.type" name="type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option disabled selected>Select Type</option>
                                    <option v-for='type in types' :key='type.id' :value='type.id'>{{type.name}}</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect">Save</button>
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</template>

<script>
export default {
    data (){
        return {
            editmode: false,
            types: [],
            form: new Form({
                    name : '',
                    email: '',
                    mobile: '',
                    type: '',
                    address: ''
            })
        }
    },
    methods: {
        getTypes (){
            axios.get('api/types/branch').then(response => {
                this.types = response.data;
                console.log(this.types);
            })
        },
        createBranch(){
            this.form.post('api/branch')
        } 
    },
    created(){
        this.getTypes();
    }
}
</script>

<style>

</style>