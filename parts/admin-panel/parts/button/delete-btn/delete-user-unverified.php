<?php
           define('access',TRUE);
            include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');
            $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());    
            $stmt  = $mysqli->prepare('SELECT email,mobile FROM register_verify');
            $stmt->execute();

            $result = $stmt->get_result();
            while ($data = $result->fetch_assoc())
            {
                $users[] = $data;
            }
            $stmt->close();
        ?>

        <div class="box clearfix">
            <h3>Unverified Users</h3>
            <div id="dialog"></div>
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="bootstrap-table">
                <thead>
                <tr>
                    <th width="5%">#ID</th>
                    <th width="30%">Username</th>
                    <th width="25%">Last Login Date</th>
                    <th width="20%">Mobile Number</th>
                    <th width="10%">Delete User</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if(empty($users)){

                }else{
                $i=0;
                foreach ($users as $key => $value) {
                    $i++;
                ?>
                <form>
                <tr>
                    <td><?php echo $i; ?></td>
                    <?php
                    foreach ( $value as $key => $value1 )  
                    {                          

                        if($key=="email"){
                            ?>
                            <td>
                                <?php 
                                    echo $value1; 
                                ?>
                                <input type="hidden" name="userid" id="unuserid-<?php echo $i;?>" value="<?php echo $value1;?>">
                            </td>
                    <?php
                            $stmt  = $mysqli->prepare('SELECT last_login_date FROM login_date WHERE email=?');
                            
                            $stmt->bind_param("s",$value1);

                            $stmt->execute();

                            $stmt->bind_result($l_date);
                            
                            $stmt->fetch();

                            $stmt->close();

                            ?>
                            <td><?php echo $l_date; ?></td>
                    <?php
                        }
                        else{
                            ?>
                            <td><?php echo $value1; ?></td>
                            <?php
                        }
                    }                       
                    ?>

                    <td>
                       <button type="button" class="btn btn-danger waves-effect" id="btnDialog-un" value="<?php echo $i;?>">
                            <i class="material-icons">delete</i>
                                <span>Delete</span>
                        </button>
                    </td>
                </tr>
                </form>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } ?>

<script>
    $(document).ready( function () {
        $('#bootstrap-table').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
</script>