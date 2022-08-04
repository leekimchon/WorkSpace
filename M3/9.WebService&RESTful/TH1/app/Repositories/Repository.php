<?php
namespace App\Repositories;
interface Repository{
    function getAll();
    function findById($id);
    function create($data);
    function update($data, $object);
    function destroy($object);
}
?>