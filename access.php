<!-- ============================================================== -->
<!-- Page wrapper  -->
<div class="main-content pt-5 mt-5">
	<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-4 align-self-center">
                <h4 class="text-themecolor">User Permissions</h4>
            </div>
            <div class="col-md-8 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                        <li class="breadcrumb-item "><a href="<?php echo base_url()?>roles">Access Control</a></li>
                        <li class="breadcrumb-item active">User Permissions</li>
                    </ol>
                   
                </div>
            </div>
        </div>




        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

     

        
            
        <div class="row ">
     

            <!-- <div class="col-md-12 grid-container "> -->
         
           
            <div class="col-md-12  ">
                <!-- table responsive -->
                <!-- <div class="card grid-item" > -->
                <div class="card  " >
                    <div class="card-body">
                        
                   
                    <div class="table-responsive ">
                         <!--<b style="font-weight: bold; font-size:18px">Access Authentication</b>-->
                           	<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
                            <thead>
                            </thead>
                             <tbody>
        <?php
        $i = 1;
        $cnt = 0;
        if ($routes->num_rows() > 0) {
            foreach ($routes->result() as $row) {
                $cnt++;
        ?>
        <tr>
            <th><?php echo $cnt; ?></th>
            <th><?php echo $row->route_name; ?></th>
            <th>
                <div>
                    <input type="checkbox" id="5<?php echo ++$i; ?>" <?php { echo $row->status == 1 ? 'checked' : ''; } ?> value="<?php echo $row->aid; ?>" onChange="handleChangeView(this, '<?php echo $row->rid ?>', '<?php echo $this->uri->segment(2) ?>')">
                </div>
            </th>
        </tr>
<!-----for updating geanting and denaying the sub route access  on 26 Jully by varun--- -->
        <?php
                // Check if the "rid" is present in "sub_routes" and display them below the respective "route."
                $subRoutes = $this->db->select('sub_routes.*')->from('sub_routes')->where('sub_routes.rid', $row->rid)->get();
                if ($subRoutes->num_rows() > 0) {
                    foreach ($subRoutes->result() as $subRow) {
                        $requiredRow = $this->db->get_where('user_access', array('user_id' => $this->uri->segment(2), 'sr_id' => $subRow->sr_id))->row();
        ?>
        <tr>
            <td><?php echo $row->route_name; ?> (sub) </td>
            <!-- <td><?php echo $requiredRow->sub_route_status; ?>  </td> -->
            <td><?php echo $subRow->sub_route_name; ?></td>
            <td>
                 <input type="checkbox" id="sub_route_<?php echo $subRow->sr_id; ?>" <?php echo $requiredRow->sub_route_status == 1 ? 'checked' : ''; ?> value="<?php echo $subRow->sr_id; ?>" onChange="handleChangeSubRoute(this, '<?php echo $subRow->sr_id; ?>', '<?php echo $this->uri->segment(2) ?>')">
            </td>
        </tr>
        <?php
                    }
                }
            }
        }
        ?>
<!-----for updating geanting and denaying the sub route access  on 26 Jully by varun--- -->
    </tbody>
</table>
                           
                    </div>
                    </div>
                     </div>
        
                    </div>
                </div>
            </div>
       
      
        </div>
     
    </div>
    <!-- CONTAINER FLUID END -->
</div>
<!-- PAGE WRAPPER END -->
<!-----for updating geanting and denaying the sub route access  on 26 Jully by varun--- -->
<script>
function handleChangeSubRoute(thiss, subRouteId, userId) {
    var value = thiss.checked ? 1 : 0;
    $.ajax({
        url: "<?php echo site_url('Support_controller/changeSubRoutePermissionStatus');?>",
        method: "POST",
        data: {subRouteId: subRouteId, userId: userId, value: value},
        dataType: 'json',
        success: function(data) {
            console.log(data);

            $.toast({
                heading: 'Success',
                text: 'Sub-route permission updated successfully.',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3500,
                stack: 6
            });
        },
        error: function(data) {
            console.log(data);

            $.toast({
                heading: 'Failure',
                text: 'Failed to update sub-route permission.',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3500,
                stack: 6
            });
        }
    });
    return false;
}
</script>
<!-----for updating geanting and denaying the sub route access  on 26 Jully by varun--- -->







<script>
function handleChangeStatus(thiss,route,role){
   
    if(thiss.checked){
        alert(thiss)
      // updatePermissionStatus(route,role,action,1);
    }else{
        alert(route)
        //updatePermissionStatus(route,role,action,0);
    }
}
</script>


<script>
function handleChangeAdd(thiss,route,action,role){

    if(thiss.checked){
       updatePermissionStatus(route,role,action,1);
    }else{
        updatePermissionStatus(route,role,action,0);
    }
}
</script>




<script>
function handleChangeDelete(thiss,route,action,role){
    
 
    if(thiss.checked){
       updatePermissionStatus(route,role,action,1);
    }else{
        updatePermissionStatus(route,role,action,0);
    }
}
</script>

<script>
function handleChangeEdit(thiss,route,action,role){

    if(thiss.checked){
       updatePermissionStatus(route,role,action,1);
    }else{
        updatePermissionStatus(route,role,action,0);
    }
}
</script>

<script>
function handleChangeView(thiss,route,user){
    //alert(thiss);
     if(thiss.checked){
        // alert('bhsdbsgh');
       updatePermissionStatus(route,user,1);
     }else{
         //alert('m,m,d,m');
         updatePermissionStatus(route,user,0);
     }
}

</script>


<script>

function updatePermissionStatus(route,user,value){
           // alert('m,m,d,m');
            $.ajax({
                
                    url : "<?php echo site_url('Support_controller/changeUserPermissionStatus');?>",
                    method : "POST",
                    data : {route: route,role: user,value: value},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                       console.log(data);

                       $.toast({
                    heading: 'Success'
                    , text: 'User permission updated successfully.'
                    , position: 'top-right'
                    , loaderBg: '#ff6849'
                    , icon: 'success'
                    , hideAfter: 3500
                    , stack: 6
                    });

 
                    },
                    error: function(data) {
                        console.log(data);

                        $.toast({
                        heading: 'Failure'
                        , text: ' Failed to update user permission.'
                        , position: 'top-right'
                        , loaderBg: '#ff6849'
                        , icon: 'error'
                        , hideAfter: 3500
                        , stack: 6
                    });
          
                },
                });
                return false;
            }

</script>
<script>
$(document).ready(function() {
    // Handler for the "Sub Routes" button click
    $('.sub-routes-btn').on('click', function(e) {
        e.preventDefault();

        // Get the main route ID from the data attribute
        var mainRouteId = $(this).data('rid');

        // Make an AJAX request to fetch sub-routes
        $.ajax({
            url: '<?php echo base_url('get-sub-routes'); ?>', // Replace this with the URL to fetch sub-routes data
            type: 'POST',
            dataType: 'json',
            data: {rid: mainRouteId},
            success: function(response) {
                if (response.status === 'success') {
                    // Generate table rows with sub-routes data
                    var tableRows = '';
                    $.each(response.subRoutes, function(index, subRoute) {
                        tableRows += '<tr><td>' + subRoute.route_name + '</td><td>' + subRoute.status + '</td></tr>';
                    });

                    // Set the generated table rows into the modal table
                    $('#subRoutesTable').html('<thead><tr><th>Sub Route Name</th><th>Status</th></tr></thead><tbody>' + tableRows + '</tbody>');

                    // Show the modal
                    $('#subRoutesModal').show();
                } else {
                    // Handle error or no sub-routes case
                }
            },
            error: function() {
                // Handle error case
            }
        });
    });

    // Handler to close the modal when the user clicks outside the modal content
    $(document).on('click', function(event) {
        if ($(event.target).closest('#subRoutesModal').length === 0) {
            $('#subRoutesModal').hide();
        }
    });
});
</script>






   