<?php

interface idaoFiliere {

    function create($o);
    function delete($o);
    function update($o,$oo);
    function findAll();
    function findById($id);
}

