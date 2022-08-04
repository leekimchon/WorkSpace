<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
if(isset($data_add)){
    extract($data_add);
    extract($err);
}
?>
<main>
    <div class="container-fluid px-4">
        <form method="POST" enctype="multipart/form-data">
            <h3>Thêm sản phẩm</h3>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-product" class="form-label">Tên sản phẩm</label>
            <input name="name_add" value="<?php if(isset($name_add)){echo $name_add;}?>" type="text" class="form-control" id="exampleInput-product">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($name_add_err)){echo $name_add_err;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-price" class="form-label">Giá gốc</label>
            <input name="add_gia_goc" value="<?php if(isset($add_gia_goc)){echo $add_gia_goc;}?>"  type="text" class="form-control" id="exampleInput-price">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($add_gia_goc_err)){echo $add_gia_goc_err;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-price-r" class="form-label">Giá bán</label>
            <input name="add_gia_ban" value="<?php if(isset($add_gia_ban)){echo $add_gia_ban;}?>"  type="text" class="form-control" id="exampleInput-price-r">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($add_gia_ban_err)){echo $add_gia_ban_err;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-bh" class="form-label">Bảo hành xuất xứ</label>
            <input name="add_bao_hanh_xuat_xu" value="<?php if(isset($add_bao_hanh_xuat_xu)){echo $add_bao_hanh_xuat_xu;}?>"  type="text" class="form-control" id="exampleInput-bh">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($add_bao_hanh_xuat_xu_errr)){echo $add_bao_hanh_xuat_xu_errr;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-link-anh" class="form-label">Ảnh</label>
            <input name="add_link_anh" value="<?php if(isset($add_link_anh)){echo $add_link_anh;}?>" type="file" class="form-control" id="exampleInput-link-anh">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($add_link_anh_errr)){echo $add_link_anh_errr;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 8px !important;">
            <label for="exampleInputNameRole" class="form-label">Loại tài khoản</label>
            <div>
                <select class="dataTable-selector" name="add_id_category" value="<?php if(isset($add_id_category)){echo $add_id_category;}?>">
                    <?php for($i = 0; $i < count($categories); $i++){?>
                        <option value="<?= $categories[$i]->id?>" <?php if(isset($add_id_category)){if($add_id_category == $categories[$i]->id){echo "selected";}}?>>
                            <?= $categories[$i]->name?>
                        </option>
                    <?php }?>
                </select>
            </div> 
        </div>
        <button name="add" type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";