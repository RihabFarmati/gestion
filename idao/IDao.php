<?php


interface IDao {
    function create($o);
    function delete($o);
    function update($o);
    function findById($id);
    function findAll();
}
