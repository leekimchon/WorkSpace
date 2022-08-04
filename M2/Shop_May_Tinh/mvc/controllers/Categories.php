<?php
class Categories extends Controller {
    function index($num_page = 1) {
        $limit = 10;
        $count_categories = $this->model("Admin/CategoriesModel")->count_categories();
        if (isset($_POST["limit_page_categories"])) {
            $_SESSION["limit_page_categories"] = $_POST["limit_page_categories"];
            header('location: index.php?url=categories/index/1');
        } else if (isset($_SESSION["limit_page_categories"])) {
            $limit = $_SESSION["limit_page_categories"];
            $total_page = ceil($count_categories / $limit);
            $start = ($num_page - 1) * $limit;
            $categories = $this->model("Admin/CategoriesModel")->show_categories($start, $limit);
            $data = [
                "categories" => $categories,
                "total_page" => $total_page
            ];
            $this->view("Admin/AdminCategories/AdminCategories", $data);
        } else {
            $total_page = ceil($count_categories / $limit);
            $start = ($num_page - 1) * $limit;
            $categories = $this->model("Admin/CategoriesModel")->show_categories($start, $limit);
            $data = [
                "categories" => $categories,
                "total_page" => $total_page
            ];
            $this->view("Admin/Admincategories/AdminCategories", $data);
        }
    }

    function trash_categories() {
        $categories_trash = $this->model("Admin/CategoriesModel")->show_categories_trash();
        $data = [
            "categories_trash" => $categories_trash
        ];
        $this->view("Admin/AdminCategories/AdminCategoriesTrash", $data);
    }

    function add_category() {
        $name_category_err = "";
        $add_name_categoty = "";
        if (isset($_POST["add_categoty"])) {
            $add_name_categoty = trim($_POST["add_name_categoty"]);
            if (empty($add_name_categoty)) {
                $name_category_err = "Tên danh mục không được để trống";
            } else if (!empty($this->model("Admin/CategoriesModel")->check_add_category($add_name_categoty))) {
                $name_category_err = "$add_name_categoty đã tồn tại";
            } else {
                $_SESSION['flash_message'] = "Đã thêm $add_name_categoty";
                $this->model("Admin/CategoriesModel")->add_categoty($add_name_categoty);
                header('location: index.php?url=categories/index');
            }
        }
        $data = [
            "name_category_err" => $name_category_err,
        ];
        $this->view("Admin/AdminCategories/AdminAddCategory", $data);
    }

    function update_category($id_category) {
        $name_category_old = $this->model("Admin/CategoriesModel")->show_name_category_update($id_category);
        $name_category_old = $name_category_old->name;

        $name_category_err = "";
        if (isset($_POST["update_category"])) {
            $update_name_category = trim($_POST["update_name_category"]);
            if (empty($update_name_category)) {
                $name_category_err = "Tên danh mục không được để trống";
            } else {
                $this->model("Admin/CategoriesModel")->update_category($id_category, $update_name_category);
                header('location: index.php?url=categories/index');
            }
        }
        $data = [
            "name_category_old" => "$name_category_old",
            "name_category_err" => " $name_category_err"
        ];
        extract($data);
        $this->view("Admin/Admincategories/AdminUpdateCategory", $data);
    }

    function delete_category($id_category) {
        $this->model("Admin/CategoriesModel")->delete_category($id_category);
        header('location: index.php?url=categories/index');
    }

    function un_delete_category($id_category) {
        $this->model("Admin/CategoriesModel")->un_delete_category($id_category);
        header('location: index.php?url=categories/trash_categories');
    }

    function search() {
        $key_search = trim($_GET["key_search"]);
        if (empty($key_search)) {
            header('location: index.php?url=categories/index');
        } else {
            $search_role = $this->model("Admin/CategoriesModel")->search_categories($key_search);
            $data = [
                "search_role" => $search_role
            ];
            $this->view("Admin/AdminCategories/AdminSearchCategories", $data);
        }
    }
}