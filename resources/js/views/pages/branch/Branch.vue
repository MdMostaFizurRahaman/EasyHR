<template>
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-info btn-rounded float-right" 
                                    data-toggle="modal" data-target="#add-branch">
                                    Add New Branch
                                </button>
                                <div class="mt-5">
                                    <BranchModal></BranchModal>
                                    <table class="table m-t-30 table-hover" data-page-size="10">
                                        <thead >
                                            <tr>
                                                <th class="footable-sortable">No<span class="footable-sort-indicator"></span></th>
                                                
                                                <th class="footable-sortable">Email<span class="footable-sort-indicator"></span></th>
                                                <th class="footable-sortable">Phone<span class="footable-sort-indicator"></span></th>
                                                <th class="footable-sortable">Role<span class="footable-sort-indicator"></span></th>
                                                <th class="footable-sortable">Age<span class="footable-sort-indicator"></span></th>
                                                <th class="footable-sortable">Joining date<span class="footable-sort-indicator"></span></th>
                                                <th class="footable-sortable">Salery<span class="footable-sort-indicator"></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr >
                                                <td><span class="footable-toggle"></span>1</td>
                                             
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                              
                                            </tr>
                                            <tr >
                                                <td><span class="footable-toggle"></span>2</td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</template>

<script>
import BranchModal from './BranchModal'
    export default {
        components: {
            BranchModal,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
