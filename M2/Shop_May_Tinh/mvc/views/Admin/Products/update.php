<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
if(isset($data_update_products)){
    extract($data_update_products);
    extract($err);
}
?>
<main>
    <div class="container-fluid px-4">
        <form method="POST" enctype="multipart/form-data">
            <h3>Sửa sản phẩm</h3>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-product" class="form-label">Tên sản phẩm</label>
            <input name="name_update" value="<?php if(isset($name_update)){echo $name_update;}else{echo $products_old->name ;}?>" type="text" class="form-control" id="exampleInput-product">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($name_update_err)){echo $name_update_err;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-price" class="form-label">Giá gốc</label>
            <input name="update_gia_goc" value="<?php if(isset($update_gia_goc)){echo $update_gia_goc;}else{echo $products_old->gia_goc ;}?>"  type="text" class="form-control" id="exampleInput-price">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($update_gia_goc_err)){echo $update_gia_goc_err;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-price-r" class="form-label">Giá bán</label>
            <input name="update_gia_ban" value="<?php if(isset($update_gia_ban)){echo $update_gia_ban;}else{echo $products_old->gia_ban ;}?>"  type="text" class="form-control" id="exampleInput-price-r">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($update_gia_ban_err)){echo $update_gia_ban_err;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-bh" class="form-label">Bảo hành xuất xứ</label>
            <input name="update_bao_hanh_xuat_xu" value="<?php if(isset($update_bao_hanh_xuat_xu)){echo $update_bao_hanh_xuat_xu;}else{echo $products_old->bao_hanh_xuat_xu ;}?>"  type="text" class="form-control" id="exampleInput-bh">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($update_bao_hanh_xuat_xu_errr)){echo $update_bao_hanh_xuat_xu_errr;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 0px !important;">
            <label for="exampleInput-link-anh" class="form-label">Ảnh</label>
            <input name="update_link_anh" value="<?php if(isset($update_link_anh)){echo $update_link_anh;}else{echo $products_old->anh ;}?>"  type="file" class="form-control" id="exampleInput-link-anh">
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?php if(isset($update_link_anh_errr)){echo $update_link_anh_errr;}?></span>
        </div>
        <div class="mb-3" style="margin-bottom: 8px !important;">
            <label for="exampleInputNameRole" class="form-label">Danh mục</label>
            <div>
                <select class="dataTable-selector" name="update_id_category" value="<?php if(isset($update_id_category)){echo $update_id_category;}?>">
                    <?php for($i = 0; $i < count($categories); $i++){?>
                        <option value="<?= $categories[$i]->id?>" <?php if(isset($update_id_category)){if($update_id_category == $categories[$i]->id){echo "selected";}}else if($products_old->category_id == $categories[$i]->id){echo "selected";}?>>
                            <?= $categories[$i]->name?>
                        </option>
                    <?php }?>
                </select>
            </div> 
        </div>
        <button name="update" type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";