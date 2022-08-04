<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
extract($err);
?>
<main>
    <div class="container-fluid px-4">
        <form method="POST">
            <h3>Sửa tài khoản</h3>
            <div class="mb-3" style="margin-bottom: 0px !important;">
                <label for="exampleInputNameRole" class="form-label">Họ và tên</label>
                <input name="update_full_name_user" value="<?php if(isset($update_full_name_user)){echo $update_full_name_user;}else{ echo $user_old->full_name ;}?>" type="text" class="form-control" id="exampleInputNameRole">
                <div class="has-err">
                    <span><?php if(isset($update_full_name_user_err)){echo $update_full_name_user_err;}?></span>
                </div>
            </div>
            <div class="mb-3" style="margin-bottom: 0px !important;">
                <label for="exampleInputNameRole" class="form-label">Email</label>
                <input name="update_email_user" value="<?php if(isset($update_email_user)){echo $update_email_user;}else{ echo $user_old->email ;}?>" type="text" class="form-control" id="exampleInputNameRole">
                <div class="has-err">
                    <span><?php if(isset($update_email_user_err)){echo $update_email_user_err;}?></span>
                </div>
            </div>
            <div class="mb-3" style="margin-bottom: 0px !important;">
                <label for="exampleInputNameRole" class="form-label">Số điện thoại</label>
                <input name="update_phone_number_user" value="<?php if(isset($update_phone_number_user)){echo $update_phone_number_user;}else{ echo $user_old->phone_number ;}?>" type="text" class="form-control" id="exampleInputNameRole">
                <div class="has-err">
                    <span><?php if(isset($update_phone_number_user_err)){echo $update_phone_number_user_err;}?></span>
                </div>
            </div>
            <div class="mb-3" style="margin-bottom: 0px !important;">
                <label for="exampleInputNameRole" class="form-label">Địa chỉ</label>
                <input name="update_address_user" value="<?php if(isset($update_address_user)){echo $update_address_user;}else{ echo $user_old->address ;}?>" type="text" class="form-control" id="exampleInputNameRole">
                <div class="has-err">
                    <span><?php if(isset($update_address_user_err)){echo $update_address_user_err;}?></span>
                </div>
            </div>
            <div class="mb-3" style="margin-bottom: 8px !important;">
                <label for="exampleInputNameRole" class="form-label">Loại tài khoản</label>
                <div>
                    <select class="dataTable-selector" name="update_role_id_user">
                        <?php for($i = 0; $i < count($full_roles); $i++){?>
                            <option value="<?= $full_roles[$i]->id?>" <?php if($full_roles[$i]->name == $user_old->role_name){echo "selected";}?>>
                                <?= $full_roles[$i]->name?>
                            </option>
                        <?php }?>
                    </select>
                </div> 
            </div>
            <button name="update_user" type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";